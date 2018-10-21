<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <title>ConstructMe</title>
    <?php $this->load->view('templates/header'); ?>
    <style>
        .login-clean {
            background:#f1f7fc;
            padding:80px 0;
            height:100vh;
        }

        .login-clean form {
            max-width:400px;
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
        .createaccount-text{
            margin-bottom: 10px;
        }
        .messagebox{
            max-width: 400px;
            width: 90%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            color: #505e6c;
        }
    </style>
</head>
<body>
    <?php $this->load->view('templates/navigation'); ?>
    <div style="position:relative;background-color: whitesmoke;padding-top: 80px;padding-bottom:80px">
        <div class="messagebox" style="box-shadow:4px 4px 8px 4px gray;">
            <p style="color:black"><?php echo $msg;?></p>
        </div>
    </div>
    <?php $this->load->view('templates/footer'); ?>
</body>