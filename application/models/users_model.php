<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	public $table	=	'users';
	public $limit	=	1;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_login_info($username) {
		$query = $this->db->get_where($this->table,array('username'=>$username),$this->limit);
		return (($query->num_rows() > 0) ? $query->row(): FALSE);
	}
}