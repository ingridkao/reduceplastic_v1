<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Action extends CI_Model{
	function __construct() {
		$this->tableName = 'plastic';
        $this->primaryKey = 'oauth_uid';
	}
	
	public function action(){
        $this->load->helper('url');
		// 解决php的“It is not safe to rely on the system’s timezone settings”问题
		date_default_timezone_set("Asia/Taipei");

        $data = array(
            'oauth_uid' => $this->input->post('oauth_uid'),
            'straw' => $this->input->post('straw'),
            'bag' => $this->input->post('bag'),
            'bottle' => $this->input->post('bottle'),
            'cup' => $this->input->post('cup'),
            'tableware' => $this->input->post('tableware'),
            'act_count' => $this->input->post('act_count'),
            'created' => $this->input->post('created'),
        );
        $this->db->insert('plastic', $data);
		$this->db->from($this->tableName);	

    }      

    // public function show_data_by_id($oauth_uid) {
    //     $condition = "oauth_uid =" . "'" . $oauth_uid . "'";
    //     $this->db->select('created');
    //     $this->db->from('plastic');
    //     $this->db->where($condition);
    //     $query = $this->db->get();

    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
}
