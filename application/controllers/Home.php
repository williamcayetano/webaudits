<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('requests_model');
		$this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('home-view');
	}
	
	public function regex_check($str)
	{
    	if (!preg_match("#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#iS", $str))
    	{
        	$this->form_validation->set_message('regex_check', 'The %s is not valid!');
        	return FALSE;
    	}
    	else
    	{
        	return TRUE;
    	}
	}
	
	public function request_audit()
	{
	    $this->load->library('form_validation');
	    
	    $this->form_validation->set_rules('url', 'Website URL', 'required');
    	$this->form_validation->set_rules('email', 'Email', array('required','valid_email'));
    	
    	if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('home-view');
        }
        else
        {
        	$this->requests_model->insert_entry();
        	$data['title'] = 'Audit Request Submitted!';
        	$data['message'] = 'We will return with your audit within 24 hours. Be sure to check all of your email folders!';
            $this->load->view('success-view', $data);
        }
	}
}
