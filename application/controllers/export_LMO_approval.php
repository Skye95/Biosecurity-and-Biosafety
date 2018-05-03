<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class export_LMO_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('formf_model');
        
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_formf'] = $this->formf_model->get_all_form();
        $data['all_formf_SSBC'] = $this->formf_model->get_all_form2();
        
        $this->load->template('export_LMO_approval_view', $data);
	}
    
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->formf_model->update_approval($id, 1, $approver_id);
        
        redirect('export_LMO_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->formf_model->update_approval($id, 0, $approver_id);
        
        redirect('export_LMO_approval/index');
    }
    
    public function approve2($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->formf_model->update_approval_SSBC($id, 1, $approver_id);
        
        redirect('export_LMO_approval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->formf_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('export_LMO_approval/index');
    }
}

?>