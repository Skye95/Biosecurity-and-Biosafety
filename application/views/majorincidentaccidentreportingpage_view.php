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
            <a href="<?php echo base_url(); ?>index.php/annex3">		
                    <div class="option1 card col-md-9 hover1" title="Annex 3 Incident Reporting Form">
                        <h5><span>ANNEX 3 INCIDENT REPORTING</span></h5>		
                    </div>				
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/incidentaccidentreport?type=2">		
                    <div class="option1 card col-md-9 hover1" title="OHS-F-4.20.X Incident Accident Report Form_V3">
                        <h5><span>OHS-F-4.20.X INCIDENT ACCIDENT REPORT</span></h5>		
                    </div>				
            </a>
		</div>
        <br/>	
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
				<?php if($this->session->userdata('account_type') == 4) {?>
				<a href="<?php echo base_url(); ?>index.php/majorincidentaccidentreportingpage/edit" class="col-md-3"><button class="btn btn-primary button_right">Edit</button></a>	
				<?php }else{ ?>
				 
				 <?php } ?>
			<?php } else { ?>
				
				 <?php echo form_open('majorincidentaccidentreportingpage/save_edit') ?>
				 <?php echo form_hidden('announcement_id',$list_product['announcement_id']) ?>

			<div class="card my-4">
								<h5 class="card-header">Announcements Edit</h5>
								<div class="card-body">
								<?php echo form_textarea('announcement_description',$list_product['announcement_description'],array('placeholder'=>'Note','style'=>'width:100%')) ?>  
								</div>
			</div>	


				<a href="<?php echo base_url(); ?>index.php/majorincidentaccidentreportingpage/save_edit" class="col-md-3"><button class="btn btn-primary button_right">Save</button></a>
				<?php echo form_close(); ?>
			<?php } ?>
		</div>
	</div>					
	</div>
<br/>
</body>
</html>