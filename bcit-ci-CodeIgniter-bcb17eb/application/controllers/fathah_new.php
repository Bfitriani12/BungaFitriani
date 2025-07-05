<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fathah_new extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Huruf_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['title'] = 'Belajar Fathah - Huruf Hijaiyah';
        $data['huruf_list'] = $this->get_fathah_huruf();
        $this->load->view('fathah_new_view', $data);
    }

    public function detail($huruf) {
        $data['huruf'] = $huruf;
        $data['huruf_data'] = $this->get_huruf_detail($huruf);
        $data['title'] = 'Detail Fathah - ' . $huruf;
        $this->load->view('detail_fathah_new_view', $data);
    }

    public function quiz() {
        $data['title'] = 'Quiz Fathah';
        $data['questions'] = $this->generate_quiz_questions();
        $this->load->view('fathah_quiz_view', $data);
    }

    public function practice() {
        $data['title'] = 'Latihan Fathah';
        $data['practice_huruf'] = $this->get_random_huruf();
        $this->load->view('fathah_practice_view', $data);
    }

    private function get_fathah_huruf() {
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

    private function get_huruf_detail($huruf) {
        $huruf_list = $this->get_fathah_huruf();
        foreach ($huruf_list as $h) {
            if ($h['latin'] === $huruf) {
                return $h;
            }
        }
        return null;
    }

    private function generate_quiz_questions() {
        $huruf_list = $this->get_fathah_huruf();
        $questions = array();
        
        for ($i = 0; $i < 10; $i++) {
            $random_huruf = $huruf_list[array_rand($huruf_list)];
            $questions[] = array(
                'question' => 'Bagaimana cara membaca huruf ' . $random_huruf['arabic'] . ' dengan fathah?',
                'correct_answer' => $random_huruf['latin'] . 'a',
                'options' => array(
                    $random_huruf['latin'] . 'a',
                    $random_huruf['latin'] . 'i',
                    $random_huruf['latin'] . 'u',
                    $random_huruf['latin']
                )
            );
        }
        
        return $questions;
    }

    private function get_random_huruf() {
        $huruf_list = $this->get_fathah_huruf();
        return $huruf_list[array_rand($huruf_list)];
    }
} 