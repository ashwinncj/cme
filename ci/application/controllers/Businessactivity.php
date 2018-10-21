<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Businessactivity extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? : redirect('/login'));
        $this->load->view('businessactivity');
    }

}
