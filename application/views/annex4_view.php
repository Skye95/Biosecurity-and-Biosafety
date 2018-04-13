<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Annex 4</title>
    
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
               <form class="form-horizontal">
                   <div class="text-muted">
                       <h5>Guidelines for Institutional Biosafety Committees:<br>
                       Use of Living Modified Organisms and Related Materials
                       </h5>
                   </div>
                   <br>
                   
                   <div>
                       <h3>
                           <strong>IBC/OD/10/ANNEX4</strong>
                       </h3>
                   </div>
                   
                   <br>
                   
                   <div>
                       <h3>
                           <strong>INSTITUTIONAL BIOSAFETY COMMITTEE <br>OCCUPATIONAL DISEASE / EXPOSURE<br>INVESTIGATION FORM</strong>
                       </h3>
                   </div>
                   <hr>
                   <div>
                       <h5>To be completed by the <b>Principal Investigator/Laboratory Personnel</b> involved.</h5>                      
                       <h5>This form is to be used to report all occupational exposure to LMO/rDNA materials
                           and to document the investigation by the BSO. Please<b> complete and submit to the
						   OHSC, IBC and NBB within 24 hours of the accident.</b></h5>
                   </div>
                   <hr>
				   
				   <div>
						<h5><b>Reference No. :   </b><input  maxlength="10" type="text" name="reference_no">
				   </div>
				   
				  <hr>                                                              
                   <div>                      
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8 id="section_1"><strong>1. INFORMATION OF PERSONNEL INVOLVED IN OCCUPATIONAL DISEASE</strong></h8></th>
                               </tr>
                           </thead>
                          <tbody>
                               <tr>
                                   <th>Name:</th>
                                   <td><input type="text" class="form-control" name="personnel_name"></td>
                               </tr>		   						   							                          

                           <tr>
                               <th>NRIC: <input type="text" class="form-control" name="personnel_NRIC"></td>
                               <th>Contact no: <input type="number" class="form-control" name="personnel_telephone_number"></td>
                           </tr>
						   <tr>
                               <th>Age: <input type="number" class="form-control" name="personnel_age"></td>
                               <th>Office: <input type="number" class="form-control" name="personnel_office_number"></td>
                           </tr>
						   <tr>
                               <th>Race: <input type="text" class="form-control" name="personnel_race"></td>
                               <th>Ext: <input type="number" class="form-control" name="personnel_ext_number"></td>
                           </tr>						   
                          </tbody>
						  <tbody>                               													   
                               <tr>
                                   <th colspan="4" >Employment Details</th>  
                               </tr> 
                           <tr>
                               <th>Job Title: </td>
                               <th><input type="text" class="form-control" name="personnel_employment_job"></td>
                           </tr>
						   <tr>
                               <th>Faculty/Department: </td>
                               <th><input type="text" class="form-control" name="personnel_employment_faculty"></td>
                           </tr>
						   <tr>
                               <th>Employment Status: </td>
                               <td>
										<div class="checkbox">
											<label><input type="checkbox"  name="personnel_employment_status" value="1">  Permanent  </label>
											<label> <input type="checkbox"  name="personnel_employment_status" value="0">  Contract </label>
										</div>
							   </td>
                           </tr>
						   <tr>
                               <th>Duration of Current Job: </td>
                               <th><input type="text" class="form-control" name="personnel_employment_duration" placeholder= "Months/Years"></td>
                           </tr>
						   
                           </tbody>
                       </table>
                   </div>
				   <hr>
				   
				   <div>
				   <table  class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_2"><strong>2. DESCRIPTION OF OCCUPATIONAL DISEASE/EXPOSURE TO LMO/rDNA MATERIALS</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>                        					   						                          
                           <tr>
                               <th colspan="2">
							       Location in the department of occupational exposure to LMO/rDNA materials occurred: 
								   <input type="text" class="form-control" name="exposure_location">
							   </th>                               
                           </tr>
                           <tr>
                               <td>DATE: <input type="date" class="form-control" name="exposure_date"></td>
                               <td>TIME: <input type="time" class="form-control" name="exposure_date"></td>
                           </tr>
						   
						   <tr>
                               <th colspan="2">
							       Diagnosis/Provisional Diagnosis : <input type="text" class="form-control" name="exposure_diagnosis">
							   </th>                               
                           </tr>
						   <tr>
                               <th colspan="2">
							       Particulars of Treatment
							   </th>                               
                           </tr>
                           <tr>
                               <td>										
								   <div class="checkbox">
											<label><input type="checkbox" name="exposure_treatment" value="1"> Nil</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="exposure_treatment" value="2"> First Aid</label>
									</div>																		
							   </td>
                               <td>										
								   <div class="checkbox">
											<label><input type="checkbox" name="exposure_treatment" value="3"> Outpatient Treatment</label>
									</div>
									<div class="checkbox">
											<label><input type="checkbox" name="exposure_treatment" value="4"> Admission to Hospital</label>
									</div>																		
							   </td>
                           </tr>
						   <tr>
                                   <th>Medical Certificate given:</th>
                                   <td><div class="checkbox">
											<label><input type="checkbox"  name="exposure_medical_cert" value="1">  Yes  </label>
											<label> <input type="checkbox"  name="exposure_medical_cert" value="0">  No </label>
										</div></td>
                           </tr>
							   <tr>
                                   <th>Duration of MC:</th>
                                   <td><input type="text" class="form-control" name="exposure_medical_cert_duration" placeholder="Eg: 3 Days or 2 Months"></td>
                               </tr>						   
                           </tbody>
						   <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1">Description of events (Describe tasks being performed and sequence of
                                        events. Use Appendix if necessary)
								   </th>  
                               </tr> 
					   <tbody>
                           <tr>
                               <td colspan="2">
							      a) What kind of work did the personnel do which may be associated with the disease? (Describe work activities)
							   </td>                               
                           </tr>
						   <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="exposure_work_description" class="form-control" ></textarea>
							   </td>
                           </tr>
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
							      b) What was the hazard or agent being exposed to the personnel?
							   </td>                               
                           </tr>
						   <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="exposure_hazard_or_agent" class="form-control" ></textarea>
							   </td>
                           </tr>
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
							      c) How long had the personnel been exposed to the hazard or agent?
							   </td>                               
                           </tr>
						   <tr>
                               <td colspan="4">
										<textarea maxlength="100" name="exposure_duration" class="form-control" ></textarea>
							   </td>
                           </tr>
					   </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
							      d) What are the symptoms and how long had the personnel been experiencing the symptoms?
							   </td>                               
                           </tr>
						   <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="exposure_symptoms" class="form-control" ></textarea>
							   </td>
                           </tr>
					   </tbody>
                           </tbody>
                   </table>
				   </div>
					<hr>
					
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
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>