<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class getdata extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_getdata'));
    }

    public function index() {
        redirect(base_url());
    }

    function customers(){
        $data = $this->m_getdata->customers()->result();
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));    
    }

    function employees(){
        $data = $this->m_getdata->employees()->result();
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));    
    }

    function products(){
        $data = $this->m_getdata->products()->result();
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));    
    }

}