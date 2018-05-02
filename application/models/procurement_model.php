<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class procurement_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
    
    function get_all_form() 
    {
        $this->db->select('*');
        $this->db->from('materialriskassessment');
        $this->db->join('accounts', 'materialriskassessment.account_id = accounts.account_id');
        $this->db->where('materialriskassessment.application_approved IS NULL', null, false);
        $query = $this->db->get();
		return $query->result();
    }
    
	function get_form_by_id($id)
	{
		$this->db->where('application_id', $id);
        $query = $this->db->get('materialriskassessment');
		return $query->result();
	}
	
	
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('materialriskassessment', $data);
	}
    
    
    function update_approval($id, $type, $approver_id)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 3, 'approver_id' => $approver_id );
            $this->db->where('account_id', $id);
            $this->db->update('materialriskassessment', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 1, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->update('materialriskassessment', $data);
        }
        return true;
    }
    
}
?>