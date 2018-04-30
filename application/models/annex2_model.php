<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class annex2_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    
    function get_all_form() 
    {
        $this->db->select('*');
        $this->db->from('annex2');
        $this->db->join('accounts', 'annex2.account_id = accounts.account_id');
        $query = $this->db->get();
		return $query->result();
    }
	
    
	function get_form_by_id($id)
	{
		$this->db->where('account_id', $id);
        $query = $this->db->get('annex2');
		return $query->result();
	}
	
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('annex2', $data);
	}
}
?>