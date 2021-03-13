<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller {

	
	Public function index()
	{
		    if (!$this->ion_auth->logged_in())
			    {
			      redirect('auth/login');
			    }
			else
				{
				  $data['menu'] = $this->db->query("Select * from menu")->result_array();
				  $this->load->view('basket',$data);
				}
		
	}
	
	
	
	
	
}