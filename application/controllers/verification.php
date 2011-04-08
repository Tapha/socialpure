<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verification extends CI_Controller {

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
		$this->load->helper('url');
	
		$data['base_url'] = base_url();
	
		$this->load->view('login', $data);
	}
	
	public function login()
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
		
		//Get form data

		$email = $_POST['email'];

		$password = md5($_POST['password']);

		//check against the db password and email address.

		$q1 = $this->db->get_where('company', array('email' => $email));

		$query_pass = $this->db->get_where('company', array('password' => $password));

		foreach ($q1->result() as $row)
					{
						$db_email = $row->email;

						$company_id = $row->company_id;
					}

		if (!isset($db_email))

					{
						$db_email = rand().'number';
					}
		foreach ($query_pass->result() as $row)
					{
						$db_pass = $row->password;
					}

		if (!isset($db_pass))

					{
						$db_pass = rand().'number';
					}			

		if ($db_email == $email && $db_pass == $password)

			{	

				$q_user_id = $this->db->get_where('users', array('email' => $email));
				
				foreach ($q_user_id->result() as $row)
					{
						$user_id = $row->user_id;
					}

				//make user data in session

				$data_user = array(
				'email' => $email,
				'company_id' => $company_id,
				'user_id' => $user_id,
				'loggedin' => TRUE
				);	

				$this->session->set_userdata($data_user);

				$data['email'] = $this->session->userdata('email');

				//log the user in
				
				$this->load->helper('url');
	
				$data['base_url'] = base_url();

				$this->load->view('space_index', $data);
			}

		else

			{
				echo "Wrong email address or password";	
			}
			
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */