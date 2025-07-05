<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tajwid extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['title'] = 'Materi Tajwid - Huruf Hijaiyah';
        $data['tajwid_list'] = $this->get_tajwid_list();
        $this->load->view('tajwid_view', $data);
    }

    public function detail($materi) {
        $data['title'] = 'Detail Tajwid - ' . $materi;
        $data['tajwid'] = $this->get_tajwid_detail($materi);
        $this->load->view('detail_tajwid_view', $data);
    }

    private function get_tajwid_list() {
        return array(
            array('slug' => 'mad', 'name' => 'Mad', 'desc' => 'Hukum bacaan mad'),
            array('slug' => 'ghunnah', 'name' => 'Ghunnah', 'desc' => 'Hukum bacaan ghunnah'),
            array('slug' => 'idgham', 'name' => 'Idgham', 'desc' => 'Hukum bacaan idgham'),
            array('slug' => 'iqlab', 'name' => 'Iqlab', 'desc' => 'Hukum bacaan iqlab'),
            array('slug' => 'ikhfa', 'name' => 'Ikhfa', 'desc' => 'Hukum bacaan ikhfa'),
            array('slug' => 'idhar', 'name' => 'Idhar', 'desc' => 'Hukum bacaan idhar'),
            array('slug' => 'qalqalah', 'name' => 'Qalqalah', 'desc' => 'Hukum bacaan qalqalah'),
        );
    }

    private function get_tajwid_detail($slug) {
        $list = $this->get_tajwid_list();
        foreach ($list as $item) {
            if ($item['slug'] === $slug) {
                return $item;
            }
        }
        return null;
    }
} 