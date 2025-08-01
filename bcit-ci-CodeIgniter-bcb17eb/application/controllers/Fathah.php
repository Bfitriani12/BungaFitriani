<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fathah extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Huruf_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }
    
    public function index() {
        $data['title'] = 'Fathah - Huruf Hijaiyah';
        $data['show_advanced_features'] = true;
        $this->load->view('fathah_view', $data);
    }

    public function detail($huruf) {
        $data['huruf'] = $huruf;
        $data['title'] = 'Detail Fathah - ' . $huruf;
        $this->load->view('detail_fathah_view', $data);
    }
    
    // Method to redirect to advanced features
    public function advanced() {
        redirect('fathah_new');
    }
    
    public function quiz() {
        redirect('fathah_new/quiz');
    }
    
    public function practice() {
        redirect('fathah_new/practice');
    }
    
    // Method to get huruf data for integration
    private function get_huruf_data() {
        return array(
            array('arabic' => 'ا', 'latin' => 'A', 'name' => 'Alif'),
            array('arabic' => 'ب', 'latin' => 'Ba', 'name' => 'Ba'),
            array('arabic' => 'ت', 'latin' => 'Ta', 'name' => 'Ta'),
            array('arabic' => 'ث', 'latin' => 'Tsa', 'name' => 'Tsa'),
            array('arabic' => 'ج', 'latin' => 'Ja', 'name' => 'Jim'),
            array('arabic' => 'ح', 'latin' => 'Ha', 'name' => 'Ha'),
            array('arabic' => 'خ', 'latin' => 'Kho', 'name' => 'Kha'),
            array('arabic' => 'د', 'latin' => 'Da', 'name' => 'Dal'),
            array('arabic' => 'ذ', 'latin' => 'Dza', 'name' => 'Dzal'),
            array('arabic' => 'ر', 'latin' => 'Ro', 'name' => 'Ra'),
            array('arabic' => 'ز', 'latin' => 'Za', 'name' => 'Zay'),
            array('arabic' => 'س', 'latin' => 'Sa', 'name' => 'Sin'),
            array('arabic' => 'ش', 'latin' => 'Sya', 'name' => 'Syin'),
            array('arabic' => 'ص', 'latin' => 'Sho', 'name' => 'Shad'),
            array('arabic' => 'ض', 'latin' => 'Dho', 'name' => 'Dhad'),
            array('arabic' => 'ط', 'latin' => 'Tho', 'name' => 'Tha'),
            array('arabic' => 'ظ', 'latin' => 'Dzo', 'name' => 'Dza'),
            array('arabic' => 'ع', 'latin' => 'Ain', 'name' => 'Ain'),
            array('arabic' => 'غ', 'latin' => 'Gho', 'name' => 'Ghayn'),
            array('arabic' => 'ف', 'latin' => 'Fa', 'name' => 'Fa'),
            array('arabic' => 'ق', 'latin' => 'Qo', 'name' => 'Qaf'),
            array('arabic' => 'ك', 'latin' => 'Ka', 'name' => 'Kaf'),
            array('arabic' => 'ل', 'latin' => 'La', 'name' => 'Lam'),
            array('arabic' => 'م', 'latin' => 'Ma', 'name' => 'Mim'),
            array('arabic' => 'ن', 'latin' => 'Na', 'name' => 'Nun'),
            array('arabic' => 'و', 'latin' => 'Wa', 'name' => 'Waw'),
            array('arabic' => 'ه', 'latin' => 'HA', 'name' => 'Ha'),
            array('arabic' => 'ي', 'latin' => 'Ya', 'name' => 'Ya')
        );
    }
} 