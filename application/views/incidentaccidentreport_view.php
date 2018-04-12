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
                                     		   
				   <hr>
                   
                   <table class="table table-bordered" id="section_1">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_1"><strong>SECTION 1 – Victim Personal Details (*Details required as per OSH (NADOPOD) Regulation 2004)</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tbheader1">1.01  Name (as per I.C./Passport):</th>
                                   <td><input type="text" name="personnel_name" class="form-control"></td>
                                   <th class="tbheader1">1.05  Employment Designation:</th>
                                   <td><input type="text" name="personnel_staff_student_no" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.02   Gender:</th>
                                   <td>
										<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> MALE</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" name="SWP_declined_by" value="0"> FEMALE</label>
										</div>
								   </td>
                                   <th class="tbheader1">1.06   Unit/Faculty:</th>
                                   <td><input type="text" name="personnel_staff_student_no" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.03  Age:</th>
                                   <td><input type="number" name="personnel_name" class="form-control"></td>
                                   <th class="tbheader1">1.07   Doc ID:</th>
                                   <td><input type="text" name="country" class="form-control" value="OHS/F/4.20.X" disabled></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.04   Citizenship:</th>
                                   <td><input type="text" name="personnel_name" class="form-control"></td>
                                   <th class="tbheader1">1.08   Review Date:</th>
                                   <td><input type="date" name="personnel_staff_student_no" class="form-control"></td>
                               </tr>							   
                           </tbody>
                       </table>
					   
					   <hr>
					   
					   <table class="table table-bordered" id="section_2">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_2"><strong>SECTION 2 – Incident/Accident Details</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tbheader1">2.1 Date of incident:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_location"></td>
							   </tr>
                               <tr>
                                   <th class="tbheader1">2.2 Time:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_location"></td>
                               </tr>
							   <tr>
                                   <th class="tbheader1">2.3 Room/Area:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_location"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.4 Type of Incident:</th>
                                   <td colspan="1">										
								   <div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Slips, Trips and Falls</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Unsafe Act</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Burns/Fire</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Repetitive strain injury</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Cuts/Laceration</label>
									</div>
									
									</td>
                                   
                                   <td colspan="2">
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Bump/Crash/Impact injury</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Chemical/Biological Spillage</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Occupational Health/Illness</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="SWP_approved_by" value="1"> Unsafe Workplace Condition</label>
									</div>
									
									<div> Others (specify):<input type="text" name="personnel_staff_student_no" class="form-control"></div>
								   
								   
								   </td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.5 Any Injuries?:</th>
                                   <td>
										<div class="checkbox">
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> Yes </label>
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> No </label>
										</div>
								   </td>
                                   <th class="tbheader1">2.6 Requires physician/hospital visit?:</th>
                                   <td>
								   		<div class="checkbox">
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> Yes </label>
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> No  </label>
										</div>
								   </td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.7 Details of incident:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_unit_title"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.8 Actions Taken:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_project_title"></td>
                               </tr>                               
                           </tbody>
                       </table>
                   
				   <hr>                  
                   <table  class="table table-bordered" id="section_3">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_3"><strong>SECTION 3 – Reporter Detail</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
							       •	I, hereby declare that the information I have provided in this form for Notification of Exporting Biological Material is true and correct.
								   <br>
								   •	Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice at <a href="http://www.swinburne.edu.my/privacy/">http://www.swinburne.edu.my/privacy</a>
								        and Employee's Privacy Collection Notice at <a style="color:blue;">Blackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.</a>
							   </td>                               
                           </tr>
                           <tr>
                                   <th class="tbheader1">Reported by:</th>
                                   <td style="width:80%"><input type="text" class="form-control" name="SWP_project_title"></td>
                           </tr>
						   <tr>
                                   <th class="tbheader1">Designation:</th>
                                   <td style="width:80%"><input type="text" class="form-control" name="SWP_project_title"></td>
                           </tr>
						   <tr>
                                   <th class="tbheader1">Date:</th>
                                   <td style="width:80%"><input type="date" class="form-control" name="SWP_project_title"></td>
                           </tr>
                       </tbody>
                   </table>
				   
				   <hr>
                   <table class="table table-bordered" id="section_4">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_4"><strong>SECTION 4 – For Investigation Team Only (*Details required as per OSH (NADOPOD) Regulation 2004)</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>                               
                               <tr>
                                   <th class="tbheader1">4.1 Any victim?:</th>
                                   <td>
										<div class="checkbox">
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> Yes </label>
                                        <label><input type="checkbox"  name="SWP_lab_trained" value=""> No </label>
										</div>
								   </td>
                                   <th class="tbheader1">4.3 Victim’s citizenship:</th>
                                   <td>
										<input type="text" class="form-control" name="SWP_project_title">
								   </td>
                               </tr>
							   <tr>
                                   <th class="tbheader1">4.2 Victim’s age:</th>
                                   <td>
										<input type="text" class="form-control" name="SWP_project_title">
								   </td>
                                   <th class="tbheader1">4.4 Victim’s job description:</th>
                                   <td>
										<input type="text" class="form-control" name="SWP_project_title">
								   </td>
                               </tr>
							   
                               <tr>
                                   <th colspan="4" class="tbheader1">4.5 Investigation Findings:</th>  
                               </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6"  name="comment" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody>
                       </table>
                   
				   <hr>
                   <table  class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8><strong>CORRECTIVE/PREVENTIVE ACTION</strong></h8></th>
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
                    <div>
                       <div class="checkbox">
                           <label><input type="checkbox" value="application_approved" disabled>Approved</label>
                       </div>
					</div>
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