<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification_of_LMO_and_BM_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('notification_of_LMO_and_BM_model');
        
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_notif_LMO_BM'] = $this->notification_of_LMO_and_BM_model->get_all_form();
        
        $this->load->template('notification_of_LMO_and_BM_approval_view', $data);
	}
    
    public function approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->notification_of_LMO_and_BM_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('notification_of_LMO_and_BM_approval/index');
    }
    
    public function reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->notification_of_LMO_and_BM_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('notification_of_LMO_and_BM_approval/index');
    }
}

?>