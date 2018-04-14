<!DOCTYPE html>
<html>
    <head>
        <title>Biosafety and Biosecurity Online System - Application for Biosafety Clearance for use of exempt dealings</title>
    
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
            
            .tbheader1{
            background-color:  #95a5a6 ;
        }
            .tbheader2{
                background-color: palegreen;
                text-align: center;
            }
            
            .bluerow{
                background-color: aquamarine;
            }

        </style>
    </head>
    <body>
        
        <?php include_once 'template/navbar.php' ?>
        
        <div class="container">
            <div class="row">
                
                <div class="col-md-11">
                    <form class="form-horizontal">
                        <div>
                            <h5 class="centering"><strong>BIOSAFETY ACT 2007</strong></h5>
                             <br>
                            <h5 class="centering"><strong>BIOSAFETY REGULATIONS 2010</strong></h5>
                             <br>
                            <h5 class="centering"><strong>NBB/N/CU/15/FORM E</strong></h5>
                        </div>
                        
                         <br>
                        
                        <div>
                            <h8>NOTIFICATION FOR CONTAINED USE AND IMPORT FOR CONTAINED USE ACTIVITIES INVOLVING LIVING MODIFIED ORGANISM (LMO) FOR BIOSAFETY LEVELS 1, 2, 3 AND 4
                            </h8>
                        </div>
                         <br>
                        
                        
                        <div><p>Please refer to the Explanatory Notes of NBB/N/CU/15/FORM E before filling up this form</p></div>
                        
                        <div class="form-group">
                            <label class="control-label" for="project_title"><h6><strong>PROJECT TITLE:</strong></h6></label>
                            <input type="text" class="form-control col-md-5" name="project_title">
                        </div>
                        
                        <br>
                        
                        <table class="table table-bordered">
                            <h8><strong>Notification Check List</strong></h8>
                            <tr>
                                <td>1. Form NBB/N/CU/15/FORM E is complete with the relevant signatures</td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_form"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2. Cover letter from applicant's institute provided</td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_coverletter"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3. Notification has been assessed and sent through the IBC (if relevant)</td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_IBC"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4. IBC Assesment Report (hardcopy and softcopy) </td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_IBC_report"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5. A copy of clearance documents from the relevant Government agencies (if required) </td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_clearance"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6. Any information to be treated as confidential business information has been clearly marked "CBI" in the notification </td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_CBI"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7. One(1) original and six(6) hardcopies of the completed notification are submitted. A soft copy of the submitted notification that does not contain any CBI. </td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_CBI_submit"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8. All supporting documents/attachments required (e.g. SOPs, references) </td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_support"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9. A copy of letter of authorization from R&D collaboration involving more than one premises (if any)</td>
                                <td>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="" name="checklist_RnD"></label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <h8><strong>Note: Please retain a copy of your completed notification.</strong></h8>
                        
                        <br><br>
                        
                        <table class="table table-bordered">
                            <h8><strong>Preliminary information</strong></h8>
                            <tr>
                                <td>1.  Organization:</td>
                                <td><input type="text" class="form-control" name="organization"></td>
                            </tr>
                            <tr>
                                <td>2.  Name of Applicant(Principal Investigator):</td>
                                <td><input type="text" class="form-control" name="applicant_name_PI"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="515">3. Position in Organization:</td>
                                            <td><input type="text" class="form-control" name="position"></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone(office):</td>
                                            <td><input type="tel" class="form-control" name="telephone_office"></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone(mobile):</td>
                                            <td><input type="tel" class="form-control" name="telephone_mobile"></td>
                                        </tr>
                                        <tr>
                                            <td>Fax number:</td>
                                            <td><input type="text" class="form-control" name="fax"></td>
                                        </tr>
                                        <tr>
                                            <td>Email address:</td>
                                            <td><input type="email" class="form-control" name="email_address"></td>
                                        </tr>
                                        <tr>
                                            <td>Postal address:</td>
                                            <td><input type="text" class="form-control" name="postal_address"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Project Title:</td>
                                <td><input type="text" class="form-control" name="project_title2"></td>
                            </tr>
                            <tr>
                                <td>IBC Project Identification No.:</td>
                                <td><input type="text" class="form-control" name="IBC_project_identification_no"></td>
                            </tr>
                            <tr>
                                <td>Is this the first time the activity is being notified:</td>
                                <td><input type="text" class="form-control" name="notified_first"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="table table-notified">
                                        <tr>
                                            <td width="505">                                   
                                                i)Please provide the NBB reference number of your previous notification.
                                               
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="NBB_reference">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ii)How is this notification different from the previous notification submitted for this activity?(please provide an attachment if additional space is required)
                                            </td>
                                            <td>
                                                <textarea rows="5" class="form-control" name="NBB_difference"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        
                        <br>
                        
                        <table class="table table-bordered">
                            <h8><strong>Details of Importer</strong></h8>
                            <p>
                                <em>This section is relevant only if the LMO is importer. Importer refers to person or business bringing the LMO in behalf of the applicant</em>
                            </p>
                            
                            <tr>
                                <td>8. Organization:</td>
                                <td><input type="text" class="form-control" name="importer_organization"></td>
                            </tr>
                            <tr>
                                <td>9. Contact Person:</td>
                                <td><input type="text" class="form-control" name="importer_contact_person"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="310">10. Position in Organization:</td>
                                            <td><input type="text" class="form-control" name="importer_position"></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone(office):</td>
                                            <td><input type="tel" class="form-control" name="importer_telephone_office"></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone(mobile):</td>
                                            <td><input type="tel" class="form-control" name="importer_telephone_mobile"></td>
                                        </tr>
                                        <tr>
                                            <td>Fax number:</td>
                                            <td><input type="text" class="form-control" name="importer_fax"></td>
                                        </tr>
                                        <tr>
                                            <td>Email address:</td>
                                            <td><input type="email" class="form-control" name="importer_email_address"></td>
                                        </tr>
                                        <tr>
                                            <td>Postal address:</td>
                                            <td><input type="text" class="form-control" name="importer_postal_address"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <br>
                        
                        <h8><strong>Institutional Biosafety Commitee (IBC) Assesment for the contained use and import for containe use and import for contained use of LMO</strong></h8>
                        <p>
                            <em>This must be completed by the registered IBC of the applicants organization.<br>This section is not relevant to organizations not involved in biotechnology research and development.</em>
                        </p>
                        
                        <br>
                        
                        <table class="table table-bordered">
                            <h8><strong>IBC Details</strong></h8>
                            
                            <tr>
                                <td>1</td>
                                <td>Name of Organization:</td>
                                <td><input type="text" class="form-control" name="IBC_organization_name"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2">
                                    <table class="table table-bordered">
                                        
                                            <td>
                                                <tr>
                                                    <td>Name of IBC Chairperson:</td>
                                                    <td colspan="3"><input type="text" class="form-control" name="IBC_chairperson"></td>
                                                </tr>
                                                <tr>
                                                    <td>Telephone Number:</td>
                                                    <td><input type="tel" class="form-control" name="IBC_telephone_number"></td>
                                                    <td>Fax:</td>
                                                    <td><input type="text" class="form-control" name="IBC_fax"></td>
                                                </tr>
                                                <tr>
                                                    <td>E-mail address:</td>
                                                    <td colspan="3"><input type="email" class="form-control" name="IBC_email_address"></td>
                                                </tr>
                                            </td>
                                        
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Name of Principal Investigator:</td>
                                <td><input type="text" class="form-control" name="IBC_PI_name"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Project Title:</td>
                                <td><input type="text" class="form-control" name="IBC_project_title"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Date of the IBC Assesment:</td>
                                <td>
                                    <input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="IBC_date">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Does the IBC consider that the Principal Investigator and every other person authorized to be involved in the contained use of the LMO have adequate training and experience for this task?:</td>
                                <td>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_adequate">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_adequate">No</label>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td colspan="2">
                                    The following information to this project has been checked and approved.
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <ol type="a">
                                        <li>Description of project activities</li>
                                        <li>The description and genetics of the LMO</li>
                                    </ol>
                                </td>
                                <td>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_activities">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_activities">No</label>
                                    <br>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_description">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_description">No</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <ol type="a" start="c">
                                        <li>The emergency response plan and the specific measures to be taken in relation to a contained use activity involving LMO</li><br>
                                        <li>All persons involved are appropriately trained:</li>
                                    </ol>
                                </td>
                                <td>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_emergency_response">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_emergency_response">No</label>
                                    <br><br><br>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_trained">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_checklist_trained">No</label>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Has the information provided in Form NBB/N/CU/15/FORM E been checked by the IBC and found to be complete?
                                </td>
                                <td>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_form_approved">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_form_approved">No</label>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    Has the IBC assessed the biosafety of the proposed project?<br>
                                    <p>
                                        <em>The risks that the IBC is required to assess are:</em><br>
                                    </p>
                                    <ol type="a">
                                        <li>risks to the health and safety of human (occupational exposure) from the activities associated with genetic modification</li>
                                        <li>risks to the health and safety of human and animals from an unintentional release of the LMO; and</li>
                                        <li>risks to the environment form an unintentional release of the LMO</li>
                                    </ol>
                                    <br>
                                    
                                    <p>
                                        Please append a copy of the IBC's assessment report and indicate the attachments in which details are provided.
                                    </p>
                                    <p>A template of the IBC Assessment report (IBC/AP/15/ANNEX2) can be obtained at <a href="http://www.biosafety.nre.gov.my">http://www.biosafety.nre.gov.my</a></p>
                                </td>
                                <td>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_biosafety_approved">Yes</label>
                                    <label class="radio-inline"><input type="radio" value="" name="IBC_biosafety_approved">No</label>
                                </td>
                            </tr>
                        </table>
                        
                        <br><br>
                        
                        <div>
                            <h8><strong>Signatures and Statutory Declaration</strong></h8><br>
                            
                            <h8><strong><em>Please mark [X] in the chosen box</em></strong></h8>
                            
                            <div class="checkbox">
                              <label><input type="checkbox" value="" name="signature_statutory_endorsed">The contained use of LMO in within this project has been assessed as above and endorsed by the IBC.</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                  <input type="checkbox" value="" name="signature_statutory_applicant_free">Applicant is not involved in modern biotechnology research and development
                                </label>
                            </div>
                            
                            <div>
                                <p>We declare that all information and documents herein are true and correct. We understand that providing misleading information to the NBB, deliberately or otherwise, is an offence under the Biosafety act 2007.</p>
                            </div>
                            
                            <h8><strong>Applicant/Principal Investigator:</strong></h8>
                            
                            <br>
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Signature:</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Date:</td>
                                        <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="applicant_PI_signature_date"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Name as in Identity Card/Passport:</td>
                                        <td><input type="text" class="form-control" name="applicant_PI_signature_name"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                Official Stamp:
                                <textarea rows="5" class="form-control" name="applicant_PI_signature_stamp"></textarea>
                            </div>
                            
                            <br>
                            
                            <div>
                                <h8><strong>IBC Chairperson:</strong></h8>
                                <p><em>This section is not relevant to organizations not involved in modern biotechnology research and development</em></p>
                            </div>
                            
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Signature:</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Date:</td>
                                        <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="IBC_chairperson_signature_date"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Name as in Identity Card/Passport:</td>
                                        <td><input type="text" class="form-control" name="IBC_chairperson_signature_name"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                Official Stamp:
                                <textarea rows="5" class="form-control" name="IBC_chairperson_signature_stamp"></textarea>
                            </div>
                            
                            <br>
                            
                            <div>
                                <h8><strong>Head of Organization/Authourize representative:</strong></h8>
                            </div>
                            
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Signature:</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td>Date:</td>
                                        <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="organization_representative_signature_date "></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Name as in Identity Card/Passport:</td>
                                        <td><input type="text" class="form-control" name="organization_representative_signature_name"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div>
                                Official Stamp:
                                <textarea rows="5" class="form-control" name="organization_representative_signature_stamp"></textarea>
                            </div>
                            
                        </div>
                        
                        <br><br><br>
                        
                        <div id="part_a">
                            <h8><strong>Part A: General Information</strong></h8>
                            
                            <ol type="1">
                                <li>
                                    Project team member's details.<br><br>
                                    Information required is only for key persons involved in the project. IBC should have a record for <strong>ALL</strong> persons involved in the project.
                                </li>
                            </ol>
                            
                            <table class="table table-bordered">
                                <h8><strong>Table 1: Description of team members' details</strong></h8>
                                <thead>
                                    <tr>
                                        <th class="tbheader1">Name</th>
                                        <th class="tbheader1">Address, Contact Number & Email</th>
                                        <th class="tbheader1">Qualifications/Experience</th>
                                        <th class="tbheader1">Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="project_team_name" ></td>
                                        <td>
                                            <textarea rows="5" class="form-control" name="project_team_address" placeholder="address"></textarea><br>
                                            <input type="tel" class="form-control" name="project_team_telephone_number" placeholder="contact no"><br>
                                            <input type="email" class="form-control" name="project_team_email_address" placeholder="email">
                                        </td>
                                        <td><input type="text" class="form-control" name="project_team_qualification"></td>
                                        <td><input type="text" class="form-control" name="project_team_designation"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="project_team_name" ></td>
                                        <td>
                                            <textarea rows="5" class="form-control" name="project_team_address" placeholder="address"></textarea><br>
                                            <input type="tel" class="form-control" name="project_team_telephone_number" placeholder="contact no"><br>
                                            <input type="email" class="form-control" name="project_team_email_address" placeholder="email">
                                        </td>
                                        <td><input type="text" class="form-control" name="project_team_qualification"></td>
                                        <td><input type="text" class="form-control" name="project_team_designation"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="project_team_name" ></td>
                                        <td>
                                            <textarea rows="5" class="form-control" name="project_team_address" placeholder="address"></textarea><br>
                                            <input type="tel" class="form-control" name="project_team_telephone_number" placeholder="contact no"><br>
                                            <input type="email" class="form-control" name="project_team_email_address" placeholder="email">
                                        </td>
                                        <td><input type="text" class="form-control" name="project_team_qualification"></td>
                                        <td><input type="text" class="form-control" name="project_team_designation"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="project_team_name" ></td>
                                        <td>
                                            <textarea rows="5" class="form-control" name="project_team_address" placeholder="address"></textarea><br>
                                            <input type="tel" class="form-control" name="project_team_telephone_number" placeholder="contact no"><br>
                                            <input type="email" class="form-control" name="project_team_email_address" placeholder="email">
                                        </td>
                                        <td><input type="text" class="form-control" name="project_team_qualification"></td>
                                        <td><input type="text" class="form-control" name="project_team_designation"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="project_team_name" ></td>
                                        <td>
                                            <textarea rows="5" class="form-control" name="project_team_address" placeholder="address"></textarea><br>
                                            <input type="tel" class="form-control" name="project_team_telephone_number" placeholder="contact no"><br>
                                            <input type="email" class="form-control" name="project_team_email_address" placeholder="email">
                                        </td>
                                        <td><input type="text" class="form-control" name="project_team_qualification"></td>
                                        <td><input type="text" class="form-control" name="project_team_designation"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>
                        
                        <div id="part_b">
                             <h8><strong>Part B: Project Introduction</strong></h8>
                            
                            <p>In this Part, the applicant is required to describe the proposed activities with the LMO within the context of the project.</p>
                            
                            <ol type="1" start="2">
                                <li>
                                    General Objective:<input type="text" class="form-control" name="project_intro_objective"><br>
                                    Specific Objective(s): <strong>(if any)</strong><input type="text" class="form-control" name="project_intro_specifics"><br>
                                </li>
                                <li>
                                    Description of project activities (please provide flowchart of the activities and the premises where each activity is conducted):
                                    <input type="file" class="form-control" name="project_intro_activities" multiple><br>
                                </li>
                                <li>
                                    Biosafety Level (BSL) of the proposed activity:<br>
                                    (the biosafety containment level is determined by the risk assessment of the activity)<br>
                                     <label class="radio-inline"><input type="radio" name="project_intro_BSL">BSL 1</label>
                                     <label class="radio-inline"><input type="radio" name="project_intro_BSL">BSL 2</label>
                                     <label class="radio-inline"><input type="radio" name="project_intro_BSL">BSL 3</label> 
                                     <label class="radio-inline"><input type="radio" name="project_intro_BSL">BSL 4</label> 
                                </li>
                                <li>
                                    Estimated duration of activity(please provide Gantt Chart):
                                    <input type="file" class="form-control" name="project_intro_duration"><br>
                                </li>
                                <li>
                                    Intended Date of Commencement:
                                    <input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="project_intro_intended_date_commencement">
                                </li>
                                <li>
                                    Expected Date of Completion:
                                    <input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="project_intro_expected_date_completion">
                                </li>
                                <li>
                                    Date of importation or intended importation (for an imported LMO)
                                    <input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="project_intro_importation_date">
                                </li>
                                <li>
                                    If the experiments are succesful, are there plans for field experiment?<br>
                                    <label class="radio-inline"><input type="radio" name="project_intro_field_experiment">Yes</label>
                                    <label class="radio-inline"><input type="radio" name="project_intro_field_experiment">No</label>
                                </li>
                            </ol>
                        </div>
                        
                        <div id="part_c">
                            <h8><strong>Part C: Description of the LMO</strong></h8>
                            
                            <p>
                                Please refer to the explanatory notes on Part C before filling in the specific information in a tabulated form as shown below
                            </p>
                            
                            <table class="table table-bordered">
                                <h8><strong>Table 2: Description of the LMO for contained use activities</strong></h8>
                                <thead>
                                    <tr>
                                        <th>LMO</th>
                                        <th>Common and scientific name(s) of parent organism (recipient)</th>
                                        <th>Common and scientific  name(s) of donor organism</th>
                                        <th>Vector(s) and method of genetic modification</th>
                                        <th>Class of modified trait (Refer to Box 1 of the Explanatory Notes)</th>
                                        <th>Modified trait</th>
                                        <th>Number of genes involved (Please provide the gene construct(s) map)</th>
                                        <th>Identity and function of the gene(s) involved</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_parent"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_donor"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_method"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_class"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_trait"></td>
                                        <td><input type="file" class="form-control" name="LMO_desc_genes" placeholder="choose file"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_genes_function"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_parent"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_donor"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_method"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_class"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_trait"></td>
                                        <td><input type="file" class="form-control" name="LMO_desc_genes" placeholder="choose file"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_genes_function"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_parent"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_name_donor"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_method"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_class"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_trait"></td>
                                        <td><input type="file" class="form-control" name="LMO_desc_genes" placeholder="choose file"></td>
                                        <td><input type="text" class="form-control" name="LMO_desc_genes_function"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <br>
                        
                        <div id="part_d">
                            <h8><strong>Part D: Risk assessment and management</strong></h8><br>
                            
                            <h8><strong>D1 Risk Assessment (Basic information)</strong></h8>
                            <ol type="1" start="10">
                                <li>
                                    10.	What are the possible hazard(s) and the likelihood and consequence of the hazard(s) occurring (i.e. the risk) from the proposed genetic modification(s) including unintentional release to the health and safety of human and animals and the environment? You are required to fill in the matrix below. Please refer to Chapter 4 of <a href="www.biosafety.nre.gov.my/guideline.shtml">Biosafety Guidelines: Contained use activity of Living Modified Organism</a>(www.biosafety.nre.gov.my/guideline.shtml)
                                </li>
                            </ol>
                            
                            <table class="table table-bordered">
                                <h8 class="centering"><strong>Risk assessment matrix</strong></h8>
                                <thead>
                                    <th class="tbheader2">Hazard from</th>
                                    <th class="tbheader2">Identification of Potential Hazard</th>
                                    <th class="tbheader2">Comments on Risk</th>
                                    <th class="tbheader2">Risk Management by Applicant</th>
                                    <th class="tbheader2">Residual Risk</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bluerow">Science of Genetic modification </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_genes_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_potential_hazard" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_genes_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_comments" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_genes_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_management" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_genes_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_genes_residual" placeholder="click to enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bluerow">Admin. Policy, People and Practice </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_admin_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_potential_hazard" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_admin_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_comments" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_admin_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_management" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_admin_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_admin_residual" placeholder="click to enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bluerow">Containment integrity</td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_containment_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_potential_hazard" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_containment_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_comments" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_containment_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_management" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_containment_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_containment_residual" placeholder="click to enter text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bluerow">Special risks unique to notification</td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_special_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_potential_hazard" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_potential_hazard" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_special_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_comments" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_comments" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_special_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_management" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_management" placeholder="click to enter text">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="risk_assessment_special_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_residual" placeholder="click to enter text">
                                            <input type="text" class="form-control" name="risk_assessment_special_residual" placeholder="click to enter text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            
                            <h8><strong>D2 Risk Management</strong></h8><br><br>
                            
                            <ol type="1" start="11">
                                <li>
                                    Do you propose to transport the LMO outside the premises or between premises?
                                    <p><em>If yes, provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines. Please ensure all the premises used are included in Part E of this form.</em></p>
                                    <textarea rows="5" class="form-control" name="risk_management_transport"></textarea>
                                </li>
                                <li>
                                    How will the LMO be disposed of?
                                    <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines. If the activity invovlves LMO at various growth stages (seedlings,trees), the SOP should cover the disposal of LMO at each growth stage. </em></p>
                                    <textarea rows="6" class="form-control" name="risk_management_disposed"></textarea>
                                </li>
                                <li>
                                    How will the solid and liquid wastes from the activities (e.g. media, disposable gloves, planting materials, plant parts, etc) be treated and disposed of?
                                    <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.</em></p>
                                    <textarea rows="6" class="form-control" name="risk_management_wastes"></textarea>
                                </li>
                                <li>
                                    How will the wastewaters from the activities be disposed of?(e.g. water used for cleaning equipment, watering the plants, etc.)
                                    <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.</em></p>
                                    <textarea rows="6" class="form-control" name="risk_management_wastewater"></textarea>
                                </li>
                                <li>
                                    How will the equipment/tools/surfaces used during the activities be decontaminated?(e.g.sharp, pipette, decontaminated glassware, etc)
                                    <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.</em></p>
                                    <textarea rows="6" class="form-control" name="risk_management_decontaminated"></textarea>
                                </li>
                            </ol>
                            
                            <br><br>
                            
                            <h8><strong>D3 Emergency Response Plan</strong></h8><br><br>
                            
                            <ol type="1" start="16">
                                <li>
                                    Provide plans for protecting human and animal health and the environment in the case of the occurence of an undesirable effect observed during contained use of activities.
                                    <p><em>(e.g. medical management which includes first aid and hospitalization, line of communication both within and outside the organization.</em></p>
                                    <textarea rows="6" class="form-control" name="risk_response_environment"></textarea>
                                </li>
                                <li>
                                    Provide plans for removal of the LMO in the affected areas in the case of an unintentional release
                                    <p><em>(e.g. to contain and treat spillage)</em></p>
                                    <textarea rows="6" class="form-control" name="risk_response_plan"></textarea>
                                </li>
                                <li>
                                    Provide plans for disposal of plants, animals and any other organisms exposed during the unintentional release.
                                    <textarea rows="6" class="form-control" name="risk_response_disposal"></textarea>
                                </li>
                                <li>
                                    Provide plans for isolation of the area affected by the unintentional release <em>(e.g. evacuation and quarantine)</em>
                                    <textarea rows="6" class="form-control" name="risk_response_isolation"></textarea>
                                </li>
                                <li>
                                    Provide details of any other contingency measure that will be in place to rectify any unintended consequences if an adverse effect becomes evident during the contained use of activities or when an unintentional release occurs.
                                    <textarea rows="6" class="form-control" name="risk_response_contigency"></textarea>
                                </li>
                            </ol>                         
                        </div>
                        
                        <!-- Continue Here -->
                        
                    </form>
                </div>
                
                 <div class="col-md-1">
                     <div class="btn-group-vertical btn-sample">
                         <a href="#section_1" class="btn btn-success">Section 1</a>
                         <a href="#section_2" class="btn btn-success">Section 2</a>
                         <a href="#section_3" class="btn btn-success">Section 3</a>
                     </div>   
                 </div>
                
            </div>    
                
                
        </div>
        
        

    </body>
</html>