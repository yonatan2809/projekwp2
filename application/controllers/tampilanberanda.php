<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampilanberanda extends CI_Controller {

    public function index()
	{
        //menampilkan halaman beranda
		$this->load->view('index/beranda');
	}
}