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
    <title>Biosafety and Biosecurity Online System - Application for Biosafety Clearance for use of Biohazard Materials.</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
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
        
        .reddata{
            background-color: red;
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
            $newar1 = $item->project_personnel_name;
            $newar2 = $item->project_personnel_role;
            $newar3 = $item->project_SOP_title;
            $newar4 = $item->project_SOP_risk_title;
            $newar5 = $item->project_facilities_building;
            $newar6 = $item->project_facilities_room;
            $a = explode(",", $newar1);
            $b = explode(",", $newar2);
            $c = explode(",", $newar3);
            $d = explode(",", $newar4);
            $e = explode(",", $newar5);
            $f = explode(",", $newar6);
        }
        
        
    }else{
           
        }
    
    ?>
    
    <div class="container">
        <div id='breadcrumb1'><?php echo $this->breadcrumbs->show(); ?></div>
        <hr>
        <div class="row">
            
            <div class="col-md-10">
               <?php if(isset($editload)) { echo form_open('biohazard/update_form'); } else { echo form_open('biohazard/index'); } ?>
                <?php if(isset($disabled)){ echo "<fieldset disabled='disabled'>"; } ?>
                
                   <h4 class="centering"><u>Swinburne Biosafety Commitee</u></h4>
                   
                   <h3 class="centering">Application for biosafety clearance for use of</h3>
                   <h3 class="centering">Biohazard materials</h3>
                   
                   <table class="table table-bordered">
                       <thead class="tblTitle2">
                           <tr>
                               <th>DATE RECEIVED</th>
                               <th>SBC REFERENCE NUMBER</th>
                           </tr>
                       </thead>
                       <tbody class="tblTitle2">
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Office use only">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="SBC_reference_no" placeholder="Office use only">
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                <div id="section_1" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata">1</th>
                               <th>Title of Project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="project_title" class="form-control" value="<?php if(isset($load)){echo set_value('project_title', $item->project_title);}else{echo set_value('project_title');} ?>"></td> 
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_title'); ?></span>
                </div>
                
                <div id="section_2" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_2">2</th>
                               <th colspan="2">Project Supervisor (must be a Swinburne staff member)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">Name: <div class="form-group"><input type="text" class="form-control" name="project_supervisor_name" value="<?php if(isset($load)){echo set_value('project_supervisor_name', $item->project_supervisor_name);}else{echo set_value('project_supervisor_name');} ?>"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Department: <div class="form-group"><input type="text" class="form-control" name="project_supervisor_department" value="<?php if(isset($load)){echo set_value('project_supervisor_department', $item->project_supervisor_department);}else{echo set_value('project_supervisor_department');} ?>"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Email (MUST be Swinburne email address): <div class="form-group"><input type="email" class="form-control" name="project_supervisor_email_address" value="<?php if(isset($load)){echo set_value('project_supervisor_email_address', $item->project_supervisor_email_address);}else{echo set_value('project_supervisor_email_address');} ?>"></div></td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_supervisor_name'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_department'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_email_address'); ?></span>
                </div>
                <div id="section_3" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_3">3</th>
                               <th colspan="2">Contact Person for this Application (if different to above)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">Name: <div class="form-group"><input type="text" class="form-control" name="project_alt_person" value="<?php if(isset($load)){echo set_value('project_alt_person', $item->project_alt_person);}else{echo set_value('project_alt_person');} ?>"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Department: <div class="form-group"><input type="text" class="form-control" name="project_alt_department" value="<?php if(isset($load)){echo set_value('project_alt_department', $item->project_alt_department);}else{echo set_value('project_alt_department');} ?>" ></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Email (MUST be Swinburne email address): <div class="form-group"><input type="email" class="form-control" name="project_alt_email" value="<?php if(isset($load)){echo set_value('project_alt_email', $item->project_alt_email);}else{echo set_value('project_alt_email');} ?>"></div></td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_alt_person'); ?></span>
                <span class="text-danger"><?php echo form_error('project_alt_department'); ?></span>
                <span class="text-danger"><?php echo form_error('project_alt_email'); ?></span>
                </div>
                <div id="section_4" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_4">4</th>
                               <th colspan="2">Personnel associated with the project </th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>Name</th>
                                           <th>Role on project (e.g. PhD student, Research Assistant, Biosafety Officers, Laboratory Manager, co-Chief Investigator)</th>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_name[0]" value="<?php if(isset($load)){echo set_value('project_personel_name[0]', $a[0]);}else{echo set_value('project_personel_name[0]');} ?>"></div></td>
                                           
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_role[0]" value="<?php if(isset($load)){echo set_value('project_personel_role[0]', $b[0]);}else{echo set_value('project_personel_role[0]');} ?>"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_name[1]" value="<?php if(isset($load)){echo set_value('project_personel_name[1]', $a[1]);}else{echo set_value('project_personel_name[1]');} ?>"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_role[1]" value="<?php if(isset($load)){echo set_value('project_personel_role[1]', $b[1]);}else{echo set_value('project_personel_role[1]');} ?>"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_name[2]" value="<?php if(isset($load)){echo set_value('project_personel_name[2]', $a[2]);}else{echo set_value('project_personel_name[2]');} ?>"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_role[2]" value="<?php if(isset($load)){echo set_value('project_personel_role[2]', $b[2]);}else{echo set_value('project_personel_role[2]');} ?>"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_name[3]" value="<?php if(isset($load)){echo set_value('project_personel_name[3]', $a[3]);}else{echo set_value('project_personel_name[3]');} ?>"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personnel_role[3]" value="<?php if(isset($load)){echo set_value('project_personel_role[3]', $b[3]);}else{echo set_value('project_personel_role[3]');} ?>"></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_personnel_name[0]'); ?></span>
                <span class="text-danger"><?php echo form_error('project_personnel_role[0]'); ?></span>
                </div>
                <div id="section_5" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_5">5</th>
                           <th colspan="2">Proposed work (please tick all the boxes that apply) </th>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_known" <?php echo set_checkbox('proposed_work_known', '1'); ?> <?php if(isset($load)){if($item->proposed_work_known==1){echo "checked=checked";}}else{} ?>>
                               </td>
                               <td>
                                   Handling clinical or environmental samples that are known to contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_may" <?php echo set_checkbox('proposed_work_may', '1'); ?> <?php if(isset($load)){if($item->proposed_work_may==1){echo "checked=checked";}}else{} ?> >
                               </td>
                               <td>
                                   Handling clinical or environmental samples that may contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_unknown" <?php echo set_checkbox('proposed_work_unknown', '1'); ?> <?php if(isset($load)){if($item->proposed_work_unknown==1){echo "checked=checked";}}else{} ?>>
                               </td>
                               <td>
                                   Isolation, enrichment or culture of unknown microorganisms from clinical or environmental samples that are likely to contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_isolation" <?php echo set_checkbox('proposed_work_isolation', '1'); ?> <?php if(isset($load)){if($item->proposed_work_isolation==1){echo "checked=checked";}}else{} ?>>
                               </td>
                               <td>
                                   Isolation or culture of a known Risk Group 2 microorganism
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_risk" <?php echo set_checkbox('proposed_work_risk', '1'); ?> <?php if(isset($load)){if($item->proposed_work_risk==1){echo "checked=checked";}}else{} ?> >
                               </td>
                               <td>
                                   Work involving Risk Group 3 or 4 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_sensitive" <?php echo set_checkbox('proposed_work_sensitive', '1'); ?> <?php if(isset($load)){if($item->proposed_work_sensitive==1){echo "checked=checked";}}else{} ?> >
                               </td>
                               <td>
                                   Work involving Security Sensitive Biological Agents 
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" value="1" class="form-control" name="proposed_work_other" <?php echo set_checkbox('proposed_work_other', '1'); ?> <?php if(isset($load)){if($item->proposed_work_other==1){echo "checked=checked";}}else{} ?> >
                               </td>
                               <td>
                                   Other (ensure you describe in Part 7)
                               </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
                <div id="section_6" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_6">6</th>
                           <th colspan="2">Project Summary - briefly describe the project, including background, aims. (This should be written in plain English) </th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                  <div class="form-group"><textarea rows="6" name="project_summary" class="form-control"><?php if(isset($load)){echo set_value('project_summary', $item->project_summary);}else{echo set_value('project_summary');} ?></textarea></div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_summary'); ?></span>
                </div>
                <div id="section_7" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_7">7</th>
                           <th colspan="2">Project activity –  the methods of the microbiological work to be conducted (e.g. culture methods, handling, transport, and disposal information, etc.) and the possible biohazard(s) or risk(s) involved?</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                  <div class="form-group"><textarea rows="6" name="project_activity" class="form-control"><?php if(isset($load)){echo set_value('project_activity', $item->project_activity);}else{echo set_value('project_activity');} ?></textarea></div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_activity'); ?></span>
                </div>
                <div id="section_8" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_8">8</th>
                           <th colspan="2">Provide a list of the SOPs and Risk Assessments to be used. (Attach all to application)</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>
                                               Title of SOP 
                                           </th>
                                           <th>
                                               Title of Risk Assessment (e.g Generic Risk Assessment for working with Risk Level II Bacteria in a Swinburne PC2 laboratories)
                                           </th>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group">
                                                   <input type="text" class="form-control" name="project_SOP_title[0]" value="<?php if(isset($load)){echo set_value('project_SOP_title[0]', $c[0]);}else{echo set_value('project_SOP_title[0]');} ?>">
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_risk_title[0]" value="<?php if(isset($load)){echo set_value('project_SOP_risk_title[0]', $d[0]);}else{echo set_value('project_SOP_risk_title[0]');} ?>" >
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group">
                                                   <input type="text" class="form-control" name="project_SOP_title[1]" value="<?php if(isset($load)){echo set_value('project_SOP_title[1]', $c[1]);}else{echo set_value('project_SOP_title[1]');} ?>" >
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_risk_title[1]" value="<?php if(isset($load)){echo set_value('project_SOP_risk_title[1]', $d[1]);}else{echo set_value('project_SOP_risk_title[1]');} ?>">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group">
                                                   <input type="text" class="form-control" name="project_SOP_title[2]" value="<?php if(isset($load)){echo set_value('project_SOP_title[2]', $c[2]);}else{echo set_value('project_SOP_title[2]');} ?>" >
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_risk_title[2]" value="<?php if(isset($load)){echo set_value('project_SOP_risk_title[2]', $d[2]);}else{echo set_value('project_SOP_risk_title[2]');} ?>" >
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_SOP_title[0]'); ?></span>
                <span class="text-danger"><?php echo form_error('project_SOP_risk_title[0]'); ?></span>
                </div>
                <div id="section_9" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_9">9</th>
                           <th colspan="2">Facilities to be used</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <th>
                                               Building
                                           </th>
                                           <th>
                                               Room Number (s)
                                           </th>
                                       </tr>
                                       <tr>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_building[0]" value="<?php if(isset($load)){echo set_value('project_facilities_building[0]', $e[0]);}else{echo set_value('project_facilities_building[0]');} ?>" >
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_room[0]" value="<?php if(isset($load)){echo set_value('project_facilities_room[0]', $f[0]);}else{echo set_value('project_facilities_room[0]');} ?>" >
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_building[1]" value="<?php if(isset($load)){echo set_value('project_facilities_building[1]', $e[1]);}else{echo set_value('project_facilities_building[1]');} ?>" >
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_room[1]" value="<?php if(isset($load)){echo set_value('project_facilities_room[1]', $f[1]);}else{echo set_value('project_facilities_room[1]');} ?>" >
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_facilities_building[0]'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_room[0]'); ?></span>
                </div>
                <div id="section_10" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_10">10</th>
                           <th colspan="2">Biosafety Officer(s)/Lab Manager notification</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   Has/have the Biosafety Officer and/or Lab Manager responsible for the facilities where the work is to be conducted been made aware of this application and approve the use of the facility for this project? 
                                   
                                   <label class="checkbox-inline"><input type="checkbox" value="1" name="officer_notified" <?php echo set_checkbox('officer_notified', '1'); ?> <?php if(isset($load)){if($item->officer_notified==1){echo "checked=checked";}}else{} ?>>Yes</label>
                                               
                                   <label class="checkbox-inline"><input type="checkbox" value="0" name="officer_notified" <?php echo set_checkbox('officer_notified', '1'); ?> <?php if(isset($load)){if($item->officer_notified==0){echo "checked=checked";}}else{} ?> >No</label>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="2">
                                   Name and signature of Biosafety Officer(s)/Lab Manager:
                                  <div class="form-group"><input type="text" class="form-control" name="officer_name" value="<?php if(isset($load)){echo set_value('officer_name', $item->officer_name);}else{echo set_value('officer_name');} ?>"></div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
                
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_11">11</th>
                           <th colspan="2">Project Supervisor declaration</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   I declare that:<br>
                                    &nbsp;    •	all current and new personnel handling this agent will receive appropriate training<br>
                                    &nbsp;    •	training records will be maintained<br>
                                    &nbsp;    •	documented Risk Assessments will be completed as required<br>
                                    &nbsp;    •	Standard Operating Procedures will be maintained/developed as required<br>
                                    &nbsp;    •	facility access will be restricted to authorised personnel only<br>
                                    &nbsp;    •	all other regulatory requirements will be met.<br>

                               </td>
                           </tr>
                           <tr>
                               <td colspan="2">
                                   Signature:<br><br><br>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                
                <div>
                    <input type="hidden" name="appid" value="<?php if(isset($appID)){echo $appID;} ?>">
                </div>
                
                   <div style="text-align: center">
                       <?php if(isset($editload)){ ?>
                       <button type="submit" name = 'biohazard_update' value = 'Update' onclick="location.href='<?php echo site_url().'/biohazard/update_form';?>'" class="btn btn-primary">Update</button>
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
                    <a href="#section_10" class="btn btn-success">Section 10</a>
                    <a href="#section_11" class="btn btn-success">Section 11</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>