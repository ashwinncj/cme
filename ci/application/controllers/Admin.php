<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? : redirect('/login'));
        $this->load->model('sudo');
        $this->load->model('company');
        $this->load->model('user');
    }

    public function index() {
        $data['info'] = $this->sudo->get_company_profiles();
        $this->load->view('admin', $data);
    }

    public function company($uid) {
        $data['info'] = $this->company->get_company_profile($uid);
        $this->load->view('admindashboardview', $data);
    }

}
