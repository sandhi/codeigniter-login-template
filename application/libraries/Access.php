<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access {	
	private $CI;
	public function __construct(){
		$this->CI =& get_instance();
		
		$this->CI->load->model('users_model');

		$this->users_model =& $this->CI->users_model;
	}
	// cek login
	public function login($username,$password){
		$result = $this->users_model->get_login_info($username);
		if ($result)
		{
			$password = md5($password);
			if ($password === $result->password)
			{
				//start session
				$user = array(
					'username' => $result->username
					);
				$this->CI->session->set_userdata($user);
				return TRUE;
			}
		}
		return FALSE;
	}

	// cek apakah sudah login
	public function is_login() {
		return ($this->CI->session->userdata('username')) ? TRUE : FALSE;
	}

	//logout
	public function logout() {
		$this->CI->session->sess_destroy();
	}
}