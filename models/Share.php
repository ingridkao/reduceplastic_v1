<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Share extends CI_Model{
	function __construct() {      
    }

    function get_user_title_count(){
        return $this->db->count_all('users');
    }

    function get_plastic_title_count() {
        $this->db->select_sum('act_count');
        $this->db->from('plastic');
        $query = $this->db->get();
        return $query->row()->act_count;
    }

    //select COUNT(`oauth_uid`) from plastic where `oauth_uid`=10202540284264358

    public function did_get_login_time($oauth_uid) {
        $this->db->select('created');
        $this->db->from('plastic');
        $this->db->where('oauth_uid',$oauth_uid);
        $query = $this->db->get();
        // if ($query->num_rows() > 0) {
            return $query->result();
        // } else {
            // return false;
        // }
    }
}
