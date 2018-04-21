<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Storage Application</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        button {
            margin-right: 12px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include_once 'template/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">
        <div class="text-center">
            <a href="<?php echo base_url(); ?>index.php/inventory/index"><button class="btn btn-info">Inventory Database</button></a>
            <a href="<?php echo base_url(); ?>index.php/inventory/index2"><button class="btn btn-info">Storage Database</button></a>
            <a href="<?php echo base_url(); ?>index.php/inventory/new_inventory"><button class="btn btn-info">New Inventory Application</button></a>
            <a href="<?php echo base_url(); ?>index.php/inventory/new_storage"><button class="btn btn-info">New Storage Application</button></a>
        </div>
        <br/>
        <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 bg-white">
                    <?php echo form_open('inventory/new_inventory'); ?>
                        <br/>
                        <legend>New Storage Application</legend>
                        <br/>
                        <div class="form-group">
                        </div>

                        <div class="form-group text-center">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                            <button name="cancel" type="reset" class="btn">Reset</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 text-center bg-white">
                    <br/>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <div class="col-md-1">
                </div>
            </div>
    </div>
</body>
</html>