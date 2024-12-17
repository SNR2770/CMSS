<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')!='user'){
            redirect('auth');
        }
    }

     public function add_komen()
     {
        $id_konten = $this->input->post('id_konten');
        $username = $this->input->post('username');
        $komen = $this->input->post('komen');

        $data = array(
            'id_konten' => $id_konten,  
            'username' => $username,
            'komen' => $komen,  
            'tgl' => date('Y-m-d H:i:s'), 
        );
        $this->db->insert('komentar', $data); 

        $slug = $this->get_slug_by_id($id_konten);

        redirect('welcome/artikel/'. $slug);
         
     }

     public function get_slug_by_id($id_konten){
        $this->db->from('konten');
        $this->db->where('id_konten', $id_konten);
        $konten = $this->db->get()->row();
        return $konten->slug;
     }

}