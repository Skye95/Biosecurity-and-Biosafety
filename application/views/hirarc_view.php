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
        
        .greendata{
            background-color: lawngreen;
        }
        
        .reddata{
            background-color: red;
        }
        
        .yellowdata{
            background-color: yellow;
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
                       <h5><strong>PLEASE FILL OUT ALL INFORMATION REQUESTED</strong></h5>
                   </div>
                   
                   <br>
                   
                   <div>
                       
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                   <th class="tblTitle" colspan="10"><h8 id="section_1"><strong>Section 1 - Person Completing Form Details</strong></h8></th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>1.01 Company/Department</th>
                                   <td><input type="text" class="form-control" name="company_name"></td>
                               </tr>
                               <tr>
                                   <th>1.02 Date</th>
                                   <td><input type="date" class="form-control" name="date"></td>
                               </tr>
                               <tr>
                                   <th>1.03 Process Location</th>
                                   <td><input type="text" class="form-control" name="process_location"></td>
                               </tr>
                               <tr>
                                   <th>1.04 Conducted by (name)</th>
                                   <td><input type="text" class="form-control" name="conducted_name"></td>
                               </tr>
                               <tr>
                                   <th>1.04.2 Conducted by (designation)</th>
                                   <td><input type="text" class="form-control" name="conducted_designation"></td>
                               </tr>
                               <tr>
                                   <th>1.05 Approved by (name)</th>
                                   <td><input type="text" class="form-control" name="approved_name"></td>
                               </tr>
                               <tr>
                                   <th>1.05.2 Approved by (designation)</th>
                                   <td><input type="text" class="form-control" name="approved_designation"></td>
                               </tr>
                               <tr>
                                   <th>1.06 Date (From)</th>
                                   <td><input type="date" class="form-control" name="date_from"></td>
                               </tr>
                               <tr>
                                   <th>1.06.2 Date (To)</th>
                                   <td><input type="date" class="form-control" name="date_to"></td>
                               </tr>
                               <tr>
                                   <th>1.07 Review Date</th>
                                   <td><input type="date" class="form-control" name="date_from"></td>
                               </tr>
                               <tr>
                                   <th>1.08 Doc. No.</th>
                                   <td>OHS/F/4.5.X</td>
                               </tr>
                               
                           </tbody>
                       </table>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th class="tblTitle" colspan="10">HIRARC</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th colspan="4">1. Hazard Identification</th>
                                   <th colspan="4">2. Risk Analysis</th>
                                   <th colspan="2">1. Risk Control</th>
                               </tr>
                               <tr>
                                   <th>No.</th>
                                   <th>Work Activity</th>
                                   <th>Hazard</th>
                                   <th>Which can cause/effect</th>
                                   <th>Existing Risk Control (if any)</th>
                                   <th>LLH</th>
                                   <th>SEV</th>
                                   <th>RR</th>
                                   <th>Recommended Control Measures</th>
                                   <th>PIC (Due date/status)</th>
                               </tr>
                               <tr>
                                   <th><input type="text" class="form-control" name="HIRARC_no"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_activity"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_hazard"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_effects"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_risk_control"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_LLH"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_SEV"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_RR"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_control_measure"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_PIC"></th>
                               </tr>
                               <tr>
                                   <th><input type="text" class="form-control" name="HIRARC_no2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_activity2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_hazard2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_effects2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_risk_control2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_LLH2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_SEV2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_RR2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_control_measure2"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_PIC2"></th>
                               </tr>
                               <tr>
                                   <th><input type="text" class="form-control" name="HIRARC_no3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_activity3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_hazard3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_effects3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_risk_contro3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_LLH3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_SEV3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_RR3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_control_measure3"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_PIC3"></th>
                               </tr>
                               <tr>
                                   <th><input type="text" class="form-control" name="HIRARC_no4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_activity4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_hazard4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_effects4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_risk_control4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_LLH4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_SEV4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_RR4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_control_measure4"></th>
                                   <th><input type="text" class="form-control" name="HIRARC_PIC4"></th>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <br>
                   
                   <div>
                       <table class="table table-bordered table-striped">
                           <thead>
                               <tr>
                                   <th class="tblTitle2">Likelihood (L)</th>
                                   <th class="tblTitle2">Example</th>
                                   <th class="tblTitle2">Rating</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Most Likely</td>
                                   <td>The most likely result of the hazard/event being realized</td>
                                   <td>5</td>
                               </tr>
                               <tr>
                                   <td>Possible</td>
                                   <td>Has a good chance of occuring and is not unusual</td>
                                   <td>4</td>
                               </tr>
                               <tr>
                                   <td>Conceivable</td>
                                   <td>Might be occur at some time in the future</td>
                                   <td>3</td>
                               </tr>
                               <tr>
                                   <td>Remote</td>
                                   <td>Has not been known to occur after many years</td>
                                   <td>2</td>
                               </tr>
                               <tr>
                                   <td>Inconceivable</td>
                                   <td>Is practically imposible and has never occurred</td>
                                   <td>1</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div>
                       <table class="table table-bordered table-striped">
                           <thead>
                               <tr>
                                   <th class="tblTitle2">Severity (S)</th>
                                   <th class="tblTitle2">Example</th>
                                   <th class="tblTitle2">Rating</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Catastrophic</td>
                                   <td>Numerous casualties, irrecoverible property damage and productivity</td>
                                   <td>5</td>
                               </tr>
                               <tr>
                                   <td>Fatal</td>
                                   <td>Approximately one single fatality major property damage if hazard is realized</td>
                                   <td>4</td>
                               </tr>
                               <tr>
                                   <td>Serious</td>
                                   <td>Non-fatal injury, permanent disability</td>
                                   <td>3</td>
                               </tr>
                               <tr>
                                   <td>Minor</td>
                                   <td>Disabling but not permanent injury</td>
                                   <td>2</td>
                               </tr>
                               <tr>
                                   <td>Negligible</td>
                                   <td>Minor abrasions, bruises, cuts, first aid type injury</td>
                                   <td>1</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th colspan="1"></th>
                                   <th colspan="5" class="tblTitle2">Severity(S)</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <th class="tblTitle2">Likelihood</th>
                                   <th class="tblTitle2">1</th>
                                   <th class="tblTitle2">2</th>
                                   <th class="tblTitle2">3</th>
                                   <th class="tblTitle2">4</th>
                                   <th class="tblTitle2">5</th>
                               </tr>
                               <tr>
                                   <th class="tblTitle2">5</th>
                                   <th class="yellowdata">5</th>
                                   <th class="yellowdata">10</th>
                                   <th class="reddata">15</th>
                                   <th class="reddata">20</th>
                                   <th class="reddata">25</th>
                               </tr>
                               <tr>
                                   <th class="tblTitle2">4</th>
                                   <th class="greendata">4</th>
                                   <th class="yellowdata">8</th>
                                   <th class="yellowdata">12</th>
                                   <th class="reddata">16</th>
                                   <th class="reddata">20</th>
                               </tr>
                               <tr>
                                   <th class="tblTitle2">3</th>
                                   <th class="greendata">3</th>
                                   <th class="yellowdata">6</th>
                                   <th class="yellowdata">9</th>
                                   <th class="yellowdata">12</th>
                                   <th class="reddata">15</th>
                               </tr>
                               <tr>
                                   <th class="tblTitle2">2</th>
                                   <th class="greendata">2</th>
                                   <th class="greendata">4</th>
                                   <th class="yellowdata">6</th>
                                   <th class="yellowdata">8</th>
                                   <th class="yellowdata">10</th>
                               </tr>
                               <tr>
                                   <th class="tblTitle2">1</th>
                                   <th class="greendata">1</th>
                                   <th class="greendata">2</th>
                                   <th class="greendata">3</th>
                                   <th class="greendata">4</th>
                                   <th class="yellowdata">5</th>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <br>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th class="tblTitle2">Risk</th>
                                   <th class="tblTitle2">Description</th>
                                   <th class="tblTitle2">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td class="reddata colspace">15 - 25</td>
                                   <td class="reddata">HIGH</td>
                                   <td>A HIGH risk requires immediate action to control the hazard as detailed in the hierarchy of control. Actions taken must be documented on the risk assesment form including data for completion.</td>
                               </tr>
                               <tr>
                                   <td class="yellowdata colspace">5 - 12</td>
                                   <td class="yellowdata">MEDIUM</td>
                                   <td>A MEDIUM risk requires a planned approach to controlling the hazard and applies temporary measure if required. Actions taken must be documented on the risk assesment form including data for completion.</td>
                               </tr>
                               <tr>
                                   <td class="greendata colspace">5 - 12</td>
                                   <td class="greendata">LOW</td>
                                   <td>A risk identified as LOW may be considered as acceptable and further reduction may not be neccessary. However if the risk can be resolved quickly and efficiently, control measures should be implemented and recorded.</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   
                   <br>
                   
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