<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('not-login', 'Gagal!');
            redirect('welcome');
        }
            // parent::__construct();
            // // check if user is logged in
            // if(!$this->session->userdata('is_logged_in')){
            //   // user is not logged in then redirect user to any page you want
            // }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['keperawatan'] = $this->db->get_where('siswa',['keperawatan' => 1])->num_rows();
        $data['kebidanan'] = $this->db->get_where('siswa',['kebidanan' => 1])->num_rows();
        $data['kedokteran'] = $this->db->get_where('siswa',['kedokteran' => 1])->num_rows();
        $data['gizi'] = $this->db->get_where('siswa',['gizi' => 1])->num_rows();
        $data['apoteker'] = $this->db->get_where('siswa',['apoteker' => 1])->num_rows();

        $this->load->view('user/index');
        $this->load->view('user/kelas',$data);
        $this->load->view('template/footer');
    }

    public function kelas10()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/kelas10');
        $this->load->view('template/footer');
    }

    public function kelas11()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/kelas11');
        $this->load->view('template/footer');
    }

    public function kelas12()
    {
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/kelas12');
        $this->load->view('template/footer');
    }

}
