<?php

class Resetpassword extends CI_Controller {

    public function index() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');
        $data['status'] = '';
        if (isset($_SESSION['error_msg'])) {
            $data['error_msg'] = $_SESSION['error_msg'];
            unset($_SESSION['error_msg']);
        }
        $this->load->view('resetpassword', $data);
    }

    public function submit() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');

        //Check if valid post data is sent before trying to login to the system.
        isset($_POST['user_email']) ? FALSE : redirect('/login');
        $user = $this->input->post('user_email');
        $auth = $this->auth->reset_password($user);
        $auth ? TRUE : redirect('home');
        $this->load->view('templates/radel/header');
        $this->load->view('templates/radel/navigation');
        $this->load->view('resetlinksent');
        $this->load->view('templates/radel/footer');
    }

    public function success() {
        isset($_SESSION['user_logged'])? : redirect('/login');
        $this->load->model('user');
        //Hold this two lines untill each section is given
//        $type = $this->user->user_type();
//        ($type == 'user_main_contractor' ? redirect('/maincontractor') : '');
        redirect('/dashboard');
    }

    public function reset($email = 'default', $hash = 'default') {
        $this->load->model('user');
        $status = $this->user->verify_hash($email, $hash);
        $status ? $_SESSION['user_email'] = $email AND $_SESSION['error_msg'] = 'Please enter new password below.' AND redirect('resetpassword/change') : redirect('home');
    }

    public function change() {
        $this->load->model('auth');
        //Check if user is logged in already and redirect them to success page.
        ($this->auth->is_user_logged_in() ? redirect('/login/success') : '');
        isset($_SESSION['user_email']) ? TRUE : redirect('home');
        $data['status'] = '';
        if (isset($_SESSION['error_msg'])) {
            $data['error_msg'] = $_SESSION['error_msg'];
            unset($_SESSION['error_msg']);
        }
        $this->load->view('changepassword', $data);
    }

    public function confirm() {
        $this->load->model('auth');
        isset($_POST['user_password']) ? FALSE : redirect('/home');
        ($_POST['user_password'] != $_POST['user_confirmpassword']) ? $_SESSION['error_msg'] = 'Passwords don\'t match. Please try again.' AND redirect('/resetpassword/change') : '';
        $status = $this->auth->change_password($_POST);
        if ($status) {
            $_SESSION['error_msg'] = 'Successfully changed the password. Please log in below';
            redirect('login');
        } else {
            $_SESSION['error_msg'] = 'There was an error. Please try again later.';
            redirect('login');
        }
    }

}
