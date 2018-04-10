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
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php include_once 'template/navbar.php' ?>
    
    <!-- Page Content -->
    <div class="container">
        <h2>Inventory</h2>
        <br/>
        <div class="table-responsive">
            <table class="table table-hover">
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
                    <th>Date Received</th>
                    <th>Log In Personnel</th>
                    <th>Keeper</th>
                    <th>Remarks</th>
                </tr>
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
                    <td><?php echo $row->date_received; ?></td>
                    <td><?php echo $row->log_in_personnel; ?></td>
                    <td><?php echo $row->keeper_name; ?></td>
                    <td><?php echo $row->remarks; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <br/>
    </div>
</body>
</html>