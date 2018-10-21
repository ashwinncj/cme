<?php

class Company extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add_company_profile($uid, $params) {
        $query = "REPLACE INTO `company_profile` (`uid`,`record`,`value`) VALUES";
        $count = 0;
        foreach ($params as $key => $value) {
            $count++;
            $data[] = array(
                'uid' => $uid,
                'key' => $key,
                'value' => $value
            );
            if ($count == 1) {
                $query.=" ('$uid','$key','$value')";
            } else {
                $query.=", ('$uid','$key','$value')";
            }
        }
        return $this->db->query($query);
    }

    public function get_company_profile($uid) {
        $this->db->from('company_profile');
        $this->db->where('uid',$uid);
        $query=  $this->db->get();
        $data[]='';
        foreach ($query->result() as $row){
            $key=$row->record;
            $data[$key]=$row->value;
        }
        return $data;
    }

}
