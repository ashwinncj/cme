<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .rdl-shadow:hover{
        box-shadow:3px 3px 12px 2px #d8d0d0;
        transition:all 0.5s;
        background-color: rgba(243,243,243,0.5);
        cursor: pointer;
    }
    .rdl-shadow{
        margin:10px;
        font-size:14px;
        transition:all 2s;
    }
    .rdl-shadow  button {
        position: absolute;
        bottom:10px;
        left:50%;
        transform: translateX(-50%);
        padding: 3px;
    }

    .rdl-shadow  button:hover {
      transition:all 0.2s;
        box-shadow: 0px 3px 6px 2px #868686;
  }
  .rdl-shadow:hover button{
      box-shadow: 0px 3px 6px 2px #868686;
      transition:all 0.2s;
}
    .services-description{
        height:200px;
        overflow: hidden;
    }
    .rdl-shadow img{
        width:70%;
        border-radius:50%;
        margin-bottom: 5px;
    }
    @media only screen and (max-width: 767px) {
        .col{
            flex-basis: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
        .rdl-shadow img{
            width:55%;
            border-radius:50%;
            margin-bottom: 5px;
        }
        
    }
    
</style>
<div style="margin-top:30px;">
    <div class="container-fluid" >
        <div class="row">
            <div class="col rdl-shadow" style="text-align:center;">
                <img src="<?php echo base_url(); ?>assets/img/engineering1.jpg">
                <p style="font-size:20px;color:rgb(62,67,72);margin-bottom: 5px;">ENGINEERING</p>
                <div class="services-description">
                    <p style="color:rgb(104,106,109);">Engineering services like consultancy services are provided for buildings, infrastructure, fire code, acoustic consultancies. <br></p>
                    <a href="<?php echo base_url('servicedesc'); ?>"><button class="btn btn-primary" type="button" style="border-radius:0px;">Read more</button></a>

                </div>
            </div>
            <div class="col rdl-shadow" style="text-align:center;">
                <img src="<?php echo base_url(); ?>assets/img/procurement1.jpg">
                <p style="font-size:20px;color:rgb(62,67,72);margin-bottom: 5px;">PROCUREMENT</p>
                <div class="services-description">
                    <p style="color:rgb(104,106,109);">Procurement services for the main contractor can be achieved by our online platform. This site can replace the </p>
                    <a href="<?php echo base_url('servicedesc'); ?>"><button class="btn btn-primary" type="button" style="border-radius:0px;">Read more</button></a>
                </div>
            </div>
            <div class="col rdl-shadow"
                 style="text-align:center;">
                <img src="<?php echo base_url(); ?>assets/img/materials1.jpg">
                <p style="font-size:20px;color:rgb(62,67,72);margin-bottom: 5px;">MATERIAL</p>
                <div class="services-description">
                    <p style="color:rgb(104,106,109);">This online platform is a single solution for all your procurement needs as it handles the material purchase too</p>
                    <a href="<?php echo base_url('servicedesc'); ?>"><button class="btn btn-primary" type="button" style="border-radius:0px;">Read more</button></a>
                </div>
            </div>
            <div class="col rdl-shadow" style="text-align:center;">
                <img src="<?php echo base_url(); ?>assets/img/manpower1.jpg">
                <p style="font-size:20px;color:rgb(62,67,72);margin-bottom: 5px;">MAN POWER</p>
                <div class="services-description">
                    <p style="color:rgb(104,106,109);">Many of the manpower service companies having manpower for all type of expertise/skilled people are registered in our network<br></p>
                    <a href="<?php echo base_url('servicedesc'); ?>"><button class="btn btn-primary" type="button" style="border-radius:0px;">Read more</button></a>
                </div>
            </div>
            <div class="col rdl-shadow"
                 style="text-align:center;">
                <img src="<?php echo base_url(); ?>assets/img/equipments1.jpg">
                <p style="font-size:20px;color:rgb(62,67,72);margin-bottom: 5px;">EQUIPMENT</p>
                <div class="services-description">
                    <p style="color:rgb(104,106,109);">Machineries for excavation, shuttering, raised platforms, compactors, cranes etc. are available through our network. You will receive</p>
                    <a href="<?php echo base_url('servicedesc'); ?>"><button class="btn btn-primary" type="button" style="border-radius:0px;">Read more</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
