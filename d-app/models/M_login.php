<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
    //FUNGSI CEK SESSION MASUK, JIKA SUDAH MASUK DIRECT SESUAI USER ID DAN LEVEL
    function cek_session_masuk()
    {
        return $this->session->userdata('id_opd');
    }

    //fungsi cek level
    function cek_level()
    {
        return $this->session->userdata('level');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}