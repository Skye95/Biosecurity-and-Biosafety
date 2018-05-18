<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class annualreport_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('annualfinalreport_model');
        $this->load->model('hirarc_model');
        $this->load->model('swp_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_annual'] = $this->annualfinalreport_model->get_all_form();
        $data['all_annual_SSBC'] = $this->annualfinalreport_model->get_all_form2();
        $data['all_annual_Chair'] = $this->annualfinalreport_model->get_all_form3();
    
        $data['all_hirarc'] = $this->hirarc_model->get_all_hirarc4_form();
        $data['all_hirarc_SSBC'] = $this->hirarc_model->get_all_hirarc4_form2();
        $data['all_hirarc_Chair'] = $this->hirarc_model->get_all_hirarc4_form3();
        
        $data['all_swp'] = $this->swp_model->get_all_swp4_form();
        $data['all_swp_SSBC'] = $this->swp_model->get_all_swp4_form2();
        $data['all_swp_Chair'] = $this->swp_model->get_all_swp4_form3();
        
        
        $this->load->template('annualreport_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Forms
    /*public function proceed($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->proceed_ammend($id, 1, $approver_id);
        
    }*/
    
    public function ammend($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->proceed_ammend($id, 0, $approver_id);
        
        //Send email to Applicant notify them that their application has been rejected
        
        redirect('annualreport_approval/index');
    }
    
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval($id, 1, $approver_id);
        
        //Notify SSBC Members That BSO Has Approved A Form
        $this->notification_model->insert_new_notification(null, 3, "Annual Final Report Form Application Approved", "BSO has approved an Annual Final Report Form Application that requires additional input. ");
        
        redirect('annualreport_approval/index');
    }
    
    public function approve_BSO($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval_BSO($id, 1, $approver_id);
        
        //Send email to Applicant notify them that their application has been fully approved
        
        redirect('annualreport_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval($id, 0, $approver_id);
        
        //Send email to Applicant notify them that their application has been rejected
        
        redirect('annualreport_approval/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval_SSBC($id, 1, $approver_id);
        
        //Notify SSBC Chair That SSBC members Have Approved a Form
        $this->notification_model->insert_new_notification(null, 2, "Annual Final Report Form Application Approved", "SSBC Members have approved an Annual Final Report Form Application. ");
        
        redirect('annualreport_approval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval_SSBC($id, 0, $approver_id);
        
        //Send email to Applicant notify them that their application has been fully rejected
        
        redirect('annualreport_approval/index');
    }
    
    public function approve3($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval_Chair($id, 1, $approver_id);
        
        //Send email to Applicant notify them that their application has been fully approved
        
        redirect('annualreport_approval/index');
    }
    
    public function reject3($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval_Chair($id, 0, $approver_id);
        
        //Send email to Applicant notify them that their application has been fully rejected
        
        redirect('annualreport_approval/index');
    }
    //End Of Annual Final Report Functions
    
    
}
    
?>