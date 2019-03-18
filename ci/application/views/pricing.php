<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConstructMe - Pricing</title>
        <?php $this->load->view('templates/header'); ?>
        <style>
            .pricing-img{
                max-width:100%; 
                max-height: 60vh;
                box-shadow: 1px 1px 2px 0px black;
            }
            .pricing-img:hover{
                box-shadow: 2px 1px 8px 0px black;
                cursor: pointer;
            }
        </style>
    </head>
    <body style="overflow-x: hidden">
        <?php $this->load->view('templates/navigation'); ?>
        <div class="col-md-12 row" style="padding: 20px">
            <div class="col-md-4 text-center offset-2">
                <a href="<?php echo base_url('signup'); ?>">
                    <img class="pricing-img" src="<?php echo base_url(); ?>assets/img/free-reg.png">
                </a>
            </div>
            <div class="col-md-4 text-center">
                <img class="pricing-img" src="<?php echo base_url(); ?>assets/img/paid-reg.png" style="cursor: not-allowed">
            </div>
        </div>
        <?php $this->load->view('templates/footer'); ?>

    </body>
</html>   


