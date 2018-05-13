<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
if($this->session->userdata('account_type') != 2 && $this->session->userdata('account_type') != 3 && $this->session->userdata('account_type') != 4){
    redirect('home/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - New Application</title>
    
    <style>
        body {
            padding-top: 54px;
        }

        .portfolio-item {
            margin-bottom: 30px;
        }

        .card-img-top {
            height: auto;
            width: 100%;
        }
        
        a, a:hover, a:active, a:visited {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include_once 'template/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">
        <h2 class="my-4 text-center">Welcome to your Administrator Panel, <?php echo $this->session->userdata('account_name'); ?></h2>
        
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/applicationapproval/index"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\History.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h6 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/applicationapproval/index">LMO</a>
                        </h6>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/exempt_approval/index"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\History.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h6 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/exempt_approval/index">Exempt Dealing</a>
                        </h6>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/biohazard_approval/index"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\History.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h6 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/biohazard_approval/index">Biohazardous Materials</a>
                        </h6>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/extension_termination_approval/index"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\History.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h6 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/extension_termination_approval/index">Extension Or Termination</a>
                        </h6>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</body>
</html>