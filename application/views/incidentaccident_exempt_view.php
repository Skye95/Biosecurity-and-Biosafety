<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
if($this->session->userdata('account_type') != 4 && $this->session->userdata('account_type') != 5 ){
    redirect('home/index');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Minor Biological Incident or Accident Approval</title>
    
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
        <h5>Exempt Dealing or Biohazardous Material Form Approvals</h5>
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
        
        <!-- Incident Accident Report Forms -->
        <!-- IF current user is BSO, then show applications that have not been approved -->
        <?php if($this->session->userdata('account_type') == 4) { ?>
        <?php if(isset($all_exemptincident)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            Incident Accident Report Form
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Account Email</th>
                        <th>Full Name</th>
                        <th>Account Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="account">
                <?php $i=0; foreach($all_exemptincident as $row): ?>
                    <tr class="searchable">
                        <td><?php echo $i = $i+1 ?></td>
                        <td><?php echo $row->account_email; ?></td>
                        <td><?php echo $row->account_fullname; ?></td>
                        <td><?php 
                                        if($row->account_type == 1) {
                                            echo "Applicant / PI";
                                        } elseif($row->account_type == 2) {
                                            echo "SSBC Chair / SSBC Members";
                                        } elseif($row->account_type == 3) {
                                            echo "Students / Postgraduates";
                                        } elseif($row->account_type == 4) {
                                            echo "BSO";
                                        } elseif($row->account_type == 5) {
                                            echo "HSO / Lab Officer";
                                        }
                            ?></td>
                        <td><button type="button" name = 'procurement_load' value = 'Load' onclick="location.href='<?php echo site_url().'/incidentaccidentreport/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <i class="btn btn-success fa fa-check" onclick="approve(<?php echo $row->account_id; ?>, <?php echo $row->application_id; ?>)" title="Approve"></i>
                            <hr/>
                            <i class="btn btn-danger fa fa-times" onclick="reject(<?php echo $row->account_id; ?>, <?php echo $row->application_id; ?>)" title="Reject"></i>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        
        <!-- IF current user is HSO, then show applications that were approved by BSO -->
        <?php if($this->session->userdata('account_type') == 5) { ?>
        <?php if(isset($all_exemptincident_SSBC)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            Incident Accident Report Forms
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Account Email</th>
                        <th>Full Name</th>
                        <th>Account Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="account">
                <?php $i=0; foreach($all_exemptincident_SSBC as $row): ?>
                    <tr class="searchable">
                        <td><?php echo $i = $i+1 ?></td>
                        <td><?php echo $row->account_email; ?></td>
                        <td><?php echo $row->account_fullname; ?></td>
                        <td><?php 
                                        if($row->account_type == 1) {
                                            echo "Applicant / PI";
                                        } elseif($row->account_type == 2) {
                                            echo "SSBC Chair / SSBC Members";
                                        } elseif($row->account_type == 3) {
                                            echo "Students / Postgraduates";
                                        } elseif($row->account_type == 4) {
                                            echo "BSO";
                                        } elseif($row->account_type == 5) {
                                            echo "HSO / Lab Officer";
                                        }
                            ?></td>
                        <td><button type="button" name = 'load' value = 'Load' onclick="location.href='<?php echo site_url().'/incidentaccidentreport/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve2(<?php echo $row->account_id; ?>, <?php echo $row->application_id; ?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject2(<?php echo $row->account_id; ?>, <?php echo $row->application_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        <!-- End Of Incident Accident Report -->
        
        <br/>
    </div>
    
    <script>
        $(document).ready(function(){
            $("#searchbar").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#account .searchable").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    
    <script>
        function approve(i,k){
            window.location = "<?php echo base_url(); ?>index.php/minorincident_approval/approve/" + i + "/" + k;
        }
        
        function reject(i,k){
            var j = prompt("Reason for Rejecting:", "Did not meet requirement");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/incidentaccident_exempt/reject/" + i + "/" + k + "/" + btoa(j);
            }
        }
    </script>
    
    <script>
        function approve2(i,k){
            window.location = "<?php echo base_url(); ?>index.php/minorincident_approval/approve2/" + i + "/" + k;
        }
        
        function reject2(i,k){
            var j = prompt("Reason for Rejecting:", "Did not meet requirement");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/minorincident_approval/reject2/" + i + "/" + k + "/" + btoa(j);
            }
        }
    </script>
</body>
</html>