<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('signup_view');
    }

    public function proses() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username && $password) {
            $this->Pengguna_model->insert($username, $password);
            $data['success'] = 'Pendaftaran berhasil! Silakan login.';
            $this->load->view('signup_view', $data);
        } else {
            $data['error'] = 'Username dan password wajib diisi!';
            $this->load->view('signup_view', $data);
        }
    }
} 