<?php
class kategori_model extends CI_Model{
    public function get_all_kategori(){
        $query = $this->db->get('kategori');
        return $query->result();  
    }

    function add_kategori(){
        $this->db->insert('kategori', $this->input->post());
    }
    function delete_kategori($id_kategori){
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }
   function get_kategori_by_id($id_kategori){
    $this->db->where('id_kategori',$id_kategori);
    $data = $this->db->get('kategori');
    return $data->row();
   }
   function update_kategori(){
    $data = array (
        'nama_kategori' => $this->input->post('nama_kategori')
    );
    $this->db->where('id_kategori',$this->input->post('id_kategori'));
    $this->db->update('kategori', $data);
   }
}