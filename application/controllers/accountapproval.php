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
    
    public function approve($id)
    {
        $id = $this->uri->segment(3);
        $this->account_model->update_approval($id, 1);
        
        redirect('accountapproval/index');
    }
    
    public function reject($id)
    {
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->account_model->update_approval($id, 0);
        
        redirect('accountapproval/index');
    }
}