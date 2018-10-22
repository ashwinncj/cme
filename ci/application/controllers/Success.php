<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {

    public function index($msg) {
      redirect('/home');
    }

    public function signup(){
      $this->load->library('session');
      if(isset($_SESSION['status'])){
        if($_SESSION['status']==true){
          unset($_SESSION['status']);
          $data['msg']='Account created successfully. Please check your email for the verification link to verify your account. Please <a href="'.base_url('login').'">click here </a>to login.';
          $this->load->view('successpage',$data);
        }else{
          redirect('/signup');
        }
      }else{
        redirect('/signup');
      }
    }

}
