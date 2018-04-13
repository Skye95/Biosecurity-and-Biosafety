<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Annual/Final Report for use of Biohazardous materials Form</title>
    
    <style>
        body {
            padding-top: 60px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
            padding-top: 0px;
        }
                
        .tblTitle{
            background-color: black;
            color: white;
            text-align: center;
        }
        
        .tblTitle2{
            background-color: #808080;
            color: white;
            text-align: center;
        }
        
        .centering{
            text-align: center;
        }
              
        .cyandata{
            background-color: #00FFFF;
        }       
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div class="row">
            
            
            <div class="col-md-10">
               <form class="form-horizontal">
                   <h4 class="centering"><u>Swinburne Biosafety Commitee</u></h4>
                   
                   <h3 class="centering">Annual/Final report for use of Biohazardous </h3>
                   <h3 class="centering">materials</h3>
                                      
                   <br>
                   
				   <table class="table table-bordered">
                       <thead class="tblTitle2">
                           <tr>
                               <th>DATE RECEIVED</th>
                               <th>SBC REFERENCE NUMBER</th>
                           </tr>
						   <tr>
                               <td>
								   <input type="date" class="form-control" name="date_received" placeholder="Office use only">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="SBC_reference_no" placeholder="Office use only">
                               </td>
                           </tr>
						   <tr>
                               <th>DATE OF PROJECT APPROVAL</th>
                               <th>DATE OF THIS REPORT</th>
                           </tr>
						   <tr>
                               <td>
								   <input type="date" class="form-control" name="project_approval_date" placeholder="Office use only">
                               </td>
                               <td>
                                   <input type="date" class="form-control" name="project_report_date" placeholder="Office use only">
                               </td>
                           </tr>
						   <tr>
                               <th>ANNUAL / FINAL REPORT</th>
                           </tr>
						   <tr>
                               <td>
								   <input type="text" class="form-control" name="report_type" placeholder="Office use only">
                               </td>                               
                           </tr>
                       </thead>                       
                   </table>			   
				   
                   
                   <table class="table table-bordered" id="section_1">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">1</th>
                               <th>Title of Project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="project_title" class="form-control"></td> 
                           </tr>
                       </tbody>
                   </table>
				   
				   <table class="table table-bordered" id="section_2">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">2</th>
                               <th>Chief Investigator</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="chief_investigator" class="form-control"></td> 
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata" id="section_2">3</th>
                               <th colspan="2">Personnel</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">Are there additional personnel?<i style="color:black;">(If Yes, fill in details below) </i>
											<label class="radio-inline"><input type="radio" value="1" name="personnel_extra">  Yes</label>
											<label class="radio-inline"><input type="radio" value="0" name="personnel_extra"> No</label>
										  </td> 
                                       </tr>
                                       <tr>
                                           <td width="90px">Title: <input type="text" class="form-control" name="personnel_extra_title"></td>
                                           <td>Name: <input type="text" class="form-control" name="personnel_extra_name"></td>
                                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="personnel_extra_qualifications"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="personnel_extra_department"></td>
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="personnel_extra_campus"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="personnel_extra_postal_address"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="personnel_extra_telephone"></td>
                                           <td>Fax: <input type="text" class="form-control" name="personnel_extra_fax"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="personnel_extra_email_address"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_4">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">4</th>
                               <th>Project Summary</th>
                           </tr>
                       </thead>
					   <tbody>
                           
                               <td colspan="2">
                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">
												<i style="color:black;">briefly restate the purpose of the project (This should be written in plain English, 150 words max)</i>											
										  </td> 
                                       </tr>
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="5" maxlength="150" class="form-control" name="project_summary" placeholder="150 words max"></textarea></div>
                               </td>
                           </tr>
                       </tbody>
					  </table>
				   </table>
				   
				   <table class="table table-bordered" id="section_5">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">5</th>
                               <th>Outline the progress made in achieving the specific purpose of the project.</th>
                           </tr>
                       </thead>
					   <tbody>
                           
                               <td colspan="2">
                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">
												<i style="color:black;">If the project has not yet commenced, briefly explain why.</i>											
										  </td> 
                                       </tr>
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="6" maxlength="500" class="form-control" name="project_outline"></textarea></div>
                               </td>
                           </tr>
                       </tbody>
					  </table>
				   </table>
				   
				   <table class="table table-bordered" id="section_6">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">6</th>
                               <th>Have there been any reportable incidences in the last 12 months.</th>
                           </tr>
                       </thead>
					   <tbody>
                           
                               <td colspan="2">
                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">
												<i style="color:black;">If yes, please briefly describe the incident and the actions taken</i>											
										  </td> 
                                       </tr>  
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="6" maxlength="500" class="form-control" name="project_incidents"></textarea></div>
                               </td>
                           </tr>
                       </tbody>
					  </table>
				   </table>
				   
				   <table class="table table-bordered" id="section_7">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">7</th>
                               <th>Provide a list of any additional SOPs and Risk Assessments used since Biosafety clearance.</th>
                           </tr>
                       </thead>
					   <tbody>
                           
                               <td colspan="2">
                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">
												<i style="color:black;">Attach all to application</i>											
										  </td> 
                                       </tr>  
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
                                   <input type="file" id="project_SOP"> <input type="file" id="project_SOP"> 
								   <input type="file" id="project_SOP"> <input type="file" id="project_SOP">
                               </td>
                           </tr>
                       </tbody>
					  </table>
				   </table>
				   
				   <table class="table table-bordered" id="section_8">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">8</th>
                               <th>Changes to Facilities            </th>
                           </tr>
                       </thead>
					   <tbody>
                           
                               <td colspan="2">
                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">
												<i style="color:black;">If Yes, fill in details below</i>
												<label class="radio-inline"><input type="radio" value="1" name="project_facility_changes">  Yes</label>
												<label class="radio-inline"><input type="radio" value="0" name="project_facility_changes"> No</label>												
										  </td> 
                                       </tr>	    
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Building number:
                                           </td>
                                           <td>
                                               Room Number: 
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="project_facility_building_number"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="project_facility_room_number"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
					  </table>
				   </table>
				   
				   <table class="table table-bordered">
                       <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata" id="section_9">9</th>
                               <th>Sign-off</th>
                           </tr>
                       </thead>
                       <tbody>                         
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Chief Investigator: </td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_sign_off_chief_investigator_name"></div></td>
                                       </tr>
                                       <tr>
                                           <td>Lab Manager/Biosafety Officer: </td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_sign_off_BO_name"></div></td>
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
					<a href="#section_8" class="btn btn-success">Section 8</a>
					<a href="#section_9" class="btn btn-success">Section 9</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>