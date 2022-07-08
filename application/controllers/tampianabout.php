<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampilanabout extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('tampilanabout');
	}

	public function index()
	{
        //menampilkan halaman about
		$this->load->view('about');
	}
}
