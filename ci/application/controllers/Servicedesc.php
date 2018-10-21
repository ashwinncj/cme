<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicedesc extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('servicedesc');
    }
}