<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_getdata extends CI_Model {

    function customers(){
        $this->db->select('*');
        $this->db->from('customers');
        return $this->db->get();
	}

    function employees(){
        $this->db->select('*');
        $this->db->from('employees');
        return $this->db->get();
	}

    function products(){
        $this->db->select('*');
        $this->db->from('products');
        return $this->db->get();
	}

}