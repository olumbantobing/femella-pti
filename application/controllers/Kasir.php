<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kasir');
        if ($this->session->userdata('username') == "") {
            redirect('auth');
        }
        $this->load->helper('text');
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('kasir/dashboard', $data);
    }

    public function stoktoko()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('kasir/stoktoko', $data);
    }

    public function barangterjual()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('kasir/barangterjual', $data);
    }

    public function laporan()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('kasir/laporan', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('akses');
        session_destroy();
        redirect('auth');
    }
}
