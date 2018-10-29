<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');
        $data['status'] = '';
        if (isset($_SESSION['error_msg'])) {
            $data['error_msg'] = $_SESSION['error_msg'];
            unset($_SESSION['error_msg']);
        }
        $this->load->view('login', $data);
    }

    public function submit() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');

        //Check if valid post data is sent before trying to login to the system.
        isset($_POST['user_email']) ? (isset($_POST['user_password'])? : redirect('/login')) : redirect('/login');
        $user = $this->input->post('user_email');
        $password = $this->auth->password($this->input->post('user_password'));
        $auth = $this->auth->authenticate($user, $password);
        if ($auth) {
            $this->load->model('user');
            $_SESSION['email_verified'] = $this->user->is_email_verified($email);
            $_SESSION['user_logged'] = 'true';
            $_SESSION['user_email'] = $user;
            redirect('/login/success/');
        } else {
            $_SESSION['error_msg'] = 'Invalid Credentials';
            echo 'Invalid';
            redirect('/login');
        }
    }

    public function success() {
        isset($_SESSION['user_logged'])? : redirect('/login');
        $this->load->model('user');
        //Hold this two lines untill each section is given
//        $type = $this->user->user_type();
//        ($type == 'user_main_contractor' ? redirect('/maincontractor') : '');
        redirect('/dashboard');
    }

}
