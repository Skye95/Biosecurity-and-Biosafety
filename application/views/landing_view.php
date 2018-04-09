<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Biosafety and Biosecurity Online System</title>
    
    <style>
        body {
            background-image: url(<?php echo base_url('assets/images/login.jpg'); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include_once 'template/navbar.php' ?>
    
    <!-- Page Content -->
    <div class="container">
        <h1><br/><br/>This shows that this page is working correctly!</h1>
        
        <h2>Click here to redirect to the homepage: <a href="<?php echo base_url(); ?>index.php/home/index">CLICK ME!</a></h2>
        
        <h2>Click here to redirect to the registration page: <a href="<?php echo base_url(); ?>index.php/registration/index">CLICK ME!</a></h2>
    </div>
</body>
</html>