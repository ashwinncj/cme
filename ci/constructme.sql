-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2018 at 06:45 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `record` varchar(200) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`uid`, `record`, `value`) VALUES
(1, 'about_company', ''),
(1, 'address', '68/1, 3rd A Main, 10th Cross, Industrial Area, Bommanahalli'),
(1, 'ae_aboveground_aviation_fuel-storage_tanks', 'false'),
(1, 'ae_aboveground_fuel-storage_tanks', 'false'),
(1, 'ae_aboveground_hydronic_energy_distribution', 'false'),
(1, 'ae_aboveground_steam_and_condensate_distribution_piping', 'false'),
(1, 'ae_aggregate_coated_panels', 'false'),
(1, 'ae_airlock_bulk_material_feeders', 'false'),
(1, 'ae_airslide_bulk_material_conveyors', 'false'),
(1, 'ae_apron_bulk_material_feeders', 'false'),
(1, 'ae_auger_bulk_material_conveyors', 'true'),
(1, 'ae_automatic_guided_vehicle_systems', 'false'),
(1, 'ae_aviation_fuel-storage_tanks', 'false'),
(1, 'ae_aviation_fuel_connections', 'false'),
(1, 'ae_aviation_fuel_distribution', 'false'),
(1, 'ae_aviation_fuel_grounding', 'false'),
(1, 'ae_aviation_fuel_piping', 'false'),
(1, 'ae_aviation_fuel_pumps', 'false'),
(1, 'ae_bag-handling_batching_equipment', 'false'),
(1, 'ae_batching_equipment', 'false'),
(1, 'ae_batch_cars_or_transports', 'false'),
(1, 'ae_batch_hoppers', 'false'),
(1, 'ae_belt_bulk_material_conveyors', 'false'),
(1, 'ae_belt_piece_material_conveyors', 'false'),
(1, 'ae_bin_activators_or_live_bin_bottoms', 'false'),
(1, 'ae_blenders', 'false'),
(1, 'ae_bucket_elevators', 'false'),
(1, 'ae_bulk_bag-handling_batching_equipment', 'false'),
(1, 'ae_bulk_material_conveyors', 'false'),
(1, 'ae_bulk_material_feeders', 'false'),
(1, 'ae_ceramic-tile-faced_Panels', 'false'),
(1, 'ae_ceramic_and_porcelain_roof_tiles', 'true'),
(1, 'ae_clay_roof_tiles', 'true'),
(1, 'ae_composite_roof_panels', 'false'),
(1, 'ae_composite_rubber_shingles', 'false'),
(1, 'ae_composite_wall_panels', 'false'),
(1, 'ae_compressed_gases_storage_tanks', 'false'),
(1, 'ae_concrete_roof_tiles', 'false'),
(1, 'ae_container_bulk_material_conveyors', 'false'),
(1, 'ae_container_piece_material_conveyors', 'false'),
(1, 'ae_conveyors', 'false'),
(1, 'ae_crematorium_equipment', 'false'),
(1, 'ae_dense_phase_pneumatic_conveyors', 'false'),
(1, 'ae_dental_equipment', 'false'),
(1, 'ae_diesel_fuel_distribution', 'false'),
(1, 'ae_diesel_fuel_piping', 'false'),
(1, 'ae_diesel_fuel_pumps', 'false'),
(1, 'ae_dilute_phase_pneumatic_conveyors', 'false'),
(1, 'ae_drag-Chain_piece_material_conveyors', 'false'),
(1, 'ae_drag_chain_bulk_material_conveyors', 'true'),
(1, 'ae_drum-handling_batching_equipment', 'false'),
(1, 'ae_electrical_utilities', 'false'),
(1, 'ae_fabricated_roof_panel_assemblies', 'false'),
(1, 'ae_fabricated_wall_panel_assemblies', 'false'),
(1, 'ae_facade_access_equipment', 'true'),
(1, 'ae_faced_panels', 'false'),
(1, 'ae_facility_fall_Protection', 'false'),
(1, 'ae_facility_maintenance_and_operation_equipment', 'false'),
(1, 'ae_facility_maintenance_equipment', 'false'),
(1, 'ae_feeders', 'false'),
(1, 'ae_floor_and_wall_cleaning_equipment', 'false'),
(1, 'ae_formed_metal_wall_panels', 'false'),
(1, 'ae_fuel-oil_distribution', 'false'),
(1, 'ae_fuel-oil_piping', 'false'),
(1, 'ae_fuel-oil_pumps', 'false'),
(1, 'ae_Fuel-Storage_Tanks', 'false'),
(1, 'ae_fuel_distribution_utilities', 'false'),
(1, 'ae_gasoline_distribution', 'false'),
(1, 'ae_gasoline_piping', 'false'),
(1, 'ae_gasoline_pumps', 'false'),
(1, 'ae_hopper_bulk_material_conveyors', 'true'),
(1, 'ae_hopper_piece_material_conveyors', 'false'),
(1, 'ae_housekeeping_carts', 'false'),
(1, 'ae_hydronic_and_steam_energy_utilities', 'false'),
(1, 'ae_hydronic_energy_distribution', 'false'),
(1, 'ae_hydronic_energy_distribution_metering', 'false'),
(1, 'ae_insulated_metal_wall_panels', 'false'),
(1, 'ae_leaching_pits', 'true'),
(1, 'ae_liquid_fuel_distribution', 'false'),
(1, 'ae_metal_composite_material_wall_panels', 'false'),
(1, 'ae_metal_faced_panels', 'false'),
(1, 'ae_metal_plate_wall_panels', 'false'),
(1, 'ae_metal_roof_panels', 'false'),
(1, 'ae_metal_roof_tiles', 'false'),
(1, 'ae_Metal_Wall_Panels', 'false'),
(1, 'ae_mineral-fiber_cement_roof_tiles', 'false'),
(1, 'ae_mixers', 'false'),
(1, 'ae_monorail_piece_material_conveyors', 'false'),
(1, 'ae_mortuary_equipment', 'false'),
(1, 'ae_mortuary_lifts', 'false'),
(1, 'ae_mortuary_refrigerators', 'false'),
(1, 'ae_natural-as_metering', 'false'),
(1, 'ae_natural-gas_distribution', 'false'),
(1, 'ae_natural-gas_piping', 'false'),
(1, 'ae_natural_roof_coverings', 'false'),
(1, 'ae_operating_room_equipment', 'false'),
(1, 'ae_optical_equipment', 'false'),
(1, 'ae_patient_care_equipment', 'false'),
(1, 'ae_piece_material_conveyors', 'false'),
(1, 'ae_piece_material_handling_equipment', 'false'),
(1, 'ae_plastic_roof_panels', 'false'),
(1, 'ae_plastic_roof_tiles', 'false'),
(1, 'ae_plastic_shakes', 'false'),
(1, 'ae_plastic_wall_panels', 'false'),
(1, 'ae_pneumatic_conveyors', 'false'),
(1, 'ae_porcelain_enameled_faced_panels', 'false'),
(1, 'ae_power_and_free_piece_material_conveyors', 'false'),
(1, 'ae_psychiatric_seclusion_room_padding', 'false'),
(1, 'ae_radiology_equipment', 'false'),
(1, 'ae_reciprocating_bulk_material_conveyors', 'true'),
(1, 'ae_reciprocating_piece_material_conveyors', 'false'),
(1, 'ae_roller_piece_material_conveyors', 'false'),
(1, 'ae_roofing_and_siding_panels', 'false'),
(1, 'ae_roof_panels', 'false'),
(1, 'ae_roof_tiles', 'true'),
(1, 'ae_rotary-valve_bulk_material_feeders', 'false'),
(1, 'ae_rubber_tiles_or_panels', 'false'),
(1, 'ae_screw_bulk_material_conveyors', 'false'),
(1, 'ae_screw_bulk_material_feeders', 'false'),
(1, 'ae_sod_roofing', 'false'),
(1, 'ae_soffit_panels', 'false'),
(1, 'ae_stacking_and_reclaim_bulk_material_conveyor', 'false'),
(1, 'ae_steam_energy_distribution', 'false'),
(1, 'ae_steam_energy_distribution_metering', 'false'),
(1, 'ae_storm_drainage_manholes_frames_and_covers', 'false'),
(1, 'ae_storm_drainage_structures', 'false'),
(1, 'ae_storm_drainage_water_detention_structures', 'false'),
(1, 'ae_storm_drainage_water_retention_structures', 'false'),
(1, 'ae_storm_drainage_water_storage_structures', 'false'),
(1, 'ae_terracotta_wall_panels', 'false'),
(1, 'ae_thatched_roofing', 'false'),
(1, 'ae_therapy_equipment', 'false'),
(1, 'ae_tile-faced_Panels', 'false'),
(1, 'ae_treatment_equipment', 'false'),
(1, 'ae_trough_bulk_material_conveyors', 'false'),
(1, 'ae_tube_bulk_material_conveyors', 'false'),
(1, 'ae_underground_aviation_fuel-storage_tanks', 'false'),
(1, 'ae_underground_fuel-storage_tanks', 'false'),
(1, 'ae_underground_hydronic_energy_distribution', 'false'),
(1, 'ae_underground_steam_and_condensate_distribution_piping', 'false'),
(1, 'ae_underground_storm_drainage_water_retention_tanks', 'false'),
(1, 'ae_vacuum_cleaning_systems', 'false'),
(1, 'ae_vegetated_roofing', 'false'),
(1, 'ae_vibratory_bulk_material_conveyors', 'false'),
(1, 'ae_vibratory_bulk_material_feeders', 'false'),
(1, 'ae_vibratory_piece_material_conveyors', 'false'),
(1, 'ae_volumetric_bulk_Material_feeders', 'false'),
(1, 'ae_walking-beam_piece_material_conveyors', 'false'),
(1, 'ae_wall_panels', 'false'),
(1, 'ae_weigh-belt_bulk_material_conveyors', 'false'),
(1, 'ae_weigh-belt_piece_material_conveyors', 'false'),
(1, 'ae_weigh_bulk_material_feeders', 'false'),
(1, 'ae_weigh_scales', 'false'),
(1, 'ae_window_washing_systems', 'true'),
(1, 'ae_wood_roof_panels', 'false'),
(1, 'ae_wood_shakes', 'false'),
(1, 'ae_wood_wall_panels', 'false'),
(1, 'ba_acces_flooring', 'false'),
(1, 'ba_acoustical_fabric-faced_panel_ceilings', 'false'),
(1, 'ba_aluminum_windows', 'false'),
(1, 'ba_architectural_woodwork', 'false'),
(1, 'ba_assembly_and_testing_equipment', 'true'),
(1, 'ba_carpeting', 'false'),
(1, 'ba_ceilings', 'false'),
(1, 'ba_cement_plastering', 'false'),
(1, 'ba_cleaning_and_waste_management', 'false'),
(1, 'ba_coiling_doors_and_grilles', 'false'),
(1, 'ba_concrete', 'false'),
(1, 'ba_curtain_wall_and_glazed_assemblies', 'false'),
(1, 'ba_dampproofing_and_waterproofing', 'true'),
(1, 'ba_demolition_and_structural_moving', 'false'),
(1, 'ba_Dewatering', 'false'),
(1, 'ba_doors_and_frames', 'false'),
(1, 'ba_elevators', 'false'),
(1, 'ba_entertainment_and_recreation_equipment', 'false'),
(1, 'ba_environmental_assessment', 'false'),
(1, 'ba_exterior_insulation_and_finish_systems', 'true'),
(1, 'ba_exterior_lighting', 'false'),
(1, 'ba_exterior_stone_cladding', 'false'),
(1, 'ba_fabric_structures', 'false'),
(1, 'ba_fiberglass_reinforced_paneling', 'false'),
(1, 'ba_fluid_applied_flooring', 'false'),
(1, 'ba_folding_doors_and_grilles', 'false'),
(1, 'ba_gabions', 'false'),
(1, 'ba_geodesic_structures', 'false'),
(1, 'ba_glass-fiber-reinforced_concrete', 'false'),
(1, 'ba_gypsum-panel_textured_ceilings', 'false'),
(1, 'ba_hardware', 'false'),
(1, 'ba_heating_ventilating__and_air_conditioning_hvac', 'false'),
(1, 'ba_irrigation', 'false'),
(1, 'ba_lighting', 'false'),
(1, 'ba_louvers', 'false'),
(1, 'ba_louvers_and_vents', 'false'),
(1, 'ba_membrane_roofing', 'true'),
(1, 'ba_metal-panel_textured_ceilings', 'false'),
(1, 'ba_metal_decking', 'false'),
(1, 'ba_metal_doors', 'false'),
(1, 'ba_metal_fabrications', 'false'),
(1, 'ba_metal_gratings', 'false'),
(1, 'ba_metal_stairs', 'false'),
(1, 'ba_miscellaneous_cast-in-place_concrete', 'false'),
(1, 'ba_packaged_water_chillers', 'false'),
(1, 'ba_painting', 'false'),
(1, 'ba_parking_control_equipment', 'true'),
(1, 'ba_planting_accessories', 'false'),
(1, 'ba_plaster_and_gypsum_board_assemblies', 'false'),
(1, 'ba_playground_equipment', 'false'),
(1, 'ba_play_field_equipment_and_structures', 'false'),
(1, 'ba_precast_architectural_concrete', 'false'),
(1, 'ba_precast_concrete', 'false'),
(1, 'ba_protective_covers', 'true'),
(1, 'ba_raceway_decking_assemblies', 'false'),
(1, 'ba_resilient_sheet_flooring', 'false'),
(1, 'ba_roadway_construction', 'true'),
(1, 'ba_sheet_metal_wall_cladding', 'false'),
(1, 'ba_shoring', 'false'),
(1, 'ba_signage', 'false'),
(1, 'ba_site_remediation', 'false'),
(1, 'ba_site_surveys', 'false'),
(1, 'ba_slurry_walls', 'false'),
(1, 'ba_stamped_concrete_finishing', 'false'),
(1, 'ba_stone_facing', 'false'),
(1, 'ba_subsurface_investigation', 'false'),
(1, 'ba_swimming_pools', 'false'),
(1, 'ba_temporary_facilities_and_control', 'false'),
(1, 'ba_termite__control', 'false'),
(1, 'ba_testing_laboratory_services', 'false'),
(1, 'ba_thermal_and_moisture_protection', 'true'),
(1, 'ba_timber_decking', 'false'),
(1, 'ba_tubular_skylights', 'false'),
(1, 'ba_unit_kitchens', 'false'),
(1, 'ba_unit_paving', 'false'),
(1, 'ba_vacuum_sweeping_cleaning_decontamination', 'false'),
(1, 'ba_water_remediation', 'false'),
(1, 'ba_wire_fences_and_gates', 'false'),
(1, 'ba_wood_flooring', 'false'),
(1, 'ba_wood_paneling', 'true'),
(1, 'ba_wood_screens_and_exterior_wood_shutters', 'true'),
(1, 'category', ''),
(1, 'company_name', 'RADEL Corp'),
(1, 'contact_person', 'Ashwin Kumar'),
(1, 'location', 'DUBAI'),
(1, 'phone_number', '9538497461'),
(1, 'webpage', '68/1, 3rd A Main, 10th Cross, Industrial Area, Bommanahalli');

-- --------------------------------------------------------

--
-- Table structure for table `constructme_data`
--

CREATE TABLE `constructme_data` (
  `id` int(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_business_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constructme_data`
--

INSERT INTO `constructme_data` (`id`, `user_email`, `user_password`, `user_business_type`) VALUES
(1, 'ashwinncj@gmail.com', 'e8ec18b980ea58cf363d3b49064faf19', 'user_main_contractor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`uid`,`record`);

--
-- Indexes for table `constructme_data`
--
ALTER TABLE `constructme_data`
  ADD PRIMARY KEY (`id`,`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructme_data`
--
ALTER TABLE `constructme_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
