<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class caraousel extends CI_Controller {
    
public function __construct(){
        parent:: __construct();
        
    }
    public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        
        $data = array(
            'caraousel' => $caraousel,
        );
       //$data['caraousel'] = $this->caraousel_model->get_all_caraousel();
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('caraousel', $data);
        $this->load->view('template/japa');
   }

    function tambah(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $data = array(
         'judul_halaman' => 'Halaman Caraousel',
            'caraousel' => $caraousel
            
        );

        $this->load->view('template/header');
        $this->load->view('add_caraousel', $data);
        $this->load->view('template/japa');
    }

    function simpan(){
        $judul = $this->input->post('judul');
       
        $foto = $_FILES['foto']['name'];
        if ($foto = ''){}else{
            $namafoto = date('YmdHis').'.jpg';
            $config ['upload_path'] = 'tema/upload/caraousel/';
            $config ['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $namafoto;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Gambar gagal diupload";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul' => $judul,
            'id_caraousel' => $id_caraousel,
            'foto' => $foto
        );
        
        $this->db->insert('caraousel', $data);
        //$this->caraousel_model->add_caraousel($data, 'caraousel');
        redirect('caraousel');
       // $this->db->insert('caraousel',$data);
        //redirect('caraousel');
    }

    function hapus($id_caraousel){
        $this->load->model('caraousel_model');
        $this->caraousel_model->delete_caraousel($id_caraousel);
        redirect(site_url('caraousel'));
    }


    function edit($id_caraousel){
        $this->load->model('caraousel_model');
        $data['caraousel'] = $this->caraousel_model->get_caraousel_by_id($id_kcaraousel);
        $this->load->view('edit_caraousel', $data);
    }
    function update(){
        $this->caraousel_model->update_caraousel();
        redirect(site_url('caraousel'));
    }
    
    }