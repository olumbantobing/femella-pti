<?php

class M_admin extends CI_Model
{

  public function insert($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function tabelterjual()
  {
    $query = $this->db->query("SELECT terjual.kodeterjual, terjual.id, gudang.nama_barang, terjual.tanggal, terjual.terjual, gudang.stok_toko FROM terjual INNER JOIN gudang ON terjual.id = gudang.id ORDER BY terjual.tanggal DESC");
    return $query->result();
  }

  public function tabelmasuk()
  {
    $query = $this->db->query("SELECT masuk_gudang.kodemasuk, masuk_gudang.id, gudang.nama_barang, masuk_gudang.jumlah, masuk_gudang.tanggal, masuk_gudang.keterangan FROM masuk_gudang INNER JOIN gudang ON masuk_gudang.id = gudang.id ORDER BY masuk_gudang.tanggal DESC");
    return $query->result();
  }

  public function tabelkeluar()
  {
    $query = $this->db->query("SELECT keluar_gudang.kodekeluar, keluar_gudang.id, gudang.nama_barang, keluar_gudang.jumlah, keluar_gudang.tanggal FROM keluar_gudang INNER JOIN gudang ON keluar_gudang.id = gudang.id ORDER BY keluar_gudang.tanggal DESC");
    return $query->result();
  }

  public function stokgudang()
  {
    $query = $this->db->query("SELECT * FROM gudang ORDER BY id ASC");
    return $query->result();
  }

  public function cek_jumlah($tabel, $id)
  {
    $query = $this->db->query("SELECT * FROM $tabel WHERE id = '$id'");
    return $query->result();
  }

  public function cek_username($tabel, $data)
  {
    return $this->db->select('username')
      ->from($tabel)
      ->where('username', $data)
      ->get()->result();
  }

  public function pengguna()
  {
    $query = $this->db->query("SELECT * FROM user ORDER BY id ASC");
    return $query->result();
  }

  public function add_user($data)
  {
    $params['id'] = $data['id'];
    $params['username'] = $data['username'];
    $params['akses'] = $data['akses'];
    $params['password'] = sha1($data['password']);
    $this->db->insert('user', $params);
  }

  public function laporan()
  {
    $query = $this->db->query("SELECT * FROM gudang INNER JOIN masuk_gudang WHERE masuk_gudang.id = gudang.id ORDER BY masuk_gudang.tanggal ASC");
    return $query->result();
  }

  public function laporan_k()
  {
    $query = $this->db->query("SELECT * FROM gudang INNER JOIN keluar_gudang WHERE keluar_gudang.id = gudang.id ORDER BY keluar_gudang.tanggal ASC");
    return $query->result();
  }

  public function f_masuk($tgl_a, $tgl_b)
  {
    $query = $this->db->query("SELECT * FROM gudang INNER JOIN masuk_gudang 
    WHERE masuk_gudang.id = gudang.id and (tanggal BETWEEN '$tgl_a' and '$tgl_b') 
    ORDER BY masuk_gudang.tanggal ASC");
    return $query->result();
  }

  public function f_keluar($tgl_a, $tgl_b)
  {
    $query = $this->db->query("SELECT * FROM gudang INNER JOIN keluar_gudang 
    WHERE keluar_gudang.id = gudang.id and (tanggal BETWEEN '$tgl_a' and '$tgl_b') 
    ORDER BY keluar_gudang.tanggal ASC");
    return $query->result();
  }

  public function nota()
  {
    $query = $this->db->query("SELECT id_nota, jenis, nama_barang, supplier, tgl_masuk, jml_masuk, terjual, jml_masuk-terjual as sisa, tgl_keluar, hrg_asli, hrg_jual, hrg_jual*terjual as total, (hrg_jual-hrg_asli)*terjual as fee FROM nota ORDER BY tgl_masuk ASC");
    return $query->result();
  }

  public function f_nota($tgl_a, $tgl_b)
  {
    $query = $this->db->query("SELECT id_nota, jenis, nama_barang, supplier, tgl_masuk, jml_masuk, terjual, jml_masuk-terjual as sisa, tgl_keluar, hrg_asli, hrg_jual, hrg_jual*terjual as total, (hrg_jual-hrg_asli)*terjual as fee FROM nota
    WHERE (tgl_masuk BETWEEN '$tgl_a' and '$tgl_b') 
    ORDER BY tgl_masuk ASC");
    return $query->result();
  }

  public function select($tabel)
  {
    $query = $this->db->get($tabel);
    return $query->result();
  }

  public function update($tabel, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($tabel, $data);
  }

  public function delete($tabel, $where)
  {
    $this->db->where($where);
    $this->db->delete($tabel);
  }
}
