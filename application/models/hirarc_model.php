<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hirarc_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
    function get_all_form() 
    {
        $this->db->select('*');
        $this->db->from('hirarc');
        $this->db->join('accounts', 'hirarc.account_id = accounts.account_id');
        $this->db->where('hirarc.application_approved IS NULL', null, false);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_form2() 
    {
        $this->db->select('*');
        $this->db->from('hirarc');
        $this->db->join('accounts', 'hirarc.account_id = accounts.account_id');
        $this->db->where('hirarc.application_approved', 1);
        $query = $this->db->get();
		return $query->result();
    }
    
    # Retrieves Annex 2 form by users ID for now
	function get_form_by_id($id)
	{
		$this->db->where('account_id', $id);
        $query = $this->db->get('hirarc');
		return $query->result();
	}
	
	# Insert New Account
	function insert_new_applicant_data($data)
    {
		return $this->db->insert('hirarc', $data);
	}
    
    function update_approval($id, $type, $approver_id)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 3, 'approver_id' => $approver_id );
            $this->db->where('account_id', $id);
            $this->db->update('hirarc', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 1, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->update('hirarc', $data);
        }
        return true;
    }
    
    function update_approval_SSBC($id, $type, $approver_id)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 3, 'approver_id' => $approver_id );
            $this->db->where('account_id', $id);
            $this->db->update('hirarc', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 2, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->update('hirarc', $data);
        }
        return true;
    }
    
    
    
}
?>