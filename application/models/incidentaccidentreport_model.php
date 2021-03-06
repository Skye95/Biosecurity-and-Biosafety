<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class incidentaccidentreport_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    
    function get_all_edit_request() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.editable', 1);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident1_form() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved IS NULL', null, false);
        $this->db->where('incidentaccidentreport.application_type', 1);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident1_form2() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved', 1);
        $this->db->where('incidentaccidentreport.application_type', 1);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident2_form() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved IS NULL', null, false);
        $this->db->where('incidentaccidentreport.application_type', 2);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident2_form2() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved', 1);
        $this->db->where('incidentaccidentreport.application_type', 2);
        $query = $this->db->get();
		return $query->result();
    }
    
    
    function get_all_incident3_form() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved IS NULL', null, false);
        $this->db->where('incidentaccidentreport.application_type', 3);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident3_form2() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved', 1);
        $this->db->where('incidentaccidentreport.application_type', 3);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident3_form3() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved', 2);
        $this->db->where('incidentaccidentreport.application_type', 3);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident4_form() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved IS NULL', null, false);
        $this->db->where('incidentaccidentreport.application_type', 4);
        $query = $this->db->get();
		return $query->result();
    }
    
    function get_all_incident4_form2() 
    {
        $this->db->select('*');
        $this->db->from('incidentaccidentreport');
        $this->db->join('accounts', 'incidentaccidentreport.account_id = accounts.account_id');
        $this->db->where('incidentaccidentreport.application_approved', 1);
        $this->db->where('incidentaccidentreport.application_type', 4);
        $query = $this->db->get();
		return $query->result();
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
    
    function update_applicant_data($id, $data)
    {
        $this->db->set('application_approved', 'NULL', FALSE);
        $this->db->where('application_id', $id);
		$this->db->update('incidentaccidentreport', $data);
        return true;
	}
    
    function update_approval($id, $type, $approver_id, $appid)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 3);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 1, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        }
        return true;
    }
    
    function update_approval_SSBC($id, $type, $approver_id, $appid)
    {
        if ($type == 0) {
            
            $data = array('application_approved' => 3);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        } elseif ($type == 1) {
            $data = array('application_approved' => 2, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        }
        return true;
    }
    
    
    function edit_request($id){
        
        $data = array('editable' => 1);
        $this->db->where('application_id', $id);
        $this->db->update('incidentaccidentreport', $data);
        
        return true;
            
    }
    
    function update_editable($id, $type, $approver_id, $appid)
    {
        if ($type == 0) {
            
            $data = array('editable' => 3);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        } elseif ($type == 1) {
            $data = array('editable' => 2, 'approver_id' => $approver_id);
            $this->db->where('account_id', $id);
            $this->db->where('application_id', $appid);
            $this->db->update('incidentaccidentreport', $data);
        }
        return true;
        
    }
    
    
}
?>