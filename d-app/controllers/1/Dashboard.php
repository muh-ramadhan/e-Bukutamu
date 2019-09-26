<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Copyright © 2019
 * Update : July, 07 2019
 * Deveploment : Muh. Ramadhan
 * Version : Beta 1.1
 * Mail : muh.ramadhan@email.com
 * Contact : +6282191272636
**/
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(FALSE); // PROFILLER UNTUK PENGEMBANGAN DAN DEBUGGING
        $this->load->model('M_login'); // LOAD MODEL LOGIN
        $this->load->model('M_view_tamu'); // LOAD MODEL MENAMPILKAN TAMU
        $this->load->model('M_isi_bukutamu'); // LOAD MODEL UNTUK MENGISI BUKUTAMU
        $this->load->library('form_validation'); // LOAD VALIDASI FORM
        $this->load->helper('url');
        $this->load->helper('tgl_indonesia');
        if($this->M_login->cek_level() != "1"){ // CEK LEVEL DATABASE DAN LEVEL YANG ADA
            redirect("login/");
        }
    }

    public function index()
    {
        $userdata = $this->session->userdata('level');
        //UNTUK $this->load->view("$userdata/dashboard")
        $data["sesi"] = $this->session->userdata('level');
        //UNTUK ?php echo "<img id='im' src='".base_url().'upload/'.$sesi.'/'.$b->image DASHBOARD
        $data["view_urutan_tamu"] = $this->M_view_tamu->daftar_tamu_1("id_tamu","desc");
        //UNTUK MELIHAT DAFTAR TAMU
        $this->load->view("$userdata/dashboard", $data);
    }


    public function bukutamu()
    {
        $userdata = $this->session->userdata('level');
        $data['keperluan'] = $this->M_isi_bukutamu->keperluan();
        $data['ditemui'] = $this->M_isi_bukutamu->ditemui();
        $data["sesi"] = $this->session->userdata('level');
        $this->load->view("$userdata/v_isi_bukutamu",$data);
    }

    public function simpan_foto_ke_folder()
    {
        // INI MENGHANCURKAN TIDURKU WKWKWKWK
        $this->output->enable_profiler(FALSE);
        $userdata = $this->session->userdata('level');
        
        // JIKA UNTUK MODE OFFLINE
        $imageData = file_get_contents('php://input');

        // JIKA UNTUK MODE ONLINE
        //$imageData=$GLOBALS['HTTP_RAW_POST_DATA'];

        $filteredData=substr($imageData, strpos($imageData, ",")+1);
        $unencodedData=base64_decode($filteredData);
        $filename = uniqid().'.jpg';

        $periksadulu = $_SERVER['DOCUMENT_ROOT']."/upload/".$userdata;
        if(!file_exists($periksadulu))
            $namafolder = date('Y')."/".date('F')."/".date('j')."/";
        $folderbaru = "upload/".$userdata."/".$namafolder;
        if(!is_dir($folderbaru)){
            mkdir($folderbaru, 0777, TRUE);
        }

        $fp = fopen(FCPATH.'/upload/'.$userdata.'/'.$namafolder.'/'.$filename, 'wb' );
        fwrite( $fp, $unencodedData);
        fclose( $fp );
        echo $filename;
    }


    public function simpan()
    {
        $userdata = $this->session->userdata('level');
        $id_tamu = $this->input->post('id_tamu', true);
        $nama = $this->input->post('nama', true);
        $instansi = $this->input->post('instansi', true);
        $alamat = $this->input->post('alamat', true);
        $nohp = $this->input->post('nohp', true);
        $email = $this->input->post('email', true);
        $keperluan = $this->input->post('keperluan', true);
        $pegawai = $this->input->post('pegawai', true);
        $saran = $this->input->post('saran', true);
        $penilaian = $this->input->post('penilaian', true);
        $status = $this->input->post('status', true);
        $jammasuk = $this->input->post('jammasuk', true);
        $tanggal = $this->input->post('tanggal', true);
        $ip = $this->input->post('ip', true);
        $foto = $this->input->post('id_p', true);

        //Fungsi Upload Foto Dari Webcam Ke Folder
        $image = $this->input->post('foto');
        $image = str_replace('data:image/jpeg;base64,','',$image);
        $image = base64_decode($image);
        $image = file_get_contents("php://input");
        $image =  $id_tamu.'.jpg';
        //file_put_contents(FCPATH.'/upload/fototamu/'.$filename,$image);
        //echo $image;

        $data = array(
            'id_tamu' => $id_tamu,
            'nama' => $nama,
            'instansi' => $instansi,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'email' => $email,
            'keperluan' => $keperluan,
            'pegawai' => $pegawai,
            'saran' => $saran,
            'penilaian' => $penilaian,
            'status' => $status,
            'jammasuk' => $jammasuk,
            'tanggal' => $tanggal,
            'ip' => $ip,
            'foto' => $foto,
        );
        $this->M_isi_bukutamu->input_data_1($data,'tbl_1');
        redirect("$userdata/dashboard");
    }

    public function app()
    {
        $userdata = $this->session->userdata('level');
        $this->load->view("$userdata/admin/v_dashboard");
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}