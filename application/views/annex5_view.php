<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Annex 5</title>
    
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
        
        .grey{
            background-color: grey;
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
               <?php echo form_open('annex5/index'); ?>
                   <div class="text-muted">
                       <h5>Guidelines for Institutional Biosafety Committees:<br>
                       Use of Living Modified Organisms and Related Materials
                       </h5>
                   </div>
                   <br>
                   
                   <div>
                       <h3>
                           <strong>IBC/PE-NT/10/ANNEX5</strong>
                       </h3>
                   </div>
                   
                   <br>
                   
                   <div>
                       <h3>
                           <strong>PROJECT EXTENSION & NOTICE OF <br> TERMINATION</strong>
                       </h3>
                   </div>
                   
                   <div>
                       <h5>To be completed by Principal Investigator. Completed form should be submitted <br> to the NBB.</h5>
                       
                       <h5>Project Extension: If you wish to continue your modern biotechnology activities <br> you must complete this form and submit it to the IBC at least one month prior to <br> end of the current approval period of the project.</h5>
                       
                       <h5>Termination: If at any time you wish to terminate your modern biotechnology <br> activities, complete this form and submit it to the IBC.</h5>
                   </div>
                   
                   <div id="section_1">
                       <h4><strong>1. Identification</strong></h4>
                       <ol type="a">
                           <li>Name of Principal Investigator: 
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_PI_name" value="<?php echo set_value('identification_PI_name'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_PI_name'); ?></span>
                               </div>
                           </li>
                           <li>Email: 
                               <div class="form_group">
                                   <input type="email" class="form-control" name="identification_email_address" value="<?php echo set_value('identification_email_address'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_email_address'); ?></span>
                               </div>
                           </li>
                           <li>Faculty/Department: 
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_faculty" value="<?php echo set_value('identification_faculty'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_faculty'); ?></span>
                               </div>
                           </li>
                           <li>Tel: 
                               <div class="form_group">
                                   <input type="tel" class="form-control" name="identification_telephone" value="<?php echo set_value('identification_telephone'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_telephone'); ?></span>
                               </div>
                           </li>
                           <li>IBC Reference No.: 
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_IBC_reference_no" value="<?php echo set_value('identification_IBC_reference_no'); ?>">
                                    <span class="text-danger"><?php echo form_error('identification_IBC_reference_no'); ?></span>
                               </div>
                           </li>
                           <li>NBB Reference No. (if applicable): 
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_NBB_reference_no" value="<?php echo set_value('identification_NBB_reference_no'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_NBB_reference_no'); ?></span>
                               </div>
                           </li>
                           <li>Project Title:
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_project_title" value="<?php echo set_value('identification_project_title'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_project_title'); ?></span>
                               </div>
                           </li>
                           <li>Identify LMO/rDNA materials:
                               <div class="form_group">
                                   <input type="text" class="form-control" name="identification_LMO_rDNA" value="<?php echo set_value('identification_LMO_rDNA'); ?>">
                                   <span class="text-danger"><?php echo form_error('identification_LMO_rDNA'); ?></span>
                               </div>
                           </li>
                       </ol>
                   </div>
                   
                   <div id="section_2">
                       <h4><strong>2. Request for Project Extension/Notice of Termination</strong></h4>
                       
                       <div class="radio">
                           <label>
                               <input type="radio" value="<?php echo set_value('request_type'); ?>" name="request_type">
                               &nbsp;request extend IBC approval of my use/possession of the LMO/rDNA materials described above. (Complete &nbsp;&nbsp;&nbsp;&nbsp;Sections C, and D below)
                           </label>
                       </div>
                       
                       <br>
                       
                       <div>OR</div>
                       
                       <br>
                       
                       <div class="radio">
                           <label>
                               <input type="radio" value="<?php echo set_value('request_type'); ?>" name="request_type">&nbsp;request termination of IBC approval. Describe when and how the LMO/rDNA materials identified above will be &nbsp;&nbsp;&nbsp;&nbsp; disposed of:
                           </label>
                       </div>
                       
                       <span class="text-danger"><?php echo form_error('request_type'); ?></span>
                   </div>
                   
                   <div id="section_3">
                       <h4><strong>3. General Information</strong></h4>
                       
                       <ol type="a">
                           <li>
                               Will the Principal Investigator change?<br>
                                   <label class="radio-inline"><input type="radio" value="<?php echo set_value('PI_change'); ?>" name="PI_change">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="<?php echo set_value('PI_change'); ?>" name="PI_change">No</label>
                               <span class="text-danger"><?php echo form_error('PI_change'); ?></span>
                           </li>
                           <li>
                               Will the Risk Group (RG) change?<br>
                                   <label class="radio-inline"><input type="radio" value="<?php echo set_value('RG_change'); ?>" name="RG_change">Yes</label>                              
                                   <label class="radio-inline"><input type="radio" value="<?php echo set_value('RG_change'); ?>" name="RG_change">No</label>
                               <span class="text-danger"><?php echo form_error('RG_change'); ?></span>
                           </li>
                           <li>
                               Will the Biosafety Level (BSL) change?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('BSL_change'); ?>" name="BSL_change">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('BSL_change'); ?>" name="BSL_change">No</label>
                               <span class="text-danger"><?php echo form_error('BSL_change'); ?></span>
                           </li>
                           <li>
                               Will the type or amount of LMO/rDNA materials change?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_type_change'); ?>" name="LMO_rDNA_type_change">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_type_change'); ?>" name="LMO_rDNA_type_change">No</label>
                               <span class="text-danger"><?php echo form_error('LMO_rDNA_type_change'); ?></span>
                           </li>
                           <li>
                               Will the LMO/rDNA materials be moved to another laboratory?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_moved'); ?>" name="LMO_rDNA_moved">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_moved'); ?>" name="LMO_rDNA_moved">No</label>
                               <span class="text-danger"><?php echo form_error('LMO_rDNA_moved'); ?></span>
                           </li>
                          <li>
                               Will the use of the LMO/rDNA materials change?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_usage_change'); ?>" name="LMO_rDNA_usage_change">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('LMO_rDNA_usage_change'); ?>" name="LMO_rDNA_usage_change">No</label>
                              <span class="text-danger"><?php echo form_error('LMO_rDNA_usage_change'); ?></span>
                           </li>
                       </ol>
                       
                       <p>
                           If the answer to any of the above questions (1–6) is Yes, you must submit an application form <strong>NBB/N/CU/10/ANNEX 5</strong>  (Notification for contained use and import for contained use activities for classes 1, 2, 3 and 4) to the NBB through IBC for approval before making any of these changes.
                       </p>
                       
                   </div>
                   
                   <div id="section_4">
                       <h4><strong>4. Adverse Events</strong></h4>
                       
                       <ol type="a">
                           <li>
                               Have any adverse events occurred since the project approval or last request for project extension approval?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('adverse_events'); ?>" name="adverse_events">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('adverse_events'); ?>" name="adverse_events">No</label>
                               <span class="text-danger"><?php echo form_error('adverse_events'); ?></span>
                           </li>
                           <li>
                               If so, was an Incident Reporting Form submitted to the IBC as required by the IBC regulation?<br>
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('incident_report'); ?>" name="incident_report">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="<?php echo set_value('incident_report'); ?>" name="incident_report">No</label>
                               <span class="text-danger"><?php echo form_error('incident_report'); ?></span>
                               
                           </li>
                       </ol>
                   </div>
                   
                   <div id="section_5">
                       <h4><strong>5. Certification</strong></h4>
                       
                       <p>I certify that the above information accurately describes the current status of the modern biotechnology activities that was previously approved by the IBC. I understand that I must resubmit a new <strong>NBB/N/CU/10/ANNEX 5 </strong> (Notification for contained use and import for contained use activities for classes 1, 2, 3 and 4) form in the event my use of, or amount of LMO/rDNA materials changes, or if I have terminated my use /possession of LMO/rDNA and wish to begin modern biotechnology activity again.
                       </p>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Principal Investigator</p>
                           <label class="control-label col-sm-2" for="signature_PI_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_PI_name" value="<?php echo set_value('signature_PI_name'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_PI_name'); ?></span>
                           </div>
                           <label class="control-label col-sm-2" for="signature_PI_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_PI_date" value="<?php echo set_value('signature_PI_date'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_PI_date'); ?></span>
                           </div>
                           
                       </div>
                       
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of Biosafety Officer</p>
                           <label class="control-label col-sm-2" for="signature_BO_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_BO_name" value="<?php echo set_value('signature_BO_name'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_BO_name'); ?></span>
                           </div>
                           <label class="control-label col-sm-2" for="signature_BO_date">Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_BO_date" value="<?php echo set_value('signature_BO_date'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_BO_date'); ?></span>
                           </div>
                           
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="col-md-6 form-group">
                           <textarea rows="2" class="form-control"></textarea>
                           <p>Signature of IBC Chair</p>
                           <label class="control-label col-sm-2" for="signature_IBC_name">Name:</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="signature_IBC_name" value="<?php echo set_value('signature_IBC_name'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_IBC_name'); ?></span>
                           </div>
                           <label class="control-label col-sm-2" for="signature_IBC_date" >Date:</label>
                           <div class="col-sm-10">
                               <input type="date" class="form-control" name="signature_IBC_date" value="<?php echo set_value('signature_IBC_date'); ?>">
                               <span class="text-danger"><?php echo form_error('signature_IBC_date'); ?></span>
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
                              <label>
                                  <input type="checkbox" name="IBC_approval[]" value="<?php echo set_value('IBC_approval[]'); ?>">Use /Possession Approved
                                </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="IBC_approval[]" value="<?php echo set_value('IBC_approval[]'); ?>">Use/Possession Disapproved
                                </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="IBC_termination" value="<?php echo set_value('IBC_termination[]'); ?>" >Termination Approved
                                </label>
                            </div> 
                       </div>
                   </div>
                
                <br>
                
                   <div>
                       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>
                   
               <?php echo form_close(); ?>
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