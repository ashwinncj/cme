<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConstructMe</title>
        <?php $this->load->view('templates/header');?>
    </head>
    <body style="overflow-x: hidden">
        <?php $this->load->view('templates/navigation');?>
        <?php $this->load->view('topbar');?>
        <?php $this->load->view('services');?>
        <?php $this->load->view('templates/footer');?>

    </body>
</html>