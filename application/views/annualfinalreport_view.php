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
        <br/>
        <div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>			
	
		<hr>
        <div class="row">  
            
            <div class="col-md-10">
                <?php if(isset($editload)) { echo form_open('annualfinalreport/update_form'); } else { echo form_open('annualfinalreport/index'); } ?>
                <?php if(isset($disabled)){ echo "<fieldset disabled='disabled'>"; } ?>
                    <div>
                        <br/>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                
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
								   <input type="date" class="form-control" name="project_approval_date" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('project_approval_date', $item->project_approval_date);}else{echo set_value('project_approval_date');} ?>">
                               </td>
                               <td>
                                   <input type="date" class="form-control" name="project_report_date" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('project_report_date', $item->project_report_date);}else{echo set_value('project_report_date');} ?>">
                               </td>
                           </tr>
						   <tr>
                               <th>ANNUAL / FINAL REPORT</th>
                           </tr>
						   <tr>
                               <td>
								   <label class="radio-inline"><input type="radio" value="1" name="report_type" <?php echo set_radio('report_type', '1'); ?> <?php if(isset($load)){if($item->report_type==1){echo "checked=checked";}}else{} ?> >  Yes</label>
                                              
                                    <label class="radio-inline"><input type="radio" value="0" name="report_type" <?php echo set_radio('report_type', '0'); ?> <?php if(isset($load)){if($item->report_type==0){echo "checked=checked";}}else{} ?> > No</label>
                               </td>                               
                           </tr>
                       </thead>                       
                   </table>			   
				   
                   <div id="section_1" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">1</th>
                               <th>Title of Project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="project_title" class="form-control" value="<?php if(isset($load)){echo set_value('project_title', $item->project_title);}else{echo set_value('project_title');} ?>">
                                                            
                           </td> 
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_title'); ?></span>
                </div>
                
                <div id="section_2" class="sectiontarget">
				   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">2</th>
                               <th>Chief Investigator</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="chief_investigator" class="form-control" value="<?php if(isset($load)){echo set_value('chief_investigator', $item->chief_investigator);}else{echo set_value('chief_investigator');} ?>">
                                  
                               </td> 
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('chief_investigator'); ?></span>
                </div>
                <div id="section_3" class="sectiontarget">   
                <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">3</th>
                               <th colspan="2">Personnel</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">Are there additional personnel?<i style="color:black;">(If Yes, fill in details below) </i>
											<label class="radio-inline"><input type="radio" value="1" name="personnel_extra" <?php echo set_radio('personnel_extra', '1'); ?> <?php if(isset($load)){if($item->personnel_extra==1){echo "checked=checked";}}else{} ?> >  Yes</label>
                                              
											<label class="radio-inline"><input type="radio" value="0" name="personnel_extra" <?php echo set_radio('personnel_extra', '0'); ?> <?php if(isset($load)){if($item->personnel_extra==0){echo "checked=checked";}}else{} ?> > No</label>
										  </td> 
                                       </tr>
                                       <tr>
                                           <td width="90px">Title: <input type="text" class="form-control" name="personnel_extra_title" value="<?php if(isset($load)){echo set_value('personnel_extra_title', $item->personnel_extra_title);}else{echo set_value('personnel_extra_title');} ?>">
                                  
                                           </td>
                                           <td>Name: <input type="text" class="form-control" name="personnel_extra_name" value="<?php if(isset($load)){echo set_value('personnel_extra_name', $item->personnel_extra_name);}else{echo set_value('personnel_extra_name');} ?>">
                                            
                                           </td>
                                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="personnel_extra_qualifications" value="<?php if(isset($load)){echo set_value('personnel_extra_qualifications', $item->personnel_extra_qualifications);}else{echo set_value('personnel_extra_qualifications');} ?>">
                                  
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="personnel_extra_department" value="<?php if(isset($load)){echo set_value('personnel_extra_department', $item->personnel_extra_department);}else{echo set_value('personnel_extra_department');} ?>">
                                               
                                           </td>
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="personnel_extra_campus" value="<?php if(isset($load)){echo set_value('personnel_extra_campus', $item->personnel_extra_campus);}else{echo set_value('personnel_extra_campus');} ?>">
                                            
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="personnel_extra_postal_address" value="<?php if(isset($load)){echo set_value('personnel_extra_postal_address', $item->personnel_extra_postal_address);}else{echo set_value('personnel_extra_postal_address');} ?>">
                                            
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="personnel_extra_telephone" value="<?php if(isset($load)){echo set_value('personnel_extra_telephone', $item->personnel_extra_telephone);}else{echo set_value('personnel_extra_telephone');} ?>">
                                            
                                           </td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="personnel_extra_fax" value="<?php if(isset($load)){echo set_value('personnel_extra_fax', $item->personnel_extra_fax);}else{echo set_value('personnel_extra_fax');} ?>"></td>
                                  
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="personnel_extra_email_address" value="<?php if(isset($load)){echo set_value('personnel_extra_email_address', $item->personnel_extra_email_address);}else{echo set_value('personnel_extra_email_address');} ?>">
                                  
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('personnel_extra_title'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_name'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_qualifications'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_department'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_campus'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_postal_address'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_telephone'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_fax'); ?></span>
                <span class="text-danger"><?php echo form_error('personnel_extra_email_address'); ?></span>
                </div>
                
                <div id="section_4" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">4</th>
                               <th>Project Summary</th>
                           </tr>
                       </thead>
					   <tbody>
                           <tr>
                               <td colspan="2"><i style="color:black;">briefly restate the purpose of the project (This should be written in plain English, 150 words max)</i>	</td>
                           </tr>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="5" maxlength="150" class="form-control" name="project_summary" placeholder="150 words max"><?php if(isset($load)){echo set_value('project_summary', $item->project_summary);}else{echo set_value('project_summary');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
				   </table>
                   <span class="text-danger"><?php echo form_error('project_summary'); ?></span>
                </div>
                
                <div id="section_5" class="sectiontarget">
				   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">5</th>
                               <th>Outline the progress made in achieving the specific purpose of the project.</th>
                           </tr>
                       </thead>
					   <tbody>
                           <tr>
                               <td colspan="2"><i style="color:black;">If the project has not yet commenced, briefly explain why.</i></td>
                           </tr>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="6" maxlength="500" class="form-control" name="project_outline" ><?php if(isset($load)){echo set_value('project_outline', $item->project_outline);}else{echo set_value('project_outline');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
				   </table>
                <span class="text-danger"><?php echo form_error('project_outline'); ?></span>
                </div>
                
                <div id="section_6" class="sectiontarget">
				   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">6</th>
                               <th>Have there been any reportable incidences in the last 12 months.</th>
                           </tr>
                       </thead>
					   <tbody> 
                           <tr>
                               <td colspan="2"><i style="color:black;">If yes, please briefly describe the incident and the actions taken</i></td>
                           </tr>           
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="6" maxlength="500" class="form-control" name="project_incidents" ><?php if(isset($load)){echo set_value('project_incidents', $item->project_incidents);}else{echo set_value('project_incidents');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
				   </table>
                </div>
                <div id="section_7" class="sectiontarget">
				   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata" >7</th>
                               <th colspan="2">Provide a list of the SOPs and Risk Assessments for the protocols to be used. (Attach all listed to application)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group"><textarea rows="6" maxlength="500" class="form-control" name="project_SOP" ><?php if(isset($load)){echo set_value('project_SOP', $item->project_SOP);}else{echo set_value('project_SOP');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
                <div id="section_8" class="sectiontarget">
				   <table class="table table-bordered">
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
												<label class="radio-inline"><input type="radio" value="1" name="project_facility_changes" <?php echo set_radio('project_facility_changes', '1'); ?> <?php if(isset($load)){if($item->project_facility_changes==1){echo "checked=checked";}}else{} ?>>  Yes</label>
                                              
												<label class="radio-inline"><input type="radio" value="0" name="project_facility_changes" <?php echo set_radio('project_facility_changes', '0'); ?> <?php if(isset($load)){if($item->project_facility_changes==1){echo "checked=checked";}}else{} ?>> No</label>												
										  </td> 
                                       </tr>
                                   </table>
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
                                               <div class="form-group"><input type="text" class="form-control" name="project_facility_building_number" value="<?php if(isset($load)){echo set_value('project_facility_building_number', $item->project_facility_building_number);}else{echo set_value('project_facility_building_number');} ?>"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="project_facility_room_number" value="<?php if(isset($load)){echo set_value('project_facility_room_number', $item->project_facility_room_number);}else{echo set_value('project_facility_room_number');} ?>"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
				   </table>
                </div>
                
                <div id="section_9" class="sectiontarget">
				   <table class="table table-bordered">
                       <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="cyandata">9</th>
                               <th>Sign-off</th>
                           </tr>
                       </thead>
                       <tbody>                         
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Chief Investigator: </td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_sign_off_chief_investigator_name" value="<?php if(isset($load)){echo set_value('project_sign_off_chief_investigator_name', $item->project_sign_off_chief_investigator_name);}else{echo set_value('project_sign_off_chief_investigator_name');} ?>"></div></td>
                                       </tr>
                                       <tr>
                                           <td>Lab Manager/Biosafety Officer: </td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_sign_off_BO_name" value="<?php if(isset($load)){echo set_value('project_sign_off_BO_name', $item->project_sign_off_BO_name);}else{echo set_value('project_sign_off_BO_name');} ?>"></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   </table>
                </div>
                <div>
                    <input type="hidden" name="appid" value="<?php if(isset($appID)){echo $appID;} ?>">
                </div>
                
                <div style="text-align: center">
                       <?php if(isset($editload)){ ?>
                       <button type="submit" name = 'annualfinalreport_update' value = 'Update' onclick="location.href='<?php echo site_url().'/annualfinalreport/update_form';?>'" class="btn btn-primary">Update</button>
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