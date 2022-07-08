<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampilan_contact extends CI_Controller {
 
	function __construct(){
		parent::__construct();


		$this->load->helper(array('url'));
    }

	public function index(){
        //menampilkan halaman about
		$this->load->view('contact');
	}
}