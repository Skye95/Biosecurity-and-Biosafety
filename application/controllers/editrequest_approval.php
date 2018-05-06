<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editrequest_approval extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('notification_model');
        $this->load->model('account_model');
        
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
        
        $data['all_annex2'] = $this->annex2_model->get_all_edit_request();
        $data['all_annex3'] = $this->annex3_model->get_all_edit_request();
        $data['all_annex4'] = $this->annex4_model->get_all_edit_request();
        $data['all_annex5'] = $this->annex5_model->get_all_edit_request();
        $data['all_annual'] = $this->annualfinalreport_model->get_all_edit_request();
        $data['all_biohazard'] = $this->biohazard_model->get_all_edit_request();
        $data['all_exempt'] = $this->exempt_model->get_all_edit_request();
        $data['all_forme'] = $this->forme_model->get_all_edit_request();
        $data['all_formf'] = $this->forme_model->get_all_edit_request();
        $data['all_hirarc'] = $this->hirarc_model->get_all_edit_request();
        $data['all_incident'] = $this->incidentaccidentreport_model->get_all_edit_request();
        $data['all_notif_export'] = $this->notification_of_exporting_biological_material_model->get_all_edit_request();
        $data['all_notif_LMO'] = $this->notification_of_LMO_and_BM_model->get_all_edit_request();
        $data['all_pc1'] = $this->pc1_model->get_all_edit_request();
        $data['all_pc2'] = $this->annex2_model->get_all_edit_request();
        $data['all_procurement'] = $this->procurement_model->get_all_edit_request();
        $data['all_swp'] = $this->swp_model->get_all_edit_request();
        
        
        $this->load->template('editrequest_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Requests
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $this->annex2_model->update_editable($id, 1, $approver_id);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $msg = base64_decode($this->uri->segment(4));
        $this->annualfinalreport_model->update_approval($id, 0, $approver_id);
        
        redirect('editrequest_approval/index');
    }
    
    
}
    
?>