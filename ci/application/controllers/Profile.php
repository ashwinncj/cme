<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? : redirect('/login'));
    }

    public function basicinfo() {
        $this->load->view('basicinfo');
    }

    public function update() {
        $this->load->model('user');
        $uid = $this->user->get_uid();
        $this->load->model('company');
        $this->company->add_company_profile($uid, $_POST) ? redirect('/dashboard') : redirect('/dashboard');
    }

    public function upload_file($file, $location) {
        if (basename($_FILES[$file]["name"]) != '') {
            $target_dir = $location;
            $target_name = uniqid() . basename($_FILES[$file]["name"]);
            $target_file = $target_dir . $target_name;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES[$file]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf") {
                echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
                    return 'uploads/' . $target_name;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            return FALSE;
        }
    }

}
