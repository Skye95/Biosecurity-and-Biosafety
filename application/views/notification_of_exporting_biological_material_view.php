<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Notification of Exporting Biological Material Form</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
        }
        
        #first-table{
            background-color: #95a5a6;
            text-align: center;
        }
        
        .tblTitle{
            background-color: black;
            color: white;
            text-align: center;
        }
        
        .tbheader1{
            background-color:  #95a5a6 ;
        }
        
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
               <form class="form-horizontal">
                   <div>
                       <h5><strong>PLEASE FILL IN ALL INFORMATION REQUESTED</strong></h5>
                   </div>
                   
                   <br>
                   
                   <table class="table table-bordered" id="first-table">
                       <thead>
                           <tr>
                               <th>Date Received</th>
                               <th>SSBC Reference Number</th>
                           </tr>
                       </thead>
                       <tbody>
                           <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Office use only"></td>
                           <td><input type="text" name="SBC_reference_no" class="form-control" placeholder="Office use only"></td>
                       </tbody>
                   </table>
				   
				   <hr>
                   
                   <table class="table table-bordered" id="section_1">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_1"><strong>SECTION 1 – Personnel Details</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tbheader1">1.01 Name (as per I.C./Passport):</th>
                                   <td><input type="text" name="personnel_name" class="form-control" value="<?php echo set_value('institutional_address'); ?>">
                                   </td>
                                   <th class="tbheader1">1.02 Staff/Student No.:</th>
                                   <td><input type="text" name="personnel_staff_student_no" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.03 Designation:</th>
                                   <td><input type="text" class="form-control" name="personnel_designation"></td>
                                   <th class="tbheader1">1.04 Faculty/unit:</th>
                                   <td><input type="text" class="form-control" name="personnel_faculty"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.05 Project Title:</th>
                                   <td><input type="text" class="form-control" name="personnel_project_title"></td>
							   	   <th class="tbheader1">Ref. No.:</th>
                                   <td><input type="text" class="form-control" name="personnel_reference_no"></td>
							   </tr>                              
                           </tbody>
                       <span class="text-danger"><?php echo form_error('institutional_address'); ?></span>
                       </table>
					   
					   <hr>
                  <div>
				   <table class="table table-bordered" id="section_2" >
				           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_2"><strong>SECTION 2 – Details of the Biological Material to be Exported</strong></h8></th>
                               </tr>
                           </thead>

                       <table class="table table-bordered">
						   <tr>
                               <th colspan="4"class="tbheader1">A. List of Exempted Living Modified Organism (LMO) to be Exported</th>
							   <th colspan="1" class="tbheader1"> 
								<div class="checkbox"><label><input type="checkbox" name="LMO_list" value=""> Not Applicable</label>
								</div>
							   </th>
                           </tr>
                           <tbody style="width:100%">
                               <tr style="width:25%">
                                   <th>Name</th>
                                   <th>Risk Level</th>
                                   <th>Category A or B Substances</th>
                                   <th>Quantity</th>
                                   <th>Volume (g or mL)</th>                                  
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="LMO_name"></th>
                                   <th><input type="text" class="form-control" name="LMO_risk_level"></th>
                                   <th><input type="text" class="form-control" name="LMO_category"></th>
                                   <th><input type="number" class="form-control" name="LMO_quantity"></th>
                                   <th><input type="text" class="form-control" name="LMO_volume"></th>
                               </tr>							   
                           </tbody>
                       </table>
					   
					   <table class="table table-bordered">
						   <tr>
                               <th colspan="4"class="tbheader1">B. List of Biological Material to be Exported</th>
							   <th colspan="1" class="tbheader1"> 
								<div class="checkbox"><label><input type="checkbox" name="biological_list" value=""> Not Applicable</label>
								</div>
							   </th>
                           </tr>
                           <tbody style="width:100%">
                               <tr style="width:25%">
                                   <th class="tblTitle2">Name</th>
                                   <th class="yellowdata">Risk Level</th>
                                   <th class="yellowdata">Category A or B Substances</th>
                                   <th class="reddata">Quantity</th>
                                   <th class="reddata">Volume (g or mL)</th>                                  
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="biological_name"></th>
                                   <th><input type="text" class="form-control" name="biological_risk_level"></th>
                                   <th><input type="text" class="form-control" name="biological_category"></th>
                                   <th><input type="number" class="form-control" name="biological_quantity"></th>
                                   <th><input type="text" class="form-control" name="biological_volume"></th>
                               </tr>							   
                           </tbody>
                       </table>				   
                   </div>
                   
				   <hr>                  
				   <div>                      
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8 id="section_3"><strong>SECTION 3 – Details of the Importing Country / Institute</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>3.01   Country:</th>
                                   <td><input type="text" class="form-control" name="importing_country"></td>
                               </tr>
							   <tr>
                                   <th>3.02   Institute Name:</th>
                                   <td><input type="text" class="form-control" name="importing_institude"></td>
                               </tr>
                               <tr>
                                   <th>3.03   Person-in-charge (who receive the material):</th>
                                   <td><input type="text" class="form-control" name="importing_person_in_charge"></td>
                               </tr>
                               <tr>
                                   <th>3.04   Contact Number: </th>
                                   <td><input type="number" class="form-control" name="importing_person_in_charge_telephone_no"></td>
                               </tr>                 
                           </tbody>
                       </table>
                   </div>
				   
				   <hr>
                   <table  class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_4"><strong>SECTION 4 – Declaration</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">							   
								<ul>
                                      <li>I, hereby declare that the information I have provided in this form for Notification of Exporting Biological Material is true and correct.
								   
                                      <li>Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice at <a href="http://www.swinburne.edu.my/privacy/">http://www.swinburne.edu.my/privacy</a>
								        and Employee's Privacy Collection Notice at <a style="color:blue;">Blackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.</a>
								</ul>
							   </td>                               
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" name="declaration_name" placeholder="Signature: your name"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="declaration_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
				   <hr>
                   <table  class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_5"><strong>SECTION 5 – Signature</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>                            
                               <td>Verified By(Project Investigator):</td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" name="signature_verified_by" placeholder="Signature:"></td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="signature_verified_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
				   <hr>
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_6"><strong>SECTION 6 – For Office Use Only</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                <div class="checkbox">
                                     <label><input type="checkbox" name="notification_approved_by" value="">Approved By:</label>
                                </div>
                                <div class="checkbox">
                                     <label><input type="checkbox" name="notification_declined_by" value="">Declined By:</label>
                                </div>
                               </td>
                               <td style="width:450px">
                                   <input type="text" class="form-control" name="notification_reviewed_by" placeholder="Reviewed by:">
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" name="signature_verified_by" placeholder="Signature:"></td>
							   <td><input type="text" class="form-control" name="signature_verified_by" placeholder="Signature:"></td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="notification_approve_decline_date" placeholder="Date:"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="notification_reviewed_by_date" placeholder="Date:"></td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="text" class="form-control" name="notification_approve_decline_remarks" placeholder="Remarks:">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="notification_reviewed_by_remarks" placeholder="Remarks:">
                               </td>
                           </tr>
                       </tbody>
                   </table>
				   
				   <hr>
				   <div>                      
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8 id="section_7"><strong>SECTION 7 – Follow-up of the Exported Biological Material (For Office Use Only)</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>7.01   Delivered date:</th>
                                   <td><input type="date" class="form-control" name="delivered_date"></td>
                               </tr>
                               <tr>
                                   <th>7.02   Any incident or accident occurs during the exporting?:</th>
                                   <td><input type="text" class="form-control" name="incident_accident_report"></td>
                               </tr>              
                           </tbody>
                       </table>
                   </div>
				   
				   <hr>
				   
                    <div>
                       <div class="checkbox">
                           <label><input type="checkbox" value="application_approved" disabled>Approved</label>
                       </div>
					</div>
					
					<hr>
					
                   <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                   
               </form>
            </div>
            
            <div class="col-md-2">
                <div class="btn-group-vertical btn-sample">
                    <a href="#section_1" class="btn btn-success">Section 1</a>
                    <a href="#section_2" class="btn btn-success">Section 2</a>
                    <a href="#section_3" class="btn btn-success">Section 3</a>
                    <a href="#section_4" class="btn btn-success">Section 4</a>
                    <a href="#section_5" class="btn btn-success">Section 5</a>
					<a href="#section_6" class="btn btn-success">Section 6</a>
					<a href="#section_7" class="btn btn-success">Section 7</a>
                </div>   
            </div>
        </div>               
    </div>
</body>
</html>