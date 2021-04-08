<?php

class Random extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index(){
        $attemp_count = ($this->session->userdata('attemp_count')) ? $this->session->userdata('attemp_count'): 0;
        $attemp_count++;

        $this->session->set_userdata('attemp_count', $attemp_count);

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomStr = substr(str_shuffle($permitted_chars), 0, 14);

        $this->load->view('random',array('random_string'=>  $randomStr));
    }
}