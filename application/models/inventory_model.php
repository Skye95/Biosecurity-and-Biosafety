<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventory_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_all_inventory()
	{
        #$query = $this->db->select('*')->from('inventory')->get();
        #$this->db->where('approval', 1);
        $query = $this->db->get('inventory');
		return $query->result();
	}
    
    function get_all_storage()
	{
        #$query = $this->db->select('*')->from('storage')->get();
        #$this->db->where('approval', 1);
        $query = $this->db->get('storage');
		return $query->result();
	}
	
	# Retrieves Inventory by ID
	function get_inventory_by_id($id)
	{
		$this->db->where('inventory_id', $id);
        $query = $this->db->get('inventory');
		return $query->result();
	}
    
    # Retrieves Storage by ID
	function get_storage_by_id($id)
	{
		$this->db->where('storage_id', $id);
        $query = $this->db->get('storage');
		return $query->result();
	}
	
	# Insert New Inventory
	function insert_new_inventory($data)
    {
		return $this->db->insert('inventory', $data);
	}
    
    # Insert New Storage
	function insert_new_storage($data)
    {
		return $this->db->insert('storage', $data);
	}
}
?>