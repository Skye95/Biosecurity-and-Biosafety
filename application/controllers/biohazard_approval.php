<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biohazard_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('biohazard_model');
        $this->load->model('hirarc_model');
        $this->load->model('swp_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_bm'] = $this->biohazard_model->get_all_form();
        $data['all_bm_Chair'] = $this->biohazard_model->get_all_form2();
        $data['all_bm_SSBC'] = $this->biohazard_model->get_all_form3();
    
        $data['all_hirarc'] = $this->hirarc_model->get_all_hirarc3_form();
        $data['all_hirarc_Chair'] = $this->hirarc_model->get_all_hirarc3_form2();
        $data['all_hirarc_SSBC'] = $this->hirarc_model->get_all_hirarc3_form3();
        
        $data['all_swp'] = $this->swp_model->get_all_swp3_form();
        $data['all_swp_Chair'] = $this->swp_model->get_all_swp3_form2();
        $data['all_swp_SSBC'] = $this->swp_model->get_all_swp3_form3();
        
        
        $this->load->template('biohazard_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Forms
    public function approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->biohazard_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->biohazard_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function Chair_approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->biohazard_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function approve2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->biohazard_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->biohazard_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function final_approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->biohazard_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function final_reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->biohazard_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    //Methods For Approving And Rejecting HIRARC forms
    public function approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_BSO($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject_hirarc($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->update_BSO($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function Chair_approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    
    public function approve_hirarc2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_SSBC($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject_hirarc2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->update_SSBC($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function final_approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function final_reject_hirarc($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
     //Methods For Approving And Rejecting SWP forms
    public function approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject_swp($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function Chair_approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function approve_swp_2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function reject_swp_2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    } 
    
    public function final_approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
    public function final_reject_swp($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('biohazard_approval/index');
    }
    
}
    
?>