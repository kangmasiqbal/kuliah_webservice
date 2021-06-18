<?php
function is_logged_in() {
    $ci = &get_instance();
    if ($ci->session) {
        $username = $ci->session->userdata('username');
        $password = $ci->session->userdata('password');
        if (($username != NULL) && ($password != NULL)) {
            if (ceklogin($username, $password) == TRUE){
                return TRUE; 
            }
            else{
                return FALSE;
            }
        }
        else
            return FALSE;
    }
    else
        return FALSE;
}

function ceklogin ($username, $password) {
    $ci = &get_instance();
    $ci->db->select('username, password');
    $ci->db->from('login');
    $ci->db->where('username', $username);
    $ci->db->where('password', $password);
    $query = $ci->db->get();
    if ($query->num_rows() == 1) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

?>