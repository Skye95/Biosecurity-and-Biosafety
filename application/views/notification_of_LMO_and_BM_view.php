<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Safety Work Procedure Form</title>
    
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
        
        .dark_background{
            background-color: black;
            color: white;
        }
        
        .tbheader1{
            background-color:  #95a5a6 ;
        }
        
        .right-side{
            text-align: right;
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
                       <h5 class="dark_background">PLEASE FILL IN ALL INFORMATION REQUESTED</h5>
                   </div>
                   
                   <p><strong>Important Note:</strong></p>
                   <p>This form is to be completed when new LMOs or biohazardous materials has been acquired.  </p>
                   
                   <br>
                   
                   <table class="table table-bordered" id="first-table">
                       <thead>
                           <tr>
                               <th>Date Received</th>
                               <th>SSBC Reference Number</th>
                           </tr>
                       </thead>
                       <tbody>
                           <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Date:"></td>
                           <td><input type="text" name="SBC_reference_no" class="form-control"></td>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_1">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_1"><strong>Section 1 - Personnel Details</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tbheader1">1.01 Name (as per I.C. / Passport):</th>
                                   <td><div class="form-group"><input type="text" name="personnel_name" class="form-control"></div></td>
                                   <th class="tbheader1">1.02 1.02   Staff / Student No.:</th>
                                   <td><div class="form-group"><input type="text" name="personnel_staff_student_no" class="form-control"></div></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.03 Designation:</th>
                                   <td><input type="text" class="form-control" name="personnel_designation"></td>
                                   <th class="tbheader1">1.04 Faculty/unit:</th>
                                   <td><input type="text" class="form-control" name="personnel_faculty"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.05 Unit Code/Unit Title (if teaching):</th>
                                   <td colspan="4"><input type="text" class="form-control" name="personnel_unit_code"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.06 Project Title and Ref. No. (if FYP / research):</th>
                                   <td colspan="4"><input type="text" class="form-control" name="personnel_project_title"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.07 Storage Location: </th>
                                   <td colspan="4"><input type="text" class="form-control" name="personnel_storage"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.07 Name of the Keeper: </th>
                                   <td colspan="4"><input type="text" class="form-control" name="personnel_keeper_name"></td>
                               </tr>
                               
                           </tbody>
                       </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4">
                                   <h8 id="section_2"><strong>Section 2 - Details of the Biohazard Materials</strong></h8>
                               </th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="tbheader1">
                                   <div style="float:left;width:50%;">A. List of Living Modified Organism</div>
                                   <div style="float:right;width:50%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="LMO_list" value="">Not Applicable</label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>Name</th>
                                           <th>Risk Level</th>
                                           <th>Quantity</th>
                                           <th>Volume(g or mL)</th>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="LMO_volume"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                           
                           <tr>
                               <td class="tbheader1">
                                   <div style="float:left;width:50%;">B. List of Biohazardous Material</div>
                                   <div style="float:right;width:50%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="biohazard_list" value="">Not Applicable</label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>Name</th>
                                           <th>Risk Level</th>
                                           <th>Quantity</th>
                                           <th>Volume(g or mL)</th>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_name"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_risk_level"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_quantity"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="biohazard_volume"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_3"><strong>Section 3 - Declaration</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                  <ul>
                                      <li>I, hereby declare that the information I have provided in this form for Notification of LMO and Biohazardous Material is true and correct.</li>
                                      
                                      <li>Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice at <a href="http://www.swinburne.edu.my/privacy/">http://www.swinburne.edu.my/privacy/</a> and Employee's Privacy Collection Notice at Blackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.</li>
                                   </ul>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" name="declaration_name" class="form-control" placeholder="Name & Signature:"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="declaration_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_4"><strong>Section 4 - Signature</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">Verified by (Unit Convenor / Project Investigator): </td>
                           </tr>
                           <tr>
                               <td colspan="2"><input type="text" class="form-control" name="signature_verified_by" placeholder="Signature:"></td>
                               
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="signature_verified_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_5"><strong>Section 5 - For Office Use Only</strong></h8></th>
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
                               <td><input type="text" class="form-control" placeholder="Signature:"></td>
                               <td><input type="text" class="form-control" placeholder="Signature:"></td>
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
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>