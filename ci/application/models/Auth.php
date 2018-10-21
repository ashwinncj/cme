<?php

class Auth extends CI_Model {

    public function authenticate($user, $pwd) {
        $this->load->database();
        $this->db->from('constructme_data');
        $this->db->where('user_email', $user);
        $this->db->where('user_password', $pwd);
        $records = $this->db->count_all_results();
        return $records == 1 ? TRUE : FALSE;
    }

    public function password($pwd) {
        return md5('alp' . md5($pwd) . 'tmr');
    }

    public function is_user_logged_in() {
        if (isset($_SESSION['user_logged'])) {
            if ($_SESSION['user_logged'] == TRUE && isset($_SESSION['user_email'])) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function user_exists($user) {
        $this->load->database();
        $this->db->from('constructme_data');
        $this->db->where('user_email', $user);
        $records = $this->db->count_all_results();
        return $records >= 1 ? TRUE : FALSE;
    }

    public function add_user($params) {
        $this->load->database();
        $email = $params['user_email'];

        //Check if user exists before proceeding
        if ($this->user_exists($email)) {
            $_SESSION['error_msg'] = 'Email provided is already registered. Please check the details provided.';
            redirect('/signup');
        }
        $password = $this->password($params['user_password']);
        $businesstype = $params['user_business_type'];
        $data = array(
            'user_email' => $email,
            'user_password' => $password,
            'user_business_type' => $businesstype
        );
        $status = $this->db->insert('constructme_data', $data) ? TRUE : FALSE;
        return $status;
    }

}
