<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function belajar($id)
    {
        $this->load->library('disqus');

        $this->load->model('m_materi');
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $data['disqus'] = $this->disqus->get_html();
        $this->load->view('materi/belajar', $data);
    }

    public function kelas_keperawatan()
    {
        $user = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        if ($user['keperawatan'] == 1) {
            $this->load->model('m_materi');
            $data['materi'] = $this->m_materi->kelas_keperawatan()->result();

            $this->load->view('materi/kelas_keperawatan', $data);
            $this->load->view('template/footer');
            } else {
                $this->session->set_flashdata('class-error', 'Gagal!');
                redirect (base_url('snap/detail_kelas_keperawatan'));
            }
    }

    public function kelas_kebidanan()
    {
        $user = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        if ($user['kebidanan'] == 1) {
            $this->load->model('m_materi');
            $data['materi'] = $this->m_materi->kelas_kebidanan()->result();

            $this->load->view('materi/kelas_kebidanan', $data);
            $this->load->view('template/footer');
            } else {
                $this->session->set_flashdata('class-error', 'Gagal!');
                redirect (base_url('snap/detail_kelas_kebidanan'));
            }
    }

    public function kelas_kedokteran()
    {
        $user = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        if ($user['kedokteran'] == 1) {
            $this->load->model('m_materi');
            $data['materi'] = $this->m_materi->kelas_kedokteran()->result();

            $this->load->view('materi/kelas_kedokteran', $data);
            $this->load->view('template/footer');
            } else {
                $this->session->set_flashdata('class-error', 'Gagal!');
                redirect (base_url('snap/detail_kelas_kedokteran'));
            }
    }

    public function kelas_gizi()
    {
        $user = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        if ($user['gizi'] == 1) {
            $this->load->model('m_materi');
            $data['materi'] = $this->m_materi->kelas_gizi()->result();

            $this->load->view('materi/kelas_gizi', $data);
            $this->load->view('template/footer');
            } else {
                $this->session->set_flashdata('class-error', 'Gagal!');
                redirect (base_url('snap/detail_kelas_gizi'));
            }
    }

    public function kelas_apoteker()
    {
        $user = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        if ($user['apoteker'] == 1) {
            $this->load->model('m_materi');
            $data['materi'] = $this->m_materi->kelas_apoteker()->result();

            $this->load->view('materi/kelas_apoteker', $data);
            $this->load->view('template/footer');
            } else {
                $this->session->set_flashdata('class-error', 'Gagal!');
                redirect (base_url('snap/detail_kelas_apoteker'));
            }
    }
}
