<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Huruf_model extends CI_Model {
    public function get_all() {
        return $this->db->get('huruf_hijaiyah')->result_array();
    }

    public function count_by_jenis($jenis) {
        $this->db->where('jenis', $jenis);
        return $this->db->count_all_results('huruf_hijaiyah');
    }

    public function count_tajwid() {
        return $this->db->count_all_results('tajwid');
    }
} 