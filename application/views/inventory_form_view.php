<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Inventory Application</title>
    
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
                    <?php echo form_open('inventory/new_inventory'); ?>
                        <br/>
                        <legend>New Inventory Application</legend>
                        <br/>
                        <div class="form-group">
                            <label for="programname">Program:</label>
                            <input class="form-control" id="programname" name="program" placeholder="Enter program name here." type="text" value="<?php echo set_value('program'); ?>" />
                            <span class="text-danger"><?php echo form_error('program'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="programtype">Program Type:</label>
                            <input class="form-control" id="programtype" name="program_type" placeholder="Enter program type here." type="text" value="<?php echo set_value('program_type'); ?>" />
                            <span class="text-danger"><?php echo form_error('program_type'); ?></span>
                        </div>
                    
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="unitconvenor">Unit Convenor:</label>
                                <input class="form-control" id="unitconvenor" name="unit_convenor" placeholder="Enter the unit convenor here." type="text" value="<?php echo set_value('unit_convenor'); ?>" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="projectinvestigator">Project Investigator:</label>
                                <input class="form-control" id="projectinvestigator" name="project_investigator" placeholder="Enter the project investigator here." type="text" value="<?php echo set_value('project_investigator'); ?>" />
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="unitname">Unit Name:</label>
                                <input class="form-control" id="unitname" name="unit_name" placeholder="Enter unit name here." type="text" value="<?php echo set_value('unit_name'); ?>" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="experimenttitle">Experiment Title:</label>
                                <input class="form-control" id="experimenttitle" name="experiment_title" placeholder="Enter experiment title here." type="text" value="<?php echo set_value('experiment_title'); ?>" />
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="projecttitle">Project Title:</label>
                                <input class="form-control" id="projecttitle" name="project_title" placeholder="Enter project title here." type="text" value="<?php echo set_value('project_title'); ?>" />
                                <p style="font-size:11px;"><em>* Please leave the Project Investigator section empty if this section is filled.</em></p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="referenceno">Project Reference No:</label>
                                <input class="form-control" id="referenceno" name="project_reference_no" placeholder="Enter project reference number here." type="text" value="<?php echo set_value('project_reference_no'); ?>" />
                                <p style="font-size:11px;"><em>* Please leave the Unit Convenor section empty if this section is filled.</em></p>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="biohazardtype">Biohazard Type:</label>
                            <input class="form-control" id="biohazardtype" name="biohazard_type" placeholder="Enter the biohazard type here." type="text" value="<?php echo set_value('biohazard_type'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_type'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="biohazardname">Biohazard Name:</label>
                            <input class="form-control" id="biohazardname" name="biohazard_name" placeholder="Enter the biohazard name here." type="text" value="<?php echo set_value('biohazard_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_name'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="biohazardid">Biohazard ID:</label>
                            <input class="form-control" id="biohazardid" name="biohazard_id" placeholder="Enter the biohazard ID here." type="text" value="<?php echo set_value('biohazard_id'); ?>" />
                            <span class="text-danger"><?php echo form_error('biohazard_id'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="datereceived">Date Received:</label>
                            <input class="form-control" id="datereceived" name="date_received" placeholder="Enter the date here." type="date" value="<?php echo set_value('date_received'); ?>" />
                        </div>
                    
                        <div class="form-group">
                            <label for="loginpersonnel">Log In Personnel:</label>
                            <input class="form-control" id="loginpersonnel" name="log_in_personnel" placeholder="Enter the log in personnel name here." type="text" value="<?php echo set_value('log_in_personnel'); ?>" />
                            <span class="text-danger"><?php echo form_error('log_in_personnel'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="keepername">Keeper's Name:</label>
                            <input class="form-control" id="keepername" name="keeper_name" placeholder="Enter the keeper's name here." type="text" value="<?php echo set_value('keeper_name'); ?>" />
                            <span class="text-danger"><?php echo form_error('keeper_name'); ?></span>
                        </div>
                    
                        <div class="form-group">
                            <label for="remark">Remarks:</label>
                            <input class="form-control" id="remark" name="remarks" placeholder="Enter remarks here." type="text" value="<?php echo set_value('remarks'); ?>" />
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