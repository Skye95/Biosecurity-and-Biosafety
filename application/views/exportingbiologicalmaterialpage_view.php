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
            <a href="<?php echo base_url(); ?>index.php/formf">		
                    <div class="option1 card col-md-9 hover1" title="Living Modified Organism (LMO) Form">
                        <h5><span>LIVING MODIFIED ORGANISM (LMO)- FORM F</span></h5>		
                    </div>				
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/notification_of_exporting_biological_material">		
                    <div class="option1 card col-md-9 hover1" title="Exempt Dealing or Biohazardous Material Form">
                        <h5><span>EXEMPT DEALING OR BIOHAZARDOUS MATERIAL</span></h5>		
                    </div>				
            </a>
		</div>
			 <br/>
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
<br/>
</body>
</html>