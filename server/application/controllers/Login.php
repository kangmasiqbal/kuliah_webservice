<?php

require APPPATH . '/libraries/REST_Controller.php';

class login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_post() {
        $data = array(
            'username'          => $this->post('username'),
            'password'          => $this->post('password'));
        $this->db->where('username', $data->username);
        $this->db->where('password', $data->password);
        $get = $this->db->get('login')->row();
        if ($get) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}