<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Huruf_model extends CI_Model {
    public function get_all() {
        return $this->db->get('huruf_hijaiyah')->result_array();
    }
} 