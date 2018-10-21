-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 12:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constructme`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `uid` int(11) NOT NULL,
  `record` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`uid`, `record`, `value`) VALUES
(17, 'about_company', 'This is about company'),
(17, 'address', '68/1, 3rd A Main, 10th Cross, Industrial Area, Bommanahalli'),
(17, 'ae_ceramic_and_porcelain_roof_tiles', 'false'),
(17, 'ae_clay_roof_tiles', 'false'),
(17, 'ae_composite_rubber_shingles', 'false'),
(17, 'ae_concrete_roof_tiles', 'false'),
(17, 'ae_metal_roof_tiles', 'false'),
(17, 'ae_mineral-fiber_cement_roof_tiles', 'true'),
(17, 'ae_natural_roof_coverings', 'true'),
(17, 'ae_plastic_roof_tiles', 'false'),
(17, 'ae_plastic_shakes', 'false'),
(17, 'ae_roof_tiles', 'true'),
(17, 'ae_rubber_tiles_or_panels', 'false'),
(17, 'ae_sod_roofing', 'true'),
(17, 'ae_wood_shakes', 'true'),
(17, 'ba_acces__flooring', 'true'),
(17, 'ba_acoustical_fabric', 'false'),
(17, 'ba_acoustical_fabric-faced_panel_ceilings', 'false'),
(17, 'ba_aluminum_windows', 'false'),
(17, 'ba_architectural_woo', 'false'),
(17, 'ba_architectural_woodwork', 'false'),
(17, 'ba_assembly_and_test', 'false'),
(17, 'ba_assembly_and_testing_equipment', 'true'),
(17, 'ba_carpeting', 'false'),
(17, 'ba_ceilings', 'false'),
(17, 'ba_cement_plastering', 'false'),
(17, 'ba_cleaning_and_wast', 'true'),
(17, 'ba_cleaning_and_waste_management', 'true'),
(17, 'ba_coiling_doors_and', 'false'),
(17, 'ba_coiling_doors_and_grilles', 'false'),
(17, 'ba_concrete', 'false'),
(17, 'ba_curtain_wall_and_', 'false'),
(17, 'ba_curtain_wall_and_glazed_assemblies', 'false'),
(17, 'ba_dampproofing_and_', 'false'),
(17, 'ba_dampproofing_and_waterproofing', 'false'),
(17, 'ba_demolition_and_st', 'false'),
(17, 'ba_demolition_and_structural_moving', 'false'),
(17, 'ba_Dewatering', 'true'),
(17, 'ba_doors_and_frames', 'true'),
(17, 'ba_elevators', 'false'),
(17, 'ba_entertainment_and', 'true'),
(17, 'ba_entertainment_and_recreation_equipment', 'false'),
(17, 'ba_environmental_ass', 'false'),
(17, 'ba_environmental_assessment', 'true'),
(17, 'ba_exterior_insulati', 'false'),
(17, 'ba_exterior_insulation_and_finish_systems', 'true'),
(17, 'ba_exterior_lighting', 'true'),
(17, 'ba_exterior_stone_cl', 'false'),
(17, 'ba_exterior_stone_cladding', 'false'),
(17, 'ba_fabric_structures', 'false'),
(17, 'ba_fiberglass_reinfo', 'false'),
(17, 'ba_fiberglass_reinforced_paneling', 'false'),
(17, 'ba_fluid_applied_flo', 'false'),
(17, 'ba_fluid_applied_flooring', 'false'),
(17, 'ba_folding_doors_and', 'true'),
(17, 'ba_folding_doors_and_grilles', 'false'),
(17, 'ba_gabions', 'false'),
(17, 'ba_geodesic_structur', 'true'),
(17, 'ba_geodesic_structures', 'false'),
(17, 'ba_glass-fiber-reinf', 'false'),
(17, 'ba_glass-fiber-reinforced_concrete', 'false'),
(17, 'ba_gypsum-panel_text', 'false'),
(17, 'ba_gypsum-panel_textured_ceilings', 'false'),
(17, 'ba_hardware', 'false'),
(17, 'ba_heating_ventilati', 'false'),
(17, 'ba_heating_ventilating__and_air_conditioning_hvac', 'false'),
(17, 'ba_irrigation', 'false'),
(17, 'ba_lighting', 'true'),
(17, 'ba_louvers', 'false'),
(17, 'ba_louvers_and_vents', 'false'),
(17, 'ba_membrane_roofing', 'true'),
(17, 'ba_metal-panel_textu', 'false'),
(17, 'ba_metal-panel_textured_ceilings', 'false'),
(17, 'ba_metal_decking', 'false'),
(17, 'ba_metal_doors', 'true'),
(17, 'ba_metal_fabrication', 'false'),
(17, 'ba_metal_fabrications', 'false'),
(17, 'ba_metal_gratings', 'false'),
(17, 'ba_metal_stairs', 'false'),
(17, 'ba_miscellaneous_cas', 'false'),
(17, 'ba_miscellaneous_cast-in-place_concrete', 'false'),
(17, 'ba_packaged_water_ch', 'false'),
(17, 'ba_packaged_water_chillers', 'false'),
(17, 'ba_painting', 'true'),
(17, 'ba_parking_control_e', 'false'),
(17, 'ba_parking_control_equipment', 'true'),
(17, 'ba_planting_accessor', 'false'),
(17, 'ba_planting_accessories', 'false'),
(17, 'ba_plaster_and_gypsu', 'false'),
(17, 'ba_plaster_and_gypsum_board_assemblies', 'false'),
(17, 'ba_playground_equipm', 'true'),
(17, 'ba_playground_equipment', 'true'),
(17, 'ba_play_field_equipm', 'false'),
(17, 'ba_play_field_equipment_and_structures', 'true'),
(17, 'ba_precast_architect', 'false'),
(17, 'ba_precast_architectural_concrete', 'false'),
(17, 'ba_precast_concrete', 'false'),
(17, 'ba_protective_covers', 'true'),
(17, 'ba_raceway_decking_a', 'false'),
(17, 'ba_raceway_decking_assemblies', 'false'),
(17, 'ba_resilient_sheet_f', 'false'),
(17, 'ba_resilient_sheet_flooring', 'false'),
(17, 'ba_roadway_construct', 'false'),
(17, 'ba_roadway_construction', 'false'),
(17, 'ba_sheet_metal_wall_', 'false'),
(17, 'ba_sheet_metal_wall_cladding', 'true'),
(17, 'ba_shoring', 'false'),
(17, 'ba_signage', 'true'),
(17, 'ba_site_remediation', 'false'),
(17, 'ba_site_surveys', 'true'),
(17, 'ba_slurry_walls', 'false'),
(17, 'ba_stamped_concrete_', 'false'),
(17, 'ba_stamped_concrete_finishing', 'false'),
(17, 'ba_stone_facing', 'true'),
(17, 'ba_subsurface_invest', 'false'),
(17, 'ba_subsurface_investigation', 'false'),
(17, 'ba_swimming_pools', 'true'),
(17, 'ba_temporary_facilit', 'true'),
(17, 'ba_temporary_facilities_and_control', 'true'),
(17, 'ba_termite__control', 'false'),
(17, 'ba_testing_laborator', 'true'),
(17, 'ba_testing_laboratory_services', 'true'),
(17, 'ba_thermal_and_moist', 'false'),
(17, 'ba_thermal_and_moisture_protection', 'true'),
(17, 'ba_timber_decking', 'false'),
(17, 'ba_tubular_skylights', 'false'),
(17, 'ba_unit_kitchens', 'true'),
(17, 'ba_unit_paving', 'false'),
(17, 'ba_vacuum_sweeping_c', 'false'),
(17, 'ba_vacuum_sweeping_cleaning_decontamination', 'false'),
(17, 'ba_water_remediation', 'false'),
(17, 'ba_wire_fences_and_g', 'false'),
(17, 'ba_wire_fences_and_gates', 'false'),
(17, 'ba_wood_flooring', 'false'),
(17, 'ba_wood_paneling', 'false'),
(17, 'ba_wood_screens_and_', 'false'),
(17, 'ba_wood_screens_and_exterior_wood_shutters', 'false'),
(17, 'category', 'ARCHITECT'),
(17, 'company_name', 'RADEL Corp'),
(17, 'company_profile', ''),
(17, 'contact_person', 'Ashwin Kumar'),
(17, 'country_code', ''),
(17, 'location', 'UMM AL QUWAIN'),
(17, 'phone_number', '9538497461'),
(17, 'webpage', '68/1, 3rd A Main, 10th Cross, Industrial Area, Bommanahalli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`uid`,`record`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
