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
            <a href="<?php echo base_url(); ?>index.php/annualfinalreport">		
                    <div class="option1 card col-md-9 hover1" title="SBC - Annual or Final Report for use of Biohazardous Materials">
                        <h5><span>SBC - ANNUAL OR FINAL REPORT FOR USE OF BIOHAZARDOUS MATERIALS</span></h5>		
                    </div>				
            </a>
		</div>
        
        <!--
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/hirarc?type=4">		
                    <div class="option1 card col-md-9 hover1" title="Hazard Identification, Risk Assessment, Risk Control (HIRARC) Form">
                        <h5><span>OHS-F-4.5.X HIRARC FORM</span></h5>		
                    </div>				
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/swp?type=4">		
                    <div class="option1 card col-md-9 hover1" title="SSBC_001 Safe Work Procedure (SWP)">
                        <h5><span>SSBC SAFE WORK PROCEDURE</span></h5>		
                    </div>				
            </a>
		</div>				
		-->
    </div>
		
		<div class="col-lg-7">
		<?php if(isset($product_list)) { ?>		
			<div>		
				<?php foreach ($product_list as $list) { ?>
					<div class="card my-4">
						<h5 class="card-header">Announcements</h5>
						<div class="card-body">
						<?php echo $list->announcement_description ?> 
						</div>
					</div>	
				<?php } ?>
			</div>
				
				<a href="<?php echo base_url(); ?>index.php/annualfinalreportpage/edit" class="col-md-3"><button class="btn btn-primary button_right">Edit</button></a>	
				
			<?php } else { ?>
				
				 <?php echo form_open('annualfinalreportpage/save_edit') ?>
				 <?php echo form_hidden('announcement_id',$list_product['announcement_id']) ?>

			<div class="card my-4">
								<h5 class="card-header">Announcements Edit</h5>
								<div class="card-body">
								<?php echo form_textarea('announcement_description',$list_product['announcement_description'],array('placeholder'=>'Note','style'=>'width:100%')) ?>  
								</div>
			</div>	


				<a href="<?php echo base_url(); ?>index.php/annualfinalreportpage/save_edit" class="col-md-3"><button class="btn btn-primary button_right">Save</button></a>
				<?php echo form_close(); ?>
			<?php } ?>
		</div>
	</div>					
	</div>
</body>
</html>