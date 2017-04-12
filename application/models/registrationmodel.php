<?php
class Registrationmodel extends CI_Model
{
	
	public function user_registration($firstname, $lastname, $username, $password)
	{	
		$this->db->set('firstname',$firstname);
		$this->db->set('lastname',$lastname);
		$this->db->set('username',$username);
		$this->db->set('password',$password);
		$this->db->insert('users');
		return TRUE;
	}
}