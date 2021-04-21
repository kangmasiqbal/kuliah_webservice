<?php
Class Products extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        // $this->API="http://kangmasiqbal.000webhostapp.com/webservice/server/products";
        $this->API="http://localhost:8080/kuliah_webservice/server/";
    }
    
    // menampilkan data products
    function index(){
        $data['products'] = json_decode($this->curl->simple_get($this->API.'/products'));
        // $this->load->view('products/list',$data);
        $data['content'] = 'products/list';
        $this->load->view('theme',$data);
    }
    
    // insert data products
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'supplier_ids'              =>  $this->input->post('supplier_ids'),
                'product_code'              =>  $this->input->post('product_code'),
                'product_name'              =>  $this->input->post('product_name'),
                'description'               =>  $this->input->post('description'),
                'standard_cost'             =>  $this->input->post('standard_cost'),
                'list_price'                =>  $this->input->post('list_price'),
                'reorder_level'             =>  $this->input->post('reorder_level'),
                'target_level'              =>  $this->input->post('target_level'),
                'quantity_per_unit'         =>  $this->input->post('quantity_per_unit'),
                'discontinued'              =>  $this->input->post('discontinued'),
                'minimum_reorder_quantity'  =>  $this->input->post('minimum_reorder_quantity'),
                'category'                  =>  $this->input->post('category'),
                'attachments'               =>  $this->input->post('attachments')
            );
            $insert =  $this->curl->simple_post($this->API.'/products', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            // print_r($insert);
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('products');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
            $data['content'] = 'products/create';
            $this->load->view('theme',$data);
        }
    }
    
    // edit data products
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'                        =>  $this->input->post('id'),
                'supplier_ids'              =>  $this->input->post('supplier_ids'),
                'product_code'              =>  $this->input->post('product_code'),
                'product_name'              =>  $this->input->post('product_name'),
                'description'               =>  $this->input->post('description'),
                'standard_cost'             =>  $this->input->post('standard_cost'),
                'list_price'                =>  $this->input->post('list_price'),
                'reorder_level'             =>  $this->input->post('reorder_level'),
                'target_level'              =>  $this->input->post('target_level'),
                'quantity_per_unit'         =>  $this->input->post('quantity_per_unit'),
                'discontinued'              =>  $this->input->post('discontinued'),
                'minimum_reorder_quantity'  =>  $this->input->post('minimum_reorder_quantity'),
                'category'                  =>  $this->input->post('category'),
                'attachments'               =>  $this->input->post('attachments')
            );
            $update =  $this->curl->simple_put($this->API.'/products', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('products');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['products'] = json_decode($this->curl->simple_get($this->API.'/products',$params));
            // $this->load->view('products/edit',$data);
            $data['content'] = 'products/edit';
            $this->load->view('theme',$data);
        }
    }
    
    // delete data products
    function delete($id){
        if(empty($id)){
            redirect('products');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/products', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('products');
        }
    }
}