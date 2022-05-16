<?php

class Requests_model extends CI_Model {

	public function insert_entry()
    {
    	$this->url    = $this->input->post('url');
        $this->email_address  = $this->input->post('email');
        $now = date('Y-m-d H:i:s');
        $this->date   = $now;

        $this->db->insert('requests', $this);
        
        if ($this->db->affected_rows()) {
        	$this->send_notification('new audit request', $this->email_address, $this->url);
        }
    }
    
    public function insert_contact($page)
    {
        $this->email_address  = $this->input->post('email');
        $this->message    = $this->input->post('message');
        $now = date('Y-m-d H:i:s');
        $this->date   = $now;
        $this->page = $page;

        $this->db->insert('contacts', $this);
        
        if ($this->db->affected_rows()) {
        	if (strcmp($page, 'w') == 0) {
        		$this->send_notification('new website request', $this->email_address, $this->message);
        	} else {
        		$this->send_notification('about request', $this->email_address, $this->message);
        	}
        }
    }
    
    private function send_email($type, $email_address, $message) {
    	/*echo 'Type: ' . $type . ' Email: ' . $email . ' Message ' . $message;
    	exit;*/
    	$this->load->library('email');

		$this->email->from($email_address);
		$this->email->to('william@freewebaudits.com');

		$this->email->subject($type);
		$this->email->message($message);

		$this->email->send();
    }
    
    private function send_notification($type, $email_address, $message) {
    	
    	$params= array(
           "type" 	  => $type,
           "email" 	  => $email_address,
           "message" => $message
        );
        
		$url = 'https://hook.integromat.com/igs3vkudy9itz2a6m0l0j427ikx35mbm';
		
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); 
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);    

        $output=curl_exec($ch);

        curl_close($ch);
    }

}
