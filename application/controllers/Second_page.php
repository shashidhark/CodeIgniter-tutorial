<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second_page extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('second_page');
		$this->load->view('footer');
	}

}
