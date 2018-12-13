<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .feature-listing{
        padding: 20px;
        text-align: center;
    }
    .feature-listing .title{
        text-transform: uppercase;
        font-size: 20px;
        margin-top: -14px;
        background-color: #f1f1f1;
        padding-left: 15px;
        padding-right: 15px;
    }
    .feature-listing .title::after{
        content: '';
    }
    .feature-listing .feature-box{
        width: 90%;
        height: 250px;
        margin: auto;
        border: 3px solid white;
        margin-bottom: 30px;
    }
    .feature-listing .image{
        width: 35%;
    }
    .feature-listing .paragraph{
        font-family: Roboto;
        font-size: 14px;
        padding: 10px;
        width: 80%;
    }
</style>
<div class="col-md-12 text-center" style="background-color: #ffffff;">
    <div class="" style="background-color: #ffffff;max-width: 1360px;margin: auto;">
        <div class="col-md-12 text-center" style="padding-bottom: 20px">
            <p style="font-size: 36px;"><span style="border-bottom: 1px solid red;color: black;font-family: Roboto">About Us</span></p>
        </div>
        <div class="col-md-12 text-center" style="padding-bottom: 50px">
            <p style="font-size: 20px;color: black;font-family: Roboto;max-width: 800px;margin: auto;">
                Construct me is a cloud based modern procurement management system for construction industry. 
                <br>
                It's a one stop solution for all construction related procurement works. It covers several areas like Engineering, Material, Manpower & Equipment. 
                <br>
                Our platform is designed by industry experts to match middle east requirements.
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 text-center" style="background-color: #f1f1f1;padding-top: 30px">
    <div class="" style="background-color: #f1f1f1;max-width: 1360px;margin: auto;">
        <div class="col-md-12 text-center" style="padding-bottom: 20px">
            <p style="font-size: 36px;"><span style="border-bottom: 1px solid red;color: black;font-family: Roboto">Key Offerings</span></p>
        </div>
        <div class="col-md-12">
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Vendor Registry</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/ellipse.png'); ?>">
                    <span class="paragraph">
                        The new system allows registered vendors the ability to see and download bid or proposal documents.
                    </span>
                </div>
            </div>
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Company Profiles</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/2.png'); ?>">
                    <span class="paragraph">
                        Comprehensive list of Company profiles based on various key factors.
                    </span>
                </div>
            </div>
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Material Comparison</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/3.png'); ?>">
                    <span class="paragraph">
                        Comprehensive list of material categories based on CSI codes for easy procurement.
                    </span>
                </div>
            </div>
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Bid Comparison</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/4.png'); ?>">
                    <span class="paragraph">
                        Automatic bid Comparison generatorfor each packages with details for finalization.
                    </span>
                </div>
            </div>
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Cloud Storage</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/5.png'); ?>">
                    <span class="paragraph">
                        Cloud storage of full projects packages (Specification, drawings, quotations, bid comparison etc.) is available with our website.
                    </span>
                </div>
            </div>
            <div class="col-md-4 feature-listing">
                <div class="feature-box">
                    <span class="title">Online tracking</span><br>
                    <img class="image" src="<?php echo base_url('assets/img/6.png'); ?>">
                    <span class="paragraph">
                        Track the whole procurement process for maximum transparency.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12" style="padding: 20px;">

</div>

