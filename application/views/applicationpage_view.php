<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
	<script src="<?php echo base_url('assets/ckfinder/ckfinder.js'); ?>"></script>
	
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
        <h2 class="my-4 text-center">Application Page</h2>
		
		<div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>
       	

		<hr>
	<div class="row" >
	<div class="col-lg-5" >
        
		<div class="row">
            <a href="<?php echo base_url(); ?>index.php/newapplicationpage">		
                    <div class="option1 card col-md-9 hover1" title="New Application">
                        <h5><span>NEW APPLICATION</span></h5>
                    </div>				
            </a>
		</div>

        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/history">		
                    <div class="option1 card col-md-9 hover1" title="Modification of Approved Project">
                        <h5><span>MODIFICATION OF APPROVED PROJECT</span></h5>				
                    </div>				
                
            </a>
		</div>
        
        <div class="row">
            <a href="<?php echo base_url(); ?>index.php/annex5">		
                
                    <div class="option1 card col-md-9 hover1" title="Extension/Termination of Approved Project">
                        <h5><span>EXTENSION OR TERMINATION OF APPROVED PROJECT</span></h5>						
                    </div>	            
            </a>
        </div>
        <br/>
		</div>
		<div class="col-lg-7">
		<p><textarea name="editor1" id="editor1" rows="300" cols="2000"></textarea></p>
		</div>
		
	</div>
			
 </div>

<br/>
</body>
<script>
    CKEDITOR.replace('editor1' ,{
		filebrowserImageBrowseUrl : '<?php echo base_url('assets/ckfinder');?>'
	});
	 var editor = CKEDITOR.replace( 'newsContent', {
        height:500,
        removePlugins : 'resize',
        filebrowserBrowseUrl        : '<?php echo base_url('assets/ckfinder/ckfinder.html'); ?>',
        filebrowserImageBrowseUrl   : '<?php echo base_url('assets/ckfinder/ckfinder.html?type=Images'); ?>',
        filebrowserFlashBrowseUrl   : '<?php echo base_url('assets/ckfinder/ckfinder.html?type=Flash'); ?>',
        filebrowserUploadUrl        : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'); ?>',
        filebrowserImageUploadUrl   : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'); ?>',
        filebrowserFlashUploadUrl   : '<?php echo base_url('assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'); ?>'
    });
    CKFinder.setupCKEditor( editor, '../' );
</script>
</html>