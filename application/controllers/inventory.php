<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventory extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('inventory_model');
    }
    
	public function index()
	{
        $data['inventory'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view', $data);
	}
    
    /*
    function load_inventory() {
        $data['inventory'] = $this->inventory_model->get_all_inventory();
        $this->load->template('inventory_view');
    }
    */
}
?>