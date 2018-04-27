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
        <h2 class="my-4 text-center">Exempt Dealing Form Page</h2>
        
        <div id='breadcrumb1'>
            <ul>
               <li><a href='<?php echo base_url(); ?>index.php/home'>Home</a></li>
               <li><a href='<?php echo base_url(); ?>index.php/applicationpage'>Application</a></li>
               <li><a href='<?php echo base_url(); ?>index.php/newapplicationpage'>New Application</a></li>
               <li class='active'><a>Exempt Dealing</a></li>
            </ul>
        </div>
		
		<hr>
	<div class="row" >
	<div class="col-lg-5" >
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/exempt">		
                    <div class="option1 card col-md-9 hover1" title="SBC - Application for Biosafety Clearance for use of Exempt Dealings">
                        <h5><span>APPLICATION FOR BIOSAFETY CLEARANCE FOR USE OF EXEMPT DEALINGS</span></h5>		
                    </div>				
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/hirarc">		
                    <div class="option1 card col-md-9 hover1" title="Hazard Identification, Risk Assessment, Risk Control (HIRARC) Form">
                        <h5><span>OHS-F-4.5.X HIRARC FORM</span></h5>		
                    </div>				
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/swp">		
                    <div class="option1 card col-md-9 hover1" title="SSBC_001 Safe Work Procedure (SWP)">
                        <h5><span>SSBC SAFE WORK PROCEDURE</span></h5>		
                    </div>				
            </a>
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