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
        <br>

        <div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>		

		<hr>
	<div class="row" >
	<div class="col-lg-5" >
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/notification_of_LMO_and_BM">		
                    <div class="option1 card col-md-9 hover1" title="SSBC_002 Notification of LMO and Biohazardous Material">
                        <h5><span>NOTIFICATION OF LMO AND BIOHAZARDOUS MATERIAL FORM</span></h5>
                    </div>				
            </a>
		</div>
			<br/>
		</div>
		
		<div class="col-lg-7">
			<div>		
				<h4>Announcements</h4>
			</div>				
			
		</div>
	</div>					
	</div>
<br/>
</body>
</html>