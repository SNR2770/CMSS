<?php
class konfigurasi_model extends CI_Model{
   function update_konfigurasi(){
    $data = array (
        'judul_website' => $this->input->post('judul_website'),
        'profil_website' => $this->input->post('profil_website'),
        'instagram' => $this->input->post('instagram'),
        'threads' => $this->input->post('threads'),
        'email' => $this->input->post('email'),
        'alamat'=> $this->input->post('alamat'),
        'no_wa' => $this->input->post('no_wa')
    );
    $this->db->update('konfigurasi', $data);
   }
}