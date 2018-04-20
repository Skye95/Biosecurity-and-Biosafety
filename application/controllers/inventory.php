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
        $data['storage'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view', $data);
	}
    
    public function new_storage()
	{
        $data['storage'] = $this->inventory_model->get_all_storage();
        $this->load->template('inventory_view', $data);
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