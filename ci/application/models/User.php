<?php

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function user_type() {
        $this->db->from('constructme_data');
        $this->db->where('user_email', $_SESSION['user_email']);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $data = $row->user_business_type;
        }
        return $data;
    }

    public function get_uid() {
        $this->db->from('constructme_data');
        $this->db->select('id');
        $this->db->where('user_email', $_SESSION['user_email']);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $data = $row->id;
        }
        return $data;
    }

    public function verify_hash($email, $hash) {
        $this->db->from('constructme_data');
        $this->db->where('user_email', $email);
        $this->db->where('hash', $hash);
        $records = $this->db->count_all_results();
        if ($records == 1) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function verify_user($email, $hash) {
        $this->db->from('constructme_data');
        $this->db->where('user_email', $email);
        $this->db->where('hash', $hash);
        $records = $this->db->count_all_results();
        if ($records == 1) {
            $hash = md5(uniqid());
            $data = array(
                'hash' => $hash,
                'email_verified' => '1'
            );
            $this->db->where('user_email', $email);
            $status = $this->db->update('constructme_data', $data) ? TRUE : FALSE;
            return $status;
        }
    }

    public function is_email_verified($email) {
        $this->db->from('constructme_data');
        $this->db->select('email_verified');
        $this->db->where('user_email', $email);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $data = $row->email_verified;
        }
        return $data == 1 ? TRUE : FALSE;
    }

}
