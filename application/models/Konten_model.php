<?php
class Konten_model extends CI_Model{
    public function get_all_konten(){
        $query = $this->db->get('konten');
        return $query->result();  
    }

    function add_contents($data, $table){
        $this->db->insert($table, $data);
    }
    function delete_konten($id_konten){
        $this->db->where('id_konten', $id_konten);
        $this->db->delete('konten');
    }
   function get_konten_by_id($id_konten){
    $this->db->where('id_konten',$id_konten);
    $data = $this->db->get('konten');
    return $data->row();
   }

   function update_konten() {
    $id_konten = $this->input->post('id_konten'); // Ambil id konten
    $namafoto_lama = $this->input->post('nama_foto'); // Nama file lama

    // Konfigurasi upload
    $config['upload_path'] = './tema/upload/konten/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = time() . "_" . $_FILES['foto']['name'];
    $config['overwrite'] = true;

    $this->load->library('upload', $config);

    $file_name = $namafoto_lama; // Default: gunakan foto lama

    // Proses upload jika ada file baru
    if (!empty($_FILES['foto']['name'])) {
        if ($this->upload->do_upload('foto')) {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Hapus file lama jika berhasil upload baru
            if (file_exists('./tema/upload/konten/' . $namafoto_lama)) {
                unlink('./tema/upload/konten/' . $namafoto_lama);
            }
        } else {
            // Log error upload
            echo "Upload Gagal: " . $this->upload->display_errors();
            exit;
        }
    }

    // Data yang akan diupdate
    $data = array(
        'judul' => $this->input->post('judul'),
        'id_kategori' => $this->input->post('id_kategori'),
        'keterangan' => $this->input->post('keterangan'),
        'tanggal' => $this->input->post('tanggal'),
        'foto' => $file_name, // Update dengan foto baru
        'slug' => trim(strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $this->input->post('judul'))), '-')
    );

    // Update berdasarkan id_konten
    $this->db->where('id_konten', $id_konten);
    if ($this->db->update('konten', $data)) {
        echo "Data berhasil diupdate!";
    } else {
        echo "Gagal mengupdate data!";
    }
}

}