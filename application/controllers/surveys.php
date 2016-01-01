<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surveys extends CI_Controller {
	public function index()
	{
		$this->load->view('form');
	}
	public function process_form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "name", "required|trim|xss_clean");
		$this->form_validation->set_rules("comment", "comment", "xss_clean");
		// if validation errors exist, send user back to form else send user to result page. 
		if($this->form_validation->run() === FALSE){
			$this->session->set_userdata('error', form_error('name'));
			redirect('/');
		} else {
			$this->session->unset_userdata('error');
			$this->session->set_userdata('name', $this->input->post('name', true));
			$this->session->set_userdata('location', $this->input->post('location'));
			$this->session->set_userdata('language', $this->input->post('language'));
			$this->session->set_userdata('comment', $this->input->post('comment',true));
			// set counter to display number of times current user submits the form 
			if($this->session->userdata('counter'))
			{
				$counter = $this->session->userdata('counter');
				$this->session->set_userdata('counter', $counter + 1); 
			} 
			else 
			{
				$this->session->set_userdata('counter', 1);
			}
			redirect('result');
		}
	}
	public function result()
	{
		$this->load->view('result');
	}
}