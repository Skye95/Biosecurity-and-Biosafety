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
                   <div>
                       <h4><strong>IBC/AP/13/ANNEX 2</strong></h4>
                   </div>
                   
                   <div><h4><strong>IBC ASSESSMENT OF PROJECT PROPOSAL INVOLVING MODERN BIOTECHNOLOGY ACTIVITIES</strong></h4></div>
                   
                   <div>
                       <p>IBC/AP/13/ANNEX 2 is to be used for assessment of a proposal to carry out modern biotechnology activities. This form serves to guide the IBC in the consideration and evaluation of the project proposal. Completed IBC assessments should be submitted to the National Biosafety Board (NBB), together with the corresponding application form.</p>
                   </div>
                   
                   <div>
                       <h5><strong>Instructions for Completion of the Form</strong></h5>
                       <p>IBC must submit a typed, completed assessment form to NBB, attached to the corresponding application form, and should retain a copy for record and reference. The assessment form must be signed by the IBC Chair and summited to NBB. A clear and concise explanation is required on the IBC's position on each of the experimental parameters identified in the assessment form.</p>
                   </div>
                   
                   <div>
                       <h5><strong>Some Specific Provisions: Proposal for Contained Use Activity of LMO/rDNA Material</strong></h5>
                       <p>IBC may authorize or commission research work immediately, upon obtaining an acknowledgement of receipt for contained use from the Director General of Biosafety. The contained use activity should observe the rudimentary standards, in current or past practice, as appropriate to the particular organism under investigation.</p>
                   </div>
                   
                   <div>
                       <h5><strong>Proposal for Field Experiment of LMO/rDNA Material</strong></h5>
                       <p>Principal Investigator (PI) must obtain endorsement from IBC and should not start a field experiment until a certificate of approval is granted by NBB. Measures for the control and containment of field work must comply with NBB and IBC advice/instruction. </p>
                   </div>
                   
                   <hr>
                   
                   <div>
                       <h6 id="section_1"><strong>1.General Information</strong></h6>
                       
                       <div class="form-group">
                           Name of applicant: <input type="text" class="form-control" name="applicant_name" id="applicant_name" >
                       </div>
                       
                       <div class="form-group">
                           Institutional address: <input type="text" class="form-control" name="institutional_address" >
                       </div>
                       
                       <div class="form-group">
                           Collaborating partners: <input type="text" class="form-control" name="collaborating_partners"  placeholder="indicate names & addresses of the instituion/s (if any)">
                       </div>
                       
                       <div class="form-group">
                           Project Title: <input type="text" class="form-control" name="project_title" id="project_title" >
                       </div>
                   </div>
                   
                   <hr>
                   
                   <div>
                       <h6 id="section_2"><strong>2.Experimental Parameters</strong></h6>
                       <p>IBC assessment/recommendation on each of the following:</p>
                       
                       <div class="form-group">
                           Project objective and methodology: <input type="text" class="form-control" name="project_objective_methodology" >
                       </div>
                       
                       <div class="form-group">
                           <p>Biological System: </p>
                               i. Common name of parent organism(s): <input type="text" class="form-control" name="biological_system_parent_organisms" id="parent_org_name" >
                               ii. Common name of donor organism(s): <input type="text" class="form-control" name="biological_system_donor_organisms"  id="donor_org_name" >
                               iii. Name of gene(s) for the modified traits(s): <input type="text" class="form-control" name="biological_system_modified_traits" >
                       </div>
                       
                       <div class="form-group">
                           Premises or location of contained use activity/field experiment: <input type="text" class="form-control" name="premises" id="premise_of_activity" >
                       </div>
                       
                       <div class="form-group">
                           Period of contained use activity/field experiment: <input type="text" class="form-control" name="period" >
                       </div>
                       
                       <div class="form-group">
                           Risk assesment and risk management: <input type="text" class="form-control" name="risk_assessment_and_management" id="risk_assesment_management" >
                       </div>
                       
                       <div class="form-group">
                           Emergency response plan: <input type="text" class="form-control" name="emergency_plan" id="emergency_response_plan" >
                       </div>
                       
                       <div class="form-group">
                           Additional IBC recommendation (if any): <input type="text" class="form-control" name="IBC_recommendation" >
                       </div>

                   </div>
                   
                   <hr>
                   
                   <div>
                       <h6 id="section_3"><strong>3.Details of Principal Investigators(PI)</strong></h6>
                       
                       <div class="form-group">
                           Experience and expertise: <input type="text" class="form-control" name="PI_experience_and_expertise" >
                       </div>
                       
                       <div class="form-group">
                           Training: <input type="text" class="form-control" name="PI_training" >
                       </div>
                       
                       <div class="form-group">
                           Health: <input type="text" class="form-control" name="health" id="PI_health" >
                       </div>
                       
                       <div class="form-group">
                           Others (please specify): <input type="text" class="form-control" name="PI_other">
                       </div>
                   </div>
                   
                   <hr>
                   
                   <div>
                       <h6 id="section_4"><strong>4.List of all Personnel involved in Project</strong></h6>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>No.</th>
                                   <th>Name</th>
                                   <th>Designation</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>1</td>
                                   <td><input type="text" class="form-control" name="personnel_involved" size="10"></td>
                                   <td><input type="text" class="form-control" name="personnel_designation" size="15"></td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td><input type="text" class="form-control" name="personnel_involved" id="personnel_name2" size="10"></td>
                                   <td><input type="text" class="form-control" name="personnel_designation" id="personnel_designation2" size="15"></td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td><input type="text" class="form-control" name="personnel_involved" id="personnel_name3" size="10"></td>
                                   <td><input type="text" class="form-control" name="personnel_designation" id="personnel_designation3" size="15"></td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td><input type="text" class="form-control" name="personnel_involved" id="personnel_name4" size="10"></td>
                                   <td><input type="text" class="form-control" name="personnel_designation" id="personnel_designation4" size="15"></td>
                               </tr>
                               <tr>
                                   <td>5</td>
                                   <td><input type="text" class="form-control" name="personnel_involved" id="personnel_name5" size="10"></td>
                                   <td><input type="text" class="form-control" name="personnel_designation" id="personnel_designation5" size="15"></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div>
                       <div>
                           <label for="IBC_signature">Signature (of IBC Chair) and Date</label>
                           <textarea rows="5" name="IBC_approved" class="form-control"></textarea>
                       </div>
                       
                       <div class="form-group">
                           <label for="ibc_name">Name:</label>
                           <input type="text" name="IBC_name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="ibc_date">Date:</label>
                           <input type="date" name="IBC_date" class="form-control">
                       </div>
                   </div>
                   
                   <div>
                       <button type="submit" class="btn btn-primary">Submit</button>
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