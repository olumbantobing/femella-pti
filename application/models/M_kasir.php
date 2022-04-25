<?php

class M_kasir extends CI_Model
{
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function stoktoko()
    {
        $query = $this->db->query("SELECT id, nama_barang, stok_toko, harga FROM gudang WHERE stok_toko > 0 ORDER BY id DESC");
        return $query->result();
    }

    public function tabelterjual()
    {
        $query = $this->db->query("SELECT terjual.kodeterjual, terjual.id, gudang.nama_barang, terjual.tanggal, terjual.terjual, gudang.stok_toko FROM terjual INNER JOIN gudang ON terjual.id = gudang.id ORDER BY terjual.tanggal DESC");
        return $query->result();
    }

    public function laporan()
    {
        $query = $this->db->query("SELECT * FROM terjual INNER JOIN gudang WHERE terjual.id = gudang.id ORDER BY terjual.tanggal DESC");
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
