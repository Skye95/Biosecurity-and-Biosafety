<!DOCTYPE html>
<html>
<head>
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
        
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
               <form class="form-horizontal">
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
                   
                   <table class="table table-bordered" id="section_1">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata">1</th>
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
                               <th colspan="2">Project Supervisor (must be a Swinburne staff member)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">Name: <div class="form-group"><input type="text" class="form-control" name="project_supervisor_name"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Department: <div class="form-group"><input type="text" class="form-control" name="project_supervisor_department"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Email (MUST be Swinburne email address): <div class="form-group"><input type="email" class="form-control" name="project_supervisor_email_address"></div></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_3">3</th>
                               <th colspan="2">Contact Person for this Application (if different to above)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">Name: <div class="form-group"><input type="text" class="form-control" name="project_alt_person"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Department: <div class="form-group"><input type="text" class="form-control" name="project_alt_department"></div></td>
                           </tr>
                           <tr>
                               <td colspan="2">Email (MUST be Swinburne email address): <div class="form-group"><input type="email" class="form-control" name="project_alt_email"></div></td>
                           </tr>
                       </tbody>
                   </table>
                   
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
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_name"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_role"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_name"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_role"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_name"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_role"></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_name"></div></td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="project_personel_role"></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_5">5</th>
                           <th colspan="2">Proposed work (please tick all the boxes that apply) </th>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_known">
                               </td>
                               <td>
                                   Handling clinical or environmental samples that are known to contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_may">
                               </td>
                               <td>
                                   Handling clinical or environmental samples that may contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_unknown">
                               </td>
                               <td>
                                   Isolation, enrichment or culture of unknown microorganisms from clinical or environmental samples that are likely to contain Risk Group 2 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_isolation">
                               </td>
                               <td>
                                   Isolation or culture of a known Risk Group 2 microorganism
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_risk">
                               </td>
                               <td>
                                   Work involving Risk Group 3 or 4 microorganisms
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_sensitive">
                               </td>
                               <td>
                                   Work involving Security Sensitive Biological Agents 
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" class="form-control" name="proposed_work_other">
                               </td>
                               <td>
                                   Other (ensure you describe in Part 7)
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_6">6</th>
                           <th colspan="2">Project Summary - briefly describe the project, including background, aims. (This should be written in plain English) </th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                  <div class="form-group"><textarea rows="6" name="project_summary" class="form-control"></textarea></div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_7">7</th>
                           <th colspan="2">Project activity –  the methods of the microbiological work to be conducted (e.g. culture methods, handling, transport, and disposal information, etc.) and the possible biohazard(s) or risk(s) involved?</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                  <div class="form-group"><textarea rows="6" name="project_activity" class="form-control"></textarea></div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
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
                                                   <input type="text" class="form-control" name="project_SOP">
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_title">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group">
                                                   <input type="text" class="form-control" name="project_SOP">
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_title">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group">
                                                   <input type="text" class="form-control" name="project_SOP">
                                               </div>
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_SOP_title">
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
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
                                               <input type="text" class="form-control" name="project_facilities_building">
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_room">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_building">
                                           </td>
                                           <td>
                                               <input type="text" class="form-control" name="project_facilities_room">
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th width="10px" class="reddata" id="section_10">10</th>
                           <th colspan="2">Biosafety Officer(s)/Lab Manager notification</th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   Has/have the Biosafety Officer and/or Lab Manager responsible for the facilities where the work is to be conducted been made aware of this application and approve the use of the facility for this project? 
                                   
                                   <label class="checkbox-inline"><input type="checkbox" value="" name="officer_notified">Yes</label>
                                               
                                   <label class="checkbox-inline"><input type="checkbox" value="" name="officer_notified">No</label>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="2">
                                   Name and signature of Biosafety Officer(s)/Lab Manager:
                                  <div class="form-group"><input type="text" class="form-control" name="officer_name"></div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
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
                    <a href="#section_10" class="btn btn-success">Section 10</a>
                    <a href="#section_11" class="btn btn-success">Section 11</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>