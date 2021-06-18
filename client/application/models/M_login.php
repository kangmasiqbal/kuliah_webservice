<?php
class M_login extends CI_Model {

    function get_data($username) {
        $this->db->select('u.userid, u.idpegawai, u.username, u.password, u.access_level, p.nama as realname, p.jabatan, p.wilayah as wilayah, r.role_akses, r.role_akses_detail, r.role_aksi');
        $this->db->from('user u');
        $this->db->join('pegawai p', 'u.idpegawai = p.id_pegawai', 'left');
        $this->db->join('menu_admin_role r', 'u.access_level = r.id', 'left');
        $this->db->join('m_jabatan j', 'u.jabatan = j.id_jabatan', 'left');
        $this->db->where('u.username', $username);
        $this->db->where('p.status_aktif', 1);
        return $this->db->get();
    }

}
?>
