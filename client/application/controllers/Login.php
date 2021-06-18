<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_login');

        if(is_logged_in() == TRUE){ redirect('customers'); };
        // $this->API="http://kangmasiqbal.000webhostapp.com/webservice/server/mahasiswa";
        $this->API="http://localhost:8080/kuliah_webservice/server/";
    }

    public function index() {
        $view['error'] = $this->session->flashdata('error');
        $this->load->view('login', $view);
    }

    function dologin() {
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'username'      =>  $username,
                'password'      =>  $password);
            $get =  $this->curl->simple_post($this->API.'/login', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            // print_r($data);
            if($get) {
                $userdata = array (
                    'username' => $username,
                    'password' => $password
                );
                $this->session->set_userdata($userdata);
                redirect(base_url('customers'));
            } else {
               $this->session->set_flashdata('error','Login Gagal');
               redirect(base_url('login'));
            }
        } else{
            redirect(base_url('login'));
        }
    }

}
