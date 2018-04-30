<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class notificationbiohazardouspage extends CI_Controller{
        
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        
        //breadcrum
		$this->breadcrumbs->unshift('Home', '/');	
		$this->breadcrumbs->push('Notification of LMO and Biohazardous Material', true);
    }
		
		public function index(){
			 $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
            $this->load->template('notificationbiohazardouspage_view',$data);
        }
        
    }
?>