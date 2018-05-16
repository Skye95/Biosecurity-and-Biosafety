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
		<br>
		<div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>
       	

		<hr>
	<div class="row" >
	
	<div>
                        <br/>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
		<div class="col-lg-12">
			<form method="post">
				<p><textarea name="announcement_description" id="editor1" rows="30000" cols="500"></textarea></p>
				<button name="submit" type="submit" class="btn btn-primary col-md-2">Submit</button>
			</form>
		</div>
		<?php 
			if(isset($_POST['announcement_description']))
			{ 
				$text = $_POST['announcement_description'];
				
				echo "$text"; 
		
			} 
			
		?>
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