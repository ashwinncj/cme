<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .nav-item{
        display: inline;
        padding: 15px;
        font-size: 15px;
    }
    .navigation-clean.navbar .navbar-nav .nav-link,.navigation-clean.navbar .navbar-nav>li>a{
        padding-left:18px;
        padding-right:18px
    }
    @media (max-width:767px){
        .navigation-clean{
            padding-top:0;
            padding-bottom:0
        }
    }
    .navigation-clean .navbar-collapse,.navigation-clean .navbar-form{
        border-top-color:#ddd;
    }
    .navigation-clean{
        background:#fff;
        padding-top:.75rem;
        padding-bottom:.75rem;
        color:#333;
        border-radius:0;
        box-shadow:none;
        border:none;
        margin-bottom:0;
    }
    @media (min-width:768px){
        .navigation-clean{
            padding-top:1rem;
            padding-bottom:1rem;
        }
    }
    .navigation-clean .navbar-brand{
        font-weight:700;
        color:inherit;
    }
    .navigation-clean .navbar-brand:hover{
        color:#222;
    }
    .navigation-clean .navbar-toggler{
        border-color:#ddd;
        color:#888;
    }
    .navigation-clean .navbar-toggler:focus,
    .navigation-clean .navbar-toggler:hover{
        background:0 0;
    }
    .navigation-clean .form-inline,.navigation-clean .navbar-collapse{
        border-top-color:#ddd
    }
    .navigation-clean.navbar-light .navbar-nav .nav-link{
        color:#465765;
    }
    .navigation-clean.navbar-light .navbar-nav .nav-link:focus,
    .navigation-clean.navbar-light .navbar-nav .nav-link:hover
    {
        color:#e30613!important;
        background-color:transparent;
    }
    .nav .open>a:active,.nav .open>a:focus,.nav .open>a:hover,.nav li>a:active,.nav li>a:focus,.nav li>a:hover
    {
        background-color:rgba(126,169,39,.3);
    }
    a,a:focus,a:hover{
        color:inherit;text-decoration:none;transition:all .3s;
    }
    .navbar{
        padding:15px 10px;background:#fff;border:none;border-radius:0;box-shadow:1px 1px 3px rgba(0,0,0,.1);
    }
    i,span
    {
        display:inline-block;
    }
    .logo-tagline{
        color:#465765;
        text-align: right;
        font-size:16px;
        margin-bottom: 5px;
    }
    .nav-link:hover{
        color:#e30613;
    }
    .navbar-logo{
        width:290px;
    }
    @media only screen and (max-width: 767px) {
        .navbar-logo{
            width:250px;
        }
    }
</style>    
<div class="col-md-12" style="box-shadow: 0px 0px 2px 0px violet;">
    <div class="col-md-10 col-md-offset-1" style="padding: 0px;padding-top :10px;">
        <div class="col-md-4">
            <a href="<?php echo base_url(); ?>" style="">
                <img src="<?php echo base_url(); ?>assets/img/Constructme-logo.png" style="width: 280px">
                <p>Procurement Made Easy</p>
            </a>
        </div>
        <div class="col-md-8 text-right" style="padding-top: 15px">
            <ul>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home'); ?>">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('features'); ?>">FEATURES</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('pricing'); ?>">PRICING</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('about'); ?>">ABOUT</a></li>
                <?php
                if (isset($_SESSION['user_logged']) AND isset($_SESSION['user_email'])) {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('dashboard'); ?>">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('logout'); ?>">LOGOUT</a></li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login'); ?>">LOGIN</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>