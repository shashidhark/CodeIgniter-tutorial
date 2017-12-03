<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second_page extends CI_Controller {

	public function __construct()
  {
                parent::__construct();
                
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('general_model');
  }

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('second_page');
		$this->load->view('footer');
		unset($_SESSION["validation"]);
	}
		
	public function save(){
		
		 
		$this->form_validation->set_rules('topic', 'Topic', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		
		$this->load->view('header');
		if ($this->form_validation->run() == FALSE)
		{
		    $this->session->set_userdata("validation", "fail");
		    $this->load->view('second_page');
		}
		else
		{
				//Model -> add
				
				$data = array(
					"title" => $this->input->post("topic"),
					"deadline" => $this->input->post("date")
				);
				$this->general_model->add($data);
				
		    $this->session->set_userdata("validation", "pass");
		    //$this->load->view('no_error');
		    $this->load->view('second_page');
		}
    
		$this->load->view('footer');
	}
}
