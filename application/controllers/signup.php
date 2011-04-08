<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$false = $this->session->userdata('loggedin');

		if ((isset($false)) && ($false == TRUE))
		{
			$this->load->helper('url');
	
			$data['base_url'] = base_url();
			
			$this->load->view('space_index', $data);
		}	
		else

		{
	
		$this->load->helper('url');
	
		$data['base_url'] = base_url();
	
		$this->load->view('signup', $data);
		
		}
	}
	
	public function company()
	{
		
		$false = $this->session->userdata('loggedin');

		if ((isset($false)) && ($false == TRUE))
		{
			$this->load->helper('url');
	
			$data['base_url'] = base_url();
			
			$this->load->view('space_index', $data);
		}	
		else

		{
	
		$this->load->database();
	
		$company_name = $_POST['company']; 
		
		$first_name = $_POST['first_name'];
		
		$last_name = $_POST['last_name'];
		
		$email = $_POST['email'];
		
		$password = md5($_POST['password']);  
		
		//Insert into db
		
		$insert = array(
		'company' => $company_name,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'password' => $password	
		);
		$this->db->insert('company', $insert);
		
		//Insert Admin into users db also
		
		$q1 = $this->db->get_where('company', array('email' => $email));
		
		foreach ($q1->result() as $row)
					{
						$company_id = $row->company_id;
					}
					
		$insert2 = array(
		'company_id' => $company_id,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'password' => $password,
		'is_admin' => 1	
		);
		$this->db->insert('users', $insert2);			
		
		//Make subpage for company.
		
		//socialpure/company, then show create account for users their
		
		$this->load->helper('url');
	
		$data['base_url'] = base_url();
		
		$this->load->view('success', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */