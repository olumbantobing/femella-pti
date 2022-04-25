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
        $data = array(
            'list_data' => $this->M_kasir->stoktoko()
        );
        $this->load->view('kasir/stoktoko', $data);
    }

    public function barangterjual()
    {
        $data = array(
            'list_data' => $this->M_kasir->tabelterjual()
        );
        $this->load->view('kasir/barangterjual', $data);
    }

    public function tambah_barangterjual()
    {
        $this->form_validation->set_rules('id', 'ID Barang', 'required');
        $this->form_validation->set_rules('terjual', 'Terjual', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodeterjual = $this->input->post('kodeterjual', TRUE);
            $id = $this->input->post('id', TRUE);
            $terjual      = $this->input->post('terjual', TRUE);
            $tanggal = $this->input->post('tanggal', TRUE);

            $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
            $cek =  mysqli_query($conn, "SELECT * FROM gudang WHERE id = '$id'");
            $hasil = mysqli_fetch_array($cek);
            $stok = $hasil['stok_toko'];
            if ($terjual <= $stok) {
                $data = array(
                    'kodeterjual' => $kodeterjual,
                    'id' => $id,
                    'terjual' => $terjual,
                    'tanggal'  => $tanggal,
                );

                $this->M_kasir->insert('terjual', $data);

                $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
                redirect(base_url('kasir/barangterjual'));
            } else {
                echo "<script>alert('Stok Toko Tidak Cukup!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function ubah_barangterjual()
    {
        $this->form_validation->set_rules('kodeterjual', 'Kode terjual', 'required');
        $this->form_validation->set_rules('terjual', 'Terjual', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodeterjual = $this->input->post('kodeterjual', TRUE);
            $terjual = $this->input->post('terjual', TRUE);

            $where = array('kodeterjual' => $kodeterjual);
            $data = array(
                'kodeterjual' => $kodeterjual,
                'terjual'  => $terjual,
            );
            $this->M_kasir->update('terjual', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('kasir/barangterjual'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_barangterjual()
    {
        $this->form_validation->set_rules('kodeterjual', 'Kode terjual', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodeterjual = $this->input->post('kodeterjual', TRUE);

            $where = array('kodeterjual' => $kodeterjual);
            $data = array(
                'kodeterjual' => $kodeterjual,
            );
            $this->M_kasir->delete('terjual', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('kasir/barangterjual'));
        }
    }

    public function laporan()
    {
        $data = array(
            'list_data' => $this->M_kasir->laporan()
        );

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
