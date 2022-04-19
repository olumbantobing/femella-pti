<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        if ($this->session->userdata('username') == "") {
            redirect('auth');
        }
        $this->load->helper('text');
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/dashboard', $data);
    }

    public function stokgudang()
    {
        $data = array(
            'list_data' => $this->M_admin->stokgudang()
        );
        $this->load->view('admin/stokgudang', $data);
    }


    public function tambah_stokgudang()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $namabarang = $this->input->post('nama_barang', TRUE);
            $harga      = $this->input->post('harga', TRUE);

            $data = array(
                'id'  => $id,
                'nama_barang'  => $namabarang,
                'harga'       => $harga,
            );
            $this->M_admin->insert('stok_gudang', $data);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/stokgudang'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function ubah_stokgudang()
    {
        $this->form_validation->set_rules('id', 'ID Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $namabarang = $this->input->post('nama_barang', TRUE);
            $harga      = $this->input->post('harga', TRUE);

            $where = array('id' => $id);
            $data = array(
                'id' => $id,
                'nama_barang'  => $namabarang,
                'harga'       => $harga,
            );
            $this->M_admin->update('stok_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/stokgudang'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_stokgudang()
    {
        $this->form_validation->set_rules('id', 'ID Barang', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);

            $where = array('id' => $id);
            $data = array(
                'id' => $id,
            );
            $this->M_admin->delete('stok_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/stokgudang'));
        }
    }

    public function barangterjual()
    {
        $data = array(
            'list_data' => $this->M_admin->tabelterjual()
        );
        $this->load->view('admin/barangterjual', $data);
    }

    public function barangmasuk()
    {
        $data = array(
            'list_data' => $this->M_admin->tabelmasuk()
        );
        $this->load->view('admin/barangmasuk', $data);
    }

    public function tambah_barangmasuk()
    {
        $this->form_validation->set_rules('id', 'ID Barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodemasuk = $this->input->post('kodemasuk', TRUE);
            $id = $this->input->post('id', TRUE);
            $jumlah      = $this->input->post('jumlah', TRUE);
            $tanggal = $this->input->post('tanggal', TRUE);
            $keterangan      = $this->input->post('keterangan', TRUE);

            $data = array(
                'kodemasuk' => $kodemasuk,
                'id' => $id,
                'jumlah' => $jumlah,
                'tanggal'  => $tanggal,
                'keterangan'       => $keterangan,
            );
            $this->M_admin->insert('masuk_gudang', $data);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/barangmasuk'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function ubah_barangmasuk()
    {
        $this->form_validation->set_rules('kodemasuk', 'Kode Masuk', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodemasuk = $this->input->post('kodemasuk', TRUE);
            $jumlah = $this->input->post('jumlah', TRUE);
            $tanggal      = $this->input->post('tanggal', TRUE);
            $keterangan      = $this->input->post('keterangan', TRUE);

            $where = array('kodemasuk' => $kodemasuk);
            $data = array(
                'kodemasuk' => $kodemasuk,
                'jumlah'  => $jumlah,
                'tanggal'       => $tanggal,
                'keterangan'    => $keterangan
            );
            $this->M_admin->update('masuk_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/barangmasuk'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_barangmasuk()
    {
        $this->form_validation->set_rules('kodemasuk', 'Kode Masuk', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodemasuk = $this->input->post('kodemasuk', TRUE);

            $where = array('kodemasuk' => $kodemasuk);
            $data = array(
                'kodemasuk' => $kodemasuk,
            );
            $this->M_admin->delete('masuk_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/barangmasuk'));
        }
    }

    public function barangkeluar()
    {
        $data = array(
            'list_data' => $this->M_admin->tabelkeluar()
        );
        $this->load->view('admin/barangkeluar', $data);
    }

    public function tambah_barangkeluar()
    {
        $this->form_validation->set_rules('id', 'ID Barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodekeluar = $this->input->post('kodekeluar', TRUE);
            $id = $this->input->post('id', TRUE);
            $jumlah      = $this->input->post('jumlah', TRUE);
            $tanggal = $this->input->post('tanggal', TRUE);
            // $kodekeluar = $this->input->get('kodekeluar');
            // $id = $this->input->get('id');
            // $jumlah      = $this->input->get('jumlah');
            // $tanggal = $this->input->get('tanggal');

            if ($this->M_admin->cek_jumlah('stok_gudang', $id) >= $jumlah) {
                // $kodekeluar = $this->input->post('kodekeluar', TRUE);
                // $id = $this->input->post('id', TRUE);
                // $jumlah      = $this->input->post('jumlah', TRUE);
                // $tanggal = $this->input->post('tanggal', TRUE);
                $data = array(
                    'kodekeluar' => $kodekeluar,
                    'id' => $id,
                    'jumlah' => $jumlah,
                    'tanggal'  => $tanggal,
                );
                $this->M_admin->insert('keluar_gudang', $data);

                $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
                redirect(base_url('admin/barangkeluar'));
            } else {
                echo "<script>alert('Stok Gudang Tidak Cukup!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function ubah_barangkeluar()
    {
        $this->form_validation->set_rules('kodekeluar', 'Kode Keluar', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodekeluar = $this->input->post('kodekeluar', TRUE);
            $jumlah = $this->input->post('jumlah', TRUE);
            $tanggal      = $this->input->post('tanggal', TRUE);

            $where = array('kodekeluar' => $kodekeluar);
            $data = array(
                'kodekeluar' => $kodekeluar,
                'jumlah'  => $jumlah,
                'tanggal'       => $tanggal,
            );
            $this->M_admin->update('keluar_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/barangkeluar'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_barangkeluar()
    {
        $this->form_validation->set_rules('kodekeluar', 'Kode Keluar', 'required');

        if ($this->form_validation->run() == TRUE) {
            $kodekeluar = $this->input->post('kodekeluar', TRUE);

            $where = array('kodekeluar' => $kodekeluar);
            $data = array(
                'kodekeluar' => $kodekeluar,
            );
            $this->M_admin->delete('keluar_gudang', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/barangkeluar'));
        }
    }

    public function pengguna()
    {
        $data = array(
            'list_data' => $this->M_admin->pengguna()
        );
        $this->load->view('admin/pengguna', $data);
    }

    public function tambah_pengguna()
    {
        $this->form_validation->set_rules('username', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('akses', 'Hak Akses', 'required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $username = $this->input->post('username', TRUE);
            $akses      = $this->input->post('akses', TRUE);
            $password = $this->input->post('password', TRUE);

            $data = array(
                'id' => $id,
                'username' => $username,
                'akses' => $akses,
                'password'  => $password,
            );
            $this->M_admin->insert('user', $data);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/pengguna'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_pengguna()
    {
        $this->form_validation->set_rules('id', 'ID Pengguna', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);

            $where = array('id' => $id);
            $data = array(
                'id' => $id,
            );
            $this->M_admin->delete('user', $data, $where);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/pengguna'));
        }
    }

    public function laporan()
    {
        $data = array(
            'list_data' => $this->M_admin->laporan()
        );
        $this->load->view('admin/laporan', $data);
    }

    public function nota()
    {
        $data = array(
            'list_data' => $this->M_admin->nota()
        );
        $this->load->view('admin/nota', $data);
    }

    public function tambah_nota()
    {
        $this->form_validation->set_rules('jenis', 'Pilih Jenis (klik form)', 'required');
        $this->form_validation->set_rules('nama_barang', 'Masukkan Nama Barang', 'required');
        $this->form_validation->set_rules('supplier', 'Masukkan Nama Supplier', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('jml_masuk', 'Jumlah Barang Masuk', 'required');
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar', 'required');
        $this->form_validation->set_rules('hrg_asli', 'Masukkan Harga Asli Barang', 'required');
        $this->form_validation->set_rules('hrg_jual', 'Masukkan Harga Jual Barang', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $jenis = $this->input->post('jenis', TRUE);
            $nama_barang = $this->input->post('nama_barang', TRUE);
            $supplier      = $this->input->post('supplier', TRUE);
            $tgl_masuk = $this->input->post('tgl_masuk', TRUE);
            $jml_masuk = $this->input->post('jml_masuk', TRUE);
            $tgl_keluar = $this->input->post('tgl_keluar', TRUE);
            $hrg_asli = $this->input->post('hrg_asli', TRUE);
            $hrg_jual = $this->input->post('hrg_jual', TRUE);

            $data = array(
                'id' => $id,
                'jenis' => $jenis,
                'nama_barang' => $nama_barang,
                'supplier' => $supplier,
                'tgl_masuk'  => $tgl_masuk,
                'jml_masuk'  => $jml_masuk,
                'tgl_keluar'  => $tgl_keluar,
                'hrg_asli'  => $hrg_asli,
                'hrg_jual'  => $hrg_jual,
            );
            $this->M_admin->insert('nota', $data);

            $this->session->set_flashdata('msg_berhasil', 'Data Barang Berhasil Ditambahkan');
            redirect(base_url('admin/pengguna'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
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
