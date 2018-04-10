-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 11:02 AM
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
  `PI_accessed` int(1) DEFAULT NULL,
  `IBC_approved` int(1) DEFAULT NULL,
  `IBC_name` varchar(100) DEFAULT NULL,
  `IBC_date` datetime DEFAULT CURRENT_TIMESTAMP,
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
  `personnel_telephone_number` int(20) NOT NULL,
  `personnel_office_number` int(20) NOT NULL,
  `personnel_ext_number` int(20) NOT NULL,
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
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `notification_description` varchar(500) NOT NULL,
  `notification_read` int(1) UNSIGNED NOT NULL
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
  `project_supervisor_fax` int(20) NOT NULL,
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
  `project_facilities_certification_no` varchar(10) NOT NULL,
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
  `project_supervisor_fax` int(20) NOT NULL,
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
  `project_facilities_certification_no` varchar(100) NOT NULL,
  `officer_notified` int(1) DEFAULT NULL,
  `officer_name` varchar(100) DEFAULT NULL,
  `laboratory_manager` varchar(100) DEFAULT NULL,
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
-- Indexes for table `hirarc`
--
ALTER TABLE `hirarc`
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
-- AUTO_INCREMENT for table `hirarc`
--
ALTER TABLE `hirarc`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `hirarc`
--
ALTER TABLE `hirarc`
  ADD CONSTRAINT `hirarc_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  ADD CONSTRAINT `hirarc_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_fk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
