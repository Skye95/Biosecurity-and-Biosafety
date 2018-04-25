<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_all_notification($id, $type)
	{
        foreach ($type as $row) {
            $account_type = $row->account_type;
        }
        if($account_type == 1 || $account_type == 3){
            $this->db->where(array('account_id' => $id, 'notification_type' => 1));
            $query = $this->db->get('notification');
            return $query->result();
        }
        if($account_type == 2){
            $this->db->where('account_id', $id);
            $this->db->or_where(array('notification_type' => 1, 'notification_type' => 2));
            $query = $this->db->get('notification');
            return $query->result();
        }
	}
    
    function get_read($id) {
        $notif = [];
        $this->db->where('account_id', $id);
        $query = $this->db->get('notification');
        foreach ($query->result() as $i) {
            array_push($notif, $i->notification_read);
        }
        if (in_array(0, $notif)){
            return 0;
        } else {
            return 1;
        }
    }
    
    function update_read($id)
    {
        $this->db->where('account_id', $id);
        $this->db->update('notification', array('notification_read' => 1));
        return true;
    }
}
?>