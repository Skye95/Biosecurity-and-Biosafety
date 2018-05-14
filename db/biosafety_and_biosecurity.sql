-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 05:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biosafety_and_biosecurity`
--

CREATE DATABASE IF NOT EXISTS biosafety_and_biosecurity;
USE biosafety_and_biosecurity;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(10) UNSIGNED NOT NULL,
  `account_email` varchar(100) NOT NULL,
  `account_fullname` varchar(100) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  `account_type` int(1) UNSIGNED NOT NULL,
  `account_approved` int(1) UNSIGNED NOT NULL DEFAULT '0',
  `account_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `account_email`, `account_fullname`, `account_password`, `account_type`, `account_approved`, `account_date`) VALUES
(1, '100061722@students.swinburne.edu.my', 'Eugene Chiang', 'lagoon', 2, 1, '2018-04-10 05:44:22'),
(2, 'testing@students.swinburne.edu.my', 'Eugene 2', 'lagoon2', 1, 0, '2018-04-10 05:44:22'),
(3, 'cedricang@test.com', 'Cedric Ang', 'red', 3, 1, '2018-04-30 06:11:59'),
(4, '100072290@students.swinburne.edu.my', 'Si Kim Yeung', '123456', 1, 1, '2018-04-30 09:01:32'),
(5, 'BSO@swinburne.edu.my', 'Biosafety Officer', 'BSOpassword', 4, 1, '2018-05-01 07:58:17'),
(6, 'HSO@gmail.com', 'HSO name', 'HSOpassword', 5, 1, '2018-05-05 08:38:52'),
(7, 'SSBC@swinburne.edu.my', 'SSBC Member', '123456', 3, 1, '2018-05-12 13:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `annex2`
--

CREATE TABLE `annex2` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `institutional_address` varchar(250) NOT NULL,
  `collaborating_partners` varchar(1000) DEFAULT NULL,
  `project_title` varchar(150) NOT NULL,
  `project_objective_methodology` varchar(1000) NOT NULL,
  `biological_system_parent_organisms` varchar(1000) NOT NULL,
  `biological_system_donor_organisms` varchar(1000) NOT NULL,
  `biological_system_modified_traits` varchar(1000) NOT NULL,
  `premises` varchar(1000) NOT NULL,
  `period` varchar(1000) NOT NULL,
  `risk_assessment_and_management` varchar(1000) NOT NULL,
  `emergency_response_plan` varchar(1000) NOT NULL,
  `IBC_recommendation` varchar(1000) DEFAULT NULL,
  `PI_experience_and_expertise` varchar(1000) NOT NULL,
  `PI_training` varchar(1000) NOT NULL,
  `PI_health` varchar(1000) NOT NULL,
  `PI_other` varchar(1000) NOT NULL,
  `personnel_involved` varchar(100) NOT NULL,
  `personnel_designation` varchar(100) NOT NULL,
  `IBC_approved` int(1) DEFAULT NULL,
  `IBC_name` varchar(100) DEFAULT NULL,
  `IBC_date` date DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annex2`
--

INSERT INTO `annex2` (`application_id`, `account_id`, `approver_id`, `applicant_name`, `institutional_address`, `collaborating_partners`, `project_title`, `project_objective_methodology`, `biological_system_parent_organisms`, `biological_system_donor_organisms`, `biological_system_modified_traits`, `premises`, `period`, `risk_assessment_and_management`, `emergency_response_plan`, `IBC_recommendation`, `PI_experience_and_expertise`, `PI_training`, `PI_health`, `PI_other`, `personnel_involved`, `personnel_designation`, `IBC_approved`, `IBC_name`, `IBC_date`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, 'New Name', 'sscscfs', 'asfcscfs', 'asfs', 'scfascfs', 'sfvsvsvqev', 'svaqv', 'avavvav', 'svsavasvsav', 'svavsv', 'avvavsv', 'svvvs', 'scvcvascv', 'vsavsavascv', 'asscvascv', 'ascvacss', 'svcscvcvs', 'scvsvvvavsa,svvvssv,vasvsvv,cffgvfgg,ggerhbhaeeb htrbfd', 'vasvvvav,vadvaavvbfb fg ,gfbdfbd,dfbdfbbd,bdfbfbddb nnfbd', NULL, 'IBC name 2', '2013-03-02', 2, 2, NULL),
(7, 3, 1, 'Cedric Ang', 'Somewhere in malaysia', 'New partners', 'New title', 'Random objective', 'Parent name', 'donor name', 'Gene name', 'LAB C', '2 weeks', 'Random risk assessment', 'Random emergency response plan', 'Additional recommendation here', 'No experiece', 'No training', 'A_OK', 'No others', 'Presonnel1,Personnel 2 ,,,', 'Student,Student,,,', NULL, '', '0000-00-00', 2, 0, NULL),
(8, 4, 5, 'Kim Yeung Updated name', 'Updated address', 'My partners asacs ', 'New Titleassavcasdvsd', 'New Objective  ascxcsazcvsdv sd', 'Parent name', 'kdfmsmf', 'dkskmvdm', 'Lab D', '2 years', 'No risk', 'ksndfonmf', 'opdsmvsopmds', 'spoddvsvdmsv', 'No training', 'isndfiinfe', 'osdjmde', 'First Name,Second Name,,,', 'Student,Student,,,', NULL, '', '0000-00-00', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annex3`
--

CREATE TABLE `annex3` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `reference_no` varchar(10) DEFAULT NULL,
  `organization` varchar(250) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `laboratory` varchar(250) NOT NULL,
  `date` date DEFAULT NULL,
  `PI_name` varchar(100) NOT NULL,
  `PI_telephone_number` int(20) NOT NULL,
  `PI_reported_date` date DEFAULT NULL,
  `PI_reported_time` varchar(10) DEFAULT NULL,
  `incident_description` varchar(500) NOT NULL,
  `incident_cause_checklist_faulty_equipment` int(1) DEFAULT NULL,
  `incident_cause_checklist_no_equipment` int(1) DEFAULT NULL,
  `incident_cause_checklist_storage` int(1) DEFAULT NULL,
  `incident_cause_checklist_weather` int(1) DEFAULT NULL,
  `incident_cause_checklist_assistance` int(1) DEFAULT NULL,
  `incident_cause_checklist_electrical` int(1) DEFAULT NULL,
  `incident_cause_checklist_carelessness` int(1) DEFAULT NULL,
  `incident_cause_checklist_terrain` int(1) DEFAULT NULL,
  `incident_cause_checklist_workspace` int(1) DEFAULT NULL,
  `incident_cause_checklist_training` int(1) DEFAULT NULL,
  `incident_cause_checklist_poor_access` int(1) DEFAULT NULL,
  `incident_cause_checklist_unknown` int(1) DEFAULT NULL,
  `incident_cause_checklist_maintenance_staff` int(1) DEFAULT NULL,
  `incident_cause_checklist_supervision` int(1) DEFAULT NULL,
  `incident_cause_checklist_method` int(1) DEFAULT NULL,
  `incident_cause_checklist_none` int(1) DEFAULT NULL,
  `incident_cause_checklist_none_description` varchar(500) DEFAULT NULL,
  `incident_LMO_rDNA_release` int(1) DEFAULT NULL,
  `incident_LMO_rDNA_response` varchar(500) DEFAULT NULL,
  `incident_contribution` varchar(500) NOT NULL,
  `incident_personal_factors` varchar(500) NOT NULL,
  `incident_corrective_actions` varchar(500) NOT NULL,
  `incident_responsible` varchar(500) NOT NULL,
  `signature_PI_name` varchar(100) DEFAULT NULL,
  `signature_PI_date` date DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` date DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` date DEFAULT NULL,
  `IBC_approval` int(1) DEFAULT NULL,
  `IBC_termination` int(1) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annex3`
--

INSERT INTO `annex3` (`application_id`, `account_id`, `approver_id`, `reference_no`, `organization`, `faculty`, `laboratory`, `date`, `PI_name`, `PI_telephone_number`, `PI_reported_date`, `PI_reported_time`, `incident_description`, `incident_cause_checklist_faulty_equipment`, `incident_cause_checklist_no_equipment`, `incident_cause_checklist_storage`, `incident_cause_checklist_weather`, `incident_cause_checklist_assistance`, `incident_cause_checklist_electrical`, `incident_cause_checklist_carelessness`, `incident_cause_checklist_terrain`, `incident_cause_checklist_workspace`, `incident_cause_checklist_training`, `incident_cause_checklist_poor_access`, `incident_cause_checklist_unknown`, `incident_cause_checklist_maintenance_staff`, `incident_cause_checklist_supervision`, `incident_cause_checklist_method`, `incident_cause_checklist_none`, `incident_cause_checklist_none_description`, `incident_LMO_rDNA_release`, `incident_LMO_rDNA_response`, `incident_contribution`, `incident_personal_factors`, `incident_corrective_actions`, `incident_responsible`, `signature_PI_name`, `signature_PI_date`, `signature_BO_name`, `signature_BO_date`, `signature_IBC_name`, `signature_IBC_date`, `IBC_approval`, `IBC_termination`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, '123', 'Swinburne (Updated)', 'BCS', 'Lab A', '2018-04-16', 'Kim', 123, '2018-04-24', '2 Pm', 'Incident description', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 'Some cause', 1, 'Response plan', 'Acts by staf and others', 'Inattention', 'Repair', 'The one who did it', 'Kim Yeung', '2018-04-24', '', '0000-00-00', '', '0000-00-00', 1, 1, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annex4`
--

CREATE TABLE `annex4` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `reference_no` varchar(10) DEFAULT NULL,
  `personnel_name` varchar(100) NOT NULL,
  `personnel_NRIC` int(20) NOT NULL,
  `personnel_age` int(2) NOT NULL,
  `personnel_race` varchar(20) NOT NULL,
  `personnel_telephone_number` int(20) DEFAULT NULL,
  `personnel_office_number` int(20) DEFAULT NULL,
  `personnel_ext_number` int(20) DEFAULT NULL,
  `personnel_employment_job` varchar(100) NOT NULL,
  `personnel_employment_faculty` varchar(100) NOT NULL,
  `personnel_employment_status` int(1) NOT NULL,
  `personnel_employment_duration` varchar(100) NOT NULL,
  `exposure_location` varchar(500) NOT NULL,
  `exposure_date` date DEFAULT NULL,
  `exposure_time` varchar(10) NOT NULL,
  `exposure_diagnosis` varchar(500) NOT NULL,
  `exposure_treatment` int(1) NOT NULL,
  `exposure_medical_cert` int(1) NOT NULL,
  `exposure_medical_cert_duration` varchar(100) DEFAULT NULL,
  `exposure_work_description` varchar(500) NOT NULL,
  `exposure_hazard_or_agent` varchar(500) NOT NULL,
  `exposure_duration` varchar(100) NOT NULL,
  `exposure_symptoms` varchar(500) NOT NULL,
  `exposure_symptoms_duration` varchar(100) NOT NULL,
  `signature_PI_name` varchar(100) DEFAULT NULL,
  `signature_PI_date` date DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` date DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` date DEFAULT NULL,
  `IBC_approval` int(1) DEFAULT NULL,
  `IBC_termination` int(1) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annex4`
--

INSERT INTO `annex4` (`application_id`, `account_id`, `approver_id`, `reference_no`, `personnel_name`, `personnel_NRIC`, `personnel_age`, `personnel_race`, `personnel_telephone_number`, `personnel_office_number`, `personnel_ext_number`, `personnel_employment_job`, `personnel_employment_faculty`, `personnel_employment_status`, `personnel_employment_duration`, `exposure_location`, `exposure_date`, `exposure_time`, `exposure_diagnosis`, `exposure_treatment`, `exposure_medical_cert`, `exposure_medical_cert_duration`, `exposure_work_description`, `exposure_hazard_or_agent`, `exposure_duration`, `exposure_symptoms`, `exposure_symptoms_duration`, `signature_PI_name`, `signature_PI_date`, `signature_BO_name`, `signature_BO_date`, `signature_IBC_name`, `signature_IBC_date`, `IBC_approval`, `IBC_termination`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, '123', 'Kim Updated this form', 2147483647, 13, 'Chinese', 123, 1234567, 1234567, 'Student', 'BCS', 0, '3 years', 'Lab A', '2018-04-03', '16:50:00.0', 'Diagnosis given', 3, 1, '3 days', 'Handling Chemicals', 'Acid', '2 minutes', 'Burning ', '', 'Kim', '2018-04-03', '', '0000-00-00', '', '0000-00-00', NULL, NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annex5`
--

CREATE TABLE `annex5` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `identification_PI_name` varchar(100) NOT NULL,
  `identification_email_address` varchar(150) NOT NULL,
  `identification_faculty` varchar(200) NOT NULL,
  `identification_telephone` int(20) NOT NULL,
  `identification_IBC_reference_no` varchar(10) DEFAULT NULL,
  `identification_NBB_reference_no` varchar(10) DEFAULT NULL,
  `identification_project_title` varchar(100) NOT NULL,
  `identification_LMO_rDNA` varchar(100) NOT NULL,
  `request_type` int(1) NOT NULL,
  `request_description` varchar(500) DEFAULT NULL,
  `PI_change` int(1) NOT NULL,
  `RG_change` int(1) NOT NULL,
  `BSL_change` int(1) NOT NULL,
  `LMO_rDNA_type_change` int(1) NOT NULL,
  `LMO_rDNA_moved` int(1) NOT NULL,
  `LMO_rDNA_usage_change` int(1) NOT NULL,
  `adverse_events` int(1) NOT NULL,
  `incident_report` varchar(500) DEFAULT NULL,
  `signature_PI_name` varchar(100) DEFAULT NULL,
  `signature_PI_date` date DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` date DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` date DEFAULT NULL,
  `IBC_approval` int(1) DEFAULT NULL,
  `IBC_termination` int(1) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annex5`
--

INSERT INTO `annex5` (`application_id`, `account_id`, `approver_id`, `identification_PI_name`, `identification_email_address`, `identification_faculty`, `identification_telephone`, `identification_IBC_reference_no`, `identification_NBB_reference_no`, `identification_project_title`, `identification_LMO_rDNA`, `request_type`, `request_description`, `PI_change`, `RG_change`, `BSL_change`, `LMO_rDNA_type_change`, `LMO_rDNA_moved`, `LMO_rDNA_usage_change`, `adverse_events`, `incident_report`, `signature_PI_name`, `signature_PI_date`, `signature_BO_name`, `signature_BO_date`, `signature_IBC_name`, `signature_IBC_date`, `IBC_approval`, `IBC_termination`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, 'Kim Updated version please', '100072290@gmail.com', 'BCS', 123, '123', '1234', 'New title', 'New materials', 1, NULL, 0, 1, 1, 1, 1, 0, 0, '0', 'Kim', '2018-04-02', '', '0000-00-00', '', '0000-00-00', 1, 1, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `announcement_description` varchar(1000) NOT NULL,
  `announcement_date` datetime NOT NULL,
  `announcement_page` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `annualfinalreport`
--

CREATE TABLE `annualfinalreport` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_approval_date` date DEFAULT NULL,
  `project_report_date` date DEFAULT NULL,
  `report_type` int(1) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `chief_investigator` varchar(100) DEFAULT NULL,
  `personnel_extra` int(1) NOT NULL,
  `personnel_extra_title` varchar(500) DEFAULT NULL,
  `personnel_extra_name` varchar(500) DEFAULT NULL,
  `personnel_extra_qualifications` varchar(500) DEFAULT NULL,
  `personnel_extra_department` varchar(500) DEFAULT NULL,
  `personnel_extra_campus` varchar(500) DEFAULT NULL,
  `personnel_extra_postal_address` varchar(500) DEFAULT NULL,
  `personnel_extra_telephone` int(20) NOT NULL,
  `personnel_extra_fax` varchar(100) DEFAULT NULL,
  `personnel_extra_email_address` varchar(500) DEFAULT NULL,
  `project_summary` varchar(500) NOT NULL,
  `project_outline` varchar(500) NOT NULL,
  `project_incidents` varchar(500) NOT NULL,
  `project_SOP` blob,
  `project_facility_changes` int(1) NOT NULL,
  `project_facility_building_number` varchar(100) DEFAULT NULL,
  `project_facility_room_number` varchar(100) DEFAULT NULL,
  `project_facility_description` varchar(500) DEFAULT NULL,
  `project_sign_off_chief_investigator_name` varchar(100) DEFAULT NULL,
  `project_sign_off_BO_name` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annualfinalreport`
--

INSERT INTO `annualfinalreport` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `project_approval_date`, `project_report_date`, `report_type`, `project_title`, `chief_investigator`, `personnel_extra`, `personnel_extra_title`, `personnel_extra_name`, `personnel_extra_qualifications`, `personnel_extra_department`, `personnel_extra_campus`, `personnel_extra_postal_address`, `personnel_extra_telephone`, `personnel_extra_fax`, `personnel_extra_email_address`, `project_summary`, `project_outline`, `project_incidents`, `project_SOP`, `project_facility_changes`, `project_facility_building_number`, `project_facility_room_number`, `project_facility_description`, `project_sign_off_chief_investigator_name`, `project_sign_off_BO_name`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 1, NULL, '', '0000-00-00', '0000-00-00', 0, 'New title (this has been updated)', 'Chief Investigator person', 1, 'Title', 'Kim', 'Undergraduate', 'BCS', 'Swinburne sarawak', 'Somewhere in sarawask', 123, '123-1234567', '100072290@students.swinburne.edu.my', 'Biology stuff', 'Lazy', 'None at all', '', 0, '123', '609', NULL, 'Some random person', 'Ms Chua', 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biohazardousmaterial`
--

CREATE TABLE `biohazardousmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_supervisor_name` varchar(100) DEFAULT NULL,
  `project_supervisor_department` varchar(100) DEFAULT NULL,
  `project_supervisor_email_address` varchar(100) DEFAULT NULL,
  `project_alt_person` varchar(100) DEFAULT NULL,
  `project_alt_department` varchar(100) DEFAULT NULL,
  `project_alt_email` varchar(100) DEFAULT NULL,
  `project_personnel_name` varchar(100) DEFAULT NULL,
  `project_personnel_role` varchar(100) DEFAULT NULL,
  `proposed_work_known` int(1) DEFAULT NULL,
  `proposed_work_may` int(1) DEFAULT NULL,
  `proposed_work_unknown` int(1) DEFAULT NULL,
  `proposed_work_isolation` int(1) DEFAULT NULL,
  `proposed_work_risk` int(1) DEFAULT NULL,
  `proposed_work_sensitive` int(1) DEFAULT NULL,
  `proposed_work_other` int(1) DEFAULT NULL,
  `project_summary` varchar(500) NOT NULL,
  `project_activity` varchar(500) NOT NULL,
  `project_SOP` blob,
  `project_SOP_title` varchar(100) DEFAULT NULL,
  `project_SOP_risk_title` varchar(100) DEFAULT NULL,
  `project_facilities_building` varchar(100) NOT NULL,
  `project_facilities_room` varchar(100) NOT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biohazardousmaterial`
--

INSERT INTO `biohazardousmaterial` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `project_title`, `project_supervisor_name`, `project_supervisor_department`, `project_supervisor_email_address`, `project_alt_person`, `project_alt_department`, `project_alt_email`, `project_personnel_name`, `project_personnel_role`, `proposed_work_known`, `proposed_work_may`, `proposed_work_unknown`, `proposed_work_isolation`, `proposed_work_risk`, `proposed_work_sensitive`, `proposed_work_other`, `project_summary`, `project_activity`, `project_SOP`, `project_SOP_title`, `project_SOP_risk_title`, `project_facilities_building`, `project_facilities_room`, `officer_notified`, `officer_name`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, NULL, 'New project title (Updated)', 'Me', 'BCS', '100072290@students.swinburne.edu.my', 'Somebody Else', NULL, '100072290@students.swinburne.edu.my', 'Me,,,', 'Research assistant,,,', 1, 1, 1, NULL, NULL, NULL, NULL, 'Long summary', 'New breakthrough method', NULL, 'Not sure ,,', 'Anything,,', 'New Building,', '103,', NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exemptdealing`
--

CREATE TABLE `exemptdealing` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_supervisor_title` varchar(100) NOT NULL,
  `project_supervisor_name` varchar(100) NOT NULL,
  `project_supervisor_qualification` varchar(100) NOT NULL,
  `project_supervisor_department` varchar(100) NOT NULL,
  `project_supervisor_campus` varchar(100) NOT NULL,
  `project_supervisor_postal_address` varchar(100) NOT NULL,
  `project_supervisor_telephone` varchar(20) NOT NULL,
  `project_supervisor_fax` varchar(20) DEFAULT NULL,
  `project_supervisor_email_address` varchar(100) NOT NULL,
  `project_add_title` varchar(500) DEFAULT NULL,
  `project_add_name` varchar(500) DEFAULT NULL,
  `project_add_qualification` varchar(500) DEFAULT NULL,
  `project_add_department` varchar(500) DEFAULT NULL,
  `project_add_campus` varchar(500) DEFAULT NULL,
  `project_add_postal_address` varchar(500) DEFAULT NULL,
  `project_add_telephone` varchar(100) DEFAULT NULL,
  `project_add_fax` varchar(100) DEFAULT NULL,
  `project_add_email_address` varchar(500) DEFAULT NULL,
  `exemption_type_2` int(1) DEFAULT NULL,
  `exemption_type_3` int(1) DEFAULT NULL,
  `exemption_type_3A` int(1) DEFAULT NULL,
  `exemption_type_4` int(1) DEFAULT NULL,
  `exemption_type_5` int(1) DEFAULT NULL,
  `project_summary` varchar(500) NOT NULL,
  `project_hazard` varchar(500) NOT NULL,
  `project_SOP` varchar(250) DEFAULT NULL,
  `project_facilities_building_no` varchar(100) NOT NULL,
  `project_facilities_room_no` varchar(100) NOT NULL,
  `project_facilities_containment_level` varchar(50) NOT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exemptdealing`
--

INSERT INTO `exemptdealing` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `project_title`, `project_supervisor_title`, `project_supervisor_name`, `project_supervisor_qualification`, `project_supervisor_department`, `project_supervisor_campus`, `project_supervisor_postal_address`, `project_supervisor_telephone`, `project_supervisor_fax`, `project_supervisor_email_address`, `project_add_title`, `project_add_name`, `project_add_qualification`, `project_add_department`, `project_add_campus`, `project_add_postal_address`, `project_add_telephone`, `project_add_fax`, `project_add_email_address`, `exemption_type_2`, `exemption_type_3`, `exemption_type_3A`, `exemption_type_4`, `exemption_type_5`, `project_summary`, `project_hazard`, `project_SOP`, `project_facilities_building_no`, `project_facilities_room_no`, `project_facilities_containment_level`, `project_facilities_certification_no`, `officer_notified`, `officer_name`, `laboratory_manager`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, '', 'Random Project', 'Dr', 'Strange', 'Doctotrate', 'BCS', 'Swinbure', 'Somewhere', '123', '123', 'New@gmail.com', 'Professsor,', 'dfvsdfvs,', 'sfdsf,', 'sdvdv,', 'sdvdv,', 'sdvdvsdv,', '234-4567890,', '234-4567890,', 'My@gmail.com,', 1, 1, 1, NULL, NULL, 'Biology stuff', 'Acid Burning', '', 'New building', '103', 'High', '123', 1, 'Ms Chua', 'Random Manager', 0, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forme`
--

CREATE TABLE `forme` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `project_title` varchar(100) NOT NULL,
  `checklist_form` int(1) NOT NULL,
  `checklist_coverletter` int(1) NOT NULL,
  `checklist_IBC` int(1) NOT NULL,
  `checklist_IBC_report` int(1) NOT NULL,
  `checklist_clearance` int(1) DEFAULT NULL,
  `checklist_CBI` int(1) NOT NULL,
  `checklist_CBI_submit` int(1) NOT NULL,
  `checklist_support` int(1) NOT NULL,
  `checklist_RnD` int(1) DEFAULT NULL,
  `organization` varchar(100) NOT NULL,
  `applicant_name_PI` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `telephone_office` varchar(20) NOT NULL,
  `telephone_mobile` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `postal_address` varchar(100) NOT NULL,
  `project_title2` varchar(100) NOT NULL,
  `IBC_project_identification_no` int(10) DEFAULT NULL,
  `notified_first` varchar(10) NOT NULL,
  `NBB_reference` varchar(500) DEFAULT NULL,
  `NBB_difference` varchar(500) DEFAULT NULL,
  `importer_organization` varchar(100) NOT NULL,
  `importer_contact_person` varchar(100) NOT NULL,
  `importer_position` varchar(100) NOT NULL,
  `importer_telephone_office` varchar(20) DEFAULT NULL,
  `importer_telephone_mobile` varchar(20) DEFAULT NULL,
  `importer_fax` varchar(20) DEFAULT NULL,
  `importer_email_address` varchar(100) NOT NULL,
  `importer_postal_address` varchar(100) NOT NULL,
  `IBC_organization_name` varchar(100) NOT NULL,
  `IBC_chairperson` varchar(100) NOT NULL,
  `IBC_telephone_number` varchar(20) NOT NULL,
  `IBC_fax` varchar(20) DEFAULT NULL,
  `IBC_email_address` varchar(100) NOT NULL,
  `IBC_PI_name` varchar(100) NOT NULL,
  `IBC_project_title` varchar(100) NOT NULL,
  `IBC_date` date DEFAULT NULL,
  `IBC_adequate` int(1) NOT NULL,
  `IBC_checklist_activities` int(1) NOT NULL,
  `IBC_checklist_description` int(1) NOT NULL,
  `IBC_checklist_emergency_response` int(1) NOT NULL,
  `IBC_checklist_trained` int(1) NOT NULL,
  `IBC_form_approved` int(1) NOT NULL,
  `IBC_biosafety_approved` int(1) NOT NULL,
  `signature_statutory_endorsed` int(1) DEFAULT NULL,
  `signature_statutory_applicant_free` int(1) DEFAULT NULL,
  `applicant_PI_signature_date` date DEFAULT NULL,
  `applicant_PI_signature_name` varchar(100) DEFAULT NULL,
  `applicant_PI_signature_stamp` varchar(100) DEFAULT NULL,
  `IBC_chairperson_signature_date` date DEFAULT NULL,
  `IBC_chairperson_signature_name` varchar(100) DEFAULT NULL,
  `IBC_chairperson_signature_stamp` varchar(100) DEFAULT NULL,
  `organization_representative_signature_date` date DEFAULT NULL,
  `organization_representative_signature_name` varchar(100) DEFAULT NULL,
  `organization_representative_signature_stamp` varchar(100) DEFAULT NULL,
  `project_team_name` varchar(100) NOT NULL,
  `project_team_address` varchar(100) NOT NULL,
  `project_team_telephone_number` varchar(200) NOT NULL,
  `project_team_email_address` varchar(100) NOT NULL,
  `project_team_qualification` varchar(100) NOT NULL,
  `project_team_designation` varchar(300) NOT NULL,
  `project_intro_objective` varchar(300) NOT NULL,
  `project_intro_specifics` varchar(500) DEFAULT NULL,
  `project_intro_activities` blob,
  `project_intro_BSL` int(1) NOT NULL,
  `project_intro_duration` blob,
  `project_intro_intended_date_commencement` date DEFAULT NULL,
  `project_intro_expected_date_completion` date DEFAULT NULL,
  `project_intro_importation_date` date DEFAULT NULL,
  `project_intro_field_experiment` int(1) DEFAULT NULL,
  `LMO_desc_name_parent` varchar(500) NOT NULL,
  `LMO_desc_name_donor` varchar(500) NOT NULL,
  `LMO_desc_method` varchar(500) NOT NULL,
  `LMO_desc_class` varchar(500) NOT NULL,
  `LMO_desc_trait` varchar(500) NOT NULL,
  `LMO_desc_genes` blob,
  `LMO_desc_genes_function` varchar(500) NOT NULL,
  `risk_assessment_genes_potential_hazard` varchar(500) NOT NULL,
  `risk_assessment_genes_comments` varchar(500) NOT NULL,
  `risk_assessment_genes_management` varchar(500) NOT NULL,
  `risk_assessment_genes_residual` varchar(500) NOT NULL,
  `risk_assessment_admin_potential_hazard` varchar(500) NOT NULL,
  `risk_assessment_admin_comments` varchar(500) NOT NULL,
  `risk_assessment_admin_management` varchar(500) NOT NULL,
  `risk_assessment_admin_residual` varchar(500) NOT NULL,
  `risk_assessment_containment_potential_hazard` varchar(500) NOT NULL,
  `risk_assessment_containment_comments` varchar(500) NOT NULL,
  `risk_assessment_containment_management` varchar(500) NOT NULL,
  `risk_assessment_containment_residual` varchar(500) NOT NULL,
  `risk_assessment_special_potential_hazard` varchar(500) NOT NULL,
  `risk_assessment_special_comments` varchar(500) NOT NULL,
  `risk_assessment_special_management` varchar(500) NOT NULL,
  `risk_assessment_special_residual` varchar(500) NOT NULL,
  `risk_management_transport` varchar(500) NOT NULL,
  `risk_management_disposed` varchar(500) NOT NULL,
  `risk_management_wastes` varchar(500) NOT NULL,
  `risk_management_wastewater` varchar(500) NOT NULL,
  `risk_management_decontaminated` varchar(500) NOT NULL,
  `risk_response_environment` varchar(500) NOT NULL,
  `risk_response_plan` varchar(500) NOT NULL,
  `risk_response_disposal` varchar(500) NOT NULL,
  `risk_response_isolation` varchar(500) NOT NULL,
  `risk_response_contigency` varchar(500) NOT NULL,
  `premise_name` varchar(250) NOT NULL,
  `premise_type` varchar(250) NOT NULL,
  `premise_BSL` varchar(500) NOT NULL,
  `premise_IBC` varchar(500) NOT NULL,
  `premise_IBC_date` varchar(200) DEFAULT NULL,
  `premise_certification_date` varchar(200) DEFAULT NULL,
  `premise_certification_no` varchar(10) DEFAULT NULL,
  `premise_certification_report` blob,
  `premise_address` varchar(100) NOT NULL,
  `premise_officer_name` varchar(100) DEFAULT NULL,
  `premise_telephone_business` varchar(20) DEFAULT NULL,
  `premise_telephone_mobile` varchar(20) DEFAULT NULL,
  `premise_fax` varchar(20) DEFAULT NULL,
  `premise_email` varchar(100) NOT NULL,
  `confidential_description` varchar(500) NOT NULL,
  `reference_description` varchar(500) NOT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forme`
--

INSERT INTO `forme` (`application_id`, `account_id`, `approver_id`, `project_title`, `checklist_form`, `checklist_coverletter`, `checklist_IBC`, `checklist_IBC_report`, `checklist_clearance`, `checklist_CBI`, `checklist_CBI_submit`, `checklist_support`, `checklist_RnD`, `organization`, `applicant_name_PI`, `position`, `telephone_office`, `telephone_mobile`, `fax`, `email_address`, `postal_address`, `project_title2`, `IBC_project_identification_no`, `notified_first`, `NBB_reference`, `NBB_difference`, `importer_organization`, `importer_contact_person`, `importer_position`, `importer_telephone_office`, `importer_telephone_mobile`, `importer_fax`, `importer_email_address`, `importer_postal_address`, `IBC_organization_name`, `IBC_chairperson`, `IBC_telephone_number`, `IBC_fax`, `IBC_email_address`, `IBC_PI_name`, `IBC_project_title`, `IBC_date`, `IBC_adequate`, `IBC_checklist_activities`, `IBC_checklist_description`, `IBC_checklist_emergency_response`, `IBC_checklist_trained`, `IBC_form_approved`, `IBC_biosafety_approved`, `signature_statutory_endorsed`, `signature_statutory_applicant_free`, `applicant_PI_signature_date`, `applicant_PI_signature_name`, `applicant_PI_signature_stamp`, `IBC_chairperson_signature_date`, `IBC_chairperson_signature_name`, `IBC_chairperson_signature_stamp`, `organization_representative_signature_date`, `organization_representative_signature_name`, `organization_representative_signature_stamp`, `project_team_name`, `project_team_address`, `project_team_telephone_number`, `project_team_email_address`, `project_team_qualification`, `project_team_designation`, `project_intro_objective`, `project_intro_specifics`, `project_intro_activities`, `project_intro_BSL`, `project_intro_duration`, `project_intro_intended_date_commencement`, `project_intro_expected_date_completion`, `project_intro_importation_date`, `project_intro_field_experiment`, `LMO_desc_name_parent`, `LMO_desc_name_donor`, `LMO_desc_method`, `LMO_desc_class`, `LMO_desc_trait`, `LMO_desc_genes`, `LMO_desc_genes_function`, `risk_assessment_genes_potential_hazard`, `risk_assessment_genes_comments`, `risk_assessment_genes_management`, `risk_assessment_genes_residual`, `risk_assessment_admin_potential_hazard`, `risk_assessment_admin_comments`, `risk_assessment_admin_management`, `risk_assessment_admin_residual`, `risk_assessment_containment_potential_hazard`, `risk_assessment_containment_comments`, `risk_assessment_containment_management`, `risk_assessment_containment_residual`, `risk_assessment_special_potential_hazard`, `risk_assessment_special_comments`, `risk_assessment_special_management`, `risk_assessment_special_residual`, `risk_management_transport`, `risk_management_disposed`, `risk_management_wastes`, `risk_management_wastewater`, `risk_management_decontaminated`, `risk_response_environment`, `risk_response_plan`, `risk_response_disposal`, `risk_response_isolation`, `risk_response_contigency`, `premise_name`, `premise_type`, `premise_BSL`, `premise_IBC`, `premise_IBC_date`, `premise_certification_date`, `premise_certification_no`, `premise_certification_report`, `premise_address`, `premise_officer_name`, `premise_telephone_business`, `premise_telephone_mobile`, `premise_fax`, `premise_email`, `confidential_description`, `reference_description`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, 'New Title Updated this part', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Swinburne', 'scacasc', 'sacacasc', '1234556', '1243433454363', '1234341143', 'PI@gmail.com', 'postal address', 'new title', 123, 'yes', '123', NULL, 'sdcsds', 'sddcsvdvv', 'dvsddvssd', '123233', '12313', NULL, 'importer@gmail.com', 'importer address', 'Swinburne', 'IBc namw', '123-1234567', '123-1234567', 'IBC@gmail.com', 'Kim', 'IBc title', '2018-04-02', 1, 0, 1, 0, 1, 0, 1, NULL, NULL, '2018-04-02', 'Kim', 'Stamp here', '2018-04-02', 'IBC chairperson', 'new stamp', '2018-04-22', 'Kim yeung', 'Stamp organization', 'Team name,,,,', 'team address,,,,', '12345578,,,,', 'team@gmail.com,,,,', 'No experience,,,,', 'Student,,,,', 'General Objectie', 'Specific Objective', NULL, 3, NULL, '2018-04-23', '2018-04-23', '2018-04-24', 0, 'parent name,,', 'donor name,,', 'vector,,', 'trait class,,', 'modified trait,,', NULL, 'gene fucntion,,', 'gene modification,,', 'gene risk,,', 'gene management,,', 'gene risk,,', 'admin hazard,,', 'admin risk,,', 'admin management,,', 'admin residual,,', 'containment hazard,,', 'containment risk,,', 'containment management,,', 'containment residual,,', 'special hazard,,', 'special comments,,', 'special management,,', 'special residual,,', 'wadscdacsa', 'ascascascascascv', 'sacascascascasc', 'ascacacsacasc', 'ascacsacasasas', 'sacsaasavsas', 'scascasasxcasx', 'scasasvsa assa', 'vsvsavsavsxva', 'sxzbfdbdzfrbbzdcf', 'Premise 1 name,,,', 'Premise type 1,,,', '3,,,', 'IBC,,,', '2018-04-29,,,', '2018-04-02,,,', '2,,,', NULL, 'premise address,,,', 'contact,,,', '123-1234567,,,', '123-1234567,,,', '123-1234567,,,', 'premise@gmail.com,,,', 'ascsavadvadbadbvdsx', 'dxv dvx dxvxzdv sxazdxv', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formf`
--

CREATE TABLE `formf` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `NBB_reference_no` varchar(10) DEFAULT NULL,
  `notification_checklist_form_completed` int(1) DEFAULT NULL,
  `notification_checklist_CBI` int(1) DEFAULT NULL,
  `notification_checklist_submitted` int(1) DEFAULT NULL,
  `exporter_organization` varchar(100) NOT NULL,
  `exporter_name` varchar(100) NOT NULL,
  `exporter_position` varchar(100) NOT NULL,
  `exporter_telephone_office` varchar(20) DEFAULT NULL,
  `exporter_telephone_mobile` varchar(20) DEFAULT NULL,
  `exporter_fax` varchar(20) DEFAULT NULL,
  `exporter_email_address` varchar(100) NOT NULL,
  `exporter_postal_address` varchar(100) NOT NULL,
  `LMO_description` varchar(500) NOT NULL,
  `LMO_type` int(1) NOT NULL,
  `LMO_type_description` varchar(500) DEFAULT NULL,
  `LMO_identification` varchar(500) NOT NULL,
  `LMO_scientific_name` varchar(500) NOT NULL,
  `LMO_trait` varchar(500) NOT NULL,
  `LMO_intended_usage` varchar(500) NOT NULL,
  `LMO_export_form` varchar(500) NOT NULL,
  `LMO_export_mode` int(1) NOT NULL,
  `LMO_export_mode_description` varchar(500) DEFAULT NULL,
  `LMO_point_of_exit` varchar(500) NOT NULL,
  `LMO_methods` varchar(500) NOT NULL,
  `import_country_name` varchar(100) NOT NULL,
  `import_evidence` blob,
  `export_import_CBI` varchar(300) NOT NULL,
  `applicant_signature_date` date DEFAULT NULL,
  `applicant_name` varchar(100) DEFAULT NULL,
  `applicant_stamp` varchar(100) DEFAULT NULL,
  `representative_signature_date` date DEFAULT NULL,
  `representative_name` varchar(100) DEFAULT NULL,
  `representative_stamp` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formf`
--

INSERT INTO `formf` (`application_id`, `account_id`, `approver_id`, `NBB_reference_no`, `notification_checklist_form_completed`, `notification_checklist_CBI`, `notification_checklist_submitted`, `exporter_organization`, `exporter_name`, `exporter_position`, `exporter_telephone_office`, `exporter_telephone_mobile`, `exporter_fax`, `exporter_email_address`, `exporter_postal_address`, `LMO_description`, `LMO_type`, `LMO_type_description`, `LMO_identification`, `LMO_scientific_name`, `LMO_trait`, `LMO_intended_usage`, `LMO_export_form`, `LMO_export_mode`, `LMO_export_mode_description`, `LMO_point_of_exit`, `LMO_methods`, `import_country_name`, `import_evidence`, `export_import_CBI`, `applicant_signature_date`, `applicant_name`, `applicant_stamp`, `representative_signature_date`, `representative_name`, `representative_stamp`, `application_approved`, `editable`, `popularity`) VALUES
(3, 1, 5, NULL, 1, 1, NULL, 'Swinburne Sarawak', 'My Name', 'Student', '123-45678', '123-45678', '123-45678', 'random@gmail.com', 'Somewhere', 'Amoeba', 0, 'Micro-organism', 'Fish type', 'LMO name', 'LMO trait', 'Research', 'Live sampes', 0, 'Air', 'Exit', 'Dont drop it', 'Japan', '', 'Shhhh', '2018-04-03', 'Kim', 'faf', '2018-04-04', 'Kim', 'Second Stamp', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hirarc`
--

CREATE TABLE `hirarc` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `company_name` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `process_location` varchar(200) NOT NULL,
  `conducted_name` varchar(200) NOT NULL,
  `conducted_designation` varchar(200) NOT NULL,
  `approved_name` varchar(200) NOT NULL,
  `approved_designation` varchar(200) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `document_no` varchar(10) DEFAULT NULL,
  `HIRARC_activity` varchar(500) NOT NULL,
  `HIRARC_hazard` varchar(500) NOT NULL,
  `HIRARC_effects` varchar(500) NOT NULL,
  `HIRARC_risk_control` varchar(500) NOT NULL,
  `HIRARC_LLH` varchar(500) NOT NULL,
  `HIRARC_SEV` varchar(500) NOT NULL,
  `HIRARC_RR` varchar(500) NOT NULL,
  `HIRARC_control_measure` varchar(500) NOT NULL,
  `HIRARC_PIC` varchar(500) NOT NULL,
  `application_type` int(1) DEFAULT '0',
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hirarc`
--

INSERT INTO `hirarc` (`application_id`, `account_id`, `approver_id`, `company_name`, `date`, `process_location`, `conducted_name`, `conducted_designation`, `approved_name`, `approved_designation`, `date_from`, `date_to`, `review_date`, `document_no`, `HIRARC_activity`, `HIRARC_hazard`, `HIRARC_effects`, `HIRARC_risk_control`, `HIRARC_LLH`, `HIRARC_SEV`, `HIRARC_RR`, `HIRARC_control_measure`, `HIRARC_PIC`, `application_type`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, 'My company', '2018-03-26', 'Swinburne', 'Me', 'Student', 'Ms Chua', 'Biosafety Officer', '2018-03-28', '2018-04-26', '2018-05-16', NULL, 'asfcaf,testedit,,', 'sasfvasv,testedit,,', 'asvasvasvas,testedit,,', 'svavsv,testedit,,', 'llh,testedit,,', 'SEV,testedit,,', 'RR,testedit,,', 'asfasfasf,testedit,,', 'Finished,testedit,,', 0, NULL, 0, NULL),
(2, 4, 1, 'My Company or Department', '2018-05-02', 'Swinburne', 'Me', 'Student', 'Name', 'Random', '2018-05-08', '2018-05-09', '2018-05-10', NULL, 'Activity 1,Test 4,,', 'Acid,test4,,', 'Burn,test4,,', 'None,test4,,', 'LLH,test4,,', 'SEV,t4,,', 'RR,t4,,', 'Recommended ,test4,,', 'Complete,test4,,', 4, 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `incidentaccidentreport`
--

CREATE TABLE `incidentaccidentreport` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `victim_name` varchar(100) NOT NULL,
  `victim_gender` int(1) NOT NULL,
  `victim_age` int(2) NOT NULL,
  `victim_citizenship` varchar(100) NOT NULL,
  `victim_employment_designation` varchar(100) NOT NULL,
  `victim_faculty` varchar(100) NOT NULL,
  `doc_id` varchar(10) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `incident_date` date DEFAULT NULL,
  `incident_time` varchar(25) NOT NULL,
  `incident_location` varchar(100) NOT NULL,
  `incident_type1` int(1) DEFAULT NULL,
  `incident_type2` int(1) DEFAULT NULL,
  `incident_type3` int(1) DEFAULT NULL,
  `incident_type4` int(1) DEFAULT NULL,
  `incident_type5` int(1) DEFAULT NULL,
  `incident_type6` int(1) DEFAULT NULL,
  `incident_type7` int(1) DEFAULT NULL,
  `incident_type8` int(1) DEFAULT NULL,
  `incident_type9` int(1) DEFAULT NULL,
  `incident_type_description` varchar(500) DEFAULT NULL,
  `incident_injury` int(1) NOT NULL,
  `incident_physician_or_hospital` int(1) NOT NULL,
  `incident_details` varchar(500) DEFAULT NULL,
  `incident_actions` varchar(500) DEFAULT NULL,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_designation` varchar(100) DEFAULT NULL,
  `reporter_date` date DEFAULT NULL,
  `investigation_victim` int(1) NOT NULL,
  `investigation_victim_age` varchar(100) NOT NULL,
  `investigation_victim_citizenship` varchar(100) NOT NULL,
  `investigation_victim_job_description` varchar(500) NOT NULL,
  `investigation_findings` varchar(500) NOT NULL,
  `investigation_preventive_no` varchar(500) NOT NULL,
  `investigation_preventive_action` varchar(500) NOT NULL,
  `investigation_preventive_by_whom` varchar(500) NOT NULL,
  `investigation_preventive_timeline` varchar(500) NOT NULL,
  `investigated_by` varchar(100) DEFAULT NULL,
  `reviewed_by` varchar(100) DEFAULT NULL,
  `application_type` int(1) DEFAULT '0',
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incidentaccidentreport`
--

INSERT INTO `incidentaccidentreport` (`application_id`, `account_id`, `approver_id`, `victim_name`, `victim_gender`, `victim_age`, `victim_citizenship`, `victim_employment_designation`, `victim_faculty`, `doc_id`, `review_date`, `incident_date`, `incident_time`, `incident_location`, `incident_type1`, `incident_type2`, `incident_type3`, `incident_type4`, `incident_type5`, `incident_type6`, `incident_type7`, `incident_type8`, `incident_type9`, `incident_type_description`, `incident_injury`, `incident_physician_or_hospital`, `incident_details`, `incident_actions`, `reporter_name`, `reporter_designation`, `reporter_date`, `investigation_victim`, `investigation_victim_age`, `investigation_victim_citizenship`, `investigation_victim_job_description`, `investigation_findings`, `investigation_preventive_no`, `investigation_preventive_action`, `investigation_preventive_by_whom`, `investigation_preventive_timeline`, `investigated_by`, `reviewed_by`, `application_type`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, 'Kim yeung Updated version', 1, 23, 'Malaysian', 'Student', 'CS', NULL, '2018-04-02', '2018-04-04', '1PM', 'B609', NULL, 2, 3, 4, NULL, 6, NULL, NULL, NULL, 'Stuff happened', 0, 0, 'Nothing serious', 'Investigations Commenced', 'This dude', 'Student', '2018-04-04', 0, '20', 'Malayisan', 'Student', 'Some dude messed up', '1,,,,,', 'remove stuff,,,,,', 'Lab manager,,,,,', '2018-04-03,,,,,', 'health and Safety Officer', 'Ms Chua', 0, NULL, 0, NULL),
(2, 4, 5, 'Si Kim Yeung', 1, 23, 'Malaysian', 'Student', 'BCS', NULL, '2018-05-07', '2018-05-15', '2PM', '508', 1, 2, 3, NULL, NULL, 6, 7, 8, NULL, '', 0, 0, 'Random incident', 'Random actions', 'Me', 'Student', '2018-05-15', 1, '20', 'Malaysian', 'student', 'Random findings', '1,,,,,', 'Random action 1,,,,,', 'Person 1,,,,,', '2018-05-02,,,,,', '', '', 2, 1, 0, NULL),
(3, 4, 5, 'Random 3', 1, 23, 'Malaysian', 'Student', 'BCS', NULL, '2018-05-21', '2018-05-08', '3 PM', 'Lab A', 1, 2, 3, 4, 5, NULL, NULL, NULL, NULL, '', 1, 1, 'Burning acid', 'No actions', 'Someone', 'Lab Person', '2018-05-01', 1, '20', 'Malaysian', 'Student', 'Random Findings', '1,,,,,', 'Action 3,,,,,', 'Me 3,,,,,', '2018-05-08,,,,,', '', '', 3, 1, 0, NULL),
(4, 4, 5, 'Random name 4', 1, 24, 'Malaysian', 'Random Job', 'Biotech', NULL, '2018-05-21', '2018-05-09', '4 PM', 'Room 508', NULL, NULL, NULL, NULL, NULL, 6, 7, 8, 9, '', 1, 0, 'Some details here', 'actions taken here', 'Me 4', 'Student', '2018-05-29', 1, '24', 'Malaysian', 'Student', 'Findings here', '1,,,,,', 'Actions taken here,,,,,', 'By whom here,,,,,', '2018-05-10,,,,,', '', '', 4, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED DEFAULT NULL,
  `program` varchar(100) NOT NULL,
  `program_type` varchar(100) NOT NULL,
  `unit_convenor` varchar(100) DEFAULT NULL,
  `project_investigator` varchar(100) DEFAULT NULL,
  `unit_name` varchar(100) DEFAULT NULL,
  `experiment_title` varchar(100) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_reference_no` varchar(100) DEFAULT NULL,
  `biohazard_type` varchar(100) NOT NULL,
  `biohazard_name` varchar(100) NOT NULL,
  `biohazard_id` varchar(100) NOT NULL,
  `date_received` date DEFAULT NULL,
  `log_in_personnel` varchar(100) NOT NULL,
  `keeper_name` varchar(100) NOT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `approval` int(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `account_id`, `program`, `program_type`, `unit_convenor`, `project_investigator`, `unit_name`, `experiment_title`, `project_title`, `project_reference_no`, `biohazard_type`, `biohazard_name`, `biohazard_id`, `date_received`, `log_in_personnel`, `keeper_name`, `remarks`, `approval`) VALUES
(1, NULL, 'Msc\r\n', 'Research\r\n', 'Chua Jia Ni\r\n', NULL, NULL, NULL, 'SSBC: Biohazard.2018.01: Optimizing Bacteria Growth Condition\r\n', NULL, 'Microorganism\r\n', 'E. coli ABC\r\n', 'B.BSL1.R.1.1\r\n', '2018-04-09', 'Chua Jia Ni\r\n', 'Chua Jia Ni\r\n', 'Sample data being test.\r\nPlease see.', 1),
(2, NULL, 'Biotech\r\n', 'Teaching\r\n', 'Chua Jia Ni\r\n', NULL, 'BCH 007:\r\n', 'Bacteria Isolation\r\n', NULL, NULL, 'Living modified bacteria\r\n', 'E. coli DEF\r\n', 'L.BSL1.T.1.1\r\n', '2018-04-11', 'Chua Jia Ni\r\n', 'Chua Jia Ni\r\n', 'Let’s say once you render this table the description for the test is way too big and is pushing the other columns away and making them smaller than you think they should be.  The quickest way to fix this is to simply give column sizes to your table headers.', 1),
(3, NULL, 'HELLO', 'THIS', 'IS', '', 'A', 'SAMPLE', '', '', 'ANSWER', 'OMEGA', 'LUL', '2018-04-21', 'PAG', 'CHOMP', 'XDXDXDXDXD', 0),
(4, 1, 'account', 'id', '', 'test', 'sample', '', 'bois', 'sss', 'asas', 'asasa', 'sxc', '2018-04-21', '2w', 'sdw', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materialriskassessment`
--

CREATE TABLE `materialriskassessment` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `Sec1_chemical` varchar(100) NOT NULL,
  `Sec1_biological_material` varchar(100) NOT NULL,
  `Sec1_equipment` varchar(100) NOT NULL,
  `Sec1_doc_id` varchar(10) NOT NULL,
  `Sec1_review_date` date DEFAULT NULL,
  `Sec2A_name` varchar(100) DEFAULT NULL,
  `Sec2A_manufacturer` varchar(100) DEFAULT NULL,
  `Sec2A_hazardous` int(1) DEFAULT NULL,
  `Sec2A_statement` varchar(500) DEFAULT NULL,
  `Sec2A_waste` int(1) DEFAULT NULL,
  `Sec2A_waste_type_corrosive` int(1) DEFAULT NULL,
  `Sec2A_waste_type_ignitable` int(1) DEFAULT NULL,
  `Sec2A_waste_type_reactive` int(1) DEFAULT NULL,
  `Sec2A_waste_type_toxic` int(1) DEFAULT NULL,
  `Sec2A_waste_type_infectious` int(1) DEFAULT NULL,
  `Sec2A2_permit` int(1) DEFAULT NULL,
  `Sec2A2_permit_type` varchar(500) DEFAULT NULL,
  `Sec2A2_MSDS` int(1) DEFAULT NULL,
  `Sec2A2_exposure_inhalation` int(1) DEFAULT NULL,
  `Sec2A2_exposure_skin` int(1) DEFAULT NULL,
  `Sec2A2_exposure_ingestion` int(1) DEFAULT NULL,
  `Sec2A2_exposure_injection` int(1) DEFAULT NULL,
  `Sec2A2_exposure_others` int(1) DEFAULT NULL,
  `Sec2A2_exposure_description` varchar(500) DEFAULT NULL,
  `Sec2A2_storage` varchar(500) DEFAULT NULL,
  `Sec2A2_waste_requirement` int(1) DEFAULT NULL,
  `Sec2A2_risk_control_training` int(1) DEFAULT NULL,
  `Sec2A2_risk_control_inspection` int(1) DEFAULT NULL,
  `Sec2A2_risk_control_SOP` int(1) DEFAULT NULL,
  `Sec2A2_risk_control_PPE` int(1) DEFAULT NULL,
  `Sec2A2_risk_control_engineering` int(1) DEFAULT NULL,
  `Sec2A2_emergency_first_aid_kit` int(1) DEFAULT NULL,
  `Sec2A2_emergency_shower` int(1) DEFAULT NULL,
  `Sec2A2_emergency_eyewash` int(1) DEFAULT NULL,
  `Sec2A2_emergency_neutralizing` int(1) DEFAULT NULL,
  `Sec2A2_emergency_spill` int(1) DEFAULT NULL,
  `Sec2A2_emergency_restrict` int(1) DEFAULT NULL,
  `Sec2A3_storage_inhalation` int(1) DEFAULT NULL,
  `Sec2A3_storage_skin` int(1) DEFAULT NULL,
  `Sec2A3_storage_ingestion` int(1) DEFAULT NULL,
  `Sec2A3_storage_injection` int(1) DEFAULT NULL,
  `Sec2A3_storage_others` int(1) DEFAULT NULL,
  `Sec2A3_storage_description` varchar(500) DEFAULT NULL,
  `Sec2A3_storage_control` varchar(500) DEFAULT NULL,
  `Sec2A3_handling_inhalation` int(1) DEFAULT NULL,
  `Sec2A3_handling_skin` int(1) DEFAULT NULL,
  `Sec2A3_handling_ingestion` int(1) DEFAULT NULL,
  `Sec2A3_handling_injection` int(1) DEFAULT NULL,
  `Sec2A3_handling_others` int(1) DEFAULT NULL,
  `Sec2A3_handling_description` varchar(500) DEFAULT NULL,
  `Sec2A3_handling_control` varchar(500) DEFAULT NULL,
  `Sec2A3_spill_inhalation` int(1) DEFAULT NULL,
  `Sec2A3_spill_skin` int(1) DEFAULT NULL,
  `Sec2A3_spill_ingestion` int(1) DEFAULT NULL,
  `Sec2A3_spill_injection` int(1) DEFAULT NULL,
  `Sec2A3_spill_others` int(1) DEFAULT NULL,
  `Sec2A3_spill_description` varchar(500) DEFAULT NULL,
  `Sec2A3_spill_control` varchar(500) DEFAULT NULL,
  `Sec2A3_disposal_inhalation` int(1) DEFAULT NULL,
  `Sec2A3_disposal_skin` int(1) DEFAULT NULL,
  `Sec2A3_disposal_ingestion` int(1) DEFAULT NULL,
  `Sec2A3_disposal_injection` int(1) DEFAULT NULL,
  `Sec2A3_disposal_others` int(1) DEFAULT NULL,
  `Sec2A3_disposal_description` varchar(500) DEFAULT NULL,
  `Sec2A3_disposal_control` varchar(500) DEFAULT NULL,
  `Sec2B1_equipment_name` varchar(100) DEFAULT NULL,
  `Sec2B1_activity_type` varchar(100) DEFAULT NULL,
  `Sec2B1_activity_location` varchar(100) DEFAULT NULL,
  `Sec2B2_machinery_description` varchar(500) DEFAULT NULL,
  `Sec2B2_checklist_crushing` int(1) DEFAULT NULL,
  `Sec2B2_checklist_shearing` int(1) DEFAULT NULL,
  `Sec2B2_checklist_drawing` int(1) DEFAULT NULL,
  `Sec2B2_checklist_cutting` int(1) DEFAULT NULL,
  `Sec2B2_checklist_entangle` int(1) DEFAULT NULL,
  `Sec2B2_checklist_impact` int(1) DEFAULT NULL,
  `Sec2B2_checklist_abrasion` int(1) DEFAULT NULL,
  `Sec2B2_checklist_stabbing` int(1) DEFAULT NULL,
  `Sec2B2_checklist_puncture` int(1) DEFAULT NULL,
  `Sec2B2_checklist_ejection` int(1) DEFAULT NULL,
  `Sec2B2_checklist_temperature` int(1) DEFAULT NULL,
  `Sec2B2_checklist_electrical` int(1) DEFAULT NULL,
  `Sec2B2_checklist_noise` int(1) DEFAULT NULL,
  `Sec2B2_checklist_vibration` int(1) DEFAULT NULL,
  `Sec2B2_checklist_dust` int(1) DEFAULT NULL,
  `Sec2B2_checklist_pressure` int(1) DEFAULT NULL,
  `Sec2B2_checklist_waste` int(1) DEFAULT NULL,
  `Sec2B2_checklist_fumes` int(1) DEFAULT NULL,
  `Sec2B2_checklist_chemical` int(1) DEFAULT NULL,
  `Sec2B2_checklist_allergens` int(1) DEFAULT NULL,
  `Sec2B2_exposure` varchar(500) DEFAULT NULL,
  `Sec2B2_users` varchar(200) DEFAULT NULL,
  `Sec2B2_control_measures` varchar(500) DEFAULT NULL,
  `Sec2B2_procedural_behavioural` varchar(500) DEFAULT NULL,
  `Sec2B2_overall_assessment_risk_level` int(1) DEFAULT NULL,
  `Sec2B2_risk_reduction_action` varchar(500) DEFAULT NULL,
  `Sec2B2_risk_reduction_by_who` varchar(500) DEFAULT NULL,
  `Sec2B2_risk_reduction_by_when` varchar(500) DEFAULT NULL,
  `Sec2B2_risk_reduction_action_completed` varchar(500) DEFAULT NULL,
  `Sec2B2_overall_assessment_risk_level_after` int(1) DEFAULT NULL,
  `Sec3_requestor` varchar(100) DEFAULT NULL,
  `Sec3_requestor_date` date DEFAULT NULL,
  `Sec3_supervisor` varchar(100) DEFAULT NULL,
  `Sec3_supervisor_date` date DEFAULT NULL,
  `Sec3_LO` varchar(100) DEFAULT NULL,
  `Sec3_LO_date` date DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialriskassessment`
--

INSERT INTO `materialriskassessment` (`application_id`, `account_id`, `approver_id`, `Sec1_chemical`, `Sec1_biological_material`, `Sec1_equipment`, `Sec1_doc_id`, `Sec1_review_date`, `Sec2A_name`, `Sec2A_manufacturer`, `Sec2A_hazardous`, `Sec2A_statement`, `Sec2A_waste`, `Sec2A_waste_type_corrosive`, `Sec2A_waste_type_ignitable`, `Sec2A_waste_type_reactive`, `Sec2A_waste_type_toxic`, `Sec2A_waste_type_infectious`, `Sec2A2_permit`, `Sec2A2_permit_type`, `Sec2A2_MSDS`, `Sec2A2_exposure_inhalation`, `Sec2A2_exposure_skin`, `Sec2A2_exposure_ingestion`, `Sec2A2_exposure_injection`, `Sec2A2_exposure_others`, `Sec2A2_exposure_description`, `Sec2A2_storage`, `Sec2A2_waste_requirement`, `Sec2A2_risk_control_training`, `Sec2A2_risk_control_inspection`, `Sec2A2_risk_control_SOP`, `Sec2A2_risk_control_PPE`, `Sec2A2_risk_control_engineering`, `Sec2A2_emergency_first_aid_kit`, `Sec2A2_emergency_shower`, `Sec2A2_emergency_eyewash`, `Sec2A2_emergency_neutralizing`, `Sec2A2_emergency_spill`, `Sec2A2_emergency_restrict`, `Sec2A3_storage_inhalation`, `Sec2A3_storage_skin`, `Sec2A3_storage_ingestion`, `Sec2A3_storage_injection`, `Sec2A3_storage_others`, `Sec2A3_storage_description`, `Sec2A3_storage_control`, `Sec2A3_handling_inhalation`, `Sec2A3_handling_skin`, `Sec2A3_handling_ingestion`, `Sec2A3_handling_injection`, `Sec2A3_handling_others`, `Sec2A3_handling_description`, `Sec2A3_handling_control`, `Sec2A3_spill_inhalation`, `Sec2A3_spill_skin`, `Sec2A3_spill_ingestion`, `Sec2A3_spill_injection`, `Sec2A3_spill_others`, `Sec2A3_spill_description`, `Sec2A3_spill_control`, `Sec2A3_disposal_inhalation`, `Sec2A3_disposal_skin`, `Sec2A3_disposal_ingestion`, `Sec2A3_disposal_injection`, `Sec2A3_disposal_others`, `Sec2A3_disposal_description`, `Sec2A3_disposal_control`, `Sec2B1_equipment_name`, `Sec2B1_activity_type`, `Sec2B1_activity_location`, `Sec2B2_machinery_description`, `Sec2B2_checklist_crushing`, `Sec2B2_checklist_shearing`, `Sec2B2_checklist_drawing`, `Sec2B2_checklist_cutting`, `Sec2B2_checklist_entangle`, `Sec2B2_checklist_impact`, `Sec2B2_checklist_abrasion`, `Sec2B2_checklist_stabbing`, `Sec2B2_checklist_puncture`, `Sec2B2_checklist_ejection`, `Sec2B2_checklist_temperature`, `Sec2B2_checklist_electrical`, `Sec2B2_checklist_noise`, `Sec2B2_checklist_vibration`, `Sec2B2_checklist_dust`, `Sec2B2_checklist_pressure`, `Sec2B2_checklist_waste`, `Sec2B2_checklist_fumes`, `Sec2B2_checklist_chemical`, `Sec2B2_checklist_allergens`, `Sec2B2_exposure`, `Sec2B2_users`, `Sec2B2_control_measures`, `Sec2B2_procedural_behavioural`, `Sec2B2_overall_assessment_risk_level`, `Sec2B2_risk_reduction_action`, `Sec2B2_risk_reduction_by_who`, `Sec2B2_risk_reduction_by_when`, `Sec2B2_risk_reduction_action_completed`, `Sec2B2_overall_assessment_risk_level_after`, `Sec3_requestor`, `Sec3_requestor_date`, `Sec3_supervisor`, `Sec3_supervisor_date`, `Sec3_LO`, `Sec3_LO_date`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, '0', '0', '0', 'OHS/F/4.18', '2018-05-14', 'Goo Updated', 'Tham', 0, '', 1, 1, 1, 1, 1, 1, 1, 'adadcas', 1, 1, 1, 1, NULL, NULL, '', 'Adad', 1, 1, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, '', 'sacasccss', 1, 1, NULL, NULL, NULL, '', 'acscascascacs', 1, 1, NULL, NULL, NULL, '', 'cascascascasca', 1, 1, 1, NULL, NULL, '', 'cscasascasassasvasvfdzbdb ', 'sDvVvs  ', 'DSvsdvVv', 'zdvzvzdvdv', 'adscascasasvasvsd', 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '10 mins', 'New to this', 'afcascs', 'ascacsc', 2, 'sacscsa', 'asacsacas', 'cascsacas', 'acasxcsacca', 2, 'ascfsacas', '2018-04-02', 'sacascsac', '2018-04-04', 'ascasc', '2018-04-10', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED DEFAULT NULL,
  `notification_type` int(1) DEFAULT '1',
  `notification_title` varchar(100) DEFAULT NULL,
  `notification_description` varchar(500) NOT NULL,
  `notification_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `notification_read` int(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `account_id`, `notification_type`, `notification_title`, `notification_description`, `notification_date`, `notification_read`) VALUES
(1, 1, 2, 'Test', 'Hello, This is to test out notification number 1 from account id 1!!!', '2018-04-23 20:27:40', 1),
(2, 2, 1, 'Test 2', 'This is from account 2. Krappa', '2018-04-23 20:28:25', 0),
(3, 1, 1, 'Test 1+2', 'SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT SAMPLETEXT ', '2018-04-23 20:29:12', 1),
(4, NULL, 2, 'New Registration', 'The following user has requested for an account: Cedric Ang', '2018-04-30 14:11:59', 1),
(5, NULL, 2, 'New Registration', 'The following user has requested for an account: Si Kim Yeung', '2018-04-30 17:01:32', 1),
(6, NULL, 2, 'New Registration', 'The following use has submitted an Annex 2 form: ', '2018-05-01 00:01:02', 1),
(7, 2, 1, 'New Registration', 'The following use has submitted an Annex 2 form: ', '2018-05-01 12:48:47', 0),
(8, 3, 3, 'New Registration', 'The following user has requested for an account: Biosafety Officer', '2018-05-01 15:58:17', 1),
(9, NULL, 2, 'New Registration', 'The following use has submitted an Annex 2 form: Kim Yeung', '2018-05-02 21:04:24', 1),
(10, NULL, 2, 'New Registration', 'The following user has requested for an account: HSO name', '2018-05-05 16:38:52', 1),
(11, NULL, 2, 'New Annex 2 Application', 'The following use has submitted an Annex 2 form: Kim Yeung Updated name', '2018-05-08 19:23:15', 1),
(12, NULL, 2, 'New Registration', 'The following user has requested for an account: SSBC Member', '2018-05-12 21:19:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notificationexportingbiologicalmaterial`
--

CREATE TABLE `notificationexportingbiologicalmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `personnel_name` varchar(100) NOT NULL,
  `personnel_staff_student_no` int(10) DEFAULT NULL,
  `personnel_designation` varchar(100) NOT NULL,
  `personnel_faculty` varchar(100) NOT NULL,
  `personnel_project_title` varchar(100) NOT NULL,
  `personnel_reference_no` varchar(10) DEFAULT NULL,
  `LMO_list` int(1) DEFAULT NULL,
  `LMO_name` varchar(500) DEFAULT NULL,
  `LMO_risk_level` varchar(500) DEFAULT NULL,
  `LMO_category` varchar(500) DEFAULT NULL,
  `LMO_quantity` varchar(500) DEFAULT NULL,
  `LMO_volume` varchar(500) DEFAULT NULL,
  `biological_list` int(1) DEFAULT NULL,
  `biological_name` varchar(500) DEFAULT NULL,
  `biological_risk_level` varchar(500) DEFAULT NULL,
  `biological_category` varchar(500) DEFAULT NULL,
  `biological_quantity` varchar(500) DEFAULT NULL,
  `biological_volume` varchar(500) DEFAULT NULL,
  `importing_country` varchar(100) NOT NULL,
  `importing_institude` varchar(100) NOT NULL,
  `importing_person_in_charge` varchar(100) NOT NULL,
  `importing_person_in_charge_telephone_no` int(20) NOT NULL,
  `declaration_name` varchar(100) DEFAULT NULL,
  `declaration_date` date DEFAULT NULL,
  `signature_verified_by` varchar(100) DEFAULT NULL,
  `signature_verified_date` date DEFAULT NULL,
  `notification_approved_by` varchar(100) DEFAULT NULL,
  `notification_declined_by` varchar(100) DEFAULT NULL,
  `notification_approve_decline_date` date DEFAULT NULL,
  `notification_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `notification_reviewed_by` varchar(100) DEFAULT NULL,
  `notification_reviewed_by_date` date DEFAULT NULL,
  `notification_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `incident_accident_report` varchar(500) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationexportingbiologicalmaterial`
--

INSERT INTO `notificationexportingbiologicalmaterial` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `personnel_name`, `personnel_staff_student_no`, `personnel_designation`, `personnel_faculty`, `personnel_project_title`, `personnel_reference_no`, `LMO_list`, `LMO_name`, `LMO_risk_level`, `LMO_category`, `LMO_quantity`, `LMO_volume`, `biological_list`, `biological_name`, `biological_risk_level`, `biological_category`, `biological_quantity`, `biological_volume`, `importing_country`, `importing_institude`, `importing_person_in_charge`, `importing_person_in_charge_telephone_no`, `declaration_name`, `declaration_date`, `signature_verified_by`, `signature_verified_date`, `notification_approved_by`, `notification_declined_by`, `notification_approve_decline_date`, `notification_approve_decline_remarks`, `notification_reviewed_by`, `notification_reviewed_by_date`, `notification_reviewed_by_remarks`, `delivered_date`, `incident_accident_report`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, NULL, 'Si Kim Yeung', 100072290, 'Student', 'BCS', 'Project Title', '123', 1, 'New LMO,,Lmo 2,,,', 'Low,,High,,,', 'A,,A,,,', '3,,5,,,', '20,,30,,,', NULL, ',,,,,', ',,,,,', ',,,,,', ',,,,,', ',,,,,', 'Malaysia', 'Swinburne', 'Me', 12345678, 'Si Kim Yeung', '2018-04-03', '', '2018-04-05', NULL, '1', '0000-00-00', '', 'ms chua', '2018-04-23', 'Its ok', '0000-00-00', '', NULL, 0, NULL),
(2, 1, 5, NULL, NULL, 'Si Kim', 100072290, 'Student', 'BCS', 'New Title', '123', 1, 'Amoeba,,,,,', 'Low,,,,,', 'A,,,,,', '3,,,,,', '20,,,,,', NULL, ',,,,,', ',,,,,', ',,,,,', ',,,,,', ',,,,,', 'Malaysia', 'Swinburne', '0', 123, 'Kim', '2018-04-02', '', '2018-04-04', NULL, NULL, '0000-00-00', '', '', '0000-00-00', '', NULL, NULL, 0, 2, NULL),
(3, 1, 5, NULL, NULL, 'Si Kim', 100072290, 'Student', 'BCS', 'New Title', '123', 1, 'Amoeba,,,,,', 'Low,,,,,', 'A,,,,,', '3,,,,,', '20,,,,,', NULL, ',,,,,', ',,,,,', ',,,,,', ',,,,,', ',,,,,', 'Malaysia', 'Swinburne', 'ms chua', 123, 'Kim', '2018-04-02', '', '2018-04-04', NULL, NULL, '0000-00-00', '', '', '0000-00-00', '', '2018-04-23', 'No accidents lately', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notificationlmobiohazardousmaterial`
--

CREATE TABLE `notificationlmobiohazardousmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `personnel_name` varchar(100) NOT NULL,
  `personnel_staff_student_no` int(10) DEFAULT NULL,
  `personnel_designation` varchar(100) NOT NULL,
  `personnel_faculty` varchar(100) NOT NULL,
  `personnel_unit_code` varchar(100) DEFAULT NULL,
  `personnel_project_title` varchar(100) DEFAULT NULL,
  `personnel_reference_no` varchar(10) DEFAULT NULL,
  `personnel_storage` varchar(100) NOT NULL,
  `personnel_keeper_name` varchar(100) NOT NULL,
  `LMO_list` int(1) DEFAULT NULL,
  `LMO_name` varchar(500) DEFAULT NULL,
  `LMO_risk_level` varchar(500) DEFAULT NULL,
  `LMO_quantity` varchar(500) DEFAULT NULL,
  `LMO_volume` varchar(500) DEFAULT NULL,
  `biohazard_list` int(1) DEFAULT NULL,
  `biohazard_name` varchar(500) DEFAULT NULL,
  `biohazard_risk_level` varchar(500) DEFAULT NULL,
  `biohazard_quantity` varchar(500) DEFAULT NULL,
  `biohazard_volume` varchar(500) DEFAULT NULL,
  `declaration_name` varchar(100) DEFAULT NULL,
  `declaration_date` date DEFAULT NULL,
  `signature_verified_by` varchar(100) DEFAULT NULL,
  `signature_verified_date` date DEFAULT NULL,
  `notification_approved_by` varchar(100) DEFAULT NULL,
  `notification_declined_by` varchar(100) DEFAULT NULL,
  `notification_approver` varchar(25) DEFAULT NULL,
  `notification_decliner` varchar(25) DEFAULT NULL,
  `notification_approve_decline_date` date DEFAULT NULL,
  `notification_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `notification_reviewed_by` varchar(100) DEFAULT NULL,
  `notification_reviewed_by_date` date DEFAULT NULL,
  `notification_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationlmobiohazardousmaterial`
--

INSERT INTO `notificationlmobiohazardousmaterial` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `personnel_name`, `personnel_staff_student_no`, `personnel_designation`, `personnel_faculty`, `personnel_unit_code`, `personnel_project_title`, `personnel_reference_no`, `personnel_storage`, `personnel_keeper_name`, `LMO_list`, `LMO_name`, `LMO_risk_level`, `LMO_quantity`, `LMO_volume`, `biohazard_list`, `biohazard_name`, `biohazard_risk_level`, `biohazard_quantity`, `biohazard_volume`, `declaration_name`, `declaration_date`, `signature_verified_by`, `signature_verified_date`, `notification_approved_by`, `notification_declined_by`, `notification_approver`, `notification_decliner`, `notification_approve_decline_date`, `notification_approve_decline_remarks`, `notification_reviewed_by`, `notification_reviewed_by_date`, `notification_reviewed_by_remarks`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, NULL, 'Sim', 100072290, 'Student', 'BCS', 'SE4001', 'New title', NULL, 'new storage', 'keepr name', NULL, 'Modified List Name,,,,,', 'Modified Risk Level,,,,,', '20,,,,,', '10,,,,,', 1, ',,,,,', ',,,,,', ',,,,,', ',,,,,', 'Sikscac', '2018-04-03', 'Sim', '2018-04-05', NULL, NULL, '', '', '2018-04-18', 'dvsdvsdv', '', '2018-04-23', 'sdvsdvsvddsd', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pc1`
--

CREATE TABLE `pc1` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_supervisor_title` varchar(100) NOT NULL,
  `project_supervisor_name` varchar(100) NOT NULL,
  `project_supervisor_qualification` varchar(100) NOT NULL,
  `project_supervisor_department` varchar(100) NOT NULL,
  `project_supervisor_campus` varchar(100) NOT NULL,
  `project_supervisor_postal_address` varchar(100) NOT NULL,
  `project_supervisor_telephone` varchar(20) NOT NULL,
  `project_supervisor_fax` varchar(20) DEFAULT NULL,
  `project_supervisor_email_address` varchar(100) NOT NULL,
  `project_add_title` varchar(500) DEFAULT NULL,
  `project_add_name` varchar(500) DEFAULT NULL,
  `project_add_qualification` varchar(500) DEFAULT NULL,
  `project_add_department` varchar(500) DEFAULT NULL,
  `project_add_campus` varchar(500) DEFAULT NULL,
  `project_add_postal_address` varchar(750) DEFAULT NULL,
  `project_add_telephone` varchar(100) DEFAULT NULL,
  `project_add_fax` varchar(100) DEFAULT NULL,
  `project_add_email_address` varchar(500) DEFAULT NULL,
  `dealing_type_a` int(1) DEFAULT NULL,
  `dealing_type_c` int(1) DEFAULT NULL,
  `project_summary` varchar(500) NOT NULL,
  `GMO_name` varchar(100) NOT NULL,
  `GMO_method` varchar(250) NOT NULL,
  `GMO_origin` varchar(250) NOT NULL,
  `modified_trait_class` varchar(100) NOT NULL,
  `modified_trait_description` varchar(250) NOT NULL,
  `project_hazard_staff` varchar(250) NOT NULL,
  `project_hazard_environment` varchar(250) NOT NULL,
  `project_hazard_steps` varchar(250) NOT NULL,
  `project_transport` varchar(250) NOT NULL,
  `project_disposal` varchar(250) NOT NULL,
  `project_SOP` blob,
  `project_facilities_building_no` varchar(100) NOT NULL,
  `project_facilities_room_no` varchar(100) NOT NULL,
  `project_facilities_containment_level` varchar(50) DEFAULT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc1`
--

INSERT INTO `pc1` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `project_title`, `project_supervisor_title`, `project_supervisor_name`, `project_supervisor_qualification`, `project_supervisor_department`, `project_supervisor_campus`, `project_supervisor_postal_address`, `project_supervisor_telephone`, `project_supervisor_fax`, `project_supervisor_email_address`, `project_add_title`, `project_add_name`, `project_add_qualification`, `project_add_department`, `project_add_campus`, `project_add_postal_address`, `project_add_telephone`, `project_add_fax`, `project_add_email_address`, `dealing_type_a`, `dealing_type_c`, `project_summary`, `GMO_name`, `GMO_method`, `GMO_origin`, `modified_trait_class`, `modified_trait_description`, `project_hazard_staff`, `project_hazard_environment`, `project_hazard_steps`, `project_transport`, `project_disposal`, `project_SOP`, `project_facilities_building_no`, `project_facilities_room_no`, `project_facilities_containment_level`, `project_facilities_certification_no`, `officer_notified`, `officer_name`, `laboratory_manager`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, '', 'Project title', 'Dr', 'Kim', 'Student', 'BCS', 'Swinburne', 'somewhere', '123', '123', 'random@gmail.com', 'professor,', 'Random,', 'PostGraduate,', 'BCS,', 'Swinburne,', 'Random address,', '123-4567890,', '123-4567890,', 'professor@gmail.com,', NULL, 1, 'New Project Summary', 'GMO name', 'GMO method', 'GMO species', 'Trait Class', 'Trait Details', 'Possible hazard', 'Hazard environment', 'Steps taken', 'Transport through wagon', 'Trashcan', NULL, 'B Block', '103', '0', '123', 1, 'Ms Chua', 'Manager ', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pc2`
--

CREATE TABLE `pc2` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_supervisor_title` varchar(100) NOT NULL,
  `project_supervisor_name` varchar(100) NOT NULL,
  `project_supervisor_qualification` varchar(100) NOT NULL,
  `project_supervisor_department` varchar(100) NOT NULL,
  `project_supervisor_campus` varchar(100) NOT NULL,
  `project_supervisor_postal_address` varchar(100) NOT NULL,
  `project_supervisor_telephone` int(20) NOT NULL,
  `project_supervisor_fax` int(20) DEFAULT NULL,
  `project_supervisor_email_address` varchar(100) NOT NULL,
  `project_add_title` varchar(500) DEFAULT NULL,
  `project_add_name` varchar(500) DEFAULT NULL,
  `project_add_qualification` varchar(500) DEFAULT NULL,
  `project_add_department` varchar(500) DEFAULT NULL,
  `project_add_campus` varchar(500) DEFAULT NULL,
  `project_add_postal_address` varchar(750) DEFAULT NULL,
  `project_add_telephone` varchar(100) DEFAULT NULL,
  `project_add_fax` varchar(100) DEFAULT NULL,
  `project_add_email_address` varchar(500) DEFAULT NULL,
  `dealing_type_a` int(1) DEFAULT NULL,
  `dealing_type_aa` int(1) DEFAULT NULL,
  `dealing_type_b` int(1) DEFAULT NULL,
  `dealing_type_c` int(1) DEFAULT NULL,
  `dealing_type_d` int(1) DEFAULT NULL,
  `dealing_type_e` int(1) DEFAULT NULL,
  `dealing_type_f` int(1) DEFAULT NULL,
  `dealing_type_g` int(1) DEFAULT NULL,
  `dealing_type_h` int(1) DEFAULT NULL,
  `dealing_type_i` int(1) DEFAULT NULL,
  `dealing_type_j` int(1) DEFAULT NULL,
  `dealing_type_k` int(1) DEFAULT NULL,
  `dealing_type_l` int(1) DEFAULT NULL,
  `dealing_type_m` int(1) DEFAULT NULL,
  `project_summary` varchar(500) NOT NULL,
  `GMO_name` varchar(100) NOT NULL,
  `GMO_method` varchar(250) NOT NULL,
  `GMO_origin` varchar(500) NOT NULL,
  `modified_trait_class` varchar(100) NOT NULL,
  `modified_trait_description` varchar(250) NOT NULL,
  `project_hazard_staff` varchar(250) NOT NULL,
  `project_hazard_environment` varchar(250) NOT NULL,
  `project_hazard_steps` varchar(250) NOT NULL,
  `project_transport` varchar(250) NOT NULL,
  `project_disposal` varchar(250) NOT NULL,
  `project_SOP` blob,
  `project_facilities_building_no` varchar(100) NOT NULL,
  `project_facilities_room_no` varchar(100) NOT NULL,
  `project_facilities_containment_level` varchar(25) NOT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc2`
--

INSERT INTO `pc2` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `project_title`, `project_supervisor_title`, `project_supervisor_name`, `project_supervisor_qualification`, `project_supervisor_department`, `project_supervisor_campus`, `project_supervisor_postal_address`, `project_supervisor_telephone`, `project_supervisor_fax`, `project_supervisor_email_address`, `project_add_title`, `project_add_name`, `project_add_qualification`, `project_add_department`, `project_add_campus`, `project_add_postal_address`, `project_add_telephone`, `project_add_fax`, `project_add_email_address`, `dealing_type_a`, `dealing_type_aa`, `dealing_type_b`, `dealing_type_c`, `dealing_type_d`, `dealing_type_e`, `dealing_type_f`, `dealing_type_g`, `dealing_type_h`, `dealing_type_i`, `dealing_type_j`, `dealing_type_k`, `dealing_type_l`, `dealing_type_m`, `project_summary`, `GMO_name`, `GMO_method`, `GMO_origin`, `modified_trait_class`, `modified_trait_description`, `project_hazard_staff`, `project_hazard_environment`, `project_hazard_steps`, `project_transport`, `project_disposal`, `project_SOP`, `project_facilities_building_no`, `project_facilities_room_no`, `project_facilities_containment_level`, `project_facilities_certification_no`, `officer_notified`, `officer_name`, `laboratory_manager`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, '', 'asdcasdcas', 'ascsc', 'ascasccs', 'ascsca', 'ascascasc', 'sacasc', 'acscsac', 123, 123, 'First@gmail.com', 'Dr,', 'Something,', 'Postgraduate,', 'Biotech,', 'Swinburne,', 'Somewhere Here,', '123-1234567,', '123-1234567,', 'Dr@gmail.com,', 1, 1, 1, NULL, 1, 1, 1, 1, NULL, 1, NULL, NULL, 0, 0, 'Summary Here', 'GMO name', 'GMo vector', 'Gnee name', 'Trait class', 'Trait details', 'asacasfcasfsf', 'sdvdvsvdsvs', 'dvvdsvsdvsdvsv', 'sdvsdvdvdsvvdsv', 'sdvdsvsvVzsfbsfz', NULL, 'G block', '518', '0', '123', 1, 'Ms Chua', 'manager name here', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `storage_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED DEFAULT NULL,
  `biohazard_id` varchar(20) NOT NULL,
  `biohazard_name` varchar(100) NOT NULL,
  `risk_group` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `biohazard_source` varchar(100) NOT NULL,
  `date_created` date DEFAULT NULL,
  `storage_location` varchar(100) NOT NULL,
  `keeper_name` varchar(100) NOT NULL,
  `log_in_personnel` varchar(100) NOT NULL,
  `approval` int(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`storage_id`, `account_id`, `biohazard_id`, `biohazard_name`, `risk_group`, `location`, `biohazard_source`, `date_created`, `storage_location`, `keeper_name`, `log_in_personnel`, `approval`) VALUES
(1, NULL, 'B.BSL1.R.1.1', 'E. coli ABC\r\n', '1\r\n', 'Wind Cave\r\n', 'Soil\r\n', '2018-04-03', 'Freezer Room\r\n', 'Chua Jia Ni\r\n', 'Chua Jia Ni\r\n', 1),
(2, NULL, 'L.BSL1.T.1.1', 'E. coli DEF\r\n', '1\r\n', '123 Company\r\n', 'E. coli\r\n', '2018-04-07', 'Micro Lab\r\n', 'Chua Jia Ni\r\n', 'Chua Jia Ni\r\n', 1),
(3, NULL, '123swd', '12rbsef', '23cd', '2wd', '1eawvbr', '2018-04-19', 'swx2', '1xwv1w3', 'wx2as', 0),
(4, 1, 'a', 'b', 'c', 'd', 'e', '2018-04-22', 'f', 'g', 'h', 1);

-- --------------------------------------------------------

--
-- Table structure for table `swp`
--

CREATE TABLE `swp` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `SWP_prepared_by` varchar(100) NOT NULL,
  `SWP_staff_student_no` int(10) UNSIGNED DEFAULT NULL,
  `SWP_designation` varchar(100) NOT NULL,
  `SWP_faculty` varchar(100) NOT NULL,
  `SWP_unit_title` varchar(500) DEFAULT NULL,
  `SWP_project_title` varchar(500) DEFAULT NULL,
  `SWP_location` varchar(100) NOT NULL,
  `SWP_description` varchar(500) NOT NULL,
  `SWP_preoperational` varchar(500) NOT NULL,
  `SWP_operational` varchar(500) NOT NULL,
  `SWP_postoperational` varchar(500) NOT NULL,
  `SWP_risk` varchar(500) NOT NULL,
  `SWP_control` varchar(500) NOT NULL,
  `SWP_declaration_name` varchar(100) NOT NULL,
  `SWP_declaration_date` date DEFAULT NULL,
  `application_type` int(1) DEFAULT '0',
  `SWP_signature_prepared_by` varchar(100) DEFAULT NULL,
  `SWP_signature_prepared_by_date` date DEFAULT NULL,
  `SWP_signature_PI` varchar(100) DEFAULT NULL,
  `SWP_signature_PI_date` date DEFAULT NULL,
  `SWP_lab_trained` int(1) DEFAULT NULL,
  `SWP_lab_trainer` varchar(500) DEFAULT NULL,
  `SWP_approval_by` int(1) DEFAULT NULL,
  `SWP_approved_by` varchar(100) DEFAULT NULL,
  `SWP_declined_by` varchar(100) DEFAULT NULL,
  `SWP_approve_decline_date` date DEFAULT NULL,
  `SWP_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `SWP_reviewed_by` varchar(100) DEFAULT NULL,
  `SWP_reviewed_by_date` date DEFAULT NULL,
  `SWP_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `application_approved` int(1) DEFAULT NULL,
  `editable` int(1) DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swp`
--

INSERT INTO `swp` (`application_id`, `account_id`, `approver_id`, `date_received`, `SBC_reference_no`, `SWP_prepared_by`, `SWP_staff_student_no`, `SWP_designation`, `SWP_faculty`, `SWP_unit_title`, `SWP_project_title`, `SWP_location`, `SWP_description`, `SWP_preoperational`, `SWP_operational`, `SWP_postoperational`, `SWP_risk`, `SWP_control`, `SWP_declaration_name`, `SWP_declaration_date`, `application_type`, `SWP_signature_prepared_by`, `SWP_signature_prepared_by_date`, `SWP_signature_PI`, `SWP_signature_PI_date`, `SWP_lab_trained`, `SWP_lab_trainer`, `SWP_approval_by`, `SWP_approved_by`, `SWP_declined_by`, `SWP_approve_decline_date`, `SWP_approve_decline_remarks`, `SWP_reviewed_by`, `SWP_reviewed_by_date`, `SWP_reviewed_by_remarks`, `application_approved`, `editable`, `popularity`) VALUES
(1, 1, 5, NULL, NULL, 'Heu New', 100072290, 'Student', 'BCS', 'SE40001', 'FYP', 'Swinburne Sarawak', 'kdnflsnagvkldb gvg', 'bzdhshbbfdbhbhsdfrbbzsbsbzs', 'zsdtbsbstnbzndbsnb', 'fdbtsrnsrtnbrtsnsrnbzd', 'rtgfnrsnrssrnzrs', 'srnsrntsdbrnt', 'Declare name', '2018-02-06', 0, 'Signature name', '2018-04-12', 'Verified name', '2018-04-23', NULL, 'Me', NULL, NULL, '', '0000-00-00', '', 'Damn', '0000-00-00', '', NULL, 0, NULL),
(2, 4, 1, NULL, NULL, 'Me', 100072290, 'Student', 'BCS', 'SWE40001', 'NEw Title 4', 'Lab A', 'test4', 'test4', 'test4', 'test4', 'test4', 'test4', 'Declaration name', '2018-05-08', 4, 'Me', '2018-05-17', 'Me', '2018-05-22', NULL, '', NULL, NULL, '', '0000-00-00', '', '', '0000-00-00', '', 3, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `annex2`
--
ALTER TABLE `annex2`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `annex3`
--
ALTER TABLE `annex3`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `annex4`
--
ALTER TABLE `annex4`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `annex5`
--
ALTER TABLE `annex5`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `announcement_fk` (`account_id`);

--
-- Indexes for table `annualfinalreport`
--
ALTER TABLE `annualfinalreport`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `biohazardousmaterial`
--
ALTER TABLE `biohazardousmaterial`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `exemptdealing`
--
ALTER TABLE `exemptdealing`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `forme`
--
ALTER TABLE `forme`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `formf`
--
ALTER TABLE `formf`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `hirarc`
--
ALTER TABLE `hirarc`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `incidentaccidentreport`
--
ALTER TABLE `incidentaccidentreport`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `materialriskassessment`
--
ALTER TABLE `materialriskassessment`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `notification_fk` (`account_id`);

--
-- Indexes for table `notificationexportingbiologicalmaterial`
--
ALTER TABLE `notificationexportingbiologicalmaterial`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `notificationlmobiohazardousmaterial`
--
ALTER TABLE `notificationlmobiohazardousmaterial`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `pc1`
--
ALTER TABLE `pc1`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `pc2`
--
ALTER TABLE `pc2`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`);

--
-- Indexes for table `swp`
--
ALTER TABLE `swp`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `approver_id` (`approver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `annex2`
--
ALTER TABLE `annex2`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `annex3`
--
ALTER TABLE `annex3`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annex4`
--
ALTER TABLE `annex4`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annex5`
--
ALTER TABLE `annex5`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annualfinalreport`
--
ALTER TABLE `annualfinalreport`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biohazardousmaterial`
--
ALTER TABLE `biohazardousmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exemptdealing`
--
ALTER TABLE `exemptdealing`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forme`
--
ALTER TABLE `forme`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formf`
--
ALTER TABLE `formf`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hirarc`
--
ALTER TABLE `hirarc`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incidentaccidentreport`
--
ALTER TABLE `incidentaccidentreport`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialriskassessment`
--
ALTER TABLE `materialriskassessment`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notificationexportingbiologicalmaterial`
--
ALTER TABLE `notificationexportingbiologicalmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notificationlmobiohazardousmaterial`
--
ALTER TABLE `notificationlmobiohazardousmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pc1`
--
ALTER TABLE `pc1`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pc2`
--
ALTER TABLE `pc2`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `swp`
--
ALTER TABLE `swp`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annex2`
--
ALTER TABLE `annex2`
  ADD CONSTRAINT `annex2_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `annex2_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `annex3`
--
ALTER TABLE `annex3`
  ADD CONSTRAINT `annex3_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `annex3_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `annex4`
--
ALTER TABLE `annex4`
  ADD CONSTRAINT `annex4_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `annex4_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `annex5`
--
ALTER TABLE `annex5`
  ADD CONSTRAINT `annex5_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `annex5_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_fk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `annualfinalreport`
--
ALTER TABLE `annualfinalreport`
  ADD CONSTRAINT `annualfinalreport_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `annualfinalreport_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `biohazardousmaterial`
--
ALTER TABLE `biohazardousmaterial`
  ADD CONSTRAINT `biohazardousmaterial_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `biohazardousmaterial_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `exemptdealing`
--
ALTER TABLE `exemptdealing`
  ADD CONSTRAINT `exemptdealing_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `exemptdealing_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `forme`
--
ALTER TABLE `forme`
  ADD CONSTRAINT `forme_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `forme_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `formf`
--
ALTER TABLE `formf`
  ADD CONSTRAINT `formf_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `formf_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `hirarc`
--
ALTER TABLE `hirarc`
  ADD CONSTRAINT `hirarc_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `hirarc_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `incidentaccidentreport`
--
ALTER TABLE `incidentaccidentreport`
  ADD CONSTRAINT `incidentaccidentreport_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `incidentaccidentreport_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `materialriskassessment`
--
ALTER TABLE `materialriskassessment`
  ADD CONSTRAINT `materialriskassessment_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `materialriskassessment_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_fk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `notificationexportingbiologicalmaterial`
--
ALTER TABLE `notificationexportingbiologicalmaterial`
  ADD CONSTRAINT `notificationexportingbiologicalmaterial_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `notificationexportingbiologicalmaterial_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `notificationlmobiohazardousmaterial`
--
ALTER TABLE `notificationlmobiohazardousmaterial`
  ADD CONSTRAINT `notificationlmobiohazardousmaterial_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `notificationlmobiohazardousmaterial_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `pc1`
--
ALTER TABLE `pc1`
  ADD CONSTRAINT `pc1_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `pc1_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `pc2`
--
ALTER TABLE `pc2`
  ADD CONSTRAINT `pc2_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `pc2_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `swp`
--
ALTER TABLE `swp`
  ADD CONSTRAINT `swp_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `swp_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
