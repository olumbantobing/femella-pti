<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
  public function cek_user($username)
  {
    $query = $this->db->get_where('user', $username);
    return $query;
    // return  $this->db->select('*')
    //   ->from($tabel)
    //   ->where('username', $username)
    //   ->get();
  }
}
