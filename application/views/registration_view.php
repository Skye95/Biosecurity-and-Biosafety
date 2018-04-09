<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Biosafety and Biosecurity Online System - Registration</title>
    
    <style>
        body {
            padding-top: 82px;
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
        <div class="row">
            <div class="col-xl-4">
            </div>
            <div class="col-xl-4 bg-white">
                <?php echo form_open('registration/index'); ?>
                    <br/>
                    <legend>Registration</legend>
                    <br/>
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input class="form-control" id="fullname" name="account_fullname" placeholder="Enter your name here." type="text" value="<?php echo set_value('account_fullname'); ?>" />
                        <span class="text-danger"><?php echo form_error('account_fullname'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email_add">Email Address:</label>
                        <input class="form-control" id="email_add" name="account_email" placeholder="Enter your email address here." type="text" value="<?php echo set_value('account_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('account_email'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" id="password" name="account_password" placeholder="Enter your password here." type="password" />
                        <span class="text-danger"><?php echo form_error('account_password'); ?></span>
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword">Confirm Password:</label>
                        <input class="form-control" id="confirmpassword" name="account_confirmpassword" placeholder="Reenter your password here." type="password" />
                        <span class="text-danger"><?php echo form_error('account_confirmpassword'); ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Account Type:</label>
                        <select class="form-control" id="type" name="account_type" >
                            <option value="1">Applicant / PI</option>
                            <option value="2">SSBC</option>
                            <option value="3">HSO / Lab Officer</option>
                            <option value="4">Postgraduate</option>
                        </select>
                    </div>
                    
                    <div class="form-group text-center">
                        <button name="submit" type="submit" class="btn btn-success">Register</button>
                        <button name="cancel" type="reset" class="btn">Reset</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <div class="col-xl-4">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
            </div>
            <div class="col-xl-4 text-center bg-white">
                <br/>
                <?php echo $this->session->flashdata('msg'); ?>
                <p>Already had an account? <a href="<?php echo base_url(); ?>index.php/landing/index">Login Now</a></p>
            </div>
            <div class="col-xl-4">
            </div>
        </div>
    </div>
</body>
</html>