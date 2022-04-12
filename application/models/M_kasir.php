<?php

class M_kasir extends CI_Model
{
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function stoktoko()
    {
        $query = $this->db->query("SELECT id, nama_barang, stok_toko, harga FROM stok_gudang WHERE stok_toko > 0 ORDER BY id ASC");
        return $query->result();
    }

    public function tabelterjual()
    {
        $query = $this->db->query("SELECT terjual.kodeterjual, terjual.id, stok_gudang.nama_barang, terjual.tanggal, terjual.terjual, stok_gudang.stok_toko FROM terjual INNER JOIN stok_gudang ON terjual.id = stok_gudang.id ORDER BY terjual.tanggal ASC");
        return $query->result();
    }

    public function delete($tabel, $where)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }
}
