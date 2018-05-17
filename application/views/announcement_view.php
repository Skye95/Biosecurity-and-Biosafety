<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>BBOS announcement</title>
	
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
<h2>Announcement Testing Page</h2>
<hr />
<div class="col-lg-7">			
			<div>		
				<div class="row">
				<?php foreach ($product_list as $list) { ?>
					<div class="card my-4">
						<h5 class="card-header">Announcements</h5>
						<div class="card-body">
						<?php echo $list->announcement_description ?> 
						</div>
					</div>	
				<?php } ?> 					
				</div>
			</div>
		</div>
		<?php echo anchor('announcement/edit/'.$list->announcement_id,'Edit') ?>
		<button name="submit" type="submit" onclick="location.href='<?php echo site_url().'announcement/edit/'; ?>'"class="btn btn-primary col-md-2">Edit</button>	
 </div>

<br/>
</body>

</html>