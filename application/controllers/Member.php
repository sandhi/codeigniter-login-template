<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->lang->load('form_validation');
	}

	public function index()
	{
		$this->access->logout();
		$this->login();
	}

	public function check_login($password)
	{
		$username = $this->input->post('username');

		$login = $this->access->login($username,$password);
		if ($login) {
			return TRUE;
		} else {
			$this->form_validation->set_message('check_login','Username atau Password yang anda masukkan salah');
			return FALSE;
		}
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|strip_tags');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_login');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

		if ($this->form_validation->run() == TRUE)
		{
				redirect(base_url('admin'),'refresh');
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url());
		} 
	}

	public function logout()
	{
		$this->access->logout();
		redirect('member/login');
	}

	
}