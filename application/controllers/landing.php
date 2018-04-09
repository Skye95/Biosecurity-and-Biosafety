<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('account_model');
    }
    
	public function index()
	{
        $this->load->template('landing_view');
	}
    
    function logout(){
        # destroys current session
        $data = array('isLogin' => '', 'account_name' => '', 'account_id' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_detroy();
        redirect('landing/index');
    }
}
?>