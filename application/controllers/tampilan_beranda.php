<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampilan_beranda extends CI_Controller {

    public function index() {
        //menampilkan halaman beranda
		$this->load->view('beranda');
	}
}