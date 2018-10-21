<?php

class Sudo extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_company_profiles() {
        $query=$this->db->query("SELECT a.id as uid,a.user_email as email,b.value as value,b.record as record FROM `company_profile` b INNER JOIN `constructme_data` a ON a.id=b.uid WHERE b.record NOT LIKE 'ba_%' AND b.record NOT LIKE 'ae_%'");        
        foreach ($query->result_array() as $row) {
            $id = $row['uid'];
            $record = $row['record'];
            $data[$id][$record] = $row['value'];
            $data[$id]['email'] = $row['email'];
            $data[$id]['uid'] = $id;
        }
        return $data;
    }

}
