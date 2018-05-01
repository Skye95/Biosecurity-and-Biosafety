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
        $this->db->where('annex2.application_approved IS NULL', null, false);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_form2() 
    {
        $this->db->select('*');
        $this->db->from('annex2');
        $this->db->join('accounts', 'annex2.account_id = accounts.account_id');
        $this->db->where('annex2.application_approved', 1);
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
    
    function update_approval($id, $type, $approver_id)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 0, 'approver_id' => $approver_id );
            $this->db->where('account_id', $id);
            $this->db->update('annex2', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 1, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->update('annex2', $data);
        }
        return true;
    }
    
    function update_approval_SSBC($id, $type, $approver_id)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 1, 'approver_id' => $approver_id );
            $this->db->where('account_id', $id);
            $this->db->update('annex2', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 2, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->update('annex2', $data);
        }
        return true;
    }
    
    
}
?>