<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }
	public function index()
	{
		$this->load->view('home');
	}

	public function profile(){
		$this->load->helper('url');
		$this->load->view('profile');
	}
}