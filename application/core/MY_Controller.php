<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
}

class Member_Controller extends MY_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->is_login())
		{
			redirect(base_url());
		}
	}

	public function is_login() {
		return $this->access->is_login();
	}
}
