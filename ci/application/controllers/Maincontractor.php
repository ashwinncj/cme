<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontractor extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        $this->auth->is_user_logged_in()?:redirect('/login');
        $this->load->view('maincontractor');
    }

}
