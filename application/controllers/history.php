<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('history_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        
        $data['past'] = $this->history_model->get_all_form_by_id($this->session->userdata('account_id'));
        
        $data['total'] = count((array)$data['past']);
        
        $this->load->template('history_view', $data);
	}
}