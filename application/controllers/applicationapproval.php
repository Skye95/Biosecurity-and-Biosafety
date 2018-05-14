<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicationapproval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('annex2_model');
        $this->load->model('forme_model');
        $this->load->model('hirarc_model');
        $this->load->model('pc1_model');
        $this->load->model('pc2_model');
        $this->load->model('swp_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        
        $data['all_annex2'] = $this->annex2_model->get_all_form();
        $data['all_annex2_Chair'] = $this->annex2_model->get_all_form2();
        $data['all_annex2_SSBC'] = $this->annex2_model->get_all_form3();
        
        $data['all_forme'] = $this->forme_model->get_all_form();
        $data['all_forme_Chair'] = $this->forme_model->get_all_form2();
        $data['all_forme_SSBC'] = $this->forme_model->get_all_form3();
        
        $data['all_hirarc'] = $this->hirarc_model->get_all_hirarc1_form();
        $data['all_hirarc_Chair'] = $this->hirarc_model->get_all_hirarc1_form2();
        $data['all_hirarc_SSBC'] = $this->hirarc_model->get_all_hirarc1_form3();
        
        $data['all_pc1'] = $this->pc1_model->get_all_form();
        $data['all_pc1_Chair'] = $this->pc1_model->get_all_form2();
        $data['all_pc1_SSBC'] = $this->pc1_model->get_all_form3();
        
        $data['all_pc2'] = $this->pc2_model->get_all_form();
        $data['all_pc2_Chair'] = $this->pc2_model->get_all_form2();
        $data['all_pc2_SSBC'] = $this->pc2_model->get_all_form3();
        
        $data['all_swp'] = $this->swp_model->get_all_swp1_form();
        $data['all_swp_Chair'] = $this->swp_model->get_all_swp1_form2();
        $data['all_swp_SSBC'] = $this->swp_model->get_all_swp1_form3();
        
        
        $this->load->template('applicationapproval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Forms
    public function approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annex2_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex2_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->annex2_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function approve2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->annex2_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex2_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->annex2_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex2_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    //Methods For Approving And Rejecting Form E forms
    public function approve_forme($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->forme_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_forme($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->forme_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve_forme($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->forme_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    public function approve_forme2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->forme_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_forme2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->forme_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    } 
    
    public function final_approve_forme($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->forme_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject_forme($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->forme_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    //Methods For Approving And Rejecting HIRARC forms
    public function approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_BSO($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_hirarc($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->update_BSO($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    public function approve_hirarc2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->update_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_hirarc2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->update_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_approve_hirarc($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->hirarc_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject_hirarc($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    //Methods For Approving And Rejecting PC1 forms
    public function approve_pc1($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc1_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_pc1($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc1_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve_pc1($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc1_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function approve_pc1_2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc1_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_pc1_2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc1_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    } 
    
    public function final_approve_pc1($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc1_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject_pc1($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc1_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    //Methods For Approving And Rejecting PC2 forms
    public function approve_pc2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc2_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_pc2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc2_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve_pc2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc2_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function approve_pc2_2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc2_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_pc2_2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc2_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    } 
    
    public function final_approve_pc2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->pc2_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject_pc2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc2_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    //Methods For Approving And Rejecting SWP forms
    public function approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_swp($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function Chair_approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_yes_issue($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function approve_swp_2($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->update_approval_SSBC($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function reject_swp_2($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->update_approval_SSBC($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    } 
    
    public function final_approve_swp($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->swp_model->final_approval($id, 1, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    public function final_reject_swp($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->final_approval($id, 0, $approver_id, $appID);
        
        redirect('applicationapproval/index');
    }
    
    
    
}

?>