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
        <h2 class="my-4 text-center">Notification of LMO and Biohazardous Material Page</h2>

        <div id='breadcrumb1'>
            <ul>
               <li><a href='<?php echo base_url(); ?>index.php/home'>Home</a></li>
               <li class='active'><a>Notification of LMO and Biohazardous Material</a></li>
            </ul>
        </div>			

		<hr>
	<div class="row" >
	<div class="col-lg-5" >
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/notification_of_LMO_and_BM">		
                    <div class="option1 card col-md-9 hover1" title="SSBC_002 Notification of LMO and Biohazardous Material">
                        <h5><span>SSBC Notification of LMO and Biohazardous Material</span></h5>
                    </div>				
            </a>
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