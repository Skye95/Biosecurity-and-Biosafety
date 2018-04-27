<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css" type="text/css">
    <title>Biosafety and Biosecurity Online System - Application for Biosafety Clearance for use of exempt dealings</title>
    
    <style>
        body {
            padding-top: 82px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
        }
        
        .blackborder{
            border-color: black;
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
        
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div id='breadcrumb1'>
            <ul>
               <li><a href='<?php echo base_url(); ?>index.php/home'>Home</a></li>
               <li><a href='<?php echo base_url(); ?>index.php/applicationpage'>Application</a></li>
               <li><a href='<?php echo base_url(); ?>index.php/newapplicationpage'>New Application</a></li>
               <li class='active'><a>Application for biosafety clearance for use of Exempt dealings</a></li>
            </ul>
        </div>
            <hr>
        <div class="row">
            
            <div class="col-md-10">
               <form class="form-horizontal">
                   <h4 class="centering"><u>Swinburne Biosafety Commitee</u></h4>
                   
                   <h3 class="centering">Application for biosafety clearance for use of</h3>
                   <h3 class="centering">Exempt dealings</h3>
                   
                   <table class="table table-bordered blackborder">
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
                   
                   <table class="table table-bordered" id="section_1">
                       <thead>
                           <tr>
                               <th width="20px" class="reddata">1</th>
                               <th>Title of Project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="project_title" class="form-control"></td> 
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_2">2</th>
                               <th colspan="2">Researchers involved in the conduct of the project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="3">Project Supervisor (must be a Swinburne staff member)</td> 
                           </tr>
                           <tr>
                               <td width="90px">Title: <input type="text" class="form-control" name="project_supervisor_title"></td>
                               <td>Name: <input type="text" class="form-control" name="project_supervisor_name"></td>
                               <td>Current qualifications (please include all): <input type="text" class="form-control" name="project_supervisor_qualification"></td>
                           </tr>
                           <tr>
                               <td colspan="2">Department: <input type="text" class="form-control" name="project_supervisor_department"></td>
                               <td colspan="1">Campus: <input type="text" class="form-control" name="project_supervisor_campus"></td>
                           </tr>
                           <tr>
                               <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_supervisor_postal_address"></td>
                           </tr>
                           <tr>
                               <td colspan="2">Phone: <input type="tel" class="form-control" name="project_supervisor_telephone"></td>
                               <td>Fax: <input type="text" class="form-control" name="project_supervisor_fax"></td>
                           </tr>
                           <tr>
                               <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_supervisor_email_address"></td>
                           </tr>
                       </tbody>
                   </table>
                   
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
                                           <td width="90px">Title: <input type="text" class="form-control" name="project_add_title"></td>
                                           <td>Name: <input type="text" class="form-control" name="project_add_name"></td>
                                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="project_add_qualification"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department"></td>
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="tel" class="form-control" name="project_supervisor_telephone"></td>
                                           <td>Fax: <input type="text" class="form-control" name="project_add_fax"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <tr>
                           <td width="90px">Title: <input type="text" class="form-control" name="project_add_title"></td>
                           <td>Name: <input type="text" class="form-control" name="project_add_name"></td>
                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="project_add_qualification"></td>
                       </tr>
                       <tr>
                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department"></td>
                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus"></td>
                       </tr>
                       <tr>
                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address"></td>
                       </tr>
                       <tr>
                           <td colspan="2">Phone: <input type="tel" class="form-control" name="project_supervisor_telephone"></td>
                           <td>Fax: <input type="text" class="form-control" name="project_add_fax"></td>
                       </tr>
                       <tr>
                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address"></td>
                       </tr>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_4">4</th>
                               <th colspan="2">Exemption Category</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="exemption_type_2">
                                   </div>
                               </td>
                               <td>
                                   2)	A dealing with a genetically modified Caenorhabditis elegans, unless: <br>
                                   (a) an advantage is conferred on the animal by the genetic modification; or <br>
                                   (b) as a result of the genetic modification, the animal is capable of secreting or producing an infectious agent.

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="exemption_type_3">
                                   </div>
                               </td>
                               <td>
                                  3)	A dealing with an animal into which genetically modified somatic cells have been introduced, if:<br>
                                          (a) the somatic cells are not capable of giving rise to infectious agents as a result of the genetic modification; and <br>
                                          (b) the animal is not infected with a virus that is capable of recombining with the genetically modified nucleic acid in the somatic cells.
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="exemption_type_3A">
                                   </div>
                               </td>
                               <td>
                                  3A) A dealing with an animal whose somatic cells have been genetically modified in vivo by a   replication defective viral vector, if: <br>
        (a)	the in vivo modification occurred as part of a previous dealing; and <br>
		(b) the replication defective viral vector is no longer in the animal; and <br>
		(c) no germ line cells have been genetically modified; and <br>
		(d) the somatic cells cannot give rise to infectious agents as a result of the genetic modification; and <br>
		(e) the animal is not infected with a virus that can recombine with the genetically modified nucleic acid in the somatic cells of the animal. <br>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="exemption_type_4">
                                   </div>
                               </td>
                               <td>
                                  4)     (1) Subject to subitem (2), a dealing involving a host/vector system mentioned in Part 2 of  this Schedule and producing no more than 25 litres of GMO culture in each vessel containing the resultant culture.<br>
                                   (2) The donor nucleic acid: <br>
                                   (a) must meet either of the following requirements:<br>
				    (i) it must not be derived from organisms implicated in, or with a history of causing, disease in otherwise healthy: <br>
					(A) human beings; or <br>
					(B) animals; or <br>
					(C) plants; or <br>
					(D) fungi; <br>
                                   
                   (ii) it must be characterised and the information derived from its  characterisation show that it is unlikely to increase the capacity of the host or vector to cause harm; <br>
			 (b) must not code for a toxin with an LD50 of less than 100 g/kg; and<br>
			 (c) must not code for a toxin with an LD50 of 100 g/kg or more, if  the intention is to express the toxin at high levels; and<br>
			 (d) must not be uncharacterised nucleic acid from a toxin-producing organism; and<br>
			 (e) must not include a viral sequence, unless the donor nucleic acid:<br>
				(i) is missing at least 1 gene essential for viral multiplication that: <br>
               (A) is not available in the cell into which the nucleic acid is introduced; and<br>
               (B) will not become available during the dealing; and <br>
			    (ii) cannot restore replication competence to the vector.<br>

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="exemption_type_5">
                                   </div>
                               </td>
                               <td>
                                   5)	A dealing involving shot gun cloning, or the preparation of a cDNA library, in a host/vector system mentioned in item 1 of Part 2 of this Schedule, if the donor nucleic acid is not derived from either:<br> (a) a pathogen; or <br> (b) a toxin producing organism.
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_5">5</th>
                               <th colspan="2">Project Summary - briefly describe the project, including background, aims and methods. (This should be written in plain English)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2"><div class="form-group"><textarea class="form-control" name="project_summary" rows="6"></textarea></div></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_6">6</th>
                               <th colspan="2">What are the possible hazard(s) or risk(s) involved? If your work involves an exempt dealing - clarify why it is exempt.</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2"><div class="form-group"><textarea class="form-control" name="project_hazard" rows="6"></textarea></div></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_7">7</th>
                               <th colspan="2">Provide a list of the SOPs and Risk Assessments to be used. (Attach all to application)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2"><div class="form-group"><textarea class="form-control" name="project_SOP" rows="6"></textarea></div></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10" class="reddata" id="section_8">8</th>
                               <th>Facilities to be used</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Buiding number: <input type="text" class="form-control" name="project_facilitites_building_no"></td>
                                           <td>Room number: <input type="text" class="form-control" name="project_facilitites_room_no"></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group">Containment Level: <input type="text" class="form-control" name="project_facilitites_containment_level"></div></td>
                                           <td><div class="form-group">Certification number: <input type="text" class="form-control" name="project_facilitites_certification_no"></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_9">9</th>
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
                                               
                                               <label class="checkbox-inline"><input type="checkbox" value="" name="officer_notified">Yes</label>
                                               
                                               <label class="checkbox-inline"><input type="checkbox" value="" name="officer_notified">No</label>

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
                                           <td><div class="form-group"><input type="text" class="form-control" name="officer_name"></div></td>
                                       </tr>
                                       <tr>
                                           <td>Name of Laboratory Manager</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="laboratory_manager"></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
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