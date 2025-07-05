<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Huruf_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['huruf'] = $this->Huruf_model->get_all();
        $data['title'] = 'Dashboard - Pembelajaran Huruf Hijaiyah';
        $data['navigation'] = array(
            'fathah' => site_url('fathah'),
            'kasroh' => site_url('kasroh'),
            'dhomah' => site_url('dhomah'),
            'tanwin_fathah' => site_url('tanwinfathah'),
            'tanwin_dhomah' => site_url('tanwindhomah'),
            'tanwin_kasroh' => site_url('tanwinkasroh'),
            'tajwid' => site_url('tajwid')
        );
        $this->load->view('dashboard_view', $data);
    }
    
    // Method to handle Fathah navigation
    public function fathah() {
        redirect('fathah');
    }
    
    // Method to handle Kasroh navigation
    public function kasroh() {
        redirect('kasroh');
    }
    
    // Method to handle Dhomah navigation
    public function dhomah() {
        redirect('dhomah');
    }
    
    // Method to handle Tanwin Fathah navigation
    public function tanwin_fathah() {
        redirect('tanwinfathah');
    }
    
    // Method to handle Tanwin Dhomah navigation
    public function tanwin_dhomah() {
        redirect('tanwindhomah');
    }
    
    // Method to handle Tanwin Kasroh navigation
    public function tanwin_kasroh() {
        redirect('tanwinkasroh');
    }
    
    // Method to handle Tajwid navigation
    public function tajwid() {
        redirect('tajwid');
    }
} 