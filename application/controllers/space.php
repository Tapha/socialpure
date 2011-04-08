<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Space extends CI_Controller {

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
	
		$this->load->view('space_index', $data);
	}
	
	public function submit()
	{
		
	
		$this->load->helper('url');
	
		$data['base_url'] = base_url();
	
		$this->load->view('submit', $data);
	}
	
	public function submitted_idea()
	{
	
		$this->load->database();
	
		$company_id = $this->session->userdata('company_id');
		
		$user_id = $this->session->userdata('user_id');
	
		$title = $_POST['title'];
		
		$url = $_POST['url'];
		
		$text = $_POST['text'];
	
		$insert = array(
		'company_id' => $company_id,
		'user_id' => $user_id,
		'title' => $title,
		'url' => $url,
		'text' => $text
		);
		$this->db->insert('ideas', $insert);
	
		$this->load->helper('url');
	
		$data['base_url'] = base_url();
	
		$this->load->view('new', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */