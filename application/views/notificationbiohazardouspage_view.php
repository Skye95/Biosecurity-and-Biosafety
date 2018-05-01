<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css" type="text/css">
    <title>Swinburne Biosafety and Biosecurity Online System - Exempt Dealing Page</title>
    
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
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include_once 'template/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <h2 class="my-4 text-center">Notification of LMO and Biohazardous Material Form Page</h2>

        <div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>		

		<hr>
	<div class="row" >
	<div class="col-lg-5" >
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/notification_of_LMO_and_BM">		
                    <div class="option1 card col-md-9 hover1" title="SSBC_002 Notification of LMO and Biohazardous Material">
                        <h5><span>SSBC NOTIFICATION OF LMO AND BIOHAZARDOUS MATERIAL</span></h5>
                    </div>				
            </a>
		</div>
			<br/>
		</div>
		
		<div class="col-lg-7">
			<div>		
				<h4>Announcements</h4>
			</div>				
			<div class="row">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
			<div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm1.jpg') ?>" alt="First slide">
			  </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm2.jpg') ?>" alt="Second slide">
			  </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm3.jpg') ?>" alt="Second slide">
			  </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm4.jpg') ?>" alt="Second slide">
			  </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm5.jpg') ?>" alt="Second slide">
			  </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm6.jpg') ?>" alt="Second slide">
			  </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url('assets\images\4_biohazardousmaterials\bm7.jpg') ?>" alt="Second slide">
			  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>				
				</div>
		</div>
	</div>					
	</div>
<br/>
</body>
</html>