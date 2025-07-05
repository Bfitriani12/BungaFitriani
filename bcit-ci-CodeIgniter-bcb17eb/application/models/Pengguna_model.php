<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
    public function cek_login($username, $password) {
        $this->db->where('Nama', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('pengguna');
        return $query->row_array();
    }

    public function insert($username, $password) {
        $data = array(
            'Nama' => $username,
            'Password' => $password
        );
        return $this->db->insert('pengguna', $data);
    }

    public function count_all() {
        return $this->db->count_all('pengguna');
    }
} 