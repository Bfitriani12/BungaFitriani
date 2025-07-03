<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function proses() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pengguna = $this->Pengguna_model->cek_login($username, $password);
        if ($pengguna) {
            $this->session->set_userdata('pengguna', $pengguna);
            redirect('welcome'); // Ganti dengan halaman tujuan setelah login
        } else {
            $data['error'] = 'Username atau password salah!';
            $this->load->view('login_view', $data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('pengguna');
        redirect('login');
    }
} 