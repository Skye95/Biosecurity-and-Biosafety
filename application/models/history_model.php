<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
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
	
    # Retrieves Annex 2 form by users ID for now
	function get_all_form_by_id($id)
	{
        $result = [];
        
        $i = $this->annex2_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Annex 2',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->annex3_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Annex 3',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->annex4_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Annex 4',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->annex5_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Annex 5',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->annualfinalreport_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Annual / Final Report',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->biohazard_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Biohazardous',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->exempt_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Exempt',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->forme_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Form E',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->formf_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Form F',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->hirarc_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'HIRARC Form',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->incidentaccidentreport_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Incident Accident Report',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->notification_of_exporting_biological_material_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Notification Of Exporting Biological Material',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->notification_of_LMO_and_BM_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Notification Of LMO and Biohazardous Materials',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->pc1_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'PC1',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->pc2_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'PC2',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->procurement_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Procurement',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
        $i = $this->swp_model->get_form_by_id($id);
        foreach ($i as $row) {
            $data = [
                'type' => 'Safety Work Procedure Form',
                'application_id' => $row->application_id,
                'approval' => $row->application_approved
            ];
            array_push($result, $data);
        }
        
		return $result;
	}
}
?>