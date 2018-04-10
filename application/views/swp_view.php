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
        
        #first-table{
            background-color: #95a5a6;
            text-align: center;
        }
        
        .tblTitle{
            background-color: black;
            color: white;
            text-align: center;
        }
        
        .tbheader1{
            background-color:  #95a5a6 ;
        }
        
    </style>
</head>    
<body>
    <?php include_once 'template/navbar.php' ?>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
               <form class="form-horizontal">
                   <div>
                       <h5><strong>PLEASE FILL IN ALL INFORMATION REQUESTED</strong></h5>
                   </div>
                   
                   <br>
                   
                   <table class="table table-bordered" id="first-table">
                       <thead>
                           <tr>
                               <th>Date Received</th>
                               <th>SSBC Reference Number</th>
                           </tr>
                       </thead>
                       <tbody>
                           <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Date:"></td>
                           <td><input type="text" name="SBC_reference_no" class="form-control"></td>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_1">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="4"><h8 id="section_1"><strong>Section 1 - General Details</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tbheader1">1.01 SWP Prepared by:</th>
                                   <td><input type="text" name="SWP_prepared_by" class="form-control"></td>
                                   <th class="tbheader1">1.02 Staff/Student No.:</th>
                                   <td><input type="text" name="SWP_staff_student_no" class="form-control"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.03 Designation:</th>
                                   <td><input type="text" class="form-control" name="SWP_designation"></td>
                                   <th class="tbheader1">1.04 Faculty/unit:</th>
                                   <td><input type="text" class="form-control" name="SWP_faculty"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.05 Unit Code/Unit Title (if teaching):</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_unit_title"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.06 Project Title (if research):</th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_project_title"></td>
                               </tr>
                               <tr>
                                   <th class="tbheader1">1.07 Location: </th>
                                   <td colspan="4"><input type="text" class="form-control" name="SWP_location"></td>
                               </tr>
                               
                           </tbody>
                       </table>
                   
                   <br>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_2"><strong>Section 2 - Experiment General Details</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1">Brief Description of the Activity</th>
                           </tr>
                           <tr>
                               <td><textarea rows="3" name="SWP_description" class="form-control" placeholder="Passaging, cryopreservation, recovery of HK1 cell line and drug testing on HK1 viability."></textarea></td>
                           </tr>
                           <tr>
                               <th class="tbheader1">A. Pre-operational</th>
                           </tr>
                           <tr>
                               <td><textarea class="form-control" rows="40" name="SWP_preoperational" placeholder="E.g. Proper lab attire; proper personal protective equipment; hand hygiene; understand the equipment SOPs etc.

For any work involving the use of Biological Safety Cabinet and disposal of biological waste using the autoclave, refer to the individual Safe Work Instruction for:
(a)	Operation of the Biological Safety Cabinet (BSC) – disinfect before and after use using 70% ethanol
(b)	Cleaning the Biological Safety Cabinet (BSC)
(c)	Disposal of the Decontaminated Liquid Biological Waste
(d)	Operation of the Autoclave Machine

Personal hygiene:
(a)	Wash hands before working with cell cultures.
(b)	Wear Personal Protective Equipment (PPE) to be appropriately worn:
•	Lab coat (buttoned and long sleeves)
•	Gloves (double-gloving)
•	Closed shoes 
•	Long pants
•	Long hair to be tied in the back

Sterile handling and aseptic technique:
(a)	Wipe hands (gloved) and work area with 70% ethanol.
(b)	Wipe the outside of the containers, flasks, plates, and dishes with 70% ethanol before placing them in the BSC.
(c)	Avoid pouring media and reagents directly from bottles or flasks.
(d)	Prepare sterile glass or disposable plastic pipettes and a pipettor to work with liquids, and use each pipette only once to avoid cross contamination. Do not unwrap sterile pipettes until they are to be used. Keep pipettes at the work area.
(e)	Use only sterile glassware and equipment.

Get all the materials ready (sterile):
•	Cell culture flask containing the cells
•	Cell culture medium - pre-warmed to 37oC.
•	PBS, FBS, DMSO (as relevant) - pre-warmed to 37oC.
•	Dissociation reagent e.g. EDTA tripsin - pre-warmed to 37oC.
•	New, sterile flask and/or well plate (whenever relevant)
•	Disposable pipettes and automated pipettor
•	Disposable, sterile 15-mL centrifuge tube
•	Incubator – 37oC, humidified atmosphere of 5% CO2.
•	Reagents and equipment to determine viable and total cell counts e.g. MTS, Trypan Blue and hemacytometer, microplate reader and inverted microscope.
 
"></textarea></td>
                               
                           </tr>
                           
                           <tr>
                               <th class="tbheader1">B. Operational</th>
                           </tr>
                           <tr>
                               <td><textarea class="form-control" name="SWP_operational" rows="45" placeholder="E.g. Proper handling of the specimens/samples; samples processing in BSC; imaging of the specimens using microscopes; analyzing samples using plate reader; emergency response to biological spills or accident etc.

1.	Passaging of cell lines
•	Remove the culture medium from the culture flask.
•	Wash the cells gently with 1X PBS. Gently add wash solution to the side of the flask opposite the attached cell layer to avoid disturbing the cell layer, and rock the vessel back and forth several times. Remove and discard the wash solution form the flask.
•	Incubate the cells with 2 mL of pre-warmed 1X 0.25% EDTA trypsin for 5-10 minutes at 37ºC until the cells detach from the dish. Observe the cells under the microscope for detachment. If cells are less than 90% detached, increase the incubation time a few more minutes, checking for dissociation every 30 seconds. 
•	After  90% detachment, remove the EDTA trypsin solution and add 4 mL of cell culture medium. Transfer the cells into a 15-mL centrifuge tube and centrifuge at 1,000 rpm or 200xg for 5 minutes. 
•	Remove the culture medium gently.
•	Resuspend the cell pelletin a minimal volume of fresh culture medium. Remove some for counting.
•	Dilute cell suspension to the seeding density recommended for the cell line, and pipet the appropriate volume into new cell culture flask, or well plate. 

2.	Cryopreservation of cell lines: 
•	Grow adherent cells to ~80-90% confluency, then trypsinise and pellet as described above. 
•	Suspend the cell pellet with freezing medium containing 60% complete medium, 30% FBS and 10% dimethyl sulfoxide (DMSO). 
•	Then, aliquot the suspended cells into cryovials, each containing 1mL freezing medium. Place the vial in a cryo freezing container overnight at -80ºC before transferring the vial into liquid nitrogen for long term storage. 

3.	Recovery of cell lines:
•	For recovery of frozen cells, quickly thaw the vials at 37ºC water bath. 
•	Transfer the cell suspensions into a 15mL Falcon tube containing complete growth medium.
•	Centrifuge at 1,000 rpm for 5 minutes. 
•	Then, remove the supernatant and resuspend it in growth medium before seeding the cells into tissue culture flask.

4.	Drug/Extract testing on cell viability:
•	Harvest cells (tripsinised, detached, centrifuged and resuspended as stated in Section B1 above).
•	In triplicates, seed in a 96-well plate at a density of 2 x 103 cells per 100 L. Allow the cells to attach or adhere to the well for 24-h prior.
•	Dissolve the drug (cisplatin or 5-fluorouracil) or plant extract (rice bran, D. suffruticosa, E. polyantha) in their respective solvents. Prepare vehicle control for each of the solvent.
•	Aliquot 100 L of the test solution (drug or extract) and the vehicle control solution to the designated well, giving a final volume of 200 L per well. Mix or shake gently.
•	Incubate the samples at 37oC, 5% CO2 for 72 h (3 days).
•	Then, gently remove the culture media and add 60 mL of MTS reagent to each well. Incubate at 37oC for 4 h. Read the absorbance of the resulting colour at 490 nm using BioTek microplate reader. 
•	Intense colour or higher absorbance reading indicates higher cell viability or proliferation. 
"></textarea></td>
                           </tr>
                           
                           <tr>
                              <th class="tbheader1">C. Post-operational</th>
                           </tr>
                           <tr>
                               <td>
                                   <textarea class="form-control" name="SWP_postoperational" rows="45" placeholder="E.g. Proper labelling, storage and transportation of the specimens/samples; decontamination and disposal of the specimens/samples (solid/liquid waste); cleaning of the workspaces and equipment etc."></textarea>
                               </td>
                           </tr>
                           
                           <tr>
                               <th class="tbheader1">D. Potential Hazard Identification and Risk of Exposure to Hazards</th>
                           </tr>
                           <tr>
                               <td>
                                   <textarea class="form-control" name="SWP_risk" rows="5" placeholder="Biosafety Level 1 (BSL-2) - moderate-risk agents known to cause human disease of varying severity by ingestion or through percutaneous or mucous membrane exposure. "></textarea>
                               </td>
                           </tr>
                           
                           <tr>
                               <th class="tbheader1">E. Exposure Control Specific to the above mentioned Hazards</th>
                           </tr>
                           <tr>
                               <td>
                                   <textarea class="form-control" name="SWP_control" rows="5" ></textarea>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <br><br>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_3"><strong>Section 3 - Declaration</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <p>I have checked and I hereby confirm that the above information is correct. I will obey and follow all the Standard Operating Procedures (SOP) and Safe Working Procedures (SWP) as stated in the laboratory rules and regulations.</p>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" name="SWP_declaration_name" class="form-control" placeholder="Name & Signature:"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="SWP_declaration_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_4"><strong>Section 4 - Signature</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>Prepared by:</td>
                               <td>Verified By(Project Investigator):</td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" name="SWP_signature_prepared_by" placeholder="Signature:"></td>
                               <td><input type="text" class="form-control" name="SWP_signature_PI" placeholder="Signature:"></td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="SWP_signature_prepared_by_date" placeholder="Date:"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="SWP_signature_PI_date" placeholder="Date:"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table width="920" class="table table-bordered">
                       <thead>
                           <tr>
                               <th class="tblTitle" colspan="4"><h8 id="section_5"><strong>Section 5 - For Office Use Only</strong></h8></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <p>Have the lab personnels gone through the training(s)?</p>
                                   
                                   <div class="checkbox">
                                        <label><input type="checkbox"  name="SWP_lab_trained" value="">Yes</label>
                                        <label><input type="checkbox"  name="SWP_lab_trained" value="">No </label>
                                   </div>
                                   
                                   <p>If yes, by who and when?</p>
                                   
                                   <input type="text" class="form-control" name="SWP_lab_trainer">
                               </td>
                           </tr>
                           <tr>
                               <td>
                                <div class="checkbox">
                                     <label><input type="checkbox" name="SWP_approved_by" value="">Approved By:</label>
                                </div>
                                <div class="checkbox">
                                     <label><input type="checkbox" name="SWP_declined_by" value="">Declined By:</label>
                                </div>
                               </td>
                               <td style="width:450px">
                                   <input type="text" class="form-control" name="SWP_reviewed_by" placeholder="Reviewed by:">
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="SWP_approve_decline_date" placeholder="Date:"></td>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="SWP_reviewed_by_date" placeholder="Date:"></td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="text" class="form-control" name="SWP_approve_decline_remarks" placeholder="Remarks:">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="SWP_reviewed_by_remarks" placeholder="Remarks:">
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
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>