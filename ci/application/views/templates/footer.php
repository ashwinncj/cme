<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    .footer-clean {
        padding:50px 0;
        background-color:#fff;
        color:#4b4c4d;
    }
    .footer-clean h3 {
        margin-top:0;
        margin-bottom:12px;
        font-weight:bold;
        font-size:16px;
    }
    .footer-clean ul {
        padding:0;
        list-style:none;
        line-height:1.6;
        font-size:14px;
        margin-bottom:0;
    }

    .footer-clean ul a {
        color:inherit;
        text-decoration:none;
        opacity:0.8;
    }

    .footer-clean ul a:hover {
        opacity:1;
    }

    .footer-clean .item.social {
        text-align:center;
    }

    @media (max-width:767px) {
        .footer-clean .item {
            text-align:center;
            padding-bottom:20px;
        }
    }

    @media (max-width: 768px) {
        .footer-clean .item.social {
            text-align:center;
        }
    }


    .footer-clean .item.social > a:hover {
        opacity:0.9;
    }

    @media (max-width:991px) {
        .footer-clean .item.social > a {
            /*margin-top:40px;*/
        }
    }

    @media (max-width:767px) {
        .footer-clean .item.social > a {
            /*margin-top:10px;*/
        }
    }

    .footer-clean .copyright {
        margin-top:14px;
        margin-bottom:0;
        font-size:13px;
        opacity:0.6;
    }

    a, a:hover, a:focus {
        color:inherit;
        text-decoration:none;
        transition:all 0.3s;
    }

    i, span {
        display:inline-block;
    }

    p {
        /*        font-family:'Poppins', sans-serif;*/
        font-size:1.1em;
        font-weight:300;
        line-height:1.7em;
        color:#999;
    }

    a, a:hover, a:focus {
        color:inherit;
        text-decoration:none;
        transition:all 0.3s;
    }

    i, span {
        display:inline-block;
    }
    .item{
        background-color: #fff;
        color: #444;
        position: relative;
        z-index: 2;
        display: block;
        margin: 0px;
        border-width: 0px;
        border-style: solid;
        font-size: 16px;
    }
    .social-icon{
        width:35px;
    }
    @media (max-width: 478px){
        .footer-clean .item.social {
            text-align: center;

        }
    }
</style>

<!--JIVO CHAT CODE SNIPPET --- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'yXoFtysEmr'; var d = document; var w = window; function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/' + widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss); }if (d.readyState == 'complete'){l(); } else{if (w.attachEvent){w.attachEvent('onload', l); } else{w.addEventListener('load', l, false); }}})();
    </script>
<!-- {/literal} END JIVOSITE CODE -->

<div class="footer-clean" style="padding-bottom:0px;">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 item col-md-3">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo base_url('servicedesc'); ?>">Engineering</a></li>
                        <li><a href="<?php echo base_url('servicedesc'); ?>">Procurement</a></li>
                        <li><a href="<?php echo base_url('servicedesc'); ?>">Material</a></li>
                        <li><a href="<?php echo base_url('servicedesc'); ?>">Man power</a></li>
                        <li><a href="<?php echo base_url('servicedesc'); ?>">Equipment</a></li>
                    </ul>
                    <ul></ul>
                </div>
                <div class="col-sm-4 item col-md-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                        <li><a href="<?php echo base_url('terms'); ?>">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 item col-md-3"></div>
                <div class="col-lg-3 item social" style="">
                    <h3>Follow us</h3>
                    <a href="#"><img class="social-icon" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></a>
                    <a href="#"><img class="social-icon" src="<?php echo base_url(); ?>assets/img/LinkedIN.png"></a>
                    <a href="#"><img class="social-icon" src="<?php echo base_url(); ?>assets/img/Twitter.png"></a>
                    <a href="#"><img class="social-icon" src="<?php echo base_url(); ?>assets/img/Youtube.png"></a>
                </div>
            </div>
        </div>
        <div class="col" style="text-align:center;">
            <p style="font-size:16px;">Copyright &COPY; ConstructMe @ 2018</p>
        </div>
    </footer>
</div>
