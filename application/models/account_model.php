<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_account($email, $pass)
	{
		$this->db->where('account_email', $email);
		$this->db->where('account_password', $pass);
        $this->db->where('account_approved', 1);
        $query = $this->db->get('accounts');
		return $query->result();
	}
	
	# Retrieves Account by ID
	function get_account_by_id($id)
	{
		$this->db->where('account_id', $id);
        $query = $this->db->get('accounts');
		return $query->result();
	}
	
	# Insert New Account
	function insert_new_account($data)
    {
		return $this->db->insert('accounts', $data);
	}
}
?>