<?php
Class Customers extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        // $this->API="http://kangmasiqbal.000webhostapp.com/webservice/server/customers";
        $this->API="http://localhost:8080/kuliah_webservice/server/";
    }
    
    // menampilkan data customers
    function index(){
        $data['customers'] = json_decode($this->curl->simple_get($this->API.'/customers'));
        // $this->load->view('customers/list',$data);
        $data['content'] = 'customers/list';
        $this->load->view('theme',$data);
    }
    
    // insert data customers
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'company'           =>  $this->input->post('company'),
                'last_name'         =>  $this->input->post('last_name'),
                'first_name'        =>  $this->input->post('first_name'),
                'email_address'     =>  $this->input->post('email_address'),
                'job_title'         =>  $this->input->post('job_title'),
                'business_phone'    =>  $this->input->post('business_phone'),
                'home_phone'        =>  $this->input->post('home_phone'),
                'mobile_phone'      =>  $this->input->post('mobile_phone'),
                'fax_number'        =>  $this->input->post('fax_number'),
                'address'           =>  $this->input->post('address'),
                'city'              =>  $this->input->post('city'),
                'state_province'    =>  $this->input->post('state_province'),
                'zip_postal_code'   =>  $this->input->post('zip_postal_code'),
                'country_region'    =>  $this->input->post('country_region'),
                'web_page'          =>  $this->input->post('web_page'),
                'notes'             =>  $this->input->post('notes'),
                'attachments'       =>  $this->input->post('attachments')
            );
            $insert =  $this->curl->simple_post($this->API.'/customers', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            // print_r($insert);
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('customers');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
            $data['content'] = 'customers/create';
            $this->load->view('theme',$data);
        }
    }
    
    // edit data customers
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                // 'id'                =>  $this->input->post('id'),
                'company'           =>  $this->input->post('company'),
                'last_name'         =>  $this->input->post('last_name'),
                'first_name'        =>  $this->input->post('first_name'),
                'email_address'     =>  $this->input->post('email_address'),
                'job_title'         =>  $this->input->post('job_title'),
                'business_phone'    =>  $this->input->post('business_phone'),
                'home_phone'        =>  $this->input->post('home_phone'),
                'mobile_phone'      =>  $this->input->post('mobile_phone'),
                'fax_number'        =>  $this->input->post('fax_number'),
                'address'           =>  $this->input->post('address'),
                'city'              =>  $this->input->post('city'),
                'state_province'    =>  $this->input->post('state_province'),
                'zip_postal_code'   =>  $this->input->post('zip_postal_code'),
                'country_region'    =>  $this->input->post('country_region'),
                'web_page'          =>  $this->input->post('web_page'),
                'notes'             =>  $this->input->post('notes'),
                'attachments'       =>  $this->input->post('attachments')
            );
            $update =  $this->curl->simple_put($this->API.'/customers', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            // redirect('customers');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['customers'] = json_decode($this->curl->simple_get($this->API.'/customers',$params));
            // $this->load->view('customers/edit',$data);
            $data['content'] = 'customers/edit';
            $this->load->view('theme',$data);
        }
    }
    
    // delete data customers
    function delete($id){
        if(empty($id)){
            redirect('customers');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/customers', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('customers');
        }
    }
}