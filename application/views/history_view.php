<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Past Applications</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        .table {
            background-color: white;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include_once 'template/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <div class="container">
            <h5>Submitted or Past Applications</h5>
            <br/>
            <input class="form-control" id="searchbar" type="text" placeholder="Search here">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 text-center">
                    <br/>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <div class="col-md-1">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Application Type</th>
                            <th>Approval Progress</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="inventory">
                    <?php $i=0; foreach(/*array_reverse($past)*/ $past as $row): ?>
                        <tr class="searchable">
                            <td class="text-center"><?php echo $i = $i + 1; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php 
                                if($row['approval'] == 0 || $row['approval'] == null){
                                    echo "Awaiting Approval";
                                } else {
                                    echo $row['approval'];
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <i class="fa fa-bars btn btn-info" onclick="view_application(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Details"></i>
                                <i class="fa fa-edit btn btn-warning" onclick="edit_application(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Edit"></i>
                                <i class="fa fa-clock btn btn-primary" onclick="extend_application(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Extend"></i>
                                <i class="fa fa-times btn btn-danger" onclick="terminate_application(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Terminate"></i>
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
                function view_application(i, j){
                    if(j == "Annex 2"){
                        window.location = "<?php echo base_url(); ?>index.php/annex2/load_form/" + i;
                    } else if (j == "Annex 3"){
                        window.location = "<?php echo base_url(); ?>index.php/annex3/load_form/" + i;
                    } else if (j == "Annex 4"){
                        window.location = "<?php echo base_url(); ?>index.php/annex4/load_form/" + i;
                    } else if (j == "Annex 5"){
                        window.location = "<?php echo base_url(); ?>index.php/annex5/load_form/" + i;
                    } else if (j == "Annual / Final Report"){
                        window.location = "<?php echo base_url(); ?>index.php/annualfinalreport/load_form/" + i;
                    } else if (j == "Biohazardous"){
                        window.location = "<?php echo base_url(); ?>index.php/biohazard/load_form/" + i;
                    } else if (j == "Exempt"){
                        window.location = "<?php echo base_url(); ?>index.php/exempt/load_form/" + i;
                    } else if (j == "Form E"){
                        window.location = "<?php echo base_url(); ?>index.php/forme/load_form/" + i;
                    } else if (j == "Form F"){
                        window.location = "<?php echo base_url(); ?>index.php/formf/load_form/" + i;
                    } else if (j == "HIRARC Form"){
                        window.location = "<?php echo base_url(); ?>index.php/hirarc/load_form/" + i;
                    } else if (j == "Incident Accident Report"){
                        window.location = "<?php echo base_url(); ?>index.php/incidentaccidentreport/load_form/" + i;
                    } else if (j == "Notification Of Exporting Biological Material"){
                        window.location = "<?php echo base_url(); ?>index.php/notification_of_exporting_biological_material/load_form/" + i;
                    } else if (j == "Notification Of LMO and Biohazardous Materials"){
                        window.location = "<?php echo base_url(); ?>index.php/notification_of_LMO_and_BM/load_form/" + i;
                    } else if (j == "PC1"){
                        window.location = "<?php echo base_url(); ?>index.php/pc1/load_form/" + i;
                    } else if (j == "PC2"){
                        window.location = "<?php echo base_url(); ?>index.php/pc2/load_form/" + i;
                    } else if (j == "Procurement"){
                        window.location = "<?php echo base_url(); ?>index.php/procurement/load_form/" + i;
                    } else if (j == "Safety Work Procedure Form"){
                        window.location = "<?php echo base_url(); ?>index.php/swp/load_form/" + i;
                    }
                }

                function edit_application(i, j){
                    alert(j);
                }

                function extend_application(i, j){
                    alert(j);
                }
                
                function terminate_application(i, j){
                    alert(j);
                }
            </script>
        </div>
    </div>
</body>
</html>