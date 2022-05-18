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
            $this->M_admin->insert('gudang', $data);

            $this->session->set_flashdata('msg_tambah', 'Data Barang Berhasil Ditambahkan');
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
            $this->M_admin->update('gudang', $data, $where);

            $this->session->set_flashdata('msg_ubah', 'Data Barang Berhasil Diubah');
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
            $this->M_admin->delete('gudang', $data, $where);

            $this->session->set_flashdata('msg_hapus', 'Data Barang Berhasil Dihapus');
            redirect(base_url('admin/stokgudang'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
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
        // $this->form_validation->set_rules('id', 'ID Barang', 'required');
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

            $this->session->set_flashdata('msg_tambah', 'Data Barang Berhasil Ditambahkan');
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

            $this->session->set_flashdata('msg_ubah', 'Data Barang Berhasil Diubah');
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

            $this->session->set_flashdata('msg_hapus', 'Data Barang Berhasil Dihapus');
            redirect(base_url('admin/barangmasuk'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
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
            $jumlah = $this->input->post('jumlah', TRUE);
            $tanggal = $this->input->post('tanggal', TRUE);

            $conn = mysqli_connect("localhost", "root", "", "inventaris-askhajaya");
            $cek =  mysqli_query($conn, "SELECT * FROM gudang WHERE id = '$id'");
            $hasil = mysqli_fetch_array($cek);
            $stok = $hasil['stok_gudang'];
            if ($jumlah <= $stok) {
                $data = array(
                    'kodekeluar' => $kodekeluar,
                    'id' => $id,
                    'jumlah' => $jumlah,
                    'tanggal'  => $tanggal,
                );
                $this->M_admin->insert('keluar_gudang', $data);

                $this->session->set_flashdata('msg_tambah', 'Data Barang Berhasil Ditambahkan');
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

            $this->session->set_flashdata('msg_ubah', 'Data Barang Berhasil Diubah');
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

            $this->session->set_flashdata('msg_hapus', 'Data Barang Berhasil Dihapus');
            redirect(base_url('admin/barangkeluar'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
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
            $data = $this->input->post(null, TRUE);

            if ($this->M_admin->cek_username('user', $data['username'])) {
                echo "<script>alert('Username sudah digunakan!');history.go(-1);</script>";
            } else {
                $this->M_admin->add_user($data);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('msg_tambah', 'Data Pengguna Baru Berhasil Ditambahkan');
                    redirect(base_url('admin/pengguna'));
                }
            }
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

            $this->session->set_flashdata('msg_hapus', 'Data Barang Berhasil Dihapus');
            redirect(base_url('admin/pengguna'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function laporan()
    {
        $data = array(
            'list_data' => $this->M_admin->laporan()
        );
        $this->load->view('admin/laporan', $data);
    }

    public function laporan_k()
    {
        $data = array(
            'list_data' => $this->M_admin->laporan_k()
        );
        $this->load->view('admin/laporan_k', $data);
    }

    public function show_lap()
    {
        $this->form_validation->set_rules('showtable', 'Pilih Laporan', 'required');
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('showtable') == 'masuk') {
                $data = array(
                    'list_data' => $this->M_admin->laporan_m()
                );
            } else {
                $data = array(
                    'list_data' => $this->M_admin->laporan_k()
                );
            }
            $this->load->view('admin/laporan', $data);
        }
    }

    public function f_masuk()
    {
        if (isset($_POST["tgl_awal"], $_POST["tgl_akhir"])) {
            $tgl_a = $this->input->post('tgl_awal', TRUE);
            $tgl_b = $this->input->post('tgl_akhir', TRUE);
            $data = array(
                'list_data' => $this->M_admin->f_masuk($tgl_a, $tgl_b)
            );
            $this->load->view('admin/laporan', $data);
        }
    }

    public function f_keluar()
    {
        if (isset($_POST["tgl_awal"], $_POST["tgl_akhir"])) {
            $tgl_a = $this->input->post('tgl_awal', TRUE);
            $tgl_b = $this->input->post('tgl_akhir', TRUE);
            $data = array(
                'list_data' => $this->M_admin->f_keluar($tgl_a, $tgl_b)
            );
            $this->load->view('admin/laporan_k', $data);
        }
    }

    public function nota()
    {
        $data = array(
            'list_data' => $this->M_admin->nota()
        );
        $this->load->view('admin/nota', $data);
    }

    public function f_nota()
    {
        if (isset($_POST["tgl_awal"], $_POST["tgl_akhir"])) {
            $tgl_a = $this->input->post('tgl_awal', TRUE);
            $tgl_b = $this->input->post('tgl_akhir', TRUE);
            $data = array(
                'list_data' => $this->M_admin->f_nota($tgl_a, $tgl_b)
            );
            $this->load->view('admin/nota', $data);
        }
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
            $id_nota = $this->input->post('id_nota', TRUE);
            $jenis = $this->input->post('jenis', TRUE);
            $nama_barang = $this->input->post('nama_barang', TRUE);
            $supplier      = $this->input->post('supplier', TRUE);
            $tgl_masuk = $this->input->post('tgl_masuk', TRUE);
            $jml_masuk = $this->input->post('jml_masuk', TRUE);
            $tgl_keluar = $this->input->post('tgl_keluar', TRUE);
            $hrg_asli = $this->input->post('hrg_asli', TRUE);
            $hrg_jual = $this->input->post('hrg_jual', TRUE);

            $data = array(
                'id_nota' => $id_nota,
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

            $this->session->set_flashdata('msg_tambah', 'Data Berhasil Ditambahkan');
            redirect(base_url('admin/nota'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function edit_nota()
    {
        $this->form_validation->set_rules('id_nota', 'ID (klik form)', 'required');
        $this->form_validation->set_rules('terjual', 'Masukkan Jumlah Barang Terjual', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id_nota = $this->input->post('id_nota', TRUE);
            $terjual = $this->input->post('terjual', TRUE);

            $where = array('id_nota' => $id_nota);
            $data = array(
                'id_nota' => $id_nota,
                'terjual' => $terjual
            );
            $this->M_admin->update('nota', $data, $where);

            $this->session->set_flashdata('msg_ubah', 'Data Berhasil Diubah');
            redirect(base_url('admin/nota'));
        } else {
            echo "<script>alert('Gagal menambah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }

    public function hapus_nota()
    {
        $this->form_validation->set_rules('id_nota', 'ID (klik form)', 'required');

        if ($this->form_validation->run() == TRUE) {
            $id_nota = $this->input->post('id_nota', TRUE);

            $where = array('id_nota' => $id_nota);
            $data = array(
                'id_nota' => $id_nota,
            );
            $this->M_admin->delete('nota', $data, $where);

            $this->session->set_flashdata('msg_hapus', 'Data Berhasil Dihapus');
            redirect(base_url('admin/nota'));
        } else {
            echo "<script>alert('Gagal mengubah data: Jangan ada data yang kosong!');history.go(-1);</script>";
        }
    }
}
