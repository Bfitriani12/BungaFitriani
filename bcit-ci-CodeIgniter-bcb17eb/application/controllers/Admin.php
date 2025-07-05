<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index() {
        $this->load->model('Huruf_model');
        $this->load->model('Pengguna_model');
        $data['total_fathah'] = $this->Huruf_model->count_by_jenis('fathah');
        $data['total_kasroh'] = $this->Huruf_model->count_by_jenis('kasroh');
        $data['total_dhomah'] = $this->Huruf_model->count_by_jenis('dhomah');
        $data['total_tanwin_fathah'] = $this->Huruf_model->count_by_jenis('tanwin_fathah');
        $data['total_tanwin_dhomah'] = $this->Huruf_model->count_by_jenis('tanwin_dhomah');
        $data['total_tanwin_kasroh'] = $this->Huruf_model->count_by_jenis('tanwin_kasroh');
        $data['total_tajwid'] = $this->Huruf_model->count_tajwid();
        $data['total_pengguna'] = $this->Pengguna_model->count_all();
        $this->load->view('admin_home_view', $data);
    }
} 