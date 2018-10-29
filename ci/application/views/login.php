<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <title>ConstructMe - Login</title>
    <?php $this->load->view('templates/header'); ?>
    <style>
        .login-clean {
            background:#f1f7fc;
            padding:80px 0;
            height:100vh;
        }

        .login-clean form {
            max-width:350px;
            width:90%;
            margin:0 auto;
            background-color:#ffffff;
            padding:40px;
            border-radius:4px;
            color:#505e6c;
            box-shadow:1px 1px 5px rgba(0,0,0,0.1);
        }

        .login-clean .illustration {
            text-align:center;
            padding:0 0 20px;
            font-size:100px;
            color:rgb(244,71,107);
        }

        .login-clean form .form-control {
            background:#f7f9fc;
            border:none;
            border-bottom:1px solid #dfe7f1;
            border-radius:0;
            box-shadow:none;
            outline:none;
            color:inherit;
            text-indent:8px;
            height:42px;
        }

        .login-clean form .btn-primary {
            background:#f4476b;
            border:none;
            border-radius:4px;
            padding:11px;
            box-shadow:none;
            margin-top:26px;
            text-shadow:none;
            outline:none !important;
        }

        .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
            background:#eb3b60;
        }

        .login-clean form .btn-primary:active {
            transform:translateY(1px);
        }

        .login-clean form .forgot {
            display:block;
            text-align:center;
            font-size:12px;
            color:#6f7a85;
            opacity:0.9;
            text-decoration:none;
        }

        .login-clean form .forgot:hover, .login-clean form .forgot:active {
            opacity:1;
            text-decoration:none;
        }
        .login-text{
            margin:10px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('templates/navigation'); ?>

    <div class="login-clean">
        <form method="post" action="<?php echo base_url('login/submit'); ?>" style="text-align:center;">
            <p style="color: red">
                <?php
                if (isset($error_msg)) {
                    echo $error_msg;
                }
                ?>
            </p>
            <p class="login-text" style="font-size:24px;color:#009688;">Login</p>
            <a href="#"><img src="<?php echo base_url(); ?>assets/img/Constructme-logo.png" style="width:65%;text-align:center;margin-bottom: 10px;"></a>
            <div class="form-group">
                <input class="form-control" required type="email" name="user_email" placeholder="Email"></div>
            <div class="form-group">
                <input class="form-control passwordcustom" required type="password" name="user_password" placeholder="Password">
                <div style="text-align: left;padding-left: 10px">
                    <input id="showpassword" type="checkbox"><span style="padding-left: 10px;font-size: 14px">Show password</span>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color:#009688;">Log In</button>
            </div>
            <a href="<?php echo base_url('resetpassword'); ?>" class="forgot">Forgot Password? Click here</a>
            <a href="<?php echo base_url('signup'); ?>" class="forgot">New User? Sign Up</a></form>
    </div>
    <?php $this->load->view('templates/footer'); ?>
    <script>
        $('#showpassword').change(function () {
            if ($(this).is(":checked")) {
                $('.passwordcustom').attr('type', 'text');
            } else {
                $('.passwordcustom').attr('type', 'password');
            }
        });
    </script>
</body>
