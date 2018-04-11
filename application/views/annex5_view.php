<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Annex 2</title>
    
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
               <form class="form-horizontal">
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
                           <li>Name of Principal Investigator: <div class="form_group"><input type="text" class="form-control" name="identification_PI_name"></div></li>
                           <li>Email: <div class="form_group"><input type="email" class="form-control" name="identification_email_address"></div></li>
                           <li>Faculty/Department: <div class="form_group"><input type="text" class="form-control" name="identification_PI_name"></div></li>
                           <li>Tel: <div class="form_group"><input type="tel" class="form-control" name="identification_telephone"></div></li>
                           <li>IBC Reference No.: <div class="form_group"><input type="text" class="form-control" name="identification_IBC_reference_no"></div></li>
                           <li>NBB Reference No. (if applicable): <div class="form_group"><input type="text" class="form-control" name="identification_NBB_reference_no"></div></li>
                           <li>Project Title: <div class="form_group"><input type="text" class="form-control" name="identification_project_title"></div></li>
                           <li>Identify LMO/rDNA materials: <div class="form_group"><input type="text" class="form-control" name="identification_LMO_rDNA"></div></li>
                       </ol>
                   </div>
                   
                   <div id="section_2">
                       <h4><strong>2. Request for Project Extension/Notice of Termination</strong></h4>
                       
                       <div class="radio">
                           <label><input type="radio" value="" name="request_type">&nbsp;request extend IBC approval of my use/possession of the LMO/rDNA materials described above. (Complete &nbsp;&nbsp;&nbsp;&nbsp;Sections C, and D below)</label>
                       </div>
                       
                       <br>
                       
                       <div>OR</div>
                       
                       <br>
                       
                       <div class="radio">
                           <label><input type="radio" value="" name="request_type">&nbsp;request termination of IBC approval. Describe when and how the LMO/rDNA materials identified above will be &nbsp;&nbsp;&nbsp;&nbsp; disposed of:
                           </label>
                       </div>
                   </div>
                   
                   <div id="section_3">
                       <h4><strong>3. General Information</strong></h4>
                       
                       <ol type="a">
                           <li>
                               Will the Principal Investigator change?<br>
                                   <label class="radio-inline"><input type="radio" value="" name="PI_change">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="PI_change">No</label>
                           </li>
                           <li>
                               Will the Risk Group (RG) change?<br>
                                   <label class="radio-inline"><input type="radio" value="" name="RG_change">Yes</label>                              
                                   <label class="radio-inline"><input type="radio" value="" name="RG_change">No</label>
                           </li>
                           <li>
                               Will the Biosafety Level (BSL) change?<br>
                               <label class="radio-inline"><input type="radio" value="" name="BSL_change">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="" name="BSL_change">No</label>
                           </li>
                           <li>
                               Will the type or amount of LMO/rDNA materials change?<br>
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_type_change">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_type_change">No</label>
                           </li>
                           <li>
                               Will the LMO/rDNA materials be moved to another laboratory?<br>
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_moved">Yes</label>                              
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_moved">No</label>
                           </li>
                          <li>
                               Will the use of the LMO/rDNA materials change?<br>
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_usage_change">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="" name="LMO_rDNA_usage_change">No</label>
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
                               <label class="radio-inline"><input type="radio" value="" name="adverse_events">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="" name="adverse_events">No</label>
                           </li>
                           <li>
                               If so, was an Incident Reporting Form submitted to the IBC as required by the IBC regulation?<br>
                               <label class="radio-inline"><input type="radio" value="" name="incident_report">Yes</label>                             
                               <label class="radio-inline"><input type="radio" value="" name="incident_report">No</label>
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