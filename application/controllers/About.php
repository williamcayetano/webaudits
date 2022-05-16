<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('requests_model');
		$this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('about-view');
	}
	
	public function request_contact()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('about-view');
        }
        else
        {
        	$this->requests_model->insert_contact('a');
        	$data['title'] = 'Contact Request Submitted!';
        	$data['message'] = 'We will return reach out to you within 24 hours. Be sure to check all of your email folders!';
            $this->load->view('success-view', $data);
        }
	
	}
}
