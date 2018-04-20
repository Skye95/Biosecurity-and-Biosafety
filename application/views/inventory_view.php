<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Biosafety and Biosecurity Online System - Inventory</title>
    
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
    <!-- Navigation Bar -->
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
        <input class="form-control" id="searchbar" type="text" placeholder="Enter your text here to search for a result!">
        <br/>
        
        <?php if(isset($inventory)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Program</th>
                        <th>Program Type</th>
                        <th>Unit Convenor / Project Investigator</th>
                        <th>Unit Name / Experiment Title</th>
                        <th>Project Title & Project Reference No.</th>
                        <th>Type of Biohazard Material</th>
                        <th>Name of Biohazard Material</th>
                        <th>Biohazard Material ID</th>
                    </tr>
                </thead>
                <tbody id="inventory">
                <?php foreach($inventory as $row): ?>
                    <tr>
                        <td><?php echo $row->inventory_id; ?></td>
                        <td><?php echo $row->program; ?></td>
                        <td><?php echo $row->program_type; ?></td>
                        <td><?php echo $row->unit_convenor . $row->project_investigator; ?></td>
                        <td><?php echo $row->unit_name . " " . $row->experiment_title; ?></td>
                        <td><?php echo $row->project_title . " " . $row->project_reference_no; ?></td>
                        <td><?php echo $row->biohazard_type; ?></td>
                        <td><?php echo $row->biohazard_name; ?></td>
                        <td><?php echo $row->biohazard_id; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <script>
            $(document).ready(function(){
                $("#searchbar").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#inventory tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        
        <?php } else { ?>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Biohazard Material ID</th>
                        <th>Name of Biohazard Material</th>
                        <th>Risk Group</th>
                        <th>Location of Collection / Supplier</th>
                        <th>Keeper</th>
                        <th>Log In Personnel</th>
                    </tr>
                </thead>
                <tbody id="storage">
                <?php foreach($storage as $row): ?>
                    <tr>
                        <td><?php echo $row->storage_id; ?></td>
                        <td><?php echo $row->biohazard_id; ?></td>
                        <td><?php echo $row->biohazard_name; ?></td>
                        <td><?php echo $row->risk_group; ?></td>
                        <td><?php echo $row->storage_location; ?></td>
                        <td><?php echo $row->keeper_name; ?></td>
                        <td><?php echo $row->log_in_personnel; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <script>
            $(document).ready(function(){
                $("#searchbar").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#storage tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        
        <?php } ?>
        <br/>
    </div>
</body>
</html>