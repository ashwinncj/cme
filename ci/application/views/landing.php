<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<title>Construct Me</title>
<style type="text/css">

    #create-button{
        background-color: #038930;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        border: none;
        padding: 5px;
        padding-left: 25px;
        padding-right: 25px;
    }
    #create-button:hover{
        cursor: pointer;
        background-color: #21ad50;
    }
    #project-container-parent{
        font-family: Raleway;
        padding-left: 60px;
        padding-right: 60px;
    }
    #project-container{
        float: none;
        margin: auto;
    }
    .project-name{
        font-size: 18px;
        font-weight: bold;
    }
    .project-tile-container{
        padding: 10px;
    }
    .project-tile{
        height: 35vh;       
        overflow: hidden;
        position: relative;
        padding: 5px;
        padding-left: 15px;
        padding-right: 10px;
        transition: all 0.3s;
        opacity: 0.9;
    }
    .project-tile:hover{
        cursor: pointer;
        box-shadow: 0px 5px 10px 0px #666;
        opacity: 1;
    }
    .project-created-date{
        text-align: right;
        font-size: 13px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        background-color: inherit;
        width: 100%;
        padding: 10px;
    }
    .project-tile-container:nth-child(1n) .project-tile{
        background-color: rgb(225,225,225);
        color: black; 
    }
    .project-tile-container:nth-child(2n) .project-tile{
        background-color: #f5f5f5;
        color: black; 
    }
    .project-tile-container:nth-child(3) .project-tile{
        background-color: #66add2;
        color: white; 
    }
    .project-tile-container:nth-child(5n) .project-tile{
        background-color: #6e91ac;
        color: white; 
    }
    .project-tile-container:nth-child(4n) .project-tile{
        background-color: #cbcbcb;
        color: black; 
    }
    .project-tile-background{
        background-repeat: no-repeat;
        background-size: 50%;
        background-color:rgba(0, 0, 0, 0.5);
        background-position: right bottom;
    }
</style>
<title>Assemble Point</title>
<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;padding:10px;box-shadow: 0px 0px 2px 0px grey;margin-bottom:20px;">            
    <div id="project-container-parent">
        <h3>Welcome to ConstructMe.</h3>
        <div id="project-container">
            <div class="col-lg-4 col-md-6 project-tile-container">
                <a href="">
                    <div class="project-tile project-tile-background" style="background-image: url('<?php echo base_url('assets/img/avatar.png'); ?>');">
                        <h4 class="project-name">Profile</h4>
                        <p>Manage your profile and keep it updated.</p>
                        <!--                        <div class="project-created-date"></div>-->
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 project-tile-container">
                <a href="">
                    <div class="project-tile project-tile-background" style="background-image: url('<?php echo base_url('assets/img/project.png'); ?>');">
                        <h4 class="project-name">Projects</h4>
                        <p>See your projects, create new and maintain the projects.</p>
                    </div>
                </a>
            </div>
        </div><div class="col-lg-4 col-md-6 project-tile-container">
            <a href="">
                <div class="project-tile">
                    <h4 class="project-name"></h4>
                    <p></p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 project-tile-container">
            <a href="">
                <div class="project-tile">
                    <h4 class="project-name"></h4>
                    <p></p>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 project-tile-container">
            <a href="">
                <div class="project-tile">
                    <h4 class="project-name"></h4>
                    <p></p>
                </div>
            </a>
        </div>
    </div>
</div>