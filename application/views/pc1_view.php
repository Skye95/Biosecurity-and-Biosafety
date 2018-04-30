<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$this->session->userdata('isLogin')){
    redirect('landing/index');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - PC1 Form</title>
    
    <style>
        body {
            padding-top: 60px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
            padding-top: 0px;
        }
        
        .approve_section{
            display: none;
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
        
        
        .colspace{
            width: 50px;
        }
        
        
        
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <?php
    
    if(isset($load)){
        foreach($retrieved as $item){
            $new1 = $item->project_add_qualification;
            $new2 = $item->project_add_name;
            $new3 = $item->project_add_department;
            $new4 = $item->project_add_campus;
            $new5 = $item->project_add_postal_address;
            $new6 = $item->project_add_telephone;
            $new7 = $item->project_add_fax;
            $new8 = $item->project_add_email_address;
            $new9 = $item->project_add_title;
            $a = explode(",", $new1);
            $b = explode(",", $new2);
            $c = explode(",", $new3);
            $d = explode(",", $new4);
            $e = explode(",", $new5);
            $f = explode(",", $new6);
            $g = explode(",", $new7);
            $h = explode(",", $new8);
            $i = explode(",", $new9);
        }
        
        
    }else{
           
        }
    
    ?>
    
    <div class="container">
        <div class="row">
            
            
            <div class="col-md-10">
               <?php echo form_open_multipart('pc1/index'); ?>
                   <h4 class="centering"><u>Swinburne Biosafety Commitee</u></h4>
                   
                   <h3 class="centering">Application for Notifiable Low Risk Dealings</h3>
                   <h3 class="centering">(NLRDs) suitable for Physical Containment level 1 </h3>
                   <h3 class="centering">(PC1)</h3>
                   
                   <br>
                   
                   <table class="table table-bordered">
                       <thead class="tblTitle2">
                           <tr>
                               <th>DATE RECEIVED</th>
                               <th>SBC REFERENCE NUMBER</th>
                           </tr>
                       </thead>
                       <tbody class="tblTitle2">
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('date_received', $item->date_received);}else{echo set_value('date_received');} ?>">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="SBC_reference_no" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('SBC_reference_no', $item->SBC_reference_no);}else{echo set_value('SBC_reference_no');} ?>">
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_1">
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
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_2">2</th>
                               <th colspan="2">Researchers involved in the conduct of the project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">Project Supervisor (must be a Swinburne staff member)</td> 
                                       </tr>
                                       <tr>
                                           <td width="200">Title: <input type="text" class="form-control" name="project_supervisor_title" value="<?php if(isset($load)){echo set_value('project_supervisor_title', $item->project_supervisor_title);}else{echo set_value('project_supervisor_title');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_supervisor_name" value="<?php if(isset($load)){echo set_value('project_supervisor_name', $item->project_supervisor_name);}else{echo set_value('project_supervisor_name');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="project_supervisor_qualification" value="<?php if(isset($load)){echo set_value('project_supervisor_qualification', $item->project_supervisor_qualification);}else{echo set_value('project_supervisor_qualification');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_supervisor_department" value="<?php if(isset($load)){echo set_value('project_supervisor_department', $item->project_supervisor_department);}else{echo set_value('project_supervisor_department');} ?>" ></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_supervisor_campus" value="<?php if(isset($load)){echo set_value('project_supervisor_campus', $item->project_supervisor_campus);}else{echo set_value('project_supervisor_campus');} ?>" ></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_supervisor_postal_address" value="<?php if(isset($load)){echo set_value('project_supervisor_postal_address', $item->project_supervisor_postal_address);}else{echo set_value('project_supervisor_postal_address');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="project_supervisor_telephone" value="<?php if(isset($load)){echo set_value('project_supervisor_telephone', $item->project_supervisor_telephone);}else{echo set_value('project_supervisor_telephone');} ?>" ></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_supervisor_fax" value="<?php if(isset($load)){echo set_value('project_supervisor_fax', $item->project_supervisor_fax);}else{echo set_value('project_supervisor_fax');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_supervisor_email_address" value="<?php if(isset($load)){echo set_value('project_supervisor_email_address', $item->project_supervisor_email_address);}else{echo set_value('project_supervisor_email_address');} ?>"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_supervisor_title'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_name'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_qualification'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_department'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_campus'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_postal_address'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_telephone'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_fax'); ?></span>
                <span class="text-danger"><?php echo form_error('project_supervisor_email_address'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_3">3</th>
                               <th colspan="2">Additional people to be included in correspondence regarding this dealing<br>(e.g. Research Assistants, Biosafety Officer, Facility Managers)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td width="200">Title: <input type="text" class="form-control" name="project_add_title[0]" value="<?php if(isset($load)){echo set_value('project_add_title[0]', $a[0]);}else{echo set_value('project_add_title[0]');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_add_name[0]" value="<?php if(isset($load)){echo set_value('project_add_name[0]', $b[0]);}else{echo set_value('project_add_name[0]');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): 
                                               <input type="text" class="form-control" name="project_add_qualification[0]" value="<?php if(isset($load)){echo set_value('project_add_qualification[0]', $c[0]);}else{echo set_value('project_add_qualification[0]');} ?>">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department[0]" value="<?php if(isset($load)){echo set_value('project_add_department[0]', $d[0]);}else{echo set_value('project_add_department[0]');} ?>"></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus[0]" value="<?php if(isset($load)){echo set_value('project_add_campus[0]', $e[0]);}else{echo set_value('project_add_campus[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address[0]" value="<?php if(isset($load)){echo set_value('project_add_postal_address[0]', $f[0]);}else{echo set_value('project_add_postal_address[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="project_add_telephone[0]" value="<?php if(isset($load)){echo set_value('project_add_telephone[0]', $g[0]);}else{echo set_value('project_add_telephone[0]');} ?>"></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_add_fax[0]" value="<?php if(isset($load)){echo set_value('project_add_fax[0]', $h[0]);}else{echo set_value('project_add_fax[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address[0]" value="<?php if(isset($load)){echo set_value('project_add_email_address[0]', $i[0]);}else{echo set_value('project_add_email_address[0]');} ?>"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <tr>
                                           <td width="90px">Title: <input type="text" class="form-control" name="project_add_title[1]" value="<?php if(isset($load)){echo set_value('project_add_title[1]', $a[1]);}else{echo set_value('project_add_title[1]');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_add_name[1]" value="<?php if(isset($load)){echo set_value('project_add_name[1]', $b[1]);}else{echo set_value('project_add_name[1]');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): 
                                               <input type="text" class="form-control" name="project_add_qualification[1]" value="<?php if(isset($load)){echo set_value('project_add_qualification[1]', $c[1]);}else{echo set_value('project_add_qualification[1]');} ?>">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department[1]" value="<?php if(isset($load)){echo set_value('project_add_department[1]', $d[1]);}else{echo set_value('project_add_department[1]');} ?>"></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus[1]" value="<?php if(isset($load)){echo set_value('project_add_campus[1]', $e[1]);}else{echo set_value('project_add_campus[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address[1]" value="<?php if(isset($load)){echo set_value('project_add_postal_address[1]', $f[1]);}else{echo set_value('project_add_postal_address[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="project_add_telephone[1]" value="<?php if(isset($load)){echo set_value('project_add_telephone[1]', $g[1]);}else{echo set_value('project_add_telephone[1]');} ?>"></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_add_fax[1]" value="<?php if(isset($load)){echo set_value('project_add_fax[1]', $h[1]);}else{echo set_value('project_add_fax[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address[1]" value="<?php if(isset($load)){echo set_value('project_add_email_address[1]', $i[1]);}else{echo set_value('project_add_email_address[1]');} ?>"></td>
                                       </tr>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_4">4</th>
                               <th colspan="2">Type of Dealing (check the box that applies) - Schedule 3, Part 1, 1.1</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_a" <?php echo set_checkbox('dealing_type_a', '1'); ?> <?php if(isset($load)){if($item->dealing_type_a==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (a)	A dealing involving a genetically modified laboratory guinea pig, a genetically modified <br>&nbsp;&nbsp;&nbsp; laboratory mouse, a genetically modified laboratory rabbit or a genetically modified laboratory<br>&nbsp;&nbsp;&nbsp; rat, unless:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (i) an advantage is conferred on the animal by the genetic modification; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (ii) the animal is capable of secreting or producing an infectious agent as a result of the genetic modification;


                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_c" <?php echo set_checkbox('dealing_type_c', '1'); ?> <?php if(isset($load)){if($item->dealing_type_c==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (c) A dealing involving a replication defective vector derived from Human adenovirus or Adeno<br>&nbsp;&nbsp;&nbsp; associated virus in a host mentioned in item 4 of Part 2 of Schedule 2, if the donor nucleic acid:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (i)	cannot restore replication competence to the vector; and <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (ii) does not: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (A)	confer an oncogenic modification in humans; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (B)	encode a protein with immunomodulatory activity in humans.

                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_5">5</th>
                               <th colspan="2">Project Summary - briefly describe the project, including the aims of the proposed dealing, method of producing GMOs and their use. (This should be written in plain English).</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea class="form-control" name="project_summary" rows="6"><?php if(isset($load)){echo set_value('project_summary', $item->project_summary);}else{echo set_value('project_summary');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_summary'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_6">6</th>
                               <th colspan="2">Table of GMOs – list all the GMOs to be generated and or used</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Scientific name of unmodified organism
                                           </td>
                                           <td>
                                               Vectors and method of transfer
                                           </td>
                                           <td>
                                               Gene Identity and Species of Origin
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_name" value="<?php if(isset($load)){echo set_value('GMO_name', $item->GMO_name);}else{echo set_value('GMO_name');} ?>"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_method" value="<?php if(isset($load)){echo set_value('GMO_method', $item->GMO_method);}else{echo set_value('GMO_method');} ?>"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_origin" value="<?php if(isset($load)){echo set_value('GMO_origin', $item->GMO_origin);}else{echo set_value('GMO_origin');} ?>"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('GMO_name'); ?></span>
                <span class="text-danger"><?php echo form_error('GMO_method'); ?></span>
                <span class="text-danger"><?php echo form_error('GMO_origin'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_7">7</th>
                               <th colspan="2">Modified trait(s) and gene(s) responsible (Eg fungal resistance, attenuation, protein expression, disease resistance etc)) </th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Class of modified trait
                                           </td>
                                           <td>
                                               Details
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="modified_trait_class" value="<?php if(isset($load)){echo set_value('modified_trait_class', $item->modified_trait_class);}else{echo set_value('modified_trait_class');} ?>" ></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="modified_trait_description" value="<?php if(isset($load)){echo set_value('modified_trait_description', $item->modified_trait_description);}else{echo set_value('modified_trait_description');} ?>" ></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('modified_trait_class'); ?></span>
                <span class="text-danger"><?php echo form_error('modified_trait_description'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_8">8</th>
                               <th colspan="2">What are the possible hazard(s) or risk(s) to the staff performing the proposed genetic modification(s)?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_staff" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_staff', $item->project_hazard_staff);}else{echo set_value('project_hazard_staff');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_hazard_staff'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_9">9</th>
                               <th colspan="2">What are the possible hazard(s) or risk(s) from an unintentional release of the GMO(s) into the environment?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_environment" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_environment', $item->project_hazard_environment);}else{echo set_value('project_hazard_environment');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_hazard_environment'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_10">10</th>
                               <th colspan="2">What are the steps you will take in the event of an unintentional release of the GMO(s)?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_steps" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_steps', $item->project_hazard_steps);}else{echo set_value('project_hazard_steps');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_hazard_steps'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_11">11</th>
                               <th colspan="2">Do you propose to transport the GMO(s) outside a certified facility? (Include details about method of transportation)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_transport" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_transport', $item->project_transport);}else{echo set_value('project_transport');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_transport'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_12">12</th>
                               <th colspan="2">How will the GMO(s) be disposed of?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_disposal" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_disposal', $item->project_disposal);}else{echo set_value('project_disposal');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_disposal'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_13">13</th>
                               <th colspan="2">Provide a list of the SOPs and Risk Assessments for the protocols to be used. (Attach all listed to application)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <input type="file" class="form-control" name="project_SOP" />
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10" class="reddata" id="section_14">14</th>
                               <th>Facilities to be used</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Buiding number: <input type="text" class="form-control" name="project_facilities_building_no" value="<?php if(isset($load)){echo set_value('project_facilities_building_no', $item->project_facilities_building_no);}else{echo set_value('project_facilities_building_no');} ?>"></td>
                                           
                                           <td>Room number: <input type="text" class="form-control" name="project_facilities_room_no" value="<?php if(isset($load)){echo set_value('project_facilities_room_no', $item->project_facilities_room_no);}else{echo set_value('project_facilities_room_no');} ?>" ></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group">Containment Level: <input type="text" class="form-control" name="project_facilities_containment_level" value="<?php if(isset($load)){echo set_value('project_facilities_containment_level', $item->project_facilities_containment_level);}else{echo set_value('project_facilities_containment_level');} ?>" ></div></td>
                                           
                                           <td><div class="form-group">Certification number: <input type="text" class="form-control" name="project_facilities_certification_no" value="<?php if(isset($load)){echo set_value('project_facilities_certification_no', $item->project_facilities_certification_no);}else{echo set_value('project_facilities_certification_no');} ?>" ></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                <span class="text-danger"><?php echo form_error('project_facilities_building_no'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_room_no'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_containment_level'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_certification_no'); ?></span>
                   
                   <table class="table table-bordered">
                       <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_15">15</th>
                               <th>Biosafety Officer(s)/ Lab Manager notification</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the dealing is to be conducted been made aware of this application? &nbsp;&nbsp;
                                               
                                               <label class="radio-inline"><input type="radio" value="1" name="officer_notified" <?php echo set_radio('officer_notified', '1'); ?> <?php if(isset($load)){if($item->officer_notified==1){echo "checked=checked";}}else{} ?>>Yes</label>
                                               
                                               <label class="radio-inline"><input type="radio" value="0" name="officer_notified" <?php echo set_radio('officer_notified', '0'); ?> <?php if(isset($load)){if($item->officer_notified==0){echo "checked=checked";}}else{} ?>>No</label>

                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                           
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Name of Biosafety Officer(s)</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="officer_name" value="<?php if(isset($load)){echo set_value('officer_name', $item->officer_name);}else{echo set_value('officer_name');} ?>" ></div></td>
                                       </tr>
                                       <tr>
                                           <td>Name of Laboratory Manager</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="laboratory_manager" value="<?php if(isset($load)){echo set_value('laboratory_manager', $item->laboratory_manager);}else{echo set_value('laboratory_manager');} ?>" ></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   </table>
                   
                   
                   <div>
                       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                       <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/pc1/load_form">Load</a>
                   </div>
                   
               <?php echo form_close(); ?>
            </div>
            
            <div class="col-md-2">
                <div class="btn-group-vertical btn-sample">
                    <a href="#section_1" class="btn btn-success">Section 1</a>
                    <a href="#section_5" class="btn btn-success">Section 5</a>
                    <a href="#section_10" class="btn btn-success">Section 10</a>
                    <a href="#section_15" class="btn btn-success">Section 15</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>