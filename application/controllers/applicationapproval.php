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
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_annex2'] = $this->annex2_model->get_all_form();
        $data['all_annex2_SSBC'] = $this->annex2_model->get_all_form2();
        
        $this->load->template('applicationapproval_view', $data);
	}
    
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex2_model->update_approval($id, 1, $approver_id);
        
        redirect('applicationapproval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex2_model->update_approval($id, 0, $approver_id);
        
        redirect('applicationapproval/index');
    }
    
    public function approve2($id, $email)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex2_model->update_approval_SSBC($id, 1, $approver_id);
        
        /*$this->load->library('email');

        $this->email->from($this->session->userdata('account_email'), 'SSBC Chair/SSBC Member');
        $this->email->to($email);

        $this->email->subject('Annex 2 Form Submission Approved');
        $this->email->message('Testing the email class.');

        $this->email->send();*/
        
        redirect('applicationapproval/index');
    }
    
    public function reject2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annex2_model->update_approval_SSBC($id, 0, $approver_id);
        
        redirect('applicationapproval/index');
    }
}

?>