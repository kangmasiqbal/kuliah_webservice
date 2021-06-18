<?php
class Logout extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index() {
        $array_items = array (
            'username' => $this->session->userdata('username'),
            'password' => $this->session->userdata('password')
        );
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
?>