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
    
    <div  class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            
            <div id="top" class="col-md-9">
               <form class="form-horizontal">
                   <div><h4><strong>TITLE:</strong></h4></div>
				   <div><h4><strong>BIOSAFETY ACT 2007</strong></h4></div>
				   <div><h4><strong>BIOSAFETY REGULATIONS 2010</strong></h4></div>
				   <div><h4><strong>NBB/N/Ex/10/FORM F</strong></h4></div>
                   
				   <div>
                       <h5><strong>NOTIFICATION FOR EXPORT OF LIVING MODIFIED ORGANISM (LMO)</strong></h5>
                       <p>	
						  NBB/N/Ex/10/FORM F shall be submitted to the Director General as a notification 
						  for export of LMO under the Biosafety Act 2007. The applicant shall submit 1 
					      original and 6 copies of the notification to the Director General. 
					      A soft copy of the submitted notification (including all supporting documents/attachments, if any) 
					      shall also be provided in the form of a CD by the applicant. However, all information that has been declared as 
					      Confidential Business Information (CBI) should be omitted from the CD.
					   </p>
				   </div>                  
                   <div>
                       <h5><strong>Accuracy of Information</strong></h5>
                       <p>
						  The notification should be carefully checked before submission to ensure that all the information is accurate. 
						  If the information provided is incorrect or incomplete or misleading, the Director General may issue a withdrawal 
						  of the acknowledgement of submission of notification without prejudice to the submission of a fresh notification.
					   </p>
				   </div>                  
				   <div>
                       <h5><strong>Compliance with Requirements of Importing Country</strong></h5>
                       <p>
						  The applicant is required to comply with all the requirements of the importing country to export LMO. 
						  Evidence of compliance should be submitted with this notification. 
					   </p>
				   </div>				   
				   <div>
                       <h5><strong>Confidentiality</strong></h5>
                       <p>
						  Any information within this application which is to be treated as Confidential Business Information (CBI), as 
						  described in the Biosafety Act 2007 in section 59(3) should be clearly marked “CBI” in the relevant parts of 
						  the application by providing the justification for the request for CBI. The following information shall not 
						  be considered confidential:
					   </p>
					   <p>a) The name and address of the applicant
						  <br>b) Description of the LMO
					   </p>
				   </div>				   
				   <div>
                       <h5><strong>For further information:</strong></h5>
                       <p>
						  Please contact the Director General by:
						  <br>Telephone: 03-8886 1579		
						  <br>Email: biosafety@nre.gov.my	
					   </p>
				   </div>				   
				   <div>
                       <h5><strong>The completed form to be submitted as follows:</strong></h5>
                       <p>
						  Director General	
							<br>Department of Biosafety
							<br>Ministry of Natural Resources and Environment Malaysia
							<br>Level 1, Podium 2
							<br>Wisma Sumber Asli, No. 25, Persiaran Perdana
							<br>Precinct 4, Federal Government Administrative Centre
							<br>62574 Putrajaya, Malaysia
					   </p>
				   </div>				   
				   <div>
                       <h5><strong>Acknowledgement of Receipt</strong></h5>
                       <p>
						 Upon receipt of the notification, the Director General shall send to the applicant 
						 an acknowledgement of receipt with an assigned reference number. The reference number 
						 should be used in all correspondence with respect to the notification. 
					   </p>
				   </div>				   
				   <div>
                       <h5><strong>Exemption</strong></h5>
                       <p>
						 An applicant who has submitted a Notification for export of LMO and has received an 
						 Acknowledgement of Receipt from the Director General is exempt from making any subsequent 
						 Notifications for the same LMO, to the same country for the same purpose (as specified in the 
						 Acknowledgement of Receipt). However, there is no exemption for compliance with all the requirements of 
						 the importing country to export LMO for each subsequent export. 
					   </p>
				   </div>
                   
                   <hr>
                   
				   <div>
                       <h5><strong><i>Please retain a copy of your completed form</i></strong></h5>
				   </div>				   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><strong>NOTIFICATION CHECK LIST</strong></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>Form NBB/N/Ex/10/FORM F is completed with relevant signatures obtained</th>
                                   <td><input type="checkbox" name="notification_checklist_form_completed" value="1"></td>
                               </tr>
                               <tr>
                                   <th>Any information to be treated as confidential business information should be clearly marked “CBI” in the notification</th>
                                   <td><input type="checkbox" name="notification_checklist_cbi" value="1"></td>
                               </tr>
                               <tr>
                                   <th>1 Original and 6 copies of the complete notification submitted. A soft copy of the submitted notification (including all supporting documents/attachments, if any) that do not contain any CBI.</th>
                                   <td><input type="checkbox" name="notification_checklist_submitted" value="1"></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <hr>
                    
					<div>
                       <h6 id="part1"><strong>Part 1 Details of the Applicant (Exporter) </strong></h6>
                       <div class="form-group">
                           Organization: <input type="text" class="form-control" name="exporter_organization" id="exporter_organization" >
                       </div>                       
                       <div class="form-group">
                           Name of Applicant: <input type="text" class="form-control" name="exporter_name" id="exporter_name" >
                       </div>                       
                       <div class="form-group">
                           Position in Organization: <input type="text" class="form-control" name="exporter_position" id="exporter_position">
                       </div>                       
                       <div class="form-group">
                           Telephone (office): <input type="text" class="form-control" name="exporter_telephone_office" id="exporter_telephone_office" >
                       </div>					   
					   <div class="form-group">
                           Telephone (mobile): <input type="text" class="form-control" name="exporter_telephone_mobile" id="exporter_telephone_mobile" >
                       </div>					   
					   <div class="form-group">
                           Fax number: <input type="text" class="form-control" name="exporter_fax" id="exporter_fax" >
                       </div>					   
					   <div class="form-group">
                           Email: <input type="text" class="form-control" name="exporter_email_address" id="exporter_email_address" >
                       </div>					   
					   <div class="form-group">
                           Postal Address: <input type="text" class="form-control" name="exporter_postal_address" id="exporter_postal_address" >
                       </div>			   
					</div>
                    
					<hr>
					
					<div>
                       <h6 id="part2"><strong>Part 2  Details of LMO to be exported</strong></h6>
                       <div class="form-group">
                           Description of LMO to be exported <input type="text" class="form-control" name="LMO_description" id="LMO_description" >
                       </div>                       
                       <div class="form-group">
                           Plant, Fish/shellfish, Virus ,Animal, Micro-organism (bacterium/fungus etc.), Animal cell, Others (Please specify)
						<input type="text" class="form-control" name="LMO_type_description" id="LMO_type_description" >
                       </div>                       
                       <div class="form-group">
                           Identification of LMO <input type="text" class="form-control" name="LMO_identification" id="LMO_identification">
                       </div>                       
                       <div class="form-group">
                           Common name(s), Scientific name <input type="text" class="form-control" name="LMO_scientific_name" id="LMO_scientific_name" >
                       </div>					   
					   <div class="form-group">
                           Introduced  Trait(s) <input type="text" class="form-control" name="LMO_trait" id="LMO_trait" >
                       </div>					   			   
					   <div class="form-group">
                          Intended use of LMO <input type="text" class="form-control" name="LMO_intended_usage" id="LMO_intended_usage" >
                       </div>					   
					   <div class="form-group">
                          Describe the form in which LMO will be exported e.g. as seeds, cuttings, live fish, etc.
						  <input type="text" class="form-control" name="LMO_export_form" id="LMO_export_form" >
                       </div>
					   <div class="form-group">
                          Mode of export: Sea, Rail, Road, Air, Others (Please specify)	
					      <input type="text" class="form-control" name="LMO_export_mode_description" id="LMO_export_mode_description" >
                       </div>
					   <div class="form-group">
                          Point of exit<input type="text" class="form-control" name="LMO_point_of_exit" id="LMO_point_of_exit" >
                       </div>					   
					   <div class="form-group">
                          Suggested methods for safe handling, storage, transport and use (if available) 
						  <input type="text" class="form-control" name="LMO_methods" id="LMO_methods" >
                       </div>					   					   
					</div>					

                    <hr>
                    
					<div>
                       <h6 id="part3"><strong>Part 3  Importing Country</strong></h6>
                       <div class="form-group">
                           Name of importing country <input type="text" class="form-control" name="import_country_name" id="import_country_name" >
                       </div>                       
                       <div class="form-group">
                           Evidence of compliance with importing country’s requirements (e.g. Copy of Import permit, copy of approval from competent authority, etc.)
						   <input type="text" class="form-control" name="import_evidence" id="import_evidence" >
                       </div>              
					</div>
                   
				    <hr>
                    
					<div>
                       <h6 id="part4"><strong>Part 4 Confidential Business Information</strong></h6>
                       <div class="form-group">
                           Enter in this section any information required in Part 1-3 for which you are claiming confidentiality, together with full justification for that claim.
						   <input type="text" class="form-control" name="export_import_CBI" id="export_import_CBI" >
                       </div>                       
             		</div>	
					
				    <hr>
                    
					<div>
                       <h6 id="part5"><strong>Part 5 Signatures and Statutory Declaration</strong></h6>
                       <div class="form-group">
                           We declare that all information and documents provided to the importing country are accurate and true and in compliance with the requirements of the 
						   importing country. <br>
						   We also understand that providing misleading information to the National Biosafety Board (NBB), deliberately or otherwise, is an offence under the Biosafety Act 2007.						   
                       </div>                       
             		</div>	
					
					<hr>
					
					<div>
                       <h6><strong>Applicant:</strong></h6>
                       <div class="form-group">
						  Date <input type="date" class="form-control" name="applicant_signature_date" id="applicant_signature_date">
                       </div>
					   <div class="form-group">
                          Name as in Identity Card/Passport:<input type="text" class="form-control" name="applicant_name" id="applicant_name" >
                       </div>
					   <div class="form-group">
                          Official Stamp <input type="text" class="form-control" name="applicant_stamp" id="applicant_stamp" >
                       </div>					   
             		</div>
					
					<hr>
					
					<div>
                       <h6><strong>Head of organization/ Authorized Representative:</strong></h6>
                       <div class="form-group">
					      Date <input type="date" class="form-control" name="representative_signature_date" id="representative_signature_date">
                       </div>
					   <div class="form-group">
                          Name as in Identity Card/Passport:<input type="text" class="form-control" name="representative_name" id="representative_name" >
                       </div>
					   <div class="form-group">
                          Official Stamp <input type="text" class="form-control" name="representative_stamp" id="representative_stamp" >
                       </div>					   
             		</div>
					
					<hr>
				   <div>
                       <div class="checkbox">
                           <label><input type="checkbox" value="application_approved" disabled>Approved</label>
                       </div>
					</div>
					
                   <div>
                       <button type="submit" class="btn btn-default">Submit</button>
                   </div>
                   
               </form>
            </div>
            
            <div class="col-md-2">
                <div class="btn-group-vertical btn-sample">
					<a href="#top" class="btn btn-success">Top</a>
                    <a href="#part1" class="btn btn-success">Part 1</a>
                    <a href="#part2" class="btn btn-success">Part 2</a>
                    <a href="#part3" class="btn btn-success">Part 3</a>
                    <a href="#part4" class="btn btn-success">Part 4</a>
					<a href="#part5" class="btn btn-success">Part 5</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>