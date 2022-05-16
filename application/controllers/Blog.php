<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
		$this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('blog-view');
	}
	
	
	public function submit_new()
	{
	    $this->load->library('form_validation');
    	
        $this->blog_model->insert_entry();
        $data['title'] = 'New Blog Entry Submitted!';
        $data['message'] = 'Nothing else to see here!';
        $this->load->view('success-view', $data);
	}
}
