<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function cek_login()
    {
        $data = array(
            'username' => $this->input->post('username', TRUE),
            'password' => $this->input->post('password', TRUE)
        );
        $this->load->model('M_login');
        $hasil = $this->M_login->login($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['id'] = $sess->id;
                $sess_data['username'] = $sess->username;
                $sess_data['akses'] = $sess->akses;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('akses') == 'Admin') {
                redirect('admin');
            } elseif ($this->session->userdata('akses') == 'Kasir') {
                redirect('kasir');
            }
        } else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('akses');
        session_destroy();
        redirect('auth');
    }
}
