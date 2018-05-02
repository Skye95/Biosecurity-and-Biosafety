<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class annex5_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
    
	function get_form_by_id($id)
	{
		$this->db->where('application_id', $id);
        $query = $this->db->get('annex5');
		return $query->result();
	}
	
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('annex5', $data);
	}
}
?>