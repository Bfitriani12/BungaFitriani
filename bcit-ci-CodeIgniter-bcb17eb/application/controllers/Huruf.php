<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Huruf extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Huruf_model');
    }

    public function index() {
        $data['huruf'] = $this->Huruf_model->get_all();
        $this->load->view('huruf_view', $data);
    }
}