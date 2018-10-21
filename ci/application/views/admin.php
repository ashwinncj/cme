<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConstructMe</title>
        <?php $this->load->view('templates/header'); ?>
        <style>
            .ba-list{
                column-count: 3;
            }
            .ae-list{
                column-count: 3;
            }
            label{
                font-weight:300;
            }
            .info-details{
                font-size: 18px;
                padding-left: 20px;
            }
            #companies-list th{
                text-align: left;
            }
        </style> 
    </head>
    <body style="overflow-x: hidden">
        <?php $this->load->view('templates/navigation'); ?>
    </head>
<body>
    <div style="width:80%;margin:auto;margin-top: 15px;padding:10px;box-shadow: 0px 0px 10px 0px grey;margin-bottom:20px;">
        <h5 style="padding-bottom: 15px;text-decoration: underline">List of companies</h5>
        <table id="companies-list" style="width: 100%;">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Contact Person</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Category</th>
                    <th>Website</th>                    
                </tr>
            </thead>
            <tbody>
                <?php 
                $count =0;
                foreach ($info as $value){
                    $count++;
                    ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><a href="<?php echo base_url('admin/company/'.$value['uid']); ?>" style="color: #047dff"><?php echo $value['company_name'];?></a></td>
                    <td><?php echo $value['location'];?></td>
                    <td><?php echo $value['contact_person'];?></td>
                    <td><?php echo $value['email'];?></td>
                    <td><?php echo $value['phone_number'];?></td>
                    <td><?php echo $value['category'];?></td>
                    <td><?php echo $value['webpage'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php $this->load->view('templates/footer'); ?>

</body>
</html>