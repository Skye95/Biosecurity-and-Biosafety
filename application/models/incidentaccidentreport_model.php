<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class incidentaccidentreport_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_form_by_id($id)
	{
		$this->db->where('application_id', $id);
        $query = $this->db->get('incidentaccidentreport');
		return $query->result();
	}
	
    function get_form_by_account_id($id)
	{
		$this->db->where('account_id', $id);
        $query = $this->db->get('incidentaccidentreport');
		return $query->result();
	}
    
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('incidentaccidentreport', $data);
	}
}
?>