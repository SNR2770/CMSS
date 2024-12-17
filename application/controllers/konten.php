<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konten extends CI_Controller {
    
public function __construct(){
        parent:: __construct();
        
    }
    public function index(){
       // $this->db->from('kategori');
       // $this->db->order_by('nama_kategori', 'ASC');
       // $kategori = $this->db->get()->result_array();
       $data['conten'] = $this->Konten_model->get_all_konten();
     // $this->db->from('konten');
     // $this->db->join('kategori b', 'a.id')

      //  $data = array(
        //    'kategori' => $kategori,
          //  'konten' => $konten
        //);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('konten', $data);
        $this->load->view('template/japa');
   }

    function tambah(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();

        $data = array(
         'judul_halaman' => 'Halaman Tambah Konten',
            'kategori' => $kategori
            
        );

        $this->load->view('template/header');
        $this->load->view('add_konten', $data);
        $this->load->view('template/japa');
    }

    function simpan(){
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $id_kategori = $this->input->post('id_kategori');
        $tanggal = $this->input->post('tanggal');
        $foto = $_FILES['foto']['name'];
        if ($foto = ''){}else{
            $namafoto = date('YmdHis').'.jpg';
            $config ['upload_path'] = 'tema/upload/konten/';
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
            'id_kategori' => $id_kategori,
            'keterangan' => $keterangan,
            'tanggal' => $tanggal,
            'foto' => $foto,
            'slug' => strtolower(preg_replace('/[^a-zA-Z0-9äöüß]+/', '-', $this->input->post('judul'))),
        );
        
        $this->db->insert('konten', $data);
        //$this->Konten_model->add_contents($data, 'konten');
        redirect('konten');
       // $this->db->insert('kontenn',$data);
        //redirect('konten');
        
    }

    function hapus($id_konten){
        $this->load->model('Konten_model');
        $this->Konten_model->delete_konten($id_konten);
        redirect(site_url('konten'));
    }


    function edit($id_konten){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();

        $data = array(
         'judul_halaman' => 'Halaman Tambah Konten',
            'kategori' => $kategori
            
        );
        $this->load->model('Konten_model');
        $data['konten'] = $this->Konten_model->get_konten_by_id($id_konten);
        $this->load->view('edit_konten', $data);
    }
    function update(){

        $this->Konten_model->update_konten();
        redirect(site_url('konten'));
    }
    
    }