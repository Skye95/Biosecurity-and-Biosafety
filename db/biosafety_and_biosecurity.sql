-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 11:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(2, 'testing@students.swinburne.edu.my', 'Eugene Chiang 2', 'lagoon2', 1, 0, '2018-04-10 05:44:22');

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
  `application_approved` int(1) NOT NULL DEFAULT '0',
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date` datetime DEFAULT NULL,
  `PI_name` varchar(100) NOT NULL,
  `PI_telephone_number` int(20) NOT NULL,
  `PI_reported_date` datetime DEFAULT NULL,
  `incident_description` varchar(500) NOT NULL,
  `incident_cause_checklist_faulty_equipment` int(1) NOT NULL,
  `incident_cause_checklist_no_equipment` int(1) NOT NULL,
  `incident_cause_checklist_storage` int(1) NOT NULL,
  `incident_cause_checklist_weather` int(1) NOT NULL,
  `incident_cause_checklist_assistance` int(1) NOT NULL,
  `incident_cause_checklist_electrical` int(1) NOT NULL,
  `incident_cause_checklist_carelessness` int(1) NOT NULL,
  `incident_cause_checklist_terrain` int(1) NOT NULL,
  `incident_cause_checklist_workspace` int(1) NOT NULL,
  `incident_cause_checklist_training` int(1) NOT NULL,
  `incident_cause_checklist_poor_access` int(1) NOT NULL,
  `incident_cause_checklist_unknown` int(1) NOT NULL,
  `incident_cause_checklist_maintenance_staff` int(1) NOT NULL,
  `incident_cause_checklist_supervision` int(1) NOT NULL,
  `incident_cause_checklist_method` int(1) NOT NULL,
  `incident_cause_checklist_none` int(1) NOT NULL,
  `incident_cause_checklist_none_description` varchar(500) DEFAULT NULL,
  `incident_LMO_rDNA_release` int(1) NOT NULL,
  `incident_LMO_rDNA_response` varchar(500) DEFAULT NULL,
  `incident_contribution` varchar(500) NOT NULL,
  `incident_personal_factors` varchar(500) NOT NULL,
  `incident_corrective_actions` varchar(500) NOT NULL,
  `incident_responsible` varchar(500) NOT NULL,
  `signature_PI_name` varchar(100) DEFAULT NULL,
  `signature_PI_date` datetime DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` datetime DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` datetime DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `exposure_date` datetime DEFAULT NULL,
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
  `signature_PI_date` datetime DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` datetime DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` datetime DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `signature_PI_date` datetime DEFAULT NULL,
  `signature_BO_name` varchar(100) DEFAULT NULL,
  `signature_BO_date` datetime DEFAULT NULL,
  `signature_IBC_name` varchar(100) DEFAULT NULL,
  `signature_IBC_date` datetime DEFAULT NULL,
  `IBC_approval` int(1) DEFAULT NULL,
  `IBC_termination` int(1) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date_received` datetime DEFAULT NULL,
  `SBC_reference_no` varchar(10) DEFAULT NULL,
  `project_approval_date` datetime DEFAULT NULL,
  `project_report_date` datetime DEFAULT NULL,
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
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biohazardousmaterial`
--

CREATE TABLE `biohazardousmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
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
  `proposed_work_known` int(1) NOT NULL,
  `proposed_work_may` int(1) NOT NULL,
  `proposed_work_unknown` int(1) NOT NULL,
  `proposed_work_isolation` int(1) NOT NULL,
  `proposed_work_risk` int(1) NOT NULL,
  `proposed_work_sensitive` int(1) NOT NULL,
  `proposed_work_other` int(1) NOT NULL,
  `project_summary` varchar(500) NOT NULL,
  `project_activity` varchar(500) NOT NULL,
  `project_SOP` blob,
  `project_SOP_title` varchar(100) DEFAULT NULL,
  `project_SOP_risk_title` varchar(100) DEFAULT NULL,
  `project_facilities_building` varchar(100) NOT NULL,
  `project_facilities_room` varchar(100) NOT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exemptdealing`
--

CREATE TABLE `exemptdealing` (
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
  `project_supervisor_telephone` int(20) NOT NULL,
  `project_supervisor_fax` int(20) DEFAULT NULL,
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
  `exemption_type_2` int(1) NOT NULL,
  `exemption_type_3` int(1) NOT NULL,
  `exemption_type_3A` int(1) NOT NULL,
  `exemption_type_4` int(1) NOT NULL,
  `exemption_type_5` int(1) NOT NULL,
  `project_summary` varchar(500) NOT NULL,
  `project_hazard` varchar(500) NOT NULL,
  `project_SOP` blob,
  `project_facilities_building_no` varchar(100) NOT NULL,
  `project_facilities_room_no` varchar(100) NOT NULL,
  `project_facilities_containment_level` int(100) NOT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `telephone_office` int(20) DEFAULT NULL,
  `telephone_mobile` int(20) DEFAULT NULL,
  `fax` int(20) DEFAULT NULL,
  `email_address` int(100) NOT NULL,
  `postal_address` int(100) NOT NULL,
  `project_title2` int(100) NOT NULL,
  `IBC_project_identification_no` int(10) DEFAULT NULL,
  `notified_first` int(1) NOT NULL,
  `NBB_reference` varchar(500) DEFAULT NULL,
  `NBB_difference` varchar(500) DEFAULT NULL,
  `importer_organization` varchar(100) NOT NULL,
  `importer_contact_person` varchar(100) NOT NULL,
  `importer_position` varchar(100) NOT NULL,
  `importer_telephone_office` int(20) DEFAULT NULL,
  `importer_telephone_mobile` int(20) DEFAULT NULL,
  `importer_fax` int(20) DEFAULT NULL,
  `importer_email_address` varchar(100) NOT NULL,
  `importer_postal_address` varchar(100) NOT NULL,
  `IBC_organization_name` varchar(100) NOT NULL,
  `IBC_chairperson` varchar(100) NOT NULL,
  `IBC_telephone_number` int(20) NOT NULL,
  `IBC_fax` int(20) DEFAULT NULL,
  `IBC_email_address` varchar(100) NOT NULL,
  `IBC_PI_name` varchar(100) NOT NULL,
  `IBC_project_title` varchar(100) NOT NULL,
  `IBC_date` datetime DEFAULT NULL,
  `IBC_adequate` int(1) NOT NULL,
  `IBC_checklist_activities` int(1) NOT NULL,
  `IBC_checklist_description` int(1) NOT NULL,
  `IBC_checklist_emergency_response` int(1) NOT NULL,
  `IBC_checklist_trained` int(1) NOT NULL,
  `IBC_form_approved` int(1) NOT NULL,
  `IBC_biosafety_approved` int(1) NOT NULL,
  `signature_statutory_endorsed` int(1) DEFAULT NULL,
  `signature_statutory_applicant_free` int(1) DEFAULT NULL,
  `applicant_PI_signature_date` datetime DEFAULT NULL,
  `applicant_PI_signature_name` varchar(100) DEFAULT NULL,
  `applicant_PI_signature_stamp` varchar(100) DEFAULT NULL,
  `IBC_chairperson_signature_date` datetime DEFAULT NULL,
  `IBC_chairperson_signature_name` varchar(100) DEFAULT NULL,
  `IBC_chairperson_signature_stamp` varchar(100) DEFAULT NULL,
  `organization_representative_signature_date` datetime DEFAULT NULL,
  `organization_representative_signature_name` varchar(100) DEFAULT NULL,
  `organization_representative_signature_stamp` varchar(100) DEFAULT NULL,
  `project_team_name` varchar(100) NOT NULL,
  `project_team_address` varchar(100) NOT NULL,
  `project_team_telephone_number` int(20) NOT NULL,
  `project_team_email_address` varchar(100) NOT NULL,
  `project_team_qualification` varchar(100) NOT NULL,
  `project_team_designation` varchar(300) NOT NULL,
  `project_intro_objective` varchar(300) NOT NULL,
  `project_intro_specifics` varchar(500) DEFAULT NULL,
  `project_intro_activities` blob,
  `project_intro_BSL` int(1) NOT NULL,
  `project_intro_duration` blob,
  `project_intro_intended_date_commencement` datetime DEFAULT NULL,
  `project_intro_expected_date_completion` datetime DEFAULT NULL,
  `project_intro_importation_date` datetime DEFAULT NULL,
  `project_intro_field_experiment` int(1) NOT NULL,
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
  `premise_IBC_date` datetime DEFAULT NULL,
  `premise_certification_date` datetime DEFAULT NULL,
  `premise_certification_no` varchar(10) DEFAULT NULL,
  `premise_certification_report` blob,
  `premise_address` varchar(100) NOT NULL,
  `premise_officer_name` varchar(100) DEFAULT NULL,
  `premise_telephone_business` int(20) DEFAULT NULL,
  `premise_telephone_mobile` int(20) DEFAULT NULL,
  `premise_fax` int(20) DEFAULT NULL,
  `premise_email` varchar(100) NOT NULL,
  `confidential_description` varchar(500) NOT NULL,
  `reference_description` varchar(500) NOT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formf`
--

CREATE TABLE `formf` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `NBB_reference_no` varchar(10) DEFAULT NULL,
  `notification_checklist_form_completed` int(1) NOT NULL,
  `notification_checklist_CBI` int(1) NOT NULL,
  `notification_checklist_submitted` int(1) NOT NULL,
  `exporter_organization` varchar(100) NOT NULL,
  `exporter_name` varchar(100) NOT NULL,
  `exporter_position` varchar(100) NOT NULL,
  `exporter_telephone_office` int(20) DEFAULT NULL,
  `exporter_telephone_mobile` int(20) DEFAULT NULL,
  `exporter_fax` int(20) DEFAULT NULL,
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
  `applicant_signature_date` datetime DEFAULT NULL,
  `applicant_name` varchar(100) DEFAULT NULL,
  `applicant_stamp` varchar(100) DEFAULT NULL,
  `representative_signature_date` datetime DEFAULT NULL,
  `representative_name` varchar(100) DEFAULT NULL,
  `representative_stamp` varchar(100) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hirarc`
--

CREATE TABLE `hirarc` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `company_name` varchar(200) NOT NULL,
  `date` datetime DEFAULT NULL,
  `process_location` varchar(200) NOT NULL,
  `conducted_name` varchar(200) NOT NULL,
  `conducted_designation` varchar(200) NOT NULL,
  `approved_name` varchar(200) NOT NULL,
  `approved_designation` varchar(200) NOT NULL,
  `date_from` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `review_date` datetime DEFAULT NULL,
  `document_no` varchar(10) DEFAULT NULL,
  `HIRARC_no` varchar(10) DEFAULT NULL,
  `HIRARC_activity` varchar(500) NOT NULL,
  `HIRARC_hazard` varchar(500) NOT NULL,
  `HIRARC_effects` varchar(500) NOT NULL,
  `HIRARC_risk_control` varchar(500) NOT NULL,
  `HIRARC_LLH` varchar(500) NOT NULL,
  `HIRARC_SEV` varchar(500) NOT NULL,
  `HIRARC_RR` varchar(500) NOT NULL,
  `HIRARC_control_measure` varchar(500) NOT NULL,
  `HIRARC_PIC` varchar(500) NOT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `review_date` datetime DEFAULT NULL,
  `incident_date` datetime DEFAULT NULL,
  `incident_location` varchar(100) NOT NULL,
  `incident_type` int(1) NOT NULL,
  `incident_type_description` varchar(500) DEFAULT NULL,
  `incident_injury` int(1) NOT NULL,
  `incident_physician_or_hospital` int(1) NOT NULL,
  `incident_details` varchar(500) DEFAULT NULL,
  `incident_actions` varchar(500) DEFAULT NULL,
  `reporter_name` varchar(100) DEFAULT NULL,
  `reporter_designation` varchar(100) DEFAULT NULL,
  `reporter_date` datetime DEFAULT NULL,
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
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Sec1_chemical` int(1) NOT NULL,
  `Sec1_biological_material` int(1) NOT NULL,
  `Sec1_equipment` int(1) NOT NULL,
  `Sec1_doc_id` varchar(10) NOT NULL,
  `Sec1_review_date` datetime DEFAULT NULL,
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
  `Sec3_requestor_date` datetime DEFAULT NULL,
  `Sec3_supervisor` varchar(100) DEFAULT NULL,
  `Sec3_supervisor_date` datetime DEFAULT NULL,
  `Sec3_LO` varchar(100) DEFAULT NULL,
  `Sec3_LO_date` datetime DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `notification_type` varchar(20) DEFAULT 'admin',
  `notification_description` varchar(500) NOT NULL,
  `notification_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `notification_read` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificationexportingbiologicalmaterial`
--

CREATE TABLE `notificationexportingbiologicalmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
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
  `importing_person_in_charge` int(100) NOT NULL,
  `importing_person_in_charge_telephone_no` int(20) NOT NULL,
  `declaration_name` varchar(100) DEFAULT NULL,
  `declaration_date` datetime DEFAULT NULL,
  `signature_verified_by` varchar(100) DEFAULT NULL,
  `signature_verified_date` datetime DEFAULT NULL,
  `notification_approved_by` varchar(100) DEFAULT NULL,
  `notification_declined_by` varchar(100) DEFAULT NULL,
  `notification_approve_decline_date` datetime DEFAULT NULL,
  `notification_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `notification_reviewed_by` varchar(100) DEFAULT NULL,
  `notification_reviewed_by_date` datetime DEFAULT NULL,
  `notification_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `delivered_date` datetime DEFAULT NULL,
  `incident_accident_report` varchar(500) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notificationlmobiohazardousmaterial`
--

CREATE TABLE `notificationlmobiohazardousmaterial` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `approver_id` int(10) UNSIGNED DEFAULT NULL,
  `date_received` datetime DEFAULT NULL,
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
  `declaration_date` datetime DEFAULT NULL,
  `signature_verified_by` varchar(100) DEFAULT NULL,
  `signature_verified_date` datetime DEFAULT NULL,
  `notification_approved_by` varchar(100) DEFAULT NULL,
  `notification_declined_by` varchar(100) DEFAULT NULL,
  `notification_approve_decline_date` datetime DEFAULT NULL,
  `notification_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `notification_reviewed_by` varchar(100) DEFAULT NULL,
  `notification_reviewed_by_date` datetime DEFAULT NULL,
  `notification_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `dealing_type_a` int(1) NOT NULL,
  `dealing_type_c` int(1) NOT NULL,
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
  `project_facilities_containment_level` int(1) NOT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc2`
--

CREATE TABLE `pc2` (
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
  `dealing_type_a` int(1) NOT NULL,
  `dealing_type_aa` int(1) NOT NULL,
  `dealing_type_b` int(1) NOT NULL,
  `dealing_type_c` int(1) NOT NULL,
  `dealing_type_d` int(1) NOT NULL,
  `dealing_type_e` int(1) NOT NULL,
  `dealing_type_f` int(1) NOT NULL,
  `dealing_type_g` int(1) NOT NULL,
  `dealing_type_h` int(1) NOT NULL,
  `dealing_type_i` int(1) NOT NULL,
  `dealing_type_j` int(1) NOT NULL,
  `dealing_type_k` int(1) NOT NULL,
  `dealing_type_l` int(1) NOT NULL,
  `dealing_type_m` int(1) NOT NULL,
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
  `project_facilities_containment_level` int(1) NOT NULL,
  `project_facilities_certification_no` varchar(10) DEFAULT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date_received` datetime DEFAULT NULL,
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
  `SWP_declaratioon_date` datetime DEFAULT NULL,
  `SWP_signature_prepared_by` varchar(100) DEFAULT NULL,
  `SWP_signature_prepared_by_date` datetime DEFAULT NULL,
  `SWP_signature_PI` varchar(100) DEFAULT NULL,
  `SWP_signature_PI_date` datetime DEFAULT NULL,
  `SWP_lab_trained` int(1) NOT NULL,
  `SWP_lab_trainer` varchar(500) DEFAULT NULL,
  `SWP_approved_by` varchar(100) DEFAULT NULL,
  `SWP_declined_by` varchar(100) DEFAULT NULL,
  `SWP_approve_decline_date` datetime DEFAULT NULL,
  `SWP_approve_decline_remarks` varchar(300) DEFAULT NULL,
  `SWP_reviewed_by` varchar(100) DEFAULT NULL,
  `SWP_reviewed_by_date` datetime DEFAULT NULL,
  `SWP_reviewed_by_remarks` varchar(300) DEFAULT NULL,
  `application_approved` int(1) NOT NULL,
  `popularity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `account_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `annex2`
--
ALTER TABLE `annex2`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annex3`
--
ALTER TABLE `annex3`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annex4`
--
ALTER TABLE `annex4`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annex5`
--
ALTER TABLE `annex5`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annualfinalreport`
--
ALTER TABLE `annualfinalreport`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biohazardousmaterial`
--
ALTER TABLE `biohazardousmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exemptdealing`
--
ALTER TABLE `exemptdealing`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forme`
--
ALTER TABLE `forme`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formf`
--
ALTER TABLE `formf`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hirarc`
--
ALTER TABLE `hirarc`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incidentaccidentreport`
--
ALTER TABLE `incidentaccidentreport`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialriskassessment`
--
ALTER TABLE `materialriskassessment`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notificationexportingbiologicalmaterial`
--
ALTER TABLE `notificationexportingbiologicalmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notificationlmobiohazardousmaterial`
--
ALTER TABLE `notificationlmobiohazardousmaterial`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pc1`
--
ALTER TABLE `pc1`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pc2`
--
ALTER TABLE `pc2`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `swp`
--
ALTER TABLE `swp`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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