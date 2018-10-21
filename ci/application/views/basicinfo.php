<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
    <title>ConstructMe - Registration</title>
    <?php $this->load->view('templates/header'); ?>
    <style>
        .table.reg-table tr td {
            border:none;
        }
    </style>
</head>
<body>
    <?php $this->load->view('templates/navigation'); ?>
    <div style="width: 80%;margin: auto;box-shadow: 0px 0px 10px 0px grey;margin-bottom:20px;margin-top: 20px;padding:20px;">
        <h5>Basic Info</h5>
        <p style="margin:0px">Please provide your basic information.</p>
        <a style="font-size: 14px" href="<?php echo base_url('dashboard'); ?>"><- Go back</a>
        <hr>
    
    <div style="text-align:left;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="<?php echo base_url('profile/update') ?>">
                        <div class="table-responsive">
                            <table class="table reg-table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr style="border:none;">
                                        <td style="border:none;"><label>COMPANY NAME &nbsp;</label></td>
                                        <td>:<br></td>
                                        <td><input type="text" placeholder="Name of the company" name="company_name" value="<?php echo isset($info['company_name']) ? $info['company_name'] : ''; ?>" style="width:100%;"></td>
                                    </tr>
                                    <tr>
                                        <td><label>LOCATION</label></td>
                                        <td>:<br></td>
                                        <td style="border:none;">
                                            <select name="location" style="width:100%;">
                                                <option value="<?php echo isset($info['location']) ? $info['location'] : ''; ?>" selected><?php echo isset($info['location']) ? $info['location'] : ''; ?></option>
                                                <option value="ABU DHABI">ABU DHABI</option>
                                                <option value="DUBAI">DUBAI</option>
                                                <option value="SHARJAH">SHARJAH</option>
                                                <option value="AJMAN">AJMAN</option>
                                                <option value="UMM AL QUWAIN">UMM AL QUWAIN</option>
                                                <option value="FUJAIRAH">FUJAIRAH</option>
                                                <option value="RAS AL KHAIMAH">RAS AL KHAIMAH</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>ADDRESS&nbsp;</label></td>
                                        <td>:<br></td>
                                        <td><input  type="text" name="address" value="<?php echo isset($info['address']) ? $info['address'] : ''; ?>" style="width:100%;"></td>
                                    </tr>
                                    <tr>
                                        <td><label>WEBPAGE</label></td>
                                        <td>:<br></td>
                                        <td><input type="text" placeholder="www.webpage.com" name="webpage" value="<?php echo isset($info['webpage']) ? $info['webpage'] : ''; ?>" style="width:100%;"></td>
                                    </tr>
                                    <tr>
                                        <td><label>ABOUT COMPANY</label></td>
                                        <td>:<br></td>
                                        <td><textarea placeholder="Introduction to company / brief about company" name="about_company" style="width:100%;"><?php echo isset($info['about_company']) ? $info['about_company'] : ''; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label>CONTACT PERSON</label></td>
                                        <td>:<br></td>
                                        <td><input type="text" placeholder="Name" name="contact_person" style="width:100%;" value="<?php echo isset($info['contact_person']) ? $info['contact_person'] : ''; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CONTACT NUMBER</label></td>
                                        <td>:<br></td>
                                        <td>
<!--<input type="text" placeholder="Country Code" name="country_code" style="margin-right:10px;">-->
                                            <input type="text" placeholder="Phone Number" value="<?php echo isset($info['phone_number']) ? $info['phone_number'] : ''; ?>" name="phone_number" style="width:55%;"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CATEGORY</label></td>
                                        <td>:<br></td>
                                        <td><select name="category" style="width:100%;">
                                                <option value="<?php echo isset($info['category']) ? $info['category'] : ''; ?>" selected><?php echo isset($info['category']) ? $info['category'] : ''; ?></option>
                                                <option value="BUSINESS OWNER / CLIENT">BUSINESS OWNER / CLIENT</option>
                                                <option value="DEVELOPER">DEVELOPER</option>
                                                <option value="CONSULTANT">CONSULTANT</option>
                                                <option value="ARCHITECT">ARCHITECT</option>
                                                <option value="STRUCTURAL ENGINEER">STRUCTURAL ENGINEER</option>
                                                <option value="EPC CONTRACTOR">EPC CONTRACTOR</option>
                                                <option value="GENERAL CONTRACTOR">GENERAL CONTRACTOR</option>
                                                <option value="SPECIALIST CONTRACTOR">SPECIALIST CONTRACTOR</option>
                                                <option value="MEP CONTRACTOR">MEP CONTRACTOR</option>
                                                <option value="MATERIAL SUPPLIER">MATERIAL SUPPLIER</option>
                                            </select></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="text-align:center;"><button class="btn btn-primary" type="submit" style="text-align:center;width:200px;background-color:rgb(76,200,170);">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    <?php $this->load->view('templates/footer'); ?>
</body>
