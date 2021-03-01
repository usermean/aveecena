<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/registration');
        $this->load->view('template/footer');
    }

    public function registration()
    {
        $this->load->view('user/registration');
        $this->load->view('template/footer');
    }

    public function registration_act()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Nama terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[siswa.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim|min_length[12]', [
            'required' => 'Harap isi No Whatsapp.',
            'min_length' => 'No Whatsapp terlalu pendek',
        ]);
        $this->form_validation->set_rules('profesi', 'profesi', 'required|trim|min_length[3]', [
            'required' => 'Harap isi kolom Profesi.',
            'min_length' => 'Profesi terlalu pendek',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/nav');
            $this->load->view('user/registration');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
                'profesi' => htmlspecialchars($this->input->post('profesi', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time(),
            ];

            //siapkan token

             $token = base64_encode(random_bytes(32));
             $user_token = [
                 'email' => $email,
                 'token' => $token,
                 'date_created' => time(),
             ];

            $this->db->insert('siswa', $data);
             $this->db->insert('token', $user_token);

             $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome'));
        }
    }

    private function _sendEmail($token, $type)
    {
         $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'info@aveecena.com',
            'smtp_pass' => 'oqojlgsvdrkarjmq',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->email->initialize($config);

        $data = array(
            'name' => $this->input->post('nama'),
            'link' => ' ' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '"',
        );

        $this->email->from('info@aveecena.com', 'Aveecena');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Verifikasi Akun');
            $body = $this->load->view('template/email-template.php', $data, true);
            $this->email->message($body);
        } else {
        }

        if ($this->email->send()) {
            return true;
            redirect(base_url('welcome'));
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

}
