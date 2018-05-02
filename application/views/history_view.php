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
                    <?php $i=0; foreach($past as $row): ?>
                        <tr class="searchable">
                            <td><?php echo $i = $i + 1; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['approval']; ?></td>
                            <td class="text-center">
                                <i class="fa fa-bars btn btn-info" onclick="view_details(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Details"></i>
                                <i class="fa fa-edit btn btn-warning" onclick="edit_details(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Edit"></i>
                                <i class="fa fa-clock btn btn-primary" onclick="delete_details(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Extend"></i>
                                <i class="fa fa-times btn btn-danger" onclick="view_details(<?php echo $row['application_id']; ?>, '<?php echo $row['type']; ?>')" title="Terminate"></i>
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
                function view_details(i, j){
                    alert(j);
                }

                function edit_details(i, j){
                    
                }

                function delete_details(i, j){
                    
                }
            </script>
        </div>
    </div>
</body>
</html>