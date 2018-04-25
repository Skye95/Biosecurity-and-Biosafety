<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
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
        
        .table {
            background-color: white;
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
        <input class="form-control" id="searchbar" type="text" placeholder="Search here">
        <br/>
        
        <?php if(isset($inventory)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
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
                        <th></th>
                    </tr>
                </thead>
                <tbody id="inventory">
                <?php $i=0; foreach($inventory as $row): ?>
                    <tr class="searchable">
                        <td><?php echo $i = $i+1 ?></td>
                        <td><?php echo $row->program; ?></td>
                        <td><?php echo $row->program_type; ?></td>
                        <td><?php echo $row->unit_convenor . $row->project_investigator; ?></td>
                        <td><?php echo $row->unit_name . " " . $row->experiment_title; ?></td>
                        <td><?php echo $row->project_title . " " . $row->project_reference_no; ?></td>
                        <td><?php echo $row->biohazard_type; ?></td>
                        <td><?php echo $row->biohazard_name; ?></td>
                        <td><?php echo $row->biohazard_id; ?></td>
                        <td class="text-center">
                            <button class="btn btn-info" onclick="view_details(<?php echo $row->inventory_id; ?>)"><i class="fa fa-bars"></i></button>
                        </td>
                    </tr>
                    <tr id="tr<?php echo $row->inventory_id; ?>" style="display:none;">
                        <td colspan="10">
                            <p>Date Received: <?php echo $row->date_received; ?></p>
                            <p>Log In Personnel: <?php echo $row->log_in_personnel; ?></p>
                            <p>Keeper Name: <?php echo $row->keeper_name; ?></p>
                            <p>Remarks: <?php echo $row->remarks; ?></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <script>
            $(document).ready(function(){
                $("#searchbar").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#inventory .searchable").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        
        <script>
            function view_details(i){
                if (document.getElementById("tr"+i).style.display == "table-row"){
                    document.getElementById("tr"+i).style.display = "none";
                } else {
                    document.getElementById("tr"+i).style.display = "table-row";
                }
            }
        </script>
        <?php } else { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Biohazard Material ID</th>
                        <th>Name of Biohazard Material</th>
                        <th>Risk Group</th>
                        <th>Location of Collection / Supplier</th>
                        <th>Keeper</th>
                        <th>Log In Personnel</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="storage">
                <?php $i=0; foreach($storage as $row): ?>
                    <tr class="searchable">
                        <td><?php echo $i = $i+1 ?></td>
                        <td><?php echo $row->biohazard_id; ?></td>
                        <td><?php echo $row->biohazard_name; ?></td>
                        <td><?php echo $row->risk_group; ?></td>
                        <td><?php echo $row->storage_location; ?></td>
                        <td><?php echo $row->keeper_name; ?></td>
                        <td><?php echo $row->log_in_personnel; ?></td>
                        <td class="text-center">
                            <button class="btn btn-info" onclick="view_details(<?php echo $row->storage_id; ?>)"><i class="fa fa-bars"></i></button>
                        </td>
                    </tr>
                    <tr id="tr<?php echo $row->storage_id; ?>" style="display:none;">
                        <td colspan="10">
                            <p>Location of Supplier / Supplier Name: <?php echo $row->location; ?></p>
                            <p>Sourche of Biohazardous Material: <?php echo $row->biohazard_source; ?></p>
                            <p>Date Created: <?php echo $row->date_created; ?></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <script>
            $(document).ready(function(){
                $("#searchbar").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#storage .searchable").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        
        <?php } ?>
        <br/>
    </div>
    
    <script>
        function view_details(i){
            if (document.getElementById("tr"+i).style.display == "table-row"){
                document.getElementById("tr"+i).style.display = "none";
            } else {
                document.getElementById("tr"+i).style.display = "table-row";
            }
        }
    </script>
</body>
</html>