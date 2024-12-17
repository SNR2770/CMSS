<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{ 
        $data['user'] = $this->user_model->get_all_user();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('user', $data);
        $this->load->view('template/footer');
        $this->load->view('template/japa');
	}

    function tambah(){
        $this->load->view('tambah');
    }
    
    function registrasi(){
        $this->load->view('registrasi');
    }
    
    function simpan(){
        //$this->buku_model->simpan_data();
        //return redirect('');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registrasi');
        } else {
            //echo "berhasil";
            $this->load->model('User_Model');
            $username = $this->input->post('username');
            $this->db->from('user');
            $this->db->where('username', $username);
            $cek = $this->db->get()->result_array();
            if($cek<>NULL){
                $this->session->set_flashdata('alert', '
                <div class="alert alert-danger" role="alert">
                Username sudah digunakan
                </div>
                ');
                redirect(site_url('auth'));
            }
            $this->User_Model->add_users();
            $this->session->set_flashdata('alert', '
            <div class="alert alert-info" role="alert">
            yey berhasil disimpan
            </div>
            ');
            redirect(site_url('auth'));

        }
        //var_dump($this->input->post());
    }
    function delete($id_user){
        $this->load->model('user_model');
        $this->user_model->delete_user($id_user);
        redirect(site_url('user'));
    }
    function edit($id_user){
        $this->load->model('user_model');
        $data['user'] = $this->user_model->get_user_by_id($id_user);
        $this->load->view('edit', $data);
    }

    function update(){
        $this->load->model('user_model');
        $this->user_model->update_user();
        redirect(site_url('user'));
    }
}
