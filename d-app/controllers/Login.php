<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Copyright © 2019
 * Update : July, 07 2019
 * Deveploment : Muh. Ramadhan
 * Version : Beta 1.1
 * Mail : muh.ramadhan@email.com
 * Contact : +6282191272636
 */
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE); // PROFILLER UNTUK PENGEMBANGAN DAN DEBUGGING
        $this->load->library('form_validation');
        $this->load->model('M_login');
    }
    public function index()
    {
    	$userdata = $this->session->userdata('level');
        if ($this->M_login->cek_session_masuk())
        {
            redirect("$userdata/dashboard");
        } else {
            $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required');
            $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'required');
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');
            if ($this->form_validation->run() == TRUE) {
                $nama_pengguna = $this->input->post("nama_pengguna", TRUE);
                $kata_sandi = MD5($this->input->post('kata_sandi', TRUE));
                $checking = $this->M_login->check_login('tbl_users', array('nama_pengguna' => $nama_pengguna), array('kata_sandi' => $kata_sandi));
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'id_opd'   => $apps->id_opd,
                            'nama_pengguna' => $apps->nama_pengguna,
                            'kata_sandi' => $apps->kata_sandi,
                            'nama_opd' => $apps->nama_opd,
                            'level'      => $apps->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level
                        if ($this->session->userdata("level") == "1"){
                            redirect('1/dashboard/');
                        } else if ($this->session->userdata("level") == "2"){
                            redirect('2/dashboard/');
                        } else if ($this->session->userdata("level") == "3"){
                            redirect('3/dashboard/');
                        } else if ($this->session->userdata("level") == "4"){
                            redirect('4/dashboard/');
                        } else if ($this->session->userdata("level") == "5"){
                            redirect('5/dashboard/');
                        } else if ($this->session->userdata("level") == "6"){
                            redirect('6/dashboard/');
                        } else if ($this->session->userdata("level") == "7"){
                            redirect('7/dashboard/');
                        } else if ($this->session->userdata("level") == "8"){
                            redirect('8/dashboard/');
                        } else if ($this->session->userdata("level") == "9"){
                            redirect('9/dashboard/');
                        } else if ($this->session->userdata("level") == "10"){
                            redirect('10/dashboard/');
                        }
                    }
                } else {

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Nama Pengguna atau Kata Sandi salah!</div></div>';
                    $this->load->view('login', $data);
                }
            } else {
                $this->load->view('login');
            }
        }
    }
}