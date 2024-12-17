<?php
class user_model extends CI_Model{
    public function get_all_user(){
        $query = $this->db->get('user');
        return $query->result();  
    }

    function add_users(){
        $this->db->insert('user', $this->input->post());
    }

    function delete_user($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
   function get_user_by_id($id_user){
    $this->db->where('id_user',$id_user);
    $data = $this->db->get('user');
    return $data->row();
   }
   function update_user(){
    $data = array (
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'), 
        'password' => $this->input->post('password'),
        'level' => $this->input->post('level')

    );
    $this->db->where('id_user',$this->input->post('id_user'));
    $this->db->update('user', $data);
   }
}