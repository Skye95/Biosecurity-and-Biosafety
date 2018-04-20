<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class annex2_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('annex2', $data);
	}
}
?>