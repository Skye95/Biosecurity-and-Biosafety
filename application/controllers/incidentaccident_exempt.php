<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class incidentaccident_exempt extends CI_Controller {
    
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
        $data['all_exemptincident'] = $this->incidentaccidentreport_model->get_all_incident4_form();
        $data['all_exemptincident_SSBC'] = $this->incidentaccidentreport_model->get_all_incident4_form2();
        
        $this->load->template('incidentaccident_exempt_view', $data);
	}
    
    
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval($id, 1, $approver_id);
        
        $this->notification_model->insert_new_notification(null, 3, "Minor Biological Incident/Accident Report Form Approved", "BSO has approved a Minor Biological Incident/Accident Form.");
        
        redirect('incidentaccident_exempt/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval($id, 0, $approver_id);
        
        //No need to inform by email just continue with investigation
        
        redirect('incidentaccident_exempt/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 1, $approver_id);
        
        //Send email to victim or witnesses investigation outcomes
        
        redirect('incidentaccident_exempt/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('incidentaccident_exempt/index');
    }
    
    
    
    
}

?>