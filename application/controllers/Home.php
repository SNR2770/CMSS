<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {  
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('index1');
        $this->load->view('template/footer');
        $this->load->view('template/Japa');
	}
}
