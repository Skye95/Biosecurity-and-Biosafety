<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css" type="text/css">
    
    <title>Swinburne Biosafety and Biosecurity Online System - Application</title>

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
		
        <div id='breadcrumb1'>
            <ul>
               <li><a href='<?php echo base_url(); ?>index.php/home'>Home</a></li>
               <li class='active'><a>Application</a></li>
            </ul>
        </div>	
		<h3>Application Page</h3>
		<hr>
	<div class="row" >
	<div class="col-lg-5" >
		<div>		
			<div class="row">
				<div class="card card-block justify-content-center align-items-center">
					<a href="<?php echo base_url(); ?>index.php/newapplicationpage">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\ApplicantForm\New Application.jpg') ?>" 
						alt="" title="New Application">
					</a>
				</div>				
			</div>
			<hr>
		</div>
		
		
		<div>		
			<div class="row">
				<div class="card card-block justify-content-center align-items-center">
					<a href="#">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\ApplicantForm\Modification of Approved Project.jpg') ?>" 
						alt=""title="Modification of Approved Project">
					</a>
				</div>				
			</div>
			<hr>
		</div>
		
		
		<div>		
			<div class="row">
				<div class="card card-block justify-content-center align-items-center">
					<a href="<?php echo base_url(); ?>index.php/annex5">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\ApplicantForm\ExtensionTermination of Approved Project.jpg') ?>" 
						alt="" title="Extension/Termination of Approved Project">
					</a>
				</div>				
			</div>
			<hr>
		</div>
		</div>
		
		<div class="col-lg-7">
			<div>		
				<h4>Announcements</h4>
			</div>				
			<div>		
				<div class="row">
					<div class="card my-4">
						<h5 class="card-header">LMO Definition</h5>
						<div class="card-body">
						test test test 1131231231231231231231231231231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
						test test test 1131231231231231231231231231231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
						</div>
					</div>				
				</div>
			</div>
			<div>		
				<div class="row">
					<div class="card my-4">
						<h5 class="card-header">Type of LMO</h5>
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