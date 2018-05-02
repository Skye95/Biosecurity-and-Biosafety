<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pc2_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
    
	function get_form_by_id($id)
	{
		$this->db->where('application_id', $id);
        $query = $this->db->get('pc2');
		return $query->result();
	}
	
	
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('pc2', $data);
	}
}
?>