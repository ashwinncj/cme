<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Construct Me</title>

<title>Assemble Point</title>
<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;padding:10px;box-shadow: 0px 0px 2px 0px grey;margin-bottom:20px;">            
    <div id="project-container-parent" style="min-height: 60vh">
        <p style="color: #f96868;font-weight: 600">Your email <?php echo $_SESSION['user_email']; ?> is not verified. Please go to your email and click on the link to verify your email address.</p>
        <p style="color: #f96868;font-weight: 600">If you haven't received the mail yet, please make sure you have checked in spam folders and then <a href="<?php echo base_url('verify/resend');?>" style="cursor: pointer;color: blue">click here </a>to resend the verification email.</p>
    </div>
</div>