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
        
		return $result;
	}
}
?>