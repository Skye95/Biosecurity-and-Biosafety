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
                                   <td><input type="text" name="victim_name" class="form-control"></td>
                                   <th class="tbheader1">1.05  Employment Designation:</th>
                                   <td><input type="text" name="victim_employment_designation" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.02   Gender:</th>
                                   <td>
										<div class="checkbox">
											<label><input type="checkbox" name="victim_gender" value="1"> MALE</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" name="victim_gender" value="0"> FEMALE</label>
										</div>
								   </td>
                                   <th class="tbheader1">1.06   Unit/Faculty:</th>
                                   <td><input type="text" name="victim_faculty" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.03  Age:</th>
                                   <td><input type="number" name="victim_age" class="form-control"></td>
                                   <th class="tbheader1">1.07   Doc ID:</th>
                                   <td><input type="text" name="doc_id" class="form-control" value="OHS/F/4.20.X" disabled></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.04   Citizenship:</th>
                                   <td><input type="text" name="victim_citizenship" class="form-control"></td>
                                   <th class="tbheader1">1.08   Review Date:</th>
                                   <td><input type="date" name="review_date" class="form-control"></td>
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
                                   <td colspan="4"><input type="text" class="form-control" name="incident_date"></td>
							   </tr>
                               <tr>
                                   <th class="tbheader1">2.2 Time:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_location"></td>
                               </tr>
							   <tr>
                                   <th class="tbheader1">2.3 Room/Area:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="incident_location"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.4 Type of Incident:</th>
                                   <td colspan="1">										
								   <div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="1"> Slips, Trips and Falls</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="2"> Unsafe Act</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="3"> Burns/Fire</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="4"> Repetitive strain injury</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="5"> Cuts/Laceration</label>
									</div>
									
									</td>
                                   
                                   <td colspan="2">
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="6"> Bump/Crash/Impact injury</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="7"> Chemical/Biological Spillage</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="8"> Occupational Health/Illness</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_type" value="9"> Unsafe Workplace Condition</label>
									</div>
									
									<div> Others (specify):<input type="text" name="incident_type_description" class="form-control"></div>
								   
								   
								   </td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.5 Any Injuries?:</th>
                                   <td>
										<div class="checkbox">
                                        <label><input type="checkbox"  name="incident_injury" value="1"> Yes </label>
                                        <label><input type="checkbox"  name="incident_injury" value="0"> No </label>
										</div>
								   </td>
                                   <th class="tbheader1">2.6 Requires physician/hospital visit?:</th>
                                   <td>
								   		<div class="checkbox">
                                        <label><input type="checkbox"  name="incident_physician_or_hospital" value="1"> Yes </label>
                                        <label><input type="checkbox"  name="incident_physician_or_hospital" value="0"> No  </label>
										</div>
								   </td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.7 Details of incident:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="incident_details"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">2.8 Actions Taken:</th>
                                   <td colspan="4"><input type="text" class="form-control" name="incident_actions"></td>
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
                                   <td style="width:80%"><input type="text" class="form-control" name="reporter_name"></td>
                           </tr>
						   <tr>
                                   <th class="tbheader1">Designation:</th>
                                   <td style="width:80%"><input type="text" class="form-control" name="reporter_designation"></td>
                           </tr>
						   <tr>
                                   <th class="tbheader1">Date:</th>
                                   <td style="width:80%"><input type="date" class="form-control" name="reporter_date"></td>
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
                                        <label><input type="checkbox"  name="investigation_victim" value="1"> Yes </label>
                                        <label><input type="checkbox"  name="investigation_victim" value="0"> No </label>
										</div>
								   </td>
                                   <th class="tbheader1">4.3 Victim’s citizenship:</th>
                                   <td>
										<input type="text" class="form-control" name="investigation_victim_citizenship">
								   </td>
                               </tr>
							   <tr>
                                   <th class="tbheader1">4.2 Victim’s age:</th>
                                   <td>
										<input type="text" class="form-control" name="investigation_victim_age">
								   </td>
                                   <th class="tbheader1">4.4 Victim’s job description:</th>
                                   <td>
										<input type="text" class="form-control" name="investigation_victim_job_description">
								   </td>
                               </tr>
							   
                               <tr>
                                   <th colspan="4" class="tbheader1">4.5 Investigation Findings:</th>  
                               </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="investigation_findings" class="form-control" ></textarea>
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

                           <tbody style="width:100%">
                               <tr style="width:25%">
                                   <th>Number</th>
                                   <th>Action</th>
                                   <th>By Whom</th>
                                   <th>Timeline/Completion Date</th>                                                                     
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                               <tr style="width:25%">
                                   <th><input type="text" class="form-control" name="investigation_preventive_no"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_action"></th>
                                   <th><input type="text" class="form-control" name="investigation_preventive_by_whom"></th>
                                   <th><input type="date" class="form-control" name="investigation_preventive_timeline"></th>
                               </tr>
                           <tr>
                               <td colspan="4">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Report/Investigated By: <input type="text" class="form-control" name="investigated_by"></td>
                                           <td>Reviewed By: <input type="text" class="form-control" name="reviewed_by"></td>
                                       </tr>                                       
                                   </table>
                               </td>
                           </tr>							   
                           </tbody>
                       </table>
                   </table>
                   
				   <hr>
                   
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
                </div>   
            </div>
        </div>               
    </div>
</body>
</html>