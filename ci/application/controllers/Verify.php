<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        $this->load->model('user');
    }

    public function index() {
        redirect('home');
    }

    public function account($email = 'default', $hash = 'default') {
        $status = $this->user->verify_user($email, $hash);
        $status ? redirect('dashboard') : $_SESSION['error_msg'] = 'Your email is verified. Please log in below.' AND redirect('login');
    }

    public function pending() {
        $this->load->view('templates/radel/header');
        $this->load->view('templates/radel/navigation');
        $this->load->view('pending');
        $this->load->view('templates/radel/footer');
    }

    public function resend() {
        ($this->auth->is_user_logged_in() ? : redirect('/login'));
        $this->db->from('constructme_data');
        $this->db->select('hash');
        $email = $_SESSION['user_email'];
        $this->db->where('user_email', $email);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $hash = $row->hash;
        }
        if ($hash) {
            $this->load->model('mailer');
            $html = '<p>Please verify your account by clicking on the link below.</p>';
            $html.='<p>' . base_url('verify/account/') . $email . '/' . $hash . '</p>';
            $html.='<h4>ConstructMe</h4><h5>www.constructme.ae</h5>';
            $this->mailer->mailgun($email, 'Verify Email Address', $html);
            $this->load->view('templates/radel/header');
            $this->load->view('templates/radel/navigation');
            $this->load->view('resend');
            $this->load->view('templates/radel/footer');
        } else {
            redirect('login');
        }
    }

}
