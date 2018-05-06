<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('history_model');
        
        //Form Models
        $this->load->model('annex2_model');
        $this->load->model('annex3_model');
        $this->load->model('annex4_model');
        $this->load->model('annex5_model');
        $this->load->model('annualfinalreport_model');
        $this->load->model('biohazard_model');
        $this->load->model('exempt_model');
        $this->load->model('forme_model');
        $this->load->model('formf_model');
        $this->load->model('hirarc_model');
        $this->load->model('incidentaccidentreport_model');
        $this->load->model('notification_of_exporting_biological_material_model');
        $this->load->model('notification_of_LMO_and_BM_model');
        $this->load->model('pc1_model');
        $this->load->model('pc2_model');
        $this->load->model('procurement_model');
        $this->load->model('swp_model');
    }
    
	public function index()
	{
        
        $data['readnotif'] = $this->notification_model->get_read( $this->session->userdata('account_id'), $this->session->userdata('account_type') );
        
        $data['past'] = $this->history_model->get_all_form_by_id($this->session->userdata('account_id'));
        #$data['total'] = count((array)$data['past']);
        
        $this->load->template('history_view', $data);
	}
    
    public function edit_application($id, $type)
    {
        $id = $this->uri->segment(3);
        $type = $this->uri->segment(4);
        
        if($type == "ANNEX 2 FORM" ){
            
            $this->annex2_model->edit_request($id);
        }
        
        redirect('history/index');
        
    }
    
    
}

?>