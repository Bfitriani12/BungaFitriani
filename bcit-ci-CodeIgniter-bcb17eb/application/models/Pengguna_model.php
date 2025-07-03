<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
    public function cek_login($username, $password) {
        $this->db->where('Nama', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('pengguna');
        return $query->row_array();
    }
} 