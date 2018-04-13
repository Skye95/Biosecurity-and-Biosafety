<!DOCTYPE html>
<html>
<head>
    <title>Biosafety and Biosecurity Online System - Hazard Identification, Risk Assesment, Risk Control (HIRARC) Form</title>
    
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
        
         .dark_background{
            background-color: black;
            color: white;
        }
        
        .greendata{
            background-color: lawngreen;
        }
        
        .reddata{
            background-color: red;
        }
        
        .yellowdata{
            background-color: yellow;
        }
        
        .grey-text{
            color: gainsboro;
        }
        
        .tbheader1{
            background-color:  #95a5a6 ;
        }
        
        .colspace{
            width: 50px;
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
                       <h5 class="dark_background">PLEASE FILL IN ALL INFORMATION REQUESTED</h5>
                  </div>
                   
                   <p><strong>Purpose:</strong>To identify, assess and manage risks associated with the requested substances and/or material (chemical/biological/equipment) prior procurement.</p>
                   
                   <p><strong>Note:</strong>Fill in the neccessary and related sections</p>
                   
                   <table class="table table-bordered" id="section_1">
                       <thead>
                           <tr>
                               <th colspan="6" class="tblTitle">Section 1 - Details on Purchase</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1" width="90">
                                   1.01 To Purchase<br>
                                   <p class="grey-text">Fill in Section 2A for chemical/biological</p>
                                   <p class="grey-text">Fill in Section 2B for Equipment</p>
                               </th>
                               <td>
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Chemical</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="Sec1_chemical"></div></td>
                                       </tr>
                                       <tr>
                                           <td>Biological Material</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="Sec1_biological_material"></div></td>
                                       </tr>
                                       <tr>
                                           <td>Equipment</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="Sec1_equipment"></div></td>
                                       </tr>
                                   </table>
                               </td>
                               <th class="text-center tbheader1">
                                   1.02 Doc ID
                               </th>
                               <td class="text-center"><input type="text" class="form-control" name="Sec1_doc_id" placeholder="OHS/F/4.18.X"></td>
                               <th class="text-center tbheader1">1.03 Review Date</th>
                               <td class="text-center"><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_2">
                       <thead>
                           <th colspan="4" class="tblTitle">Section 2A - Details on Purchase
                           <p>Section  2A1– Details on the substance</p></th>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1">1.01 Name of the substance</th>
                               <td><div class="form-group"><input type="text" class="form-control" name="Sec2A_name"></div></td>
                               <th class="tbheader1">1.04 If “Yes”, list the hazard statement</th>
                               <td><div class="form-group"><input type="text" class="form-control" name="Sec2A_statement"></div></td>
                           </tr>
                           <tr>
                               <th class="tbheader1">1.02 Substance’s manufacturer</th>
                               <td><div class="form-group"><input type="text" class="form-control" name="Sec2A_manufacturer"></div></td>
                               <th class="tbheader1">1.05 Is the waste a scheduled waste?<p class="grey-text">*If it’s hazardous, it’s a scheduled waste</p></th>
                               <td>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A_waste">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A_waste">No</label>
                               </td>
                           </tr>
                           <tr>
                               <th class="tbheader1">1.03 Is the substance a hazardous substance?</th>
                               <td>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A_hazardous">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A_hazardous">No</label>
                               </td>
                               <th class="tbheader1">1.06 If “Yes”, list the scheduled waste characteristic</th>
                               <td>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A_waste_type_corrosive">Corrosive</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A_waste_type_ignitable">Ignitable</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A_waste_type_reactive" >Reactive</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A_waste_type_toxic">Toxic</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A_waste_type_infectious">Infectious</label>
                                   </div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th colspan="4" class="tblTitle">Section 2A2 – Description of work / activities / use</th>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1">2.01 Licensing / permit required?</th>
                               <td>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_permit">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_permit">No</label>
                               </td>
                               <th class="tbheader1">2.05 Storage requirements?</th>
                               <td><div class="form-group"><input type="text" class="form-control" name="Sec2A2_storage"></div></td>
                           </tr>
                           <tr>
                               <th class="tbheader1">2.02 If “Yes”, type of license / permit required</th>
                               <td><div class="form-group"><input type="text" class="form-control" name="Sec2A2_permit_type"></div></td>
                               <th class="tbheader1">2.06 Waste / disposal requirements?<p class="grey-text">*Refer to Disposal section in SDS or the Accidental Release section</p>
                               </th>
                               <td>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_waste_requirement">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_waste_requirement">No</label>
                               </td>
                           </tr>
                           <tr>
                               <th class="tbheader1"><p>2.03 Current MSDS (less than 5yrs) is available</p></th>
                               <td>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_MSDS">Yes</label>
                                   <label class="radio-inline"><input type="radio" value="" name="Sec2A2_MSDS">No</label>
                               </td>
                               <th class="tbheader1"><p>2.07 Risk control for the use of material</p></th>
                               <td>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A2_risk_control_training">Training Procedure</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_risk_control_inspection">Inspections</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_risk_control_SOP" >SOPs</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_risk_control_PPE">PPE requirement</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_risk_control_engineering">Engineering control</label>
                                   </div> 
                               </td>
                           </tr>
                           <tr>
                               <th class="tbheader1"><p>2.04 Exposure route of substance</p></th>
                               <td>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A2_exposure_inhalation">Inhalation</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_exposure_skin">Skin (absorption)</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_exposure_ingestion" >Ingestion</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_exposure_injection">Injection</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_exposure_others">Others</label>
                                   </div>
                                   <div class="form-group"><input type="text" class="form-control" name="Sec2A2_exposure_description" placeholder="specify"></div>
                               </td>
                               <th class="tbheader1">2.08 First aid and emergency requirement</th>
                               <td>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A2_emergency_first_aid_kit">Additional first aid kit contents</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_emergency_shower">Emergency Shower</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_emergency_eyewash" >Emergency eyewash</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_emergency_neutralizing">Neutralizing agent</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_emergency_spill">Spill kit</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A2_emergency_restrict">Restrict Access</label>
                                   </div> 
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th colspan="3" class="tblTitle">Section 2A3 – Review material process</th>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1">Category</th>
                               <th class="tbheader1">Hazards and Routes of Exposure</th>
                               <th class="tbheader1">Control Description
                                   <p class="grey-text">*List engineering control needed</p>
                                   <p class="grey-text">*List PPE needed</p>
                                   <p class="grey-text">*List specific method of handling/using/disposing (if applicable)</p>
                                   <p class="grey-text">*If the control description is the same, you may write “as above” or “refer to -category-“ (e.g. “refer to “handling”)</p>
                               </th>
                           </tr>
                           <tr>
                               <td>Storage</td>
                               <td>
                                   <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A3_storage_inhalation">Inhalation</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_storage_skin">Skin (absorption)</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_storage_ingestion" >Ingestion</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_storage_injection">Injection</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_storage_others">Others</label>
                                   </div>
                                   <div class="form-group"><input type="text" class="form-control" name="Sec2A3_storage_description" placeholder="specify"></div>
                               </td>
                               <td>
                                   <textarea rows="10" class="form-control" name="Sec2A3_storage_control"></textarea>
                               </td>
                           </tr>
                           <tr>
                               <td>Handling(applying/using/decanting/mixing)</td>
                               <td>
                                   <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A3_handling_inhalation">Inhalation</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_handling_skin">Skin (absorption)</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_handling_ingestion" >Ingestion</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_handling_injection">Injection</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_handling_others">Others</label>
                                   </div>
                                   <div class="form-group"><input type="text" class="form-control" name="Sec2A3_handling_description" placeholder="specify"></div>
                               </td>
                               <td>
                                   <textarea rows="10" class="form-control" name="Sec2A3_handling_control"></textarea>
                               </td>
                           </tr>
                           <tr>
                               <td>Spill / Leak</td>
                               <td>
                                   <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A3_spill_inhalation">Inhalation</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_spill_skin">Skin (absorption)</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_spill_ingestion" >Ingestion</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_spill_injection">Injection</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_spill_others">Others</label>
                                   </div>
                                   <div class="form-group"><input type="text" class="form-control" name="Sec2A3_spill_description" placeholder="specify"></div>
                               </td>
                               <td>
                                   <textarea rows="10" class="form-control" name="Sec2A3_spill_control"></textarea>
                               </td>
                           </tr>
                           <tr>
                               <td>Disposal</td>
                               <td>
                                   <div class="checkbox">
                                        <label><input type="checkbox" value="" name="Sec2A3_disposal_inhalation">Inhalation</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_disposal_skin">Skin (absorption)</label>
                                   </div>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_disposal_ingestion" >Ingestion</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_disposal_injection">Injection</label>
                                   </div> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2A3_disposal_others">Others</label>
                                   </div>
                                   <div class="form-group"><input type="text" class="form-control" name="Sec2A3_disposal_description" placeholder="specify"></div>
                               </td>
                               <td>
                                   <textarea rows="10" class="form-control" name="Sec2A3_disposal_control"></textarea>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th colspan="4" class="tblTitle">
                               Section 2B - – Risk Assessment for Equipment/Machinery<p>Section 2B1 – Details on the Equipment/Machinery</p>
                           </th>
                       </thead>
                       <tbody>
                           <tr>
                               <th class="tbheader1">1.01 Name of the equipment</th>
                               <td><input type="text" class="form-control" name="Sec2B1_equipment_name"></td>
                           </tr>
                           <tr>
                               <th class="tbheader1">1.02 Type of Activity</th>
                               <td><input type="text" class="form-control" name="Sec2B1_activity_type"></td>
                           </tr>
                           <tr>
                               <th class="tbheader1">1.03 Location of Activity</th>
                               <td><input type="text" class="form-control" name="Sec2B1_activity_location"></td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <th colspan="6" class="tblTitle">
                               Section 2B2 – Description of work / activities / use
                           </th>
                       </thead>
                       <tbody>
                           <tr>
                               <th colspan="1" class="tbheader1" width="280">2.01 Description of machinery use
                                   <p class="grey-text">(Give sufficient detail so that it is clear as<br> to the range of uses and the environment in <br> which the machinery is used <br> e.g. occupancy, access (slips, obstructions, space),<br> distractions, hot work causing fire <br> to wood dust in close proximity)
                                   </p>  
                               </th>
                               <td colspan="5">
                                   <textarea rows="10" class="form-control" name="Sec2B2_machinery_description"></textarea>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="6" class="tbheader1">2.02 Hazard Details</td>
                           </tr>
                           <tr>
                               <td colspan="3" class="tbheader1 text-center">Mechanical Hazards</td>
                               <td colspan="3" class="tbheader1 text-center">Non-Mechanical Hazards</td>
                           </tr>
                           <tr>
                               <td colspan="3" class="tbheader1 text-center">*Tick where applicable</td>
                               <td colspan="3" class="tbheader1 text-center">*Tick where applicable</td>
                           </tr>
                           <tr>
                               <td colspan="1">Crushing</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_crushing"></label>
                                   </div>
                               </td>
                               <td colspan="1">Temperature (high or low)</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_temperature"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Shearing</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_shearing"></label>
                                   </div>
                               </td>
                               <td colspan="1">Electrical</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_electrical"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Drawing-in</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_drawing"></label>
                                   </div>
                               </td>
                               <td colspan="1">Noise</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_noise"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Cutting</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_cutting"></label>
                                   </div>
                               </td>
                               <td colspan="1">Vibration</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_vibration"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Entanglement</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_entangle"></label>
                                   </div>
                               </td>
                               <td colspan="1">Dust</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_dust"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Impact</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_impact"></label>
                                   </div>
                               </td>
                               <td colspan="1">Pressure</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_pressure"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Abrasion</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_abrasion"></label>
                                   </div>
                               </td>
                               <td colspan="1">Waste</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_waste"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Stabbing</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_stabbing"></label>
                                   </div>
                               </td>
                               <td colspan="1">Fumes</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_fumes"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Puncture</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_puncture"></label>
                                   </div>
                               </td>
                               <td colspan="1">Chemicals</td>
                               <td colspan="2"> 
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_chemical"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Ejection</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_ejection"></label>
                                   </div>
                               </td>
                               <td colspan="1">Allergens</td>
                               <td colspan="2">
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_checklist_allergens"></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="1">Exposure</td>
                               <td colspan="5"><input type="text" class="form-control" name="Sec2B2_users" placeholder="(duration/frequency of use) e.g. 10mins/daily, 3 hours/monthly"></td>
                           </tr>
                           <tr>
                               <td colspan="1">Users</td>
                               <td colspan="5"><input type="text" class="form-control" name="Sec2B2_exposure" placeholder="Competency, inexperience, those persons at increased risk of harm (disabled, pregnancy)"></td>
                           </tr>
                           <tr>
                               <td colspan="1">Outline the control measures for the use of the machinery</td>
                               <td colspan="5"><textarea type="text" rows="6" class="form-control" name="Sec2B2_control_measures" placeholder=".e. Engineering controls e.g. guarding: fixed guards, adjustable guards, protections devices e.g. photoelectric or appliances e.g. jigs, push sticks, holders or markings/warnings, limiting persons in the area."></textarea></td>
                           </tr>
                           <tr>
                               <td colspan="1">Outline the procedural and behavioural control measures for the use of machinery</td>
                               <td colspan="5"><textarea type="text" rows="6" class="form-control" name="Sec2B2_procedural_behavioural" placeholder=".e. Engineering controls e.g. guarding: fixed guards, adjustable guards, protections devices e.g. photoelectric or appliances e.g. jigs, push sticks, holders or markings/warnings, limiting persons in the area."></textarea></td>
                           </tr>
                           
                           <tr>
                               <th colspan="6" class="tbheader1"><strong>Overall assesment</strong> of the risk posed by this machine type with existing control measures</th>
                           </tr>
                           <tr>
                               <th colspan="6" class="tbheader1"><strong>Risk Level (Tick)</strong></th>
                           </tr>
                           <tr>
                               <td class="greendata">Low</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level "></label>
                                   </div>
                               </td>
                               <td class="yellowdata">Medium</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level "></label>
                                   </div>
                               </td>
                               <td class="reddata">High</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level "></label>
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="6" class="tbheader1"><strong>Actions required to reduce the risk</strong></td>
                           </tr>
                           <tr>
                               <td colspan="2" class="tbheader1"><strong>Action</strong></td>
                               <td colspan="1" class="tbheader1"><strong>By Who</strong></td>
                               <td colspan="1" class="tbheader1"><strong>By When</strong></td>
                               <td colspan="2" class="tbheader1"><strong>Action Completed</strong></td>
                           </tr>
                           <tr>
                               <td colspan="2" class="tbheader1"><textarea rows="5" class="form-control" name="Sec2B2_risk_reduction_action"></textarea></td>
                               <td colspan="1" class="tbheader1"><textarea rows="5" class="form-control" name="Sec2B2_risk_reduction_by_who"></textarea></td>
                               <td colspan="1" class="tbheader1"><textarea rows="5" class="form-control" name="Sec2B2_risk_reduction_by_when"></textarea></td>
                               <td colspan="2" class="tbheader1"><textarea rows="5" class="form-control" name="Sec2B2_risk_reduction_action_completed"></textarea></td>
                           </tr>
                           <tr>
                               <th colspan="6" class="tbheader1"><strong>Overall assesment</strong> of the risk posed by this machine type with additional control measures</th>
                           </tr>
                           <tr>
                               <th colspan="6" class="tbheader1"><strong>Risk Level (Tick)</strong></th>
                           </tr>
                           <tr>
                               <td class="greendata">Low</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level_after"></label>
                                   </div>
                               </td>
                               <td class="yellowdata">Medium</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level_after"></label>
                                   </div>
                               </td>
                               <td class="reddata">High</td>
                               <td>
                                   <div class="checkbox">
                                       <label><input type="checkbox" value="" name="Sec2B2_overall_assessment_risk_level_after"></label>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <p><strong>ACTION LEVEL: (To identify what action needs to be taken).</strong></p>
                       
                       <thead>
                           <tr>
                               <th width="100" class="tbheader1"><strong>Risk Level:</strong></th>
                               <th class="tbheader1"><strong>Action:</strong></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="greendata">Low</td>
                               <td>No further action required.  However, continue to monitor the machinery and work activity.</td>
                           </tr>
                           <tr>
                               <td class="yellowdata">Medium</td>
                               <td>Additional actions and controls must be implemented to ensure the machinery can be used safely.  </td>
                           </tr>
                           <tr>
                               <td class="reddata">High</td>
                               <td>Machinery cannot be used until the risk level has been reduced to a satisfactory level.  Further controls must be implemented.</td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered" id="section_3">
                       <thead>
                           <th colspan="4" class="tblTitle">
                               Section 3 – Consultation and Acknowledgement
                           </th>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="4">
                                   <ul>
                                       <li>
                                           I, hereby declare that the information I have provided in this report form for Pre-Purchase Material Risk Assessment is true and correct.
                                       </li>
                                       <li>
                                           Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice at http://www.swinburne.edu.my/privacy/ and Employee's Privacy Collection Notice at Blackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.
                                       </li>
                                   </ul>
                               </td>
                           </tr>
                           <tr>
                               <td class="tbheader1">Requestor's Name</td>
                               <td><input type="text" class="form-control" name="Sec3_requestor "></td>
                               <td class="tbheader1">Signature and date</td>
                               <td class="text-center"><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="Sec3_requestor_date"></td>
                           </tr>
                           <tr>
                               <td class="tbheader1">HMU / Dean / Lab Coordinator / Supervisor / Project’s Supervisor</td>
                               <td><input type="text" class="form-control" name="Sec3_supervisor"></td>
                               <td class="tbheader1">Signature and date</td>
                               <td class="text-center"><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="Sec3_supervisor_date"></td>
                           </tr>
                           <tr>
                               <td class="tbheader1">Lab Officer</td>
                               <td><input type="text" class="form-control" name="Sec3_LO"></td>
                               <td class="tbheader1">Signature and date</td>
                               <td class="text-center"><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="Sec3_LO_date"></td>
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
                    <a href="#section_2" class="btn btn-success">Section 3</a>
                </div>   
            </div>
        </div>
        
        
    </div>
</body>
</html>