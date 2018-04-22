<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class annex5_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	
	# Insert New Account
	function insert_annex5_data($data)
    {
		return $this->db->insert('annex5', $data);
	}
}
?>