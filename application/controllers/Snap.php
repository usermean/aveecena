<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-sH4NT4cdRBrQuDq5VUsrw-43', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
			$this->session->set_flashdata('not-login', 'Gagal!');
            redirect('welcome');
        }
    }

    public function index()
    {
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama tidak boleh kosong!',
        ]);

        $this->form_validation->set_rules('emailsiswa', 'Emailsiswa', 'required|trim|valid_email', [
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);

        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim|min_length[12]', [
            'required' => 'Harap isi No Whatsapp.',
            'min_length' => 'No Whatsapp terlalu pendek',
        ]);
		$this->load->view('transaksi/checkout_snap');
		$this->load->view('template/footer');

	}

	public function detail_kelas_keperawatan()
	{
		$data['title'] = 'Kelas Keperawatan';
		$data['user']  = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/nav-logged-in');
		$this->load->view('detail_keperawatan', $data);
		$this->load->view('template/footer');
	}
	
	public function detail_kelas_kebidanan()
	{
		$data['title'] = 'Kelas Kebidanan';
		$data['user']  = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/nav-logged-in');
		$this->load->view('detail_kebidanan', $data);
		$this->load->view('template/footer');
	}

	public function detail_kelas_kedokteran()
	{
		$data['title'] = 'Kelas Kedokteran';
		$data['user']  = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/nav-logged-in');
		$this->load->view('detail_kedokteran', $data);
		$this->load->view('template/footer');
	}

	public function detail_kelas_gizi()
	{
		$data['title'] = 'Kelas Gizi';
		$data['user']  = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/nav-logged-in');
		$this->load->view('detail_gizi', $data);
		$this->load->view('template/footer');
	}

	public function detail_kelas_apoteker()
	{
		$data['title'] = 'Kelas Apoteker';
		$data['user']  = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/nav-logged-in');
		$this->load->view('detail_apoteker', $data);
		$this->load->view('template/footer');
	}

	public function token()
    {
		$emailsiswa = $this->input->post('emailsiswa');
		$nama = $this->input->post('nama');
		$no_tlp = $this->input->post('no_tlp');
		$kelas = $this->input->post('kelas');
		$price = $this->input->post('price');

		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $price, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => 'a1',
		  'price' => $price,
		  'quantity' => 1,
		  'name' => "Pembayaran Kelas $kelas Aveecena"
		);

		// Optional
		$item_details = array ($item1_details);

		// Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
		  'first_name'    => $nama,
		  'email'         => $emailsiswa,
		  'phone'         => $no_tlp,
		//   'billing_address'  => $billing_address,
		//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'hour', 
            'duration'  => 24
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
		$result = json_decode($this->input->post('result_data'), true);

		// echo 'RESULT <br><pre>';
    	// var_dump($result);
		// echo '</pre>' ;
		// die();

		// $data1 ['midtrans'] = $this->db->get('transaksi')->result();

		$emailsiswa = $this->input->post('emailsiswa');
		$kelas = $this->input->post('kelas');
		$data = [
		'order_id' => $result['order_id'],
		'email' => $emailsiswa,
		'gross_amount' => $result['gross_amount'],
		'payment_type' => $result['payment_type'],
		'transaction_time' => $result['transaction_time'],
		'bank' => $result['va_numbers'][0]["bank"],
		'va_number' => $result['va_numbers'][0]["va_number"],
		'pdf_url' => $result['pdf_url'],
		'status_code' => $result['status_code'],
		'kelas' => $kelas
		];

		$simpan = $this->db->insert('transaksi', $data);
		if ($simpan)
		{
		  //  print_r($data);
			$this->load->view('template/nav-logged-in');
		    $this->load->view('transaksi/finish',$data);
			$this->load->view('template/footer');

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_user'] = 'info@aveecena.com';
			$config['smtp_pass'] = 'oqojlgsvdrkarjmq';
			$config['smtp_port'] = 465;
			$config['charset'] = 'utf-8';
			$config['mailtype'] = 'html';
			$config['newline'] = "\r\n";

			$this->email->initialize($config);

			
			$this->email->from('info@aveecena.com', 'Kelas Aveecena');
			$this->email->to($this->input->post('emailsiswa'));
			$this->email->subject('Lampiran cara pembayaran');
			$body = $this->load->view('template/email-template-snap.php', $data, true);
			$this->email->message($body);

			if($this->email->send()) {
				 echo 'Email berhasil dikirim';
			}
			else {
				 echo 'Email tidak berhasil dikirim';
				 echo '<br />';
				 echo $this->email->print_debugger();
			}
		}
		else {
			echo "Gagal";

			 }
	}
}
