<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Annex 3</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
        }
        
        .approve_section{
            display: none;
        }
        	        
        .tblTitle{
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            
            <div class="col-md-9">
                <?php echo form_open('annex3/index'); ?>
                    <div>
                        <br/>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
               <form class="form-horizontal">
                   <div class="text-muted">
                       <h5>Guidelines for Institutional Biosafety Committees:<br>
                       Use of Living Modified Organisms and Related Materials
                       </h5>
                   </div>
                   <br>
                   
                   <div>
                       <h3>
                           <strong>IBC/IR/10/ANNEX3</strong>
                       </h3>
                   </div>
                   
                   <br>
                   
                   <div>
                       <h3>
                           <strong>INSTITUTIONAL BIOSAFETY COMMITTEE <br>INCIDENT REPORTING FORM</strong>
                       </h3>
                   </div>
                   <hr>
                   <div>
                       <h5>To be completed by the <b>Principal Investigator/Laboratory personnel</b> involved in the incident.</h5>                      
                       <h5>This form is to be used by the BSO to report all incidents which did not result in injury.</h5>
                       <h5><b>Please complete and submit to the IBC within 24 hours and to the NBB within 48
							hours of the incident.</b></h5>
                   </div>
                   <hr>
				   
				   <div>
				   <h5><b>Reference No. :   </b><input  maxlength="10" type="text" name="reference_no">
				   </div>
				   
				  <hr>
                       
                       <div 
							class="form-group"><h6><strong>ORGANISATION :</strong></h6><input type="text" class="form-control" name="organization" id="organization" value="<?php echo set_value('organization'); ?>">
                           <span class="text-danger"><?php echo form_error('organization'); ?></span>
                       </div>
					   <div 
							class="form-group"><h6><strong>FACULTY/DEPARTMENT :</strong></h6><input type="text" class="form-control" name="faculty" id="faculty" >
                       </div>
					   <div 
							class="form-group"><h6><strong>LABORATORY :</strong></h6><input type="text" class="form-control" name="laboratory" id="laboratory" >
                       </div>
					   <div 
							class="form-group"><h6><strong>DATE & TIME OF INCIDENT :</strong></h6><input type="date" class="form-control" name="date" id="date" >
                       </div>
                   
                   <div>                      
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8 id="section_1"><strong>PI/ LABORATORY PERSONEL INFORMATION</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>PI/ Laboratory Personnel’s Name:</th>
                                   <td><input type="text" class="form-control" name="PI_name"></td>
                               </tr>
							   <tr>
                                   <th>Telephone:</th>
                                   <td><input type="text" class="form-control" name="PI_telephone_number"></td>
                               </tr>
							   
							                          
                           <tr>
                               <th colspan="2">
							       The incident was reported on
							   </th>                               
                           </tr>
                           <tr>
                               <td>DATE: <input type="date" class="form-control" name="PI_reported_date"></td>
                               <td>TIME: <input type="time" class="form-control" name="PI_reported_date"></td>
                           </tr>                
                           </tbody>
                       </table>
                   </div>
				   <hr>
				   
				   <table class="table table-bordered" id="section_2">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_2"><strong>IDENTIFY THE DIRECT AND CONTRIBUTING CAUSES OF THE INCIDENT</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part1" >1. Describe the incident (use appendix if necessary).</th>  
                               </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_description" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody>
						   <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part2" >2. Probable cause or causes of incident (tick 1 or more boxes for
										appropriate answers).
								   </th>  
                               </tr>
								<tr>                                   
                                   <td colspan="2">										
								   <div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_faulty_equipment" value="1"> Fault of equipment</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_no_equipment" value="1"> Equipment unavailable</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_storage" value="1"> Poor storage</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_weather" value="1"> Weather</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_assistance" value="1"> Assistance unavailable</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_electrical" value="1"> Electrical fault</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_carelessness" value="1"> Carelessness</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_terrain" value="1"> Terrain</label>
									</div>
									
									</td>
                                   
                                   <td colspan="2">
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_workspace" value="1"> Inadequate workspace</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_training" value="1"> Lack of training</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_poor_access" value="1"> Poor access</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_unknown" value="1"> Unknown</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_maintenance_staff" value="1"> Fault and maintenance staff / engineer</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="incident_cause_checklist_supervision" value="1"> Lack of attention / supervision</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="" value="incident_cause_checklist_none"> Incorrect method / work practices</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="" value="1"> None of the above*</label>
									</div>															   
								   </td>
                               </tr>
                           <tr>
                               <td colspan="4">* State cause if not listed above:
										<textarea rows="6" maxlength="500" name="incident_cause_checklist_none_description" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody>
						  <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part3"> 3. Did the incident contribute to any release or dispersal of LMO/rDNA materials
										outside the containment/ field experiment area?
										<br>If “Yes” <input type="checkbox" name="incident_LMO_rDNA_release" value="1"> , please "tick the check box" and state the emergency response plan taken.</th>  
                               </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_LMO_rDNA_response" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody>
						   <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part4">4. What act(s) by the staff and/or others contributed to the incident (e.g. wrong
										tool or equipment, improper position or placement, work rule violation, failed to
										follow instructions, etc.)?</tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_contribution" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody><tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part5">5. What personal factors contributed to the incident (e.g. improper attitude,
										fatigue, inattention, substance abuse, failing to wear PPE etc.)?
							  </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_personal_factors" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody><tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part6">6. What corrective actions have been or will be taken to prevent a recurrence
										of this type of incident (e.g. repair / modify / replace equipment, counseling,
										training, policies, procedures, etc.)?
							   </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_corrective_actions" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody><tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1" id="part7">7. Who is responsible to implement corrective actions?
							   </tr> 
                           <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="incident_responsible" class="form-control" ></textarea>
							   </td>
                           </tr>
                           </tbody>
                       </table>
                   
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Principal Investigator</p>
                           <label class="control-label col-sm-2" for="signature_PI_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_PI_name">
                           </div>
                           <label class="control-label col-sm-2" for="signature_PI_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_PI_date">
                           </div>
                           
                       </div>
                       
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Biosafety Officer</p>
                           <label class="control-label col-sm-2" for="signature_BO_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_BO_name">
                           </div>
                           <label class="control-label col-sm-2" for="signature_BO_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_BO_date">
                           </div>
                           
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of IBC Chair</p>
                           <label class="control-label col-sm-2" for="signature_IBC_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_IBC_name">
                           </div>
                           <label class="control-label col-sm-2" for="signature_PI_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_IBC_date">
                           </div>
                       </div> 
                   </div>
                   
                   <br>
                   
                   <div>
                       <p>Send a copy to NBB,</p>
                       <p>Department of Biosafety,<br>
                         Ministry of Natural Resources & Environment,<br>
                         Level 1, Podium 2,<br>
                         Precinct 4, 62574 Putrajaya.<br>
                         Tel: 03-88861580 Fax: 03-88904935<br>
                         </p>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-6 grey">
                           <p><strong>IBC Use Only</strong></p>
                           
                            <div class="checkbox">
                              <label><input type="checkbox" name="IBC_approval">Use /Possession Approved</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="IBC_approval">Use/Possession Disapproved</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="IBC_termination" >Termination Approved</label>
                            </div> 
                       </div>
                   </div>
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
                    <a href="#part1" class="btn btn-success">Part 1</a>
                    <a href="#part2" class="btn btn-success">Part 2</a>
					<a href="#part3" class="btn btn-success">Part 3</a>
					<a href="#part4" class="btn btn-success">Part 4</a>
					<a href="#part5" class="btn btn-success">Part 5</a>
					<a href="#part6" class="btn btn-success">Part 6</a>
					<a href="#part7" class="btn btn-success">Part 7</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>