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
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
        $data['all_accounts'] = $this->account_model->get_all_account();
        
        $this->load->template('accountapproval_view', $data);
	}
    
    public function approve($id)
    {
        #$data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
        $id = $this->uri->segment(3);
        $this->account_model->update_approval($id, 1);
        
        redirect('accountapproval/index');
    }
    
    public function reject($id)
    {
        #$data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
        $id = $this->uri->segment(3);
        $this->account_model->update_approval($id, 0);
        
        redirect('accountapproval/index');
    }
}