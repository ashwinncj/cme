<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->view('signup');
    }

    public function submit() {
        $this->load->model('auth');
        isset($_POST['user_email']) ? (isset($_POST['user_password'])? : redirect('/signup')) : redirect('/signup');
        ($_POST['user_password']!=$_POST['user_confirmpassword'])?$_SESSION['error_msg']='Passwords don\'t match. Please try again.' AND redirect('/signup'):'';
        $status = $this->auth->add_user($_POST);
        $status? $_SESSION['status']=TRUE AND redirect('/Success/signup'):  redirect('/error');                
    }

    public function successpage($msg) {
        $this->load->helper('url');
        $data['msg'] = $msg;
        $this->load->view('successpage', $data);
    }

}
