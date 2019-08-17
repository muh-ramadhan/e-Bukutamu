<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright © 2019
 * Update : July, 07 2019
 * Deveploment : Muh. Ramadhan
 * Version : Beta 1.1
 * Mail : muh.ramadhan@email.com
 * Contact : +6282191272636
 */
class M_isi_bukutamu extends CI_Model{

/**
 * MODEL ISI BUKUTAMU OPD 1
 */
	function input_data_1($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function keperluan(){
       $this->db->select('*');
       $this->db->from('keperluan_css');
       $data = $this->db->get();
       return $data->result();
     }

     public function ditemui(){
       $this->db->select('*');
       $this->db->from('ditemui_css');
       $data = $this->db->get();
       return $data->result();
     }

/**
 * MODEL ISI BUKUTAMU OPD 2
 */
	function input_data_2($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 3
 */
	function input_data_3($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 4
 */
	function input_data_4($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 5
 */
	function input_data_5($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 6
 */
	function input_data_6($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 7
 */
	function input_data_7($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 8
 */
	function input_data_8($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 9
 */
	function input_data_9($data,$table)
	{
		$this->db->insert($table,$data);
	}

/**
 * MODEL ISI BUKUTAMU OPD 10
 */
	function input_data_10($data,$table)
	{
		$this->db->insert($table,$data);
	}

}