<?php
class auth extends CI_Controller{
    public function index(){
        $this->load->view('template/header');
        //$this->load->view('template/sidebar');
		$this->load->view('form_login');
        //$this->load->view('template/footer');
        $this->load->view('template/japa');
    }
    
    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $this->db->from('user')->where('username', $username);
        $user = $this->db->get()->row();
    
        if ($user == NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-info" role="alert"> Username tidak ada </div>');
            redirect('auth');
        } else if ($user->password == $password) {
            $data = array(
                'username' => $user->username,
                'nama'     => $user->nama,
                'level'    => $user->level,
                'id_user'  => $user->id_user,
            );
            $this->session->set_userdata($data);
            if ($user->level == 'admin') {
                redirect('home'); 
            } else {
                redirect('welcome'); 
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-info" role="alert"> Password salah </div>');
            redirect('auth');
        }
    }
    
    
    public function logout(){
        $this->session->sess_destroy();
        redirect ('welcome');
    }
}