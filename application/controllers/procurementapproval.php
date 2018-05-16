<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class procurementapproval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('procurement_model');
        
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_procurement'] = $this->procurement_model->get_all_form();
        
        $this->load->template('procurementapproval_view', $data);
	}
    
    public function approve($id, $appID)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $this->procurement_model->update_approval($id, 1, $approver_id, $appID);
        
        redirect('procurementapproval/index');
    }
    
    public function reject($id, $appID)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appID = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->procurement_model->update_approval($id, 0, $approver_id, $appID);
        
        redirect('procurementapproval/index');
    }
}

?>