<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
    public function __construct(){
        parent :: __construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index()
	{ 
        $data['kategori'] = $this->kategori_model->get_all_kategori();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('kategori', $data);
        $this->load->view('template/footer');
        $this->load->view('template/japa');
	}

    function tambah(){
        $this->load->view('add');
    }

    function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('notif', '<button class="btn btn-info" disabled="disabled">
            nama_kategori Sudah Di Pakai
            </button>');
            redirect(site_url('kategori'));
        }
        $this->kategori_model->add_kategori();
        $this->session->set_flashdata('notif', '<button class="btn btn-info" disabled="disabled">
            nama_kategori berhasil di tambah
            </button>');
            redirect(site_url('kategori'));
    }

    function delete($id_kategori){
        $this->load->model('kategori_model');
        $this->kategori_model->delete_kategori($id_kategori);
        redirect(site_url('kategori'));
    }
    function edit($id_kategori){
        $this->load->model('kategori_model');
        $data['kategori'] = $this->kategori_model->get_kategori_by_id($id_kategori);
        $this->load->view('ubah', $data);
    }

    function update(){
        $this->load->model('kategori_model');
        $this->kategori_model->update_kategori();
        redirect(site_url('kategori'));
    }
}
