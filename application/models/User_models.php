<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_models extends CI_Model
{
	public function getAllUsers()
	{
		return $this->db->get('user')->result_array();
	}

	public function countUsers()
	{
		return $this->db->get('user')->num_rows();
	}
}