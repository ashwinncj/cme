<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('auth');
//        ($this->auth->is_user_logged_in() ? : redirect('/login'));
//        $this->load->model('company');
//        $this->load->model('user');
        $this->load->model('mailer');
    }

    public function index() {
        $this->load->view('templates/radel/header');
        $this->load->view('templates/radel/navigation');
        //$this->load->view('landing');
        $this->load->view('templates/radel/footer');
        $this->mailer->mailgun('ashwinncj@gmail.com', 'Verification your email address.', 'Please verify your email address to create account.');
    }

}
