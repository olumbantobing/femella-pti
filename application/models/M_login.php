<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
  public function login($data)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $data['username']);
    $this->db->where('password', sha1($data['password']));
    $query = $this->db->get();
    return $query;
  }
}
