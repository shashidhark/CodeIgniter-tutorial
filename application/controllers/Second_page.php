<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second_page extends CI_Controller {

	public function index()
	{
		
		$this->load->helper('form');
		
		$this->load->view('header');
		$this->load->view('second_page');
		$this->load->view('footer');
	}
		
	public function save(){
		
		$this->load->library('form_validation');
		 
		$this->form_validation->set_rules('topic', 'Topic', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		
		$this->load->view('header');
		if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('second_page');
    }
    else
    {
				$this->load->view('no_error');
				$this->load->view('second_page');
    }
    
		$this->load->view('footer');
    
		//echo $this->input->post("topic");
		 //echo " ";
		 //echo $this->input->post("date");
	}
}
