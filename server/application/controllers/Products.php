<?php

require APPPATH . '/libraries/REST_Controller.php';

class products extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data products
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $products = $this->db->get('products')->result();
        } else {
            $this->db->where('id', $id);
            $products = $this->db->get('products')->result();
        }
        $this->response($products, 200);
    }

    // insert new data to products
    function index_post() {
        $data = array(
                'supplier_ids'              =>  $this->post('supplier_ids'),
                'product_code'              =>  $this->post('product_code'),
                'product_name'              =>  $this->post('product_name'),
                'description'               =>  $this->post('description'),
                'standard_cost'             =>  $this->post('standard_cost'),
                'list_price'                =>  $this->post('list_price'),
                'reorder_level'             =>  $this->post('reorder_level'),
                'target_level'              =>  $this->post('target_level'),
                'quantity_per_unit'         =>  $this->post('quantity_per_unit'),
                'discontinued'              =>  $this->post('discontinued'),
                'minimum_reorder_quantity'  =>  $this->post('minimum_reorder_quantity'),
                'category'                  =>  $this->post('category'),
                'attachments'               =>  $this->post('attachments')
        );
        $insert = $this->db->insert('products', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data products
    function index_put() {
        $id = $this->put('id');
        $data = array(
                'supplier_ids'              =>  $this->post('supplier_ids'),
                'id'                        =>  $this->post('id'),
                'product_code'              =>  $this->post('product_code'),
                'product_name'              =>  $this->post('product_name'),
                'description'               =>  $this->post('description'),
                'standard_cost'             =>  $this->post('standard_cost'),
                'list_price'                =>  $this->post('list_price'),
                'reorder_level'             =>  $this->post('reorder_level'),
                'target_level'              =>  $this->post('target_level'),
                'quantity_per_unit'         =>  $this->post('quantity_per_unit'),
                'discontinued'              =>  $this->post('discontinued'),
                'minimum_reorder_quantity'  =>  $this->post('minimum_reorder_quantity'),
                'category'                  =>  $this->post('category'),
                'attachments'               =>  $this->post('attachments')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('products', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete products
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('products');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}