<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .nav-item{
        display: inline;
        padding: 15px;
        font-size: 15px;
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