<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class minorincident_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('incidentaccidentreport_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_minor'] = $this->incidentaccidentreport_model->get_all_incident1_form();
        $data['all_minor_SSBC'] = $this->incidentaccidentreport_model->get_all_incident1_form2();
        
        $this->load->template('minorincident_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Forms
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval($id, 1, $approver_id);
        
        redirect('minorincident_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval($id, 0, $approver_id);
        
        redirect('minorincident_approval/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('minorincident_approval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('minorincident_approval/index');
    }
    
    
    
    
}

?>