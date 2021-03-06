<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css" type="text/css">
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
        .sectiontarget::before {
          content:"";
          display:block;
          height:60px; /* fixed header height*/
          margin:-60px 0 0; /* negative fixed header height */
        }
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <?php
    
    if(isset($load)){
        foreach($retrieved as $item){
            
        }
        
        
    }else{
           
        }
    
    ?>
    
    <div class="container">
        <div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>			

		<hr>
        <div class="row">
            <div class="col-md-1">
            </div>
            
            <div class="col-md-9">
               <?php if(isset($editload)) { echo form_open('annex4/update_form'); } else { echo form_open('annex4/index'); } ?>
                <?php if(isset($disabled)){ echo "<fieldset disabled='disabled'>"; } ?>
                
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
                       <h5><b>Reference No. :   </b></h5><input  maxlength="20" type="text" name="reference_no" value="<?php if(isset($load)){echo set_value('reference_no', $item->reference_no);}else{echo set_value('reference_no');} ?>">
				   </div>
				   
				  <hr>                                                              
                   <div class="sectiontarget" id="section_1">                      
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8><strong>1. INFORMATION OF PERSONNEL INVOLVED IN OCCUPATIONAL DISEASE</strong></h8></th>
                               </tr>
                           </thead>
                          <tbody>
                               <tr>
                                   <th>Name:</th>
                                   <td><input type="text" class="form-control" name="personnel_name" value="<?php if(isset($load)){echo set_value('personnel_name', $item->personnel_name);}else{echo set_value('personnel_name');} ?>"></td>
                               </tr>		   						   							                          

                           <tr>
                               <td>NRIC: <input type="text" class="form-control" name="personnel_NRIC" value="<?php if(isset($load)){echo set_value('personnel_NRIC', $item->personnel_NRIC);}else{echo set_value('personnel_NRIC');} ?>"></td>
                               
                               <td>Contact no: <input type="tel" class="form-control" name="personnel_telephone_number" value="<?php if(isset($load)){echo set_value('personnel_telephone_number', $item->personnel_telephone_number);}else{echo set_value('personnel_telephone_number');} ?>"></td>
                           </tr>
						   <tr>
                               <td>Age: <input type="number" class="form-control" name="personnel_age" value="<?php if(isset($load)){echo set_value('personnel_age', $item->personnel_age);}else{echo set_value('personnel_age');} ?>"></td>
                               
                               <td>Office: <input type="tel" class="form-control" name="personnel_office_number" value="<?php if(isset($load)){echo set_value('personnel_office_number', $item->personnel_office_number);}else{echo set_value('personnel_office_number');} ?>"></td>
                           </tr>
						   <tr>
                               <td>Race: <input type="text" class="form-control" name="personnel_race" value="<?php if(isset($load)){echo set_value('personnel_race', $item->personnel_race);}else{echo set_value('personnel_race');} ?>"></td>
                               
                               <td>Ext: <input type="tel" class="form-control" name="personnel_ext_number" value="<?php if(isset($load)){echo set_value('personnel_ext_number', $item->personnel_ext_number);}else{echo set_value('personnel_ext_number');} ?>"></td>
                           </tr>						   
                          </tbody>
						  <tbody>                               													   
                               <tr>
                                   <th colspan="4" >Employment Details</th>  
                               </tr> 
                           <tr>
                               <td>Job Title: </td>
                               <td><input type="text" class="form-control" name="personnel_employment_job" value="<?php if(isset($load)){echo set_value('personnel_employment_job', $item->personnel_employment_job);}else{echo set_value('personnel_employment_job');} ?>"></td>
                           </tr>
						   <tr>
                               <td>Faculty/Department: </td>
                               <td><input type="text" class="form-control" name="personnel_employment_faculty" value="<?php if(isset($load)){echo set_value('personnel_employment_faculty', $item->personnel_employment_faculty);}else{echo set_value('personnel_employment_faculty');} ?>"></td>
                           </tr>
						   <tr>
                               <td>Employment Status: </td>
                               <td>
										<div class="radio">
											<label><input type="radio"  name="personnel_employment_status" value="1" <?php echo set_radio('personnel_employment_status', '1'); ?> <?php if(isset($load)){if($item->personnel_employment_status==1){echo "checked=checked";}}else{} ?>>  Permanent  </label>
                                            
											<label> <input type="radio"  name="personnel_employment_status" value="0" <?php echo set_radio('personnel_employment_status', '0'); ?> <?php if(isset($load)){if($item->personnel_employment_status==0){echo "checked=checked";}}else{} ?>>  Contract </label>
										</div>
							   </td>
                           </tr>
						   <tr>
                               <td>Duration of Current Job: </td>
                               <td><input type="text" class="form-control" name="personnel_employment_duration" placeholder= "Months/Years" value="<?php if(isset($load)){echo set_value('personnel_employment_duration', $item->personnel_employment_duration);}else{echo set_value('personnel_employment_duration');} ?>"></td>
                           </tr>
						   
                           </tbody>
                       </table>
                       <span class="text-danger"><?php echo form_error('reference_no'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_name'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_NRIC'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_telephone_number'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_age'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_office_number'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_race'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_ext_number'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_employment_job'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_employment_faculty'); ?></span>
                       <span class="text-danger"><?php echo form_error('personnel_employment_duration'); ?></span>
                   </div>
                
                
				   <hr>
				   
				   <div class="sectiontarget" id="section_2">
				   <table  class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8><strong>2. DESCRIPTION OF OCCUPATIONAL DISEASE/EXPOSURE TO LMO/rDNA MATERIALS</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>                        					   						                          
                           <tr>
                               <th colspan="2">
							       Location in the department of occupational exposure to LMO/rDNA materials occurred: 
								   <input type="text" class="form-control" name="exposure_location" value="<?php if(isset($load)){echo set_value('exposure_location', $item->exposure_location);}else{echo set_value('exposure_location');} ?>">
							   </th>                               
                           </tr>
                           <tr>
                               <td>DATE: <input type="date" class="form-control" name="exposure_date" value="<?php if(isset($load)){echo set_value('exposure_date', $item->exposure_date);}else{echo set_value('exposure_date');} ?>"></td>
                               
                               <td>TIME: <input type="text" class="form-control" name="exposure_time" value="<?php if(isset($load)){echo set_value('exposure_time', $item->exposure_time);}else{echo set_value('exposure_time');} ?>"></td>
                           </tr>
						   
						   <tr>
                               <th colspan="2">
							       Diagnosis/Provisional Diagnosis : <input type="text" class="form-control" name="exposure_diagnosis" value="<?php if(isset($load)){echo set_value('exposure_diagnosis', $item->exposure_diagnosis);}else{echo set_value('exposure_diagnosis');} ?>">
							   </th>                               
                           </tr>
						   <tr>
                               <th colspan="2">
							       Particulars of Treatment
							   </th>                               
                           </tr>
                           <tr>
                               <td>										
								   <div class="radio">
											<label><input type="radio" name="exposure_treatment" value="1" <?php echo set_radio('exposure_treatment', '1'); ?> <?php if(isset($load)){if($item->exposure_treatment==1){echo "checked=checked";}}else{} ?>> Nil</label>
									</div>
									<div class="radio">
											<label><input type="radio" name="exposure_treatment" value="2" <?php echo set_radio('exposure_treatment', '2'); ?> <?php if(isset($load)){if($item->exposure_treatment==2){echo "checked=checked";}}else{} ?>> First Aid</label>
									</div>																		
							   </td>
                               <td>										
								   <div class="radio">
											<label><input type="radio" name="exposure_treatment" value="3" <?php echo set_radio('exposure_treatment', '3'); ?> <?php if(isset($load)){if($item->exposure_treatment==3){echo "checked=checked";}}else{} ?>> Outpatient Treatment</label>
									</div>
									<div class="radio">
											<label><input type="radio" name="exposure_treatment" value="4" <?php echo set_radio('exposure_treatment', '4'); ?> <?php if(isset($load)){if($item->exposure_treatment==4){echo "checked=checked";}}else{} ?>> Admission to Hospital</label>
									</div>																		
							   </td>
                           </tr>
						   <tr>
                                   <th>Medical Certificate given:</th>
                                   <td><div class="radio">
											<label><input type="radio"  name="exposure_medical_cert" value="1" <?php echo set_radio('exposure_medical_cert', '1'); ?> <?php if(isset($load)){if($item->exposure_medical_cert==1){echo "checked=checked";}}else{} ?>>  Yes  </label>
                                       
											<label> <input type="radio"  name="exposure_medical_cert" value="0" <?php echo set_radio('exposure_medical_cert', '0'); ?> <?php if(isset($load)){if($item->exposure_medical_cert==0){echo "checked=checked";}}else{} ?>>  No </label>
										</div></td>
                           </tr>
							   <tr>
                                   <th>Duration of MC:</th>
                                   <td><input type="text" class="form-control" name="exposure_medical_cert_duration" placeholder="Eg: 3 Days or 2 Months" value="<?php if(isset($load)){echo set_value('exposure_medical_cert_duration', $item->exposure_medical_cert_duration);}else{echo set_value('exposure_medical_cert_duration');} ?>"></td>
                               </tr>						   
                           </tbody>
						   <tbody>                               													   
                               <tr>
                                   <th colspan="4" class="tbheader1">Description of events (Describe tasks being performed and sequence of
                                        events. Use Appendix if necessary)
								   </th>  
                               </tr>
                       </tbody>
					   <tbody>
                           <tr>
                               <td colspan="2">
							      a) What kind of work did the personnel do which may be associated with the disease? (Describe work activities)
							   </td>                               
                           </tr>
						   <tr>
                               <td colspan="4">
										<textarea rows="6" maxlength="500" name="exposure_work_description" class="form-control" ><?php if(isset($load)){echo set_value('exposure_work_description', $item->exposure_work_description);}else{echo set_value('exposure_work_description');} ?></textarea>
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
										<textarea rows="6" maxlength="500" name="exposure_hazard_or_agent" class="form-control"><?php if(isset($load)){echo set_value('exposure_hazard_or_agent', $item->exposure_hazard_or_agent);}else{echo set_value('exposure_hazard_or_agent');} ?></textarea>
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
										<textarea maxlength="100" name="exposure_duration" class="form-control" ><?php if(isset($load)){echo set_value('exposure_duration', $item->exposure_duration);}else{echo set_value('exposure_duration');} ?></textarea>
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
										<textarea rows="6" maxlength="500" name="exposure_symptoms" class="form-control" ><?php if(isset($load)){echo set_value('exposure_symptoms', $item->exposure_symptoms);}else{echo set_value('exposure_symptoms');} ?></textarea>
							   </td>
                           </tr>
					   </tbody>
                   </table>
                       <span class="text-danger"><?php echo form_error('exposure_location'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_date'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_time'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_diagnosis'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_medical_cert_duration'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_work_description'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_hazard_or_agent'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_duration'); ?></span>
                       <span class="text-danger"><?php echo form_error('exposure_symptoms'); ?></span>
				   </div>
                
					<hr>
					
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Principal Investigator</p>
                           
                           <label class="control-label col-sm-2" for="signature_PI_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_PI_name" value="<?php if(isset($load)){echo set_value('signature_PI_name', $item->signature_PI_name);}else{echo set_value('signature_PI_name');} ?>">
                           </div>
                           <span class="text-danger"><?php echo form_error('signature_PI_name'); ?></span>
                           
                           <label class="control-label col-sm-2" for="signature_PI_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_PI_date" value="<?php if(isset($load)){echo set_value('signature_PI_date', $item->signature_PI_date);}else{echo set_value('signature_PI_date');} ?>">
                           </div>
                           <span class="text-danger"><?php echo form_error('signature_PI_date'); ?></span>
                           
                       </div>
                       
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Biosafety Officer</p>
                           <label class="control-label col-sm-2" for="signature_BO_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_BO_name" value="<?php if(isset($load)){echo set_value('signature_BO_name', $item->signature_BO_name);}else{echo set_value('signature_BO_name');} ?>">
                           </div>
                           <label class="control-label col-sm-2" for="signature_BO_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_BO_date" value="<?php if(isset($load)){echo set_value('signature_BO_date', $item->signature_BO_date);}else{echo set_value('signature_BO_date');} ?>">
                           </div>
                           
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of IBC Chair</p>
                           <label class="control-label col-sm-2" for="signature_IBC_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_IBC_name" value="<?php if(isset($load)){echo set_value('signature_IBC_name', $item->signature_IBC_name);}else{echo set_value('signature_IBC_name');} ?>">
                           </div>
                           <label class="control-label col-sm-2" for="signature_PI_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_IBC_date" value="<?php if(isset($load)){echo set_value('signature_IBC_date', $item->signature_IBC_date);}else{echo set_value('signature_IBC_date');} ?>">
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
                              <label><input type="checkbox" name="IBC_approval" value="1" <?php echo set_checkbox('IBC_approval', '1'); ?> <?php if(isset($load)){if($item->IBC_approval==1){echo "checked=checked";}}else{} ?>> Use/Possession Approved</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="IBC_approval" value="2" <?php echo set_checkbox('IBC_approval', '2'); ?> <?php if(isset($load)){if($item->IBC_approval==2){echo "checked=checked";}}else{} ?>> Use/Possession Disapproved</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" name="IBC_termination" value="1" <?php echo set_checkbox('IBC_termination', '1'); ?> <?php if(isset($load)){if($item->IBC_termination==1){echo "checked=checked";}}else{} ?> > Termination Approved</label>
                            </div> 
                       </div>
                   </div>
                   <hr>
                
                <div>
                    <input type="hidden" name="appid" value="<?php if(isset($appID)){echo $appID;} ?>">
                </div>
				   
				   <div style="text-align: center">
                       <?php if(isset($editload)){ ?>
                       <button type="submit" name = 'annex4_update' value = 'Update' onclick="location.href='<?php echo site_url().'/annex4/update_form';?>'" class="btn btn-primary">Update</button>
                       <?php }else{ ?>
                       <button name="submit" type="submit" class="btn btn-primary col-md-2">Submit</button>
                       <?php } ?>
                   </div>
                <?php if(isset($disabled)){ echo "</fieldset>"; } ?>
               <?php echo form_close(); ?>
            </div>
            
            <div class="col-md-2">
                <div class="btn-group-vertical btn-sample">
                    <a href="#top" class="btn btn-success">Top</a>
                    <a href="#section_1" class="btn btn-success">Section 1</a>
                    <a href="#section_2" class="btn btn-success">Section 2</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>