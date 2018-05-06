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
        
        if($type =="ANNEX%202%20FORM"){
            
            $value = $this->annex2_model->get_editable_value($id);
            
            
            
            
            
            
        }elseif($type =="ANNEX%203%20FORM"){
            
            $this->annex3_model->edit_request($id);
            
        }elseif($type =="ANNEX%204%20FORM"){
            
            $this->annex4_model->edit_request($id);
            
        }elseif($type =="ANNEX%205%20FORM"){
            
            $this->annex5_model->edit_request($id);
            
        }elseif($type =="SBC%20ANNUAL%20OR%20FINAL%20REPORT%20FOR%20USE%20OF%20BIOHAZARDOUS%20MATERIALS"){
            
            $this->annualfinalreport_model->edit_request($id);
            
        }elseif($type =="APPLICATION%20FOR%20BIOSAFETY%20CLEARANCE%20FORM"){
            
            $this->biohazard_model->edit_request($id);
            
        }elseif($type =="APPLICATION%20FOR%20BIOSAFETY%20CLEARANCE%20EXEMPT%20DEALINGS%20FORM"){
            
            $this->exempt_model->edit_request($id);
            
        }elseif($type =="FORM%20E"){
            
            $this->forme_model->edit_request($id);
            
        }elseif($type =="FORM%20F"){
            
            $this->formf_model->edit_request($id);
            
        }elseif($type =="OHS-F-4.5.X%20HIRARC%20FORM"){
            
            $this->hirarc_model->edit_request($id);
            
        }elseif($type =="OHS-F-4.20.X%20INCIDENT%20ACCIDENT%20REPORT"){
            
            $this->incidentaccidentreport_model->edit_request($id);
            
        }elseif($type =="SSBC%20NOTIFICATION%20OF%20EXPORTING%20LMO%20AND%20BIOHAZARDOUS%20MATERIAL"){
            
            $this->notification_of_exporting_biological_material_model->edit_request($id);
            
        }elseif($type =="NOTIFICATION%20OF%20LMO%20AND%20BIOHAZARDOUS%20MATERIAL"){
            
            $this->notification_of_LMO_and_BM_model->edit_request($id);
            
        }elseif($type =="APPLICATION%20FOR%20NLRDS%20SUITABLE%20FOR%20PC1%20FORM"){
            
            $this->pc1_model->edit_request($id);
            
        }elseif($type =="APPLICATION%20FOR%20NLRDS%20SUITABLE%20FOR%20PC2%20FORM"){
            
            $this->pc2_model->edit_request($id);
            
        }elseif($type =="OHS-F-4.18.X%20PRE-PURCHASE%20MATERIAL%20RISK%20ASSESSMENT"){
            
            $this->procurement_model->edit_request($id);
            
        }elseif($type =="SSBC%20SAFE%20WORK%20PROCEDURE"){
            
            $this->swp_model->edit_request($id);
            
        }
        
        redirect('history/index');
        
    }
    
    
}

?>