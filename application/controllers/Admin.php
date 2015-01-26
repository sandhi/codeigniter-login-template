<?php
	class Admin extends Member_Controller{
		public function index(){
			$this->load->helper('form');
			$data = array(
					'username' => $this->session->userdata('username')
				);
			
			$this->load->view('admin',$data);
		}
	}