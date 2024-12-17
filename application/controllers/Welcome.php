<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfigurasi = $this->db->get()->row();
	
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
	
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
	
		$konten = $this->db->get()->result_array();
	
		$data = array(
			'judul' => "Beranda",
			'konfigurasi' => $konfigurasi,
			'kategori' => $kategori,
			'konten' => $konten,
		);
	
		$this->load->view('beranda', $data);
	}
	
	
		function kategori($id){
			$this->db->from('konfigurasi');
			$konfigurasi = $this->db->get()->row();
			
			$this->db->from('kategori');
			$kategori = $this->db->get()->result_array();
			
			$this->db->from('kategori');
			$this->db->where('id_kategori', $id);
			$nama_kategori = $this->db->get()->row()->nama_kategori;
	
			$this->db->from('konten a');
			$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
			$this->db->join('user c', 'a.username=c.username', 'left');
			$this->db->where('a.id_kategori', $id);
			$konten = $this->db->get()->result_array();
	
			$data = array(
				'judul' => $nama_kategori."Beranda",
				'nama_kategori' => $nama_kategori,
				'konfigurasi' => $konfigurasi,
				'kategori' => $kategori,
				'konten' => $konten,
			);
	
			$this->load->view('kategori_index', $data);
		}
		
		function artikel($id){
			$this->db->from('konfigurasi');
			$konfigurasi = $this->db->get()->row();
			
			$this->db->from('kategori');
			$kategori = $this->db->get()->result_array();
			
			$this->db->from('konten a');
			$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
			$this->db->join('user c', 'a.username=c.username', 'left');
			$this->db->where('slug', $id);
			$konten = $this->db->get()->row();
	
			$this->db->from('komentar');
			$this->db->where('id_konten', $konten->id_konten);
			$komen = $this->db->get()->result_array();
			$data = array(
				'judul' => $konten->judul . " - Detail",
				'konfigurasi' => $konfigurasi,
				'kategori' => $kategori,
				'konten' => $konten,
				'komen' => $komen
			);
	
			$this->load->view('detail', $data);
		}
	
		public function search()
		{
			$search_query = $this->input->get('search');
	
			if (!$search_query) {
				redirect(base_url());
			}
	
			$this->db->from('konfigurasi');
			$konfigurasi = $this->db->get()->row();
	
			$this->db->from('kategori');
			$kategori = $this->db->get()->result_array();
	
			$this->db->from('konten a');
			$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
			$this->db->join('user c', 'a.username=c.username', 'left');
			
			$this->db->like('a.judul', $search_query);
	
			$konten = $this->db->get()->result_array();
			$data = array(
				'judul' => "Search Results", 
				'konfigurasi' => $konfigurasi,
				'kategori' => $kategori,
				'konten' => $konten,
				'search_query' => $search_query,
			);
	
			$this->load->view('beranda', $data);
		}
}
