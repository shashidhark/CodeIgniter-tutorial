<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_page extends CI_Controller {

	public function index()
	{
		$this->load->model("general_model");
		
		$details["data"] = $this->general_model->fetch_data();
			
		$this->load->view('header');
		$this->load->view('first_page', $details);
		$this->load->view('footer');
	}

}
