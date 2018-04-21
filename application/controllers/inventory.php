<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventory extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('inventory_model');
    }
    
    public function index() {
        $data['inventory'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view', $data);
    }
    
	public function index2()
	{
        $data['storage'] = $this->inventory_model->get_all_storage();
        $this->load->template('inventory_view', $data);
	}
    
    public function new_inventory()
	{
        $this->form_validation->set_rules('program', 'Program', 'required');
        $this->form_validation->set_rules('program_type', 'Program Type', 'required');
        $this->form_validation->set_rules('biohazard_type', 'Biohazard Type', 'required');
        $this->form_validation->set_rules('biohazard_name', 'Biohazard Name', 'required');
        $this->form_validation->set_rules('biohazard_id', 'Biohazard ID', 'required');
        $this->form_validation->set_rules('log_in_personnel', 'Log In Personnel', 'required');
        $this->form_validation->set_rules('keeper_name', 'Keeper Name', 'required');
        
        # Submit form
        if($this->form_validation->run() == FALSE){
            # validation fails
            $this->load->template('inventory_form_view');
        } else {
            $data = array(
                'program' => $this->input->post('program'),
                'program_type' => $this->input->post('program_type'),
                'unit_convenor' => $this->input->post('unit_convenor'),
                'project_investigator' => $this->input->post('project_investigator'),
                'unit_name' => $this->input->post('unit_name'),
                'experiment_title' => $this->input->post('experiment_title'),
                'project_title' => $this->input->post('project_title'),
                'project_reference_no' => $this->input->post('project_reference_no'),
                'biohazard_type' => $this->input->post('biohazard_type'),
                'biohazard_name' => $this->input->post('biohazard_name'),
                'biohazard_id' => $this->input->post('biohazard_id'),
                'date_received' => $this->input->post('date_received'),
                'log_in_personnel' => $this->input->post('log_in_personnel'),
                'keeper_name' => $this->input->post('keeper_name'),
                'remarks' => $this->input->post('remarks')
            );
            
            if($this->inventory_model->insert_new_inventory($data)){
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You have successfully applied for a new inventory!</div>');
                redirect('inventory/new_inventory');
            } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">An error has occured. Please try again later.</div>');
                redirect('inventory/new_inventory');
            }
        }
	}
    
    public function new_storage()
	{
        
        $this->load->template('storage_form_view');
	}
    
    /*
    
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    
        <div id="inventory"></div>

        <script type="text/javascript" charset="utf-8">
            webix.ready(function(){
                grid = webix.ui({
                    container:"inventory",
                    view:"datatable",
                    columns:[
                        { id:"inventory_id", header:"", adjust:"data" },
                        { id:"program",	header:[{ text:"Program" }, { content:"textFilter" }], width:175 },
                        { id:"program_type", header:["Program Type", {content:"textFilter"}], width:175 },
                        { id:"unit_convenor", header:["Unit Convenor", {content:"textFilter"}], width:175 },
                        { id:"unit_name", header:["Unit Name", {content:"textFilter"}], width:175 }
                    ],
                    autowidth:true, 
                    autoheight:true,
                    data:<?php print json_encode($inventory); ?>
                });
            });
        </script>
    */
}
?>