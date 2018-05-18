<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class export_exempt_BM extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        $this->load->model('notification_of_exporting_biological_material_model');
        
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        $data['all_export'] = $this->notification_of_exporting_biological_material_model->get_all_form();
        
        $this->load->template('export_exempt_BM_view', $data);
	}
    
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->notification_of_exporting_biological_material_model->update_approval($id, 1, $approver_id);
        
        //Send email to PI, remind them to inform BSO when the shipped exempt dealing or biohazardous material arrived in importing country
        
        redirect('export_exempt_BM/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->notification_of_exporting_biological_material_model->update_approval($id, 0, $approver_id);
        
        //Send email to PI notify them that their form has been rejected
        
        redirect('export_exempt_BM/index');
    }
}

?>