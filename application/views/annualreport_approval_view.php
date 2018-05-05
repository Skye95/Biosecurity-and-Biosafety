<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
if($this->session->userdata('account_type') != 2 && $this->session->userdata('account_type') != 4 ){
    redirect('home/index');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Swinburne Biosafety and Biosecurity Online System - Annual or Final Report Approval</title>
    
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
        <h5>Annual or Final Report Form Approvals</h5>
        <br/>
        <input class="form-control" id="searchbar" type="text" placeholder="Search here">
        <br/>
        
        <!-- Annual or Final Report Forms -->
        <!-- IF current user is BSO, then show applications that have not been approved -->
        <?php if($this->session->userdata('account_type') == 4) { ?>
        <?php if(isset($all_annual)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            Biohazard Material Forms
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
                <?php $i=0; foreach($all_annual as $row): ?>
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
                        <td><button type="button" name = 'biohazard_load' value = 'Load' onclick="location.href='<?php echo site_url().'/annualfinalreport/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve(<?php echo $row->account_id; ?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        
        <!-- IF current user is SSBC Chair/SSBC Members, then show applications that were approved by BSO -->
        <?php if($this->session->userdata('account_type') == 2) { ?>
        <?php if(isset($all_annual_SSBC)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            Biohazard Material Forms
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
                <?php $i=0; foreach($all_annual_SSBC as $row): ?>
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
                        <td><button type="button" name = 'biohazard_load' value = 'Load' onclick="location.href='<?php echo site_url().'/exempt/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve2(<?php echo $row->account_id; ?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject2(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        <!-- End Of Annual or Final Report Form -->
        
        <!-- HIRARC Form  -->
        <!-- IF current user is BSO, then show applications that have not been approved -->
        <?php if($this->session->userdata('account_type') == 4) { ?>
        <?php if(isset($all_hirarc)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            HIRARC Form
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
                <?php $i=0; foreach($all_hirarc as $row): ?>
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
                        <td><button type="button" name = 'hirarc_load' value = 'Load' onclick="location.href='<?php echo site_url().'/hirarc/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve_hirarc(<?php echo $row->account_id; ?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject_hirarc(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        
        <!-- IF current user is SSBC Chair/SSBC Members, then show applications that were approved by BSO -->
        <?php if($this->session->userdata('account_type') == 2) { ?>
        <?php if(isset($all_hirarc_SSBC)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            HIRARC Form 
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
                <?php $i=0; foreach($all_hirarc_SSBC as $row): ?>
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
                        <td><button type="button" name = 'hirarc_load' value = 'Load' onclick="location.href='<?php echo site_url().'/hirarc/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve_hirarc2(<?php echo $row->account_id;?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject_hirarc2(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        <!-- End Of HIRARC Form -->
        
        <!-- SWP Form  -->
        <!-- IF current user is BSO, then show applications that have not been approved -->
        <?php if($this->session->userdata('account_type') == 4) { ?>
        <?php if(isset($all_swp)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            SWP Form
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
                <?php $i=0; foreach($all_swp as $row): ?>
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
                        <td><button type="button" name = 'swp_load' value = 'Load' onclick="location.href='<?php echo site_url().'/swp/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve_swp(<?php echo $row->account_id; ?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject_swp(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        
        <!-- IF current user is SSBC Chair/SSBC Members, then show applications that were approved by BSO -->
        <?php if($this->session->userdata('account_type') == 2) { ?>
        <?php if(isset($all_swp_SSBC)) { ?>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th colspan="6">
                            SWP Form 
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
                <?php $i=0; foreach($all_swp_SSBC as $row): ?>
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
                        <td><button type="button" name = 'swp_load' value = 'Load' onclick="location.href='<?php echo site_url().'/swp/load_form?id='.$row->application_id;?>'" class="btn btn-primary">Load</button></td>
                        <!--
                        <td class="text-center">
                            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/accountapproval/approve/<?php echo $row->account_id; ?>" title="Approve"><i class="fa fa-check"></i></a>
                            <hr/>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/accountapproval/reject/<?php echo $row->account_id; ?>" title="Reject"><i class="fa fa-times"></i></a>
                        </td>
                        -->
                        <td class="text-center">
                            <button class="btn btn-success" onclick="approve_swp_2(<?php echo $row->account_id;?>)" title="Approve"><i class="fa fa-check"></i></button>
                            <hr/>
                            <button class="btn btn-danger" onclick="reject_swp_2(<?php echo $row->account_id; ?>)" title="Reject"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php } ?>
        <?php } ?>
        <!-- End Of SWP Form -->
        
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
    
    <!-- Annual & Final Report Approval and Reject Function -->
    <script>
        function approve(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve/" + i;
        }
        
        function reject(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject/" + i + "/" + btoa(j);
            }
        }
    </script>
    
    <script>
        function approve2(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve2/" + i;
        }
        
        function reject2(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject2/" + i + "/" + btoa(j);
            }
        }
    </script>
    
    <!-- HIRARC Approval and Reject Function -->
    <script>
        function approve_hirarc(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve_hirarc/" + i;
        }
        
        function reject_hirarc(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject_hirarc/" + i + "/" + btoa(j);
            }
        }
    </script>
    
    <script>
        function approve_hirarc2(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve_hirarc2/" + i;
        }
        
        function reject_hirarc2(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject_hirarc2/" + i + "/" + btoa(j);
            }
        }
    </script>
    <!-- END of HIRARC -->
    <!-- SWP Approval and Reject Function -->
    <script>
        function approve_swp(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve_swp/" + i;
        }
        
        function reject_swp(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject_swp/" + i + "/" + btoa(j);
            }
        }
    </script>
    
    <script>
        function approve_swp_2(i){
            window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/approve_swp_2/" + i;
        }
        
        function reject_swp_2(i){
            var j = prompt("Reason for Rejecting:", "Does not meet requirements");
            if (j != null) {
                window.location = "<?php echo base_url(); ?>index.php/annualreport_approval/reject_swp_2/" + i + "/" + btoa(j);
            }
        }
    </script>
    <!-- END of SWP -->
    
</body>
</html>