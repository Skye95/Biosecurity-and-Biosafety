<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountapproval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_accounts'] = $this->account_model->get_all_account();
        
        $this->load->template('accountapproval_view', $data);
	}
    
    public function approve()
    {
        $id = $this->uri->segment(3);
        
        if($this->account_model->update_approval($id, 1)){
            $this->notification_model->insert_new_notification($id, 1, "Registration Approved", "Your account has been approved by: " . $this->session->userdata('account_name'));
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully approved the registration!</div>');
            redirect('accountapproval/index');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
            redirect('accountapproval/index');
        }
        
    }
    
    public function reject()
    {
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        
        if($this->account_model->update_approval($id, 0)){
            $this->notification_model->insert_new_notification($id, 1, "Registration Approved", "Your account has been rejected by: " . $this->session->userdata('account_name') . " due to " . $msg);
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully rejected the registration!</div>');
            redirect('accountapproval/index');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
            redirect('accountapproval/index');
        }
    }
}