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
    
        $data['all_hirarc'] = $this->hirarc_model->get_all_hirarc4_form();
        $data['all_hirarc_SSBC'] = $this->hirarc_model->get_all_hirarc4_form2();
        
        $data['all_swp'] = $this->swp_model->get_all_swp4_form();
        $data['all_swp_SSBC'] = $this->swp_model->get_all_swp4_form2();
        
        
        $this->load->template('annualreport_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Forms
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annualfinalreport_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    //Methods For Approving And Rejecting HIRARC forms
    public function approve_hirarc($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->hirarc_model->update_approval($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject_hirarc($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->hirarc_model->update_approval($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function approve_hirarc2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->hirarc_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject_hirarc2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->hirarc_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    } 
    
    //Methods For Approving And Rejecting SWP forms
    public function approve_swp($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->swp_model->update_approval($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject_swp($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->swp_model->update_approval($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function approve_swp_2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->swp_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('annualreport_approval/index');
    }
    
    public function reject_swp_2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->swp_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('annualreport_approval/index');
    } 
    
}
    
?>