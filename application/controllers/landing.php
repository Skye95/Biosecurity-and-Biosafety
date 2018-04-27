<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('account_model');
        $this->load->model('notification_model');
    }
    
	public function index()
	{
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
        
        $account_email = $this->input->post('account_email');
        $account_password = $this->input->post('account_password');
        
        $this->form_validation->set_rules('account_email', 'Email', 'required');
        $this->form_validation->set_rules('account_password', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE){
            # validation fails
            $this->load->template('landing_view', $data);
        } else {
            # checks for account credentials
            $result = $this->account_model->get_account($account_email, $account_password);
            if (count($result) == 1)
            {
                # sets session data
                $sess_data = array('isLogin' => TRUE, 'account_name' => $result[0]->account_fullname, 'account_id' => $result[0]->account_id, 'account_type' => $result[0]->account_type);
                $this->session->set_userdata($sess_data);
                redirect('home/index');
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid Email Address or Password!</div>');
                redirect('landing/index');
            }
        }
	}
    
    function logout(){
        # destroys current session
        $data = array('isLogin' => '', 'account_name' => '', 'account_id' => '', 'account_type' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('landing/index');
    }
}
?>