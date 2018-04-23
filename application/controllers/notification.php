<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('account_model');
        $this->load->model('notification_model');
    }
    
    public function index() {
        $data['notification'] = $this->notification_model->get_all_notification( $this->session->userdata('account_id'), 
                                                                                $this->account_model->get_account_type($this->session->userdata('account_id')) );
        $this->load->template('notification_view', $data);
        #$data['notification'] = $this->account_model->get_account_type($this->session->userdata('account_id'));
        #$this->load->template('notification_view', $data);
    }
}
?>