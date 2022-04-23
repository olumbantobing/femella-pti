<?php

class M_admin extends CI_Model
{

  public function insert($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function tabelterjual()
  {
    $query = $this->db->query("SELECT terjual.kodeterjual, terjual.id, stok_gudang.nama_barang, terjual.tanggal, terjual.terjual, stok_gudang.stok_toko FROM terjual INNER JOIN stok_gudang ON terjual.id = stok_gudang.id ORDER BY terjual.tanggal DESC");
    return $query->result();
  }

  public function tabelmasuk()
  {
    $query = $this->db->query("SELECT masuk_gudang.kodemasuk, masuk_gudang.id, stok_gudang.nama_barang, masuk_gudang.jumlah, masuk_gudang.tanggal, masuk_gudang.keterangan FROM masuk_gudang INNER JOIN stok_gudang ON masuk_gudang.id = stok_gudang.id ORDER BY masuk_gudang.tanggal DESC");
    return $query->result();
  }

  public function tabelkeluar()
  {
    $query = $this->db->query("SELECT keluar_gudang.kodekeluar, keluar_gudang.id, stok_gudang.nama_barang, keluar_gudang.jumlah, keluar_gudang.tanggal FROM keluar_gudang INNER JOIN stok_gudang ON keluar_gudang.id = stok_gudang.id ORDER BY keluar_gudang.tanggal DESC");
    return $query->result();
  }

  public function stokgudang()
  {
    $query = $this->db->query("SELECT * FROM stok_gudang ORDER BY id ASC");
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
    $query = $this->db->query("SELECT stok_gudang.id, masuk_gudang.tanggal, stok_gudang.nama_barang, keluar_gudang.jumlah, masuk_gudang.jumlah, stok_gudang.stok_gudang, stok_gudang.stok_toko, stok_gudang.harga
    FROM stok_gudang INNER JOIN keluar_gudang INNER JOIN masuk_gudang INNER JOIN terjual WHERE stok_gudang.id = keluar_gudang.id and stok_gudang.id = masuk_gudang.id
    and keluar_gudang.tanggal = masuk_gudang.tanggal and keluar_gudang.tanggal = terjual.tanggal and masuk_gudang.tanggal = terjual.tanggal");
    return $query->result();
    // stok_gudang.id = terjual.id
    // terjual.terjual
  }

  public function nota()
  {
    $query = $this->db->query("SELECT * FROM nota ORDER BY id_nota ASC");
    return $query->result();
  }

  public function select($tabel)
  {
    $query = $this->db->get($tabel);
    return $query->result();
  }

  public function cek_jumlah($id)
  {
    return $this->db->select('stok_gudang')
      ->from('stok_gudang')
      ->where('id', $id)
      ->get()->result();
  }
  // public function cek_jumlah($tabel, $id_transaksi)
  // {
  //   return  $this->db->select('*')
  //     ->from($tabel)
  //     ->where('id_transaksi', $id_transaksi)
  //     ->get();
  // }

  // public function get_data_array($tabel, $id_transaksi)
  // {
  //   $query = $this->db->select()
  //     ->from($tabel)
  //     ->where($id_transaksi)
  //     ->get();
  //   return $query->result_array();
  // }

  // public function get_data($tabel, $id_transaksi)
  // {
  //   $query = $this->db->select()
  //     ->from($tabel)
  //     ->where($id_transaksi)
  //     ->get();
  //   return $query->result();
  // }

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

  // public function mengurangi($tabel, $id_transaksi, $jumlah)
  // {
  //   $this->db->set("jumlah", "jumlah - $jumlah");
  //   $this->db->where('id_transaksi', $id_transaksi);
  //   $this->db->update($tabel);
  // }

  // public function update_password($tabel, $where, $data)
  // {
  //   $this->db->where($where);
  //   $this->db->update($tabel, $data);
  // }

  // public function get_data_gambar($tabel, $username)
  // {
  //   $query = $this->db->select()
  //     ->from($tabel)
  //     ->where('username_user', $username)
  //     ->get();
  //   return $query->result();
  // }

  // public function sum($tabel, $field)
  // {
  //   $query = $this->db->select_sum($field)
  //     ->from($tabel)
  //     ->get();
  //   return $query->result();
  // }

  // public function numrows($tabel)
  // {
  //   $query = $this->db->select()
  //     ->from($tabel)
  //     ->get();
  //   return $query->num_rows();
  // }

  // public function kecuali($tabel, $username)
  // {
  //   $query = $this->db->select()
  //     ->from($tabel)
  //     ->where_not_in('username', $username)
  //     ->get();

  //   return $query->result();
  // }
}
