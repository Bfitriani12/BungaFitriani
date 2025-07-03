<?php
class Mahasiswa extends CI_Controller {
    public function index() {
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('mahasiswa/index', $data);
    }
} 