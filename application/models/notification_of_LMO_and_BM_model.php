<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification_of_LMO_and_BM_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
    # Retrieves Annex 2 form by users ID for now
	function get_form_by_id($id)
	{
		$this->db->where('account_id', $id);
        $query = $this->db->get('notificationlmobiohazardousmaterial');
		return $query->result();
	}
	
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('notificationlmobiohazardousmaterial', $data);
	}
}
?>