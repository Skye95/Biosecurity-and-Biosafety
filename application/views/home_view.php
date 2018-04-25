<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Homepage</title>
    
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
        <!-- Page Heading -->
        <h2 class="my-4 text-center">Welcome, <?php echo $this->session->userdata('account_name'); ?></h2>

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/applicationpage"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Application for Biosafety.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/applicationpage">Application</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/procurementpage"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Procurement of Biological Material.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/procurementpage">Procurement of Biological Material</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/notificationbiohazardouspage"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Notification of LMO.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/notificationbiohazardouspage">Notification of LMO and Biohazardous Material</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="<?php echo base_url(); ?>index.php/inventory/index"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\LMO Biohazardous Mat.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo base_url(); ?>index.php/inventory/index">LMO and Biohazardous Materials Database</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="#"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Exporting of Biological Material.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#">Exporting of Biological Material</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="#"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Incident Accident Reporting.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#">Incident Accident Reporting</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 portfolio-item">
                <div class="card card-block h-50 justify-content-center align-items-center">
                    <a href="#"><img class="card-img-top" src="<?php echo base_url('assets\images\ApplicantForm\Annual Report.jpg') ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#">Annual or Final Report</a>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>