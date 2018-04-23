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
        if($account_type == 1){
            return "HELLO";
        }
        if($account_type == 2){
            return "DARK";
        }
        if($account_type == 3){
            return "NESS";
        }
	}
}
?>