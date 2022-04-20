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
        $hasil = $this->M_login->cek_user($data);
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
}

// public function index()
// {
// $this->load->view('auth/login');
// $this->_login();
// }

// private function _login()
// {
// $username = $this->input->post('username');
// $katasandi = $this->input->post('katasandi');

// $username = $this->db->get_where('user', ['username' => $username]);
// $katasandi = $this->db->get_where('user', ['katasandi' => $katasandi]);

// if($username == )
// }

// public function __construct()
// {
// parent::__construct();
// $this->load->model('M_login');
// }
// public function index()
// {
// // $data['token_generate'] = $this->token_generate();
// // $this->session->set_userdata($data);
// $this->load->view('auth/login');
// }

// // public function token_generate()
// // {
// // return $tokens = md5(uniqid(rand(), true));
// // }

// // public function register()
// // {
// // $this->load->view('login/register');
// // }


// public function proses_login()
// {
// $this->form_validation->set_rules('username', 'Username', 'required');
// $this->form_validation->set_rules('password', 'Password', 'required');

// if ($this->form_validation->run() == TRUE) {
// $username = $this->input->post('username', TRUE);
// $password = $this->input->post('password', TRUE);

// if ($this->session->userdata('token_generate') === $this->input->post('token')) {
// $cek = $this->M_login->cek_user('user', $username);
// if ($cek->num_rows() != 1) {
// $this->session->set_flashdata('msg', 'Nama Pengguna Belum Terdaftar Silahkan Lapor ke Admin');
// redirect(base_url());
// } else {

// $isi = $cek->row();
// if (password_verify($password, $isi->password) === TRUE) {
// $data_session = array(
// 'id' => $isi->id,
// 'name' => $username,
// 'status' => 'login',
// 'akses' => $isi->akses,
// );

// $this->session->set_userdata($data_session);

// $this->M_login->edit_user(['username' => $username]);

// if ($isi->akses == 0) {
// redirect(base_url('admin/dashboard'));
// } else {
// redirect(base_url('kasir'));
// }
// } else {
// $this->session->set_flashdata('msg', 'Username Dan Password Salah');
// redirect(base_url());
// }
// }
// } else {
// redirect(base_url());
// }
// }
// }