<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Copyright © 2019
 * Update : July, 07 2019
 * Deveploment : Muh. Ramadhan
 * Version : Beta 1.1
 * Mail : muh.ramadhan@email.com
 * Contact : +6282191272636
 */
class M_view_tamu extends CI_Model
{
    /**
     * MODEL OPD 1
     */
    private $_tabel_1 = "tbl_1";

    public function daftar_tamu_1($order,$by){
            $this->db->from($this->_tabel_1);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }
public function kostum ()
        {
            $sql="SELECT * FROM opd order by id_opd limit 1";
            $hslquery=$this->db->query($sql);
            return $hslquery;
        }
    /**
     * MODEL OPD 2
     */
    private $_tabel_2 = "tbl_2";

    public function daftar_tamu_2($order,$by){
            $this->db->from($this->_tabel_2);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 3
     */
    private $_tabel_3 = "tbl_3";

    public function daftar_tamu_3($order,$by){
            $this->db->from($this->_tabel_3);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 4
     */
    private $_tabel_4 = "tbl_4";

    public function daftar_tamu_4($order,$by){
            $this->db->from($this->_tabel_4);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 5
     */
    private $_tabel_5 = "tbl_5";

    public function daftar_tamu_5($order,$by){
            $this->db->from($this->_tabel_5);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 6
     */
    private $_tabel_6 = "tbl_6";

    public function daftar_tamu_6($order,$by){
            $this->db->from($this->_tabel_6);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 7
     */
    private $_tabel_7 = "tbl_7";

    public function daftar_tamu_7($order,$by){
            $this->db->from($this->_tabel_7);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 8
     */
    private $_tabel_8 = "tbl_8";

    public function daftar_tamu_8($order,$by){
            $this->db->from($this->_tabel_8);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 9
     */
    private $_tabel_9 = "tbl_9";

    public function daftar_tamu_9($order,$by){
            $this->db->from($this->_tabel_9);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }

    /**
     * MODEL OPD 10
     */
    private $_tabel_10 = "tbl_10";

    public function daftar_tamu_10($order,$by){
            $this->db->from($this->_tabel_10);
            $this->db->order_by($order,$by);
            $query = $this->db->get();
            return $query->result();
    }
}
