<?php
class caraousel_model extends CI_Model{
    function delete_caraousel($id_caraousel){
        $this->db->where('id_caraousel', $id_caraousel);
        $this->db->delete('caraousel');
    }
}