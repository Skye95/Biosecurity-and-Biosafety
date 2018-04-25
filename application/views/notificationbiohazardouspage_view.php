<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
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
        <h2 class="my-4 text-center">Welcome, <?php echo $this->session->userdata('account_name'); ?></h2>

        <button type="button" class="btn" onclick="window.location='<?php echo base_url("index.php/home");?>'">Return</button>		
		<h3>Notification of LMO and Biohazardous Material Page</h3>
		<hr>
	<div class="row" >
	<div class="col-lg-5" >
		<div>		
			<div class="row">
				<div class="col-md-7">
					<a href="<?php echo base_url(); ?>index.php/notification_of_LMO_and_BM">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\form\notificationBiohazardousMaterial.jpg') ?>" 
						alt="" title="SSBC_002 Notification of LMO and Biohazardous Material">
					</a>
				</div>				
			</div>
			<hr>
		</div>
	
		
		
					
		</div>
		
		<div class="col-lg-7">
			<div>		
				<h4>Fun Fact</h4>
			</div>				
			<div>		
				<div class="row">
					<div class="card my-4">
						<h5 class="card-header">Did you know? The human saliva</h5>
						<div class="card-body">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\announcement\funfact1.png') ?>" 
						alt="" title="The human saliva"> 
						</div>
					</div>				
				</div>
			</div>
			<div>		
				<div class="row">
					<div class="card my-4">
						<h5 class="card-header">Reminder</h5>
						<div class="card-body">
						test test test 1131231231231231231231231231231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
						test test test 1131231231231231231231231231231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>					
	</div>

	</div>
		
    </div>
</body>
</html>