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
        $hash = md5(uniqid());
        $data = array(
            'user_email' => $email,
            'user_password' => $password,
            'user_business_type' => $businesstype,
            'email_verified' => '0',
            'hash' => $hash
        );
        $status = $this->db->insert('constructme_data', $data) ? TRUE : FALSE;
        if ($status) {
            $this->load->model('mailer');
            $html = '<p>Please verify your account by clicking on the link below.</p>';
            $html.='<p>' . base_url('verify/account/') . $email . '/' . $hash . '</p>';
            $html.='<h4>ConstructMe</h4><h5>www.constructme.ae</h5>';
            $this->mailer->mailgun($email, 'Verify Email Address', $html);
        }
        return $status;
    }

    public function reset_password($params) {
        $this->load->database();
        $email = $params;
        $status = FALSE;
        //Check if user exists before proceeding
        if (!$this->user_exists($email)) {
            $_SESSION['error_msg'] = 'Invalid Email address provided. Please check and try again. ';
            redirect('/resetpassword');
        }
        $this->db->from('constructme_data');
        $this->db->select('hash');
        $this->db->where('user_email', $email);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $hash = $row->hash;
        }
        if ($hash) {
            $this->load->model('mailer');
            $html = '<p>Reset your password by clicking on the link below.</p>';
            $html.='<p>' . base_url('resetpassword/reset/') . $email . '/' . $hash . '</p>';
            $html.='<h4>ConstructMe</h4><h5>www.constructme.ae</h5>';
            $this->mailer->mailgun($email, 'Reset Password', $html);
            $status = TRUE;
        }
        return $status;
    }

    public function change_password($params) {
        $this->load->database();
        $password = $this->password($params['user_password']);
        $email = $_SESSION['user_email'];
        $hash = md5(uniqid());
        $data = array(
            'user_email' => $email,
            'user_password' => $password,
            'hash' => $hash
        );
        $this->db->where('user_email', $email);
        $status = $this->db->update('constructme_data', $data) ? TRUE : FALSE;
        return $status;
    }

}
