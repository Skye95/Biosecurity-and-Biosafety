<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class occupationaldisease_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('incidentaccidentreport_model');
        $this->load->model('annex4_model');
        
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        
        $data['all_major'] = $this->incidentaccidentreport_model->get_all_incident3_form();
        $data['all_major_HSO'] = $this->incidentaccidentreport_model->get_all_incident3_form3();
        $data['all_major_SSBC'] = $this->incidentaccidentreport_model->get_all_incident3_form2();
        
        $data['all_annex4'] = $this->annex4_model->get_all_annex4_form();
        $data['all_annex4_HSO'] = $this->annex4_model->get_all_annex4_form3();
        $data['all_annex4_SSBC'] = $this->annex4_model->get_all_annex4_form2();
        
        $this->load->template('occupationaldisease_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Incident Accident Forms
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function approve3($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->incidentaccidentreport_model->update_approval_HSO($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject3($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->incidentaccidentreport_model->update_approval_HSO($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    
    //Methods For Approving And Rejecting Annex 4 Forms
    public function approve_annex4($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex4_model->update_approval($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject_annex4($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex4_model->update_approval($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function approve2_annex4($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex4_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject2_annex4($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex4_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function approve3_annex4($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex4_model->update_approval_HSO($id, 1, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    public function reject3_annex4($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex4_model->update_approval_HSO($id, 0, $approver_id);
        
        redirect('occupationaldisease_approval/index');
    }
    
    
    
    
}

?>