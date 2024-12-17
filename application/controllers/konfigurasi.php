<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfigurasi extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        //if($this->session->userdata('level')=='admin'){
          //  redirect('home');
        //}
    }
	public function index()
	{ 
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row();
        $data = array (
            'judul_halaman' => 'Halaman Konfigurasi',
            'konfigurasi'   => $konfigurasi
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('konfigurasi', $data);
        $this->load->view('template/footer');
        $this->load->view('template/japa');
	}

    function update(){
        $this->load->model('konfigurasi_model');
        $this->konfigurasi_model->update_konfigurasi();
        redirect(site_url('konfigurasi'));
    }
}