<?php

require APPPATH . '/libraries/REST_Controller.php';

class customers extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data customers
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $customers = $this->db->get('customers')->result();
        } else {
            $this->db->where('id', $id);
            $customers = $this->db->get('customers')->result();
        }
        $this->response($customers, 200);
    }

    // insert new data to customers
    function index_post() {
        $data = array(
                'company'           =>  $this->post('company'),
                'last_name'         =>  $this->post('last_name'),
                'first_name'        =>  $this->post('first_name'),
                'email_address'     =>  $this->post('email_address'),
                'job_title'         =>  $this->post('job_title'),
                'business_phone'    =>  $this->post('business_phone'),
                'home_phone'        =>  $this->post('home_phone'),
                'mobile_phone'      =>  $this->post('mobile_phone'),
                'fax_number'        =>  $this->post('fax_number'),
                'address'           =>  $this->post('address'),
                'city'              =>  $this->post('city'),
                'state_province'    =>  $this->post('state_province'),
                'zip_postal_code'   =>  $this->post('zip_postal_code'),
                'country_region'    =>  $this->post('country_region'),
                'web_page'          =>  $this->post('web_page'),
                'notes'             =>  $this->post('notes'),
                'attachments'       =>  $this->post('attachments')
        );
        $insert = $this->db->insert('customers', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data customers
    function index_put() {
        $id = $this->put('id');
        $data = array(
                'company'           =>  $this->put('company'),
                'last_name'         =>  $this->put('last_name'),
                'first_name'        =>  $this->put('first_name'),
                'email_address'     =>  $this->put('email_address'),
                'job_title'         =>  $this->put('job_title'),
                'business_phone'    =>  $this->put('business_phone'),
                'home_phone'        =>  $this->put('home_phone'),
                'mobile_phone'      =>  $this->put('mobile_phone'),
                'fax_number'        =>  $this->put('fax_number'),
                'address'           =>  $this->put('address'),
                'city'              =>  $this->put('city'),
                'state_province'    =>  $this->put('state_province'),
                'zip_postal_code'   =>  $this->post('zip_postal_code'),
                'country_region'    =>  $this->put('country_region'),
                'web_page'          =>  $this->put('web_page'),
                'notes'             =>  $this->put('notes'),
                'attachments'       =>  $this->put('attachments')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('customers', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete customers
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('customers');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}