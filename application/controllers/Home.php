<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->helper('form');
			if ($this->access->is_login())
			{
				redirect(base_url('admin'));
			}
			else
			{
				$this->load->view('home');
			}
		}
	}