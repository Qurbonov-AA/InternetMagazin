<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	Public function index()
	{
		 
				  $data['menu'] = $this->db->query("Select * from menu")->result_array();
				  $this->load->view('welcome_message',$data);
				
		
	}

	Public function Admin()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())		
			    {
			      redirect('auth/login');
			    }
		else
				{					
					$data['get_kat'] = $this->db->query("SELECT g.t_name , b.count*b.price  as all_summ, b.dates, b.price FROM `basket` b , goods g
                       WHERE g.id = b.id_good
                       group by g.id")->result_array();
					$this->load->view('admin/admin',$data);					
				}
	}
}
