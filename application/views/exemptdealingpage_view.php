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

        <button type="button" class="btn" onclick="window.location='<?php echo base_url("index.php/newapplicationpage");?>'">Return</button>		
		<h3>Exempt Dealing Form Page</h3>
		<hr>
	<div class="row" >
	<div class="col-lg-5" >
		<div>		
			<div class="row">
				<div class="col-md-7">
					<a href="<?php echo base_url(); ?>index.php/exempt">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\form\exemptdealings.jpg') ?>" 
						alt="" title="SBC - Application for Biosafety Clearance for use of Exempt Dealings">
					</a>
				</div>				
			</div>
			<hr>
		</div>
		
		
		<div>		
			<div class="row">
				<div class="col-md-7">
					<a href="<?php echo base_url(); ?>index.php/hirarc">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\form\hirarc.jpg') ?>" 
						alt=""title="Hazard Identification, Risk Assessment, Risk Control (HIRARC) Form">
					</a>
				</div>				
			</div>
			<hr>
		</div>
		
		
		<div>		
			<div class="row">
				<div class="col-md-7">
					<a href="<?php echo base_url(); ?>index.php/swp">
						<img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo base_url('assets\images\form\swp.jpg') ?>" 
						alt="" title="SSBC_001 Safe Work Procedure (SWP)">
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
						<h5 class="card-header">Form Guide</h5>
						<div class="card-body">
						test test test 1131231231231231231231231231231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
						test test test 11312ahgsdfahdfashjf31231212331121321321321213213213 test test test 1131231231231231231231231231231212331121321321321213213213 
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