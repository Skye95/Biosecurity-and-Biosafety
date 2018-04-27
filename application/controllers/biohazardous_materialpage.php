<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biohazardous_materialpage extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
    }
		
		public function index(){
			 $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
            $this->load->template('biohazardous_materialpage_view',$data);
        }
        
    
}
?>
