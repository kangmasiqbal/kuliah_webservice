<?php

require APPPATH . '/libraries/REST_Controller.php';

class jurusan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data jurusan
    function index_get() {
        $jurusan = $this->db->get('jurusan')->result();
        $this->response($jurusan, 200);
    }

}