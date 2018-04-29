<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class applicationpage extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
		$this->load->library('breadcrumbs');

		//breadcrum
		$this->breadcrumbs->unshift('Home', '/');
		$this->breadcrumbs->push('Page2', '/section/page', true);
		$this->breadcrumbs->push('Page1', '/annex2', true);
		$this->breadcrumbs->push('Page3', '/applicationpage', true);
		
    }
		
		public function index(){
			 $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id') );
            $this->load->template('applicationpage_view',$data);
        }
}
?>
