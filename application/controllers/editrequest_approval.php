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
        $data['all_formf'] = $this->formf_model->get_all_edit_request();
        $data['all_hirarc'] = $this->hirarc_model->get_all_edit_request();
        $data['all_incident'] = $this->incidentaccidentreport_model->get_all_edit_request();
        $data['all_notif_export'] = $this->notification_of_exporting_biological_material_model->get_all_edit_request();
        $data['all_notif_LMO'] = $this->notification_of_LMO_and_BM_model->get_all_edit_request();
        $data['all_pc1'] = $this->pc1_model->get_all_edit_request();
        $data['all_pc2'] = $this->pc2_model->get_all_edit_request();
        $data['all_procurement'] = $this->procurement_model->get_all_edit_request();
        $data['all_swp'] = $this->swp_model->get_all_edit_request();
        
        
        $this->load->template('editrequest_approval_view', $data);
	}
    
    //Methods For Approving And Rejecting Annex 2 Requests
    public function approve($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annex2_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex2_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Annex 3 Requests
    public function approve_annex3($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annex3_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_annex3($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex3_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Annex 4 Requests
    public function approve_annex4($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annex4_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_annex4($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex4_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Annex 5 Requests
    public function approve_annex5($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annex5_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_annex5($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annex5_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Annual Final Report Requests
    public function approve_annual($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->annualfinalreport_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_annual($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->annualfinalreport_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Biohazard material Requests
    public function approve_biohazard($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->biohazard_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_biohazard($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->biohazard_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Exempt Dealing form Requests
    public function approve_exempt($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->exempt_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_exempt($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->exempt_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Form E Requests
    public function approve_forme($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->forme_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_forme($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->forme_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Form F Requests
    public function approve_formf($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->formf_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_formf($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->formf_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting HIRARC form Requests
    public function approve_hirarc($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->hirarc_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_hirarc($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->hirarc_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Incident Accident report form Requests
    public function approve_incident($id)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->incidentaccidentreport_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_incident($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->incidentaccidentreport_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Exporting form Requests
    public function approve_export($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->notification_of_exporting_biological_material_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_export($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->notification_of_exporting_biological_material_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting Notification form Requests
    public function approve_notification($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->notification_of_LMO_and_BM_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_notification($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->notification_of_LMO_and_BM_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting PC1 form Requests
    public function approve_pc1($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->pc1_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_pc1($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc1_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting PC2 form Requests
    public function approve_pc2($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->pc2_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_pc2($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->pc2_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting procurement form Requests
    public function approve_procurement($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->procurement_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_procurement($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->procurement_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    //Methods For Approving And Rejecting swp form Requests
    public function approve_swp($id, $appid)
    {
        $approver_id = $this->session->userdata('account_id');
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $this->swp_model->update_editable($id, 1, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
    public function reject_swp($id)
    {
        $approver_id = ' ';
        $id = $this->uri->segment(3);
        $appid = $this->uri->segment(4);
        $msg = base64_decode($this->uri->segment(5));
        $this->swp_model->update_editable($id, 0, $approver_id, $appid);
        
        redirect('editrequest_approval/index');
    }
    
}
    
?>