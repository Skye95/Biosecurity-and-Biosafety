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
            <div class="col-md-10 text-center bg-white">
                <br/>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 bg-white">
                    <?php echo form_open('inventory/new_storage'); ?>
                        <br/>
                        <legend>New Storage Application</legend>
                        <br/>
                        <div class="form-group">
                            <label for="biohazardid">Biohazard ID:</label>
                            <input class="form-control" id="biohazardid" name="biohazard_id" placeholder="Enter the biohazard id here." type="text" value="<?php echo set_value('biohazard_id'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_id'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="biohazardname">Biohazard Name:</label>
                            <input class="form-control" id="biohazardname" name="biohazard_name" placeholder="Enter the biohazard name here." type="text" value="<?php echo set_value('biohazard_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_name'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="riskgroup">Risk Group:</label>
                            <input class="form-control" id="riskgroup" name="risk_group" placeholder="Enter risk group here." type="text" value="<?php echo set_value('risk_group'); ?>" />
                            <span class="text-danger"><?php echo form_error('risk_group'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="locationname">Location:</label>
                            <input class="form-control" id="locationname" name="location" placeholder="Enter location here." type="text" value="<?php echo set_value('location'); ?>" />
                            <span class="text-danger"><?php echo form_error('location'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="biohazardsource">Biohazard Source:</label>
                            <input class="form-control" id="biohazardsource" name="biohazard_source" placeholder="Enter biohazard source here." type="text" value="<?php echo set_value('biohazard_source'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_source'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="datecreated">Date Created:</label>
                            <input class="form-control" id="datecreated" name="date_created" placeholder="Enter the date here." type="date" value="<?php echo set_value('date_created'); ?>" />
                            <span class="text-danger"><?php echo form_error('date_created'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="storagelocation">Storage Location:</label>
                            <input class="form-control" id="storagelocation" name="storage_location" placeholder="Enter storage location here." type="text" value="<?php echo set_value('storage_location'); ?>" />
                            <span class="text-danger"><?php echo form_error('storage_location'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="keepername">Keeper Name:</label>
                            <input class="form-control" id="keepername" name="keeper_name" placeholder="Enter the keeper name here." type="text" value="<?php echo set_value('keeper_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('keeper_name'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="loginpersonnel">Log In Personnel:</label>
                            <input class="form-control" id="loginpersonnel" name="log_in_personnel" placeholder="Enter the log in personnel here." type="text" value="<?php echo set_value('log_in_personnel'); ?>" />
                            <span class="text-danger"><?php echo form_error('log_in_personnel'); ?></span>
                        </div>

                        <div class="form-group text-center">
                            <span class="col-md-2"></span>
                            <button name="submit" type="submit" class="btn btn-success col-md-3">Submit</button>
                            <span class="col-md-2"></span>
                            <button name="cancel" type="reset" class="btn col-md-3">Reset</button>
                            <span class="col-md-2"></span>
                        </div>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        <br/>
    </div>
</body>
</html>