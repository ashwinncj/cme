<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConstructMe</title>
        <?php $this->load->view('templates/header'); ?>
        <style>
            .ba-list{
                column-count: 3;
            }
            .ae-list{
                column-count: 3;
            }
            label{
                font-weight:300;
            }
            .info-details{
                font-size: 18px;
                padding-left: 20px;
            }
        </style> 
    </head>
    <body style="overflow-x: hidden">
        <?php $this->load->view('templates/navigation'); ?>
    </head>
<body>
    <div style="width:80%;margin:auto;margin-top: 15px;padding:10px;box-shadow: 0px 0px 10px 0px grey;margin-bottom:20px;">
        <a style="font-size: 14px" href="<?php echo base_url('admin'); ?>"><- Go back</a>
        <div style="border-bottom:1px solid #e2dfdf;padding: 20px">
            <p style="font-size:16px;font-weight:bold">Basic Information <span></span></p>
            <label>COMPANY NAME</label> :<span class="info-details"><?php echo isset($info['company_name']) ? $info['company_name'] : ''; ?></span><br>
            <label>LOCATION</label> :<span class="info-details"><?php echo isset($info['location']) ? $info['location'] : ''; ?></span><br>
            <label>ADDRESS</label> :<span class="info-details"><?php echo isset($info['address']) ? $info['address'] : ''; ?></span><br>
            <label>WEBPAGE</label> :<span class="info-details"><?php echo isset($info['webpage']) ? $info['webpage'] : ''; ?></span><br>
            <label>ABOUT COMPANY</label> :<span class="info-details"><?php echo isset($info['about_company']) ? $info['about_company'] : ''; ?></span><br>
            <label>CONTACT PERSON</label> :<span class="info-details"><?php echo isset($info['contact_person']) ? $info['contact_person'] : ''; ?></span><br>
            <label>CONTACT NUMBER </label> :<span class="info-details"><?php echo isset($info['phone_number']) ? $info['phone_number'] : ''; ?></span><br>
            <label>CATEGORY</label> :<span class="info-details"><?php echo isset($info['category']) ? $info['category'] : ''; ?></span><br>
        </div>
        <div style="border-bottom:1px solid #e2dfdf;padding: 20px">
            <p style="font-size:16px;font-weight:bold">Business Activity <span></span></p>
            <ul class="ba-list" style="list-style-type: none">
                <?php
                $data[] = '';
                foreach ($info as $key => $value) {
                    $exp_key = explode('_', $key);
                    if ($exp_key[0] == 'ba') {
                        if ($value == 'true') {
                            $key = str_replace('ba_', '', $key);
                            $data[] = $key;
                        }
                    }
                }
                $business_activities = array('testing_laboratory_services' => '014529 - Testing laboratory services',
                    'temporary_facilities_and_control' => '015000 - Temporary Facilities and control',
                    'cleaning_and_waste_management' => '017400 - Cleaning and waste management',
                    'site_surveys' => '022100 - Site surveys',
                    'environmental_assessment' => '022400 - Environmental Assessment',
                    'subsurface_investigation' => '023000 - Subsurface Investigation',
                    'demolition_and_structural_moving' => '024000 - Demolition and structural moving',
                    'site_remediation' => '025000 - Site remediation',
                    'vacuum_sweeping_cleaning_decontamination' => '025100 - Vacuum Sweeping Cleaning Decontamination',
                    'water_remediation' => '027000 - Water remediation',
                    'concrete' => '033000 - Concrete',
                    'miscellaneous_cast-in-place_concrete' => '033053 - Miscellaneous Cast-in-Place Concrete',
                    'stamped_concrete_finishing' => '033533 - Stamped Concrete Finishing',
                    'precast_concrete' => '034000 - Precast Concrete',
                    'precast_architectural_concrete' => '034500 - Precast Architectural Concrete',
                    'glass-fiber-reinforced_concrete' => '034900 - Glass-Fiber-Reinforced Concrete',
                    'exterior_stone_cladding' => '044200 - Exterior Stone Cladding',
                    'metal_decking' => '053000 - Metal Decking',
                    'raceway_decking_assemblies' => '053500 - Raceway Decking Assemblies',
                    'metal_fabrications' => '055000 - Metal Fabrications',
                    'metal_stairs' => '055100 - Metal Stairs',
                    'metal_gratings' => '055300 - Metal Gratings',
                    'timber_decking' => '061519 - Timber Decking',
                    'architectural_woodwork' => '064000 - Architectural Woodwork',
                    'wood_paneling' => '064200 - Wood Paneling',
                    'wood_screens_and_exterior_wood_shutters' => '064900 - Wood Screens and Exterior Wood Shutters',
                    'fiberglass_reinforced_paneling' => '068316 - Fiberglass Reinforced Paneling',
                    'thermal_and_moisture_protection' => '070000 - Thermal and Moisture Protection',
                    'dampproofing_and_waterproofing' => '071000 - Dampproofing and Waterproofing',
                    'exterior_insulation_and_finish_systems' => '072400 - Exterior Insulation and Finish Systems',
                    'membrane_roofing' => '075000 - Membrane Roofing',
                    'sheet_metal_wall_cladding' => '076400 - Sheet Metal Wall Cladding',
                    'doors_and_frames' => '081000 - Doors and Frames',
                    'metal_doors' => '081300 - Metal Doors',
                    'coiling_doors_and_grilles' => '083300 - Coiling Doors and Grilles',
                    'folding_doors_and_grilles' => '083500 - Folding Doors and Grilles',
                    'curtain_wall_and_glazed_assemblies' => '084400 - Curtain Wall and Glazed Assemblies',
                    'aluminum_windows' => '085113 - Aluminum Windows',
                    'tubular_skylights' => '086223 - Tubular Skylights',
                    'hardware' => '087000 - Hardware',
                    'louvers_and_vents' => '089000 - Louvers and Vents',
                    'louvers' => '089100 - Louvers',
                    'plaster_and_gypsum_board_assemblies' => '092100 - Plaster and Gypsum Board Assemblies',
                    'cement_plastering' => '092400 - Cement Plastering',
                    'ceilings' => '095000 - Ceilings',
                    'acoustical_fabric-faced_panel_ceilings' => '095114 - Acoustical Fabric-Faced Panel Ceilings',
                    'gypsum-panel_textured_ceilings' => '095613 - Gypsum-Panel Textured Ceilings',
                    'metal-panel_textured_ceilings' => '095616 - Metal-Panel Textured Ceilings',
                    'wood_flooring' => '096400 - Wood Flooring',
                    'resilient_sheet_flooring' => '096516 - Resilient Sheet Flooring',
                    'fluid_applied_flooring' => '096700 - Fluid-Applied Flooring',
                    'carpeting' => '096800 - Carpeting',
                    'acces_ flooring' => '096900 - Access Flooring',
                    'stone_facing' => '097500 - Stone Facing',
                    'painting' => '099100 - Painting',
                    'signage' => '101400 - Signage',
                    'protective_covers' => '107300 - Protective Covers',
                    'parking_control_equipment' => '111200 - Parking Control Equipment',
                    'unit_kitchens' => '113200 - Unit Kitchens',
                    'entertainment_and_recreation_equipment' => '116000 - Entertainment and Recreation Equipment',
                    'play_field_equipment_and_structures' => '116800 - Play Field Equipment and Structures',
                    'playground_equipment' => '116813 - Playground Equipment',
                    'swimming_pools' => '131100 - Swimming Pools',
                    'fabric_structures' => '133100 - Fabric Structures',
                    'geodesic_structures' => '133300 - Geodesic Structures',
                    'elevators' => '142000 - Elevators',
                    'heating_ventilating_ and_air_conditioning_hvac' => '230000 - Heating, Ventilating, and Air Conditioning (HVAC)',
                    'packaged_water_chillers' => '236400 - Packaged Water Chillers',
                    'lighting' => '265000 - Lighting',
                    'exterior_lighting' => '265600 - Exterior Lighting',
                    'Dewatering' => '312319 - Dewatering',
                    'termite_ control' => '313116 - Termite Control',
                    'gabions' => '313600 - Gabions',
                    'shoring' => '314100 - Shoring',
                    'slurry_walls' => '315600 - Slurry Walls',
                    'unit_paving' => '321400 - Unit Paving',
                    'wire_fences_and_gates' => '323126 - Wire Fences and Gates',
                    'irrigation' => '328000 - Irrigation',
                    'planting_accessories' => '329400 - Planting Accessories',
                    'roadway_construction' => '347100 - Roadway Construction',
                    'assembly_and_testing_equipment' => '413600 - Assembly and Testing Equipment'
                );

                foreach ($business_activities as $name => $value) {
                    (in_array($name, $data) ? $ba = $value : $ba = '');
                    echo '<li>' . $ba . '</li>';
                }
                ?>
            </ul>
        </div>
        <div style="padding: 20px">
            <p style="font-size:16px;font-weight:bold">Area of Expertise <span></span></p>
            <ul class="ae-list" style="list-style-type: none">
                <?php
                unset($data);
                $data[] = '';
                foreach ($info as $key => $value) {
                    $exp_key = explode('_', $key);
                    if ($exp_key[0] == 'ae') {
                        if ($value == 'true') {
                            $key = str_replace('ae_', '', $key);
                            $data[] = $key;
                        }
                    }
                }
                $area_of_expertise = array('wood_shakes' => '07 31 29.16 - Wood Shakes',
                    'composite_rubber_shingles' => '07 31 33 - Composite Rubber Shingles',
                    'plastic_shakes' => '07 31 53 - Plastic Shakes',
                    'roof_tiles' => '07 32 00 - Roof Tiles',
                    'clay_roof_tiles' => '07 32 13 - Clay Roof Tiles',
                    'ceramic_and_porcelain_roof_tiles' => '07 32 14 - Ceramic and Porcelain Roof Tiles',
                    'concrete_roof_tiles' => '07 32 16 - Concrete Roof Tiles',
                    'metal_roof_tiles' => '07 32 19 - Metal Roof Tiles',
                    'mineral-fiber_cement_roof_tiles' => '07 32 23 - Mineral-Fiber Cement Roof Tiles',
                    'plastic_roof_tiles' => '07 32 26 - Plastic Roof Tiles',
                    'rubber_tiles_or_panels' => '07 32 29 - Rubber Tiles/Panels',
                    'natural_roof_coverings' => '07 33 00 - Natural Roof Coverings',
                    'sod_roofing' => '07 33 13 - Sod Roofing',
                    'thatched_roofing' => '07 33 16 - Thatched Roofing',
                    'vegetated_roofing' => '07 33 63 - Vegetated Roofing',
                    'roofing_and_siding_panels' => '07 40 00 - Roofing and Siding Panels',
                    'roof_panels' => '07 41 00 - Roof Panels',
                    'metal_roof_panels' => '07 41 13 - Metal Roof Panels',
                    'wood_roof_panels' => '07 41 23 - Wood Roof Panels',
                    'plastic_roof_panels' => '07 41 33 - Plastic Roof Panels',
                    'composite_roof_panels' => '07 41 43 - Composite Roof Panels',
                    'fabricated_roof_panel_assemblies' => '07 41 63 - Fabricated Roof Panel Assemblies',
                    'wall_panels' => '07 42 00 - Wall Panels',
                    'Metal Wall Panels' => '07 42 13 - Metal Wall Panels',
                    'formed_metal_wall_panels' => '07 42 13.13 - Formed Metal Wall Panels',
                    'metal_plate_wall_panels' => '07 42 13.16 - Metal Plate Wall Panels',
                    'insulated_metal_wall_panels' => '07 42 13.19 - Insulated Metal Wall Panels',
                    'metal_composite_material_wall_panels' => '07 42 13.23 - Metal Composite Material Wall Panels',
                    'wood_wall_panels' => '07 42 23 - Wood Wall Panels',
                    'terracotta_wall_panels' => '07 42 29 - Terracotta Wall Panels',
                    'plastic_wall_panels' => '07 42 33 - Plastic Wall Panels',
                    'composite_wall_panels' => '07 42 43 - Composite Wall Panels',
                    'fabricated_wall_panel_assemblies' => '07 42 63 - Fabricated Wall Panel Assemblies',
                    'soffit_panels' => '07 42 93 - Soffit Panels',
                    'faced_panels' => '07 44 00 - Faced Panels',
                    'aggregate_coated_panels' => '07 44 13 - Aggregate Coated Panels',
                    'porcelain_enameled_faced_panels' => '07 44 16 - Porcelain Enameled Faced Panels',
                    'tile-faced_Panels' => '07 44 19 - Tile-Faced Panels',
                    'ceramic-tile-faced_Panels' => '07 44 23 - Ceramic-Tile-Faced Panels',
                    'metal_faced_panels' => '07 44 33 - Metal Faced Panels',
                    'treatment_equipment' => '11 72 53 - Treatment Equipment',
                    'patient_care_equipment' => '11 73 00 - Patient Care Equipment',
                    'psychiatric_seclusion_room_padding' => '11 73 13 - Psychiatric Seclusion Room Padding',
                    'dental_equipment' => '11 74 00 - Dental Equipment',
                    'optical_equipment' => '11 75 00 - Optical Equipment',
                    'operating_room_equipment' => '11 76 00 - Operating Room Equipment',
                    'radiology_equipment' => '11 77 00 - Radiology Equipment',
                    'mortuary_equipment' => '11 78 00 - Mortuary Equipment',
                    'mortuary_refrigerators' => '11 78 13 - Mortuary Refrigerators',
                    'crematorium_equipment' => '11 78 16 - Crematorium Equipment',
                    'mortuary_lifts' => '11 78 19 - Mortuary Lifts',
                    'therapy_equipment' => '11 79 00 - Therapy Equipment',
                    'facility_maintenance_and_operation_equipment' => '11 80 00 - Facility Maintenance and Operation Equipment',
                    'facility_maintenance_equipment' => '11 81 00 - Facility Maintenance Equipment',
                    'floor_and_wall_cleaning_equipment' => '11 81 13 - Floor and Wall Cleaning Equipment',
                    'housekeeping_carts' => '11 81 16 - Housekeeping Carts',
                    'vacuum_cleaning_systems' => '11 81 19 - Vacuum Cleaning Systems',
                    'facade_access_equipment' => '11 81 23 - Facade Access Equipment',
                    'window_washing_systems' => '11 81 23.13 - Window Washing Systems',
                    'facility_fall_Protection' => '11 81 29 - Facility Fall Protection',
                    'leaching_pits' => '33 47 26.19 - Leaching Pits',
                    'storm_drainage_structures' => '33 49 00 - Storm Drainage Structures',
                    'storm_drainage_manholes_frames_and_covers' => '33 49 13 - Storm Drainage Manholes, Frames, and Covers',
                    'storm drainage_water_detention_structures' => '33 49 22 - Storm Drainage Water Detention Structures',
                    'storm_drainage_water_retention_structures' => '33 49 23 - Storm Drainage Water Retention Structures',
                    'underground_storm_drainage_water_retention_tanks' => '33 49 23.13 - Underground Storm Drainage Water Retention Tanks',
                    'storm_drainage_water_storage_structures' => '33 49 24 - Storm Drainage Water Storage Structures',
                    'fuel_distribution_utilities' => '33 50 00 - Fuel Distribution Utilities',
                    'natural-gas_distribution' => '33 51 00 - Natural-Gas Distribution',
                    'natural-gas_piping' => '33 51 13 - Natural-Gas Piping',
                    'natural-as_metering' => '33 51 33 - Natural-Gas Metering',
                    'liquid_fuel_distribution' => '33 52 00 - Liquid Fuel Distribution',
                    'fuel-oil_distribution' => '33 52 13 - Fuel-Oil Distribution',
                    'fuel-oil_piping' => '33 52 13.13 - Fuel-Oil Piping',
                    'fuel-oil_pumps' => '33 52 13.23 - Fuel-Oil Pumps',
                    'gasoline_distribution' => '33 52 16 - Gasoline Distribution',
                    'gasoline_piping' => '33 52 16.13 - Gasoline Piping',
                    'gasoline_pumps' => '33 52 16.23 - Gasoline Pumps',
                    'diesel_fuel_distribution' => '33 52 19 - Diesel Fuel Distribution',
                    'diesel_fuel_piping' => '33 52 19.13 - Diesel Fuel Piping',
                    'diesel_fuel_pumps' => '33 52 19.23 - Diesel Fuel Pumps',
                    'aviation_fuel_distribution' => '33 52 43 - Aviation Fuel Distribution',
                    'aviation_fuel_piping' => '33 52 43.13 - Aviation Fuel Piping',
                    'aviation_fuel_connections' => '33 52 43.16 - Aviation Fuel Connections',
                    'aviation_fuel_grounding' => '33 52 43.19 - Aviation Fuel Grounding',
                    'aviation_fuel_pumps' => '33 52 43.23 - Aviation Fuel Pumps',
                    'Fuel-Storage Tanks' => '33 56 00 - Fuel-Storage Tanks',
                    'aboveground_fuel-storage_tanks' => '33 56 13 - Aboveground Fuel-Storage Tanks',
                    'underground_fuel-storage_tanks' => '33 56 16 - Underground Fuel-Storage Tanks',
                    'aviation_fuel-storage_tanks' => '33 56 43 - Aviation Fuel-Storage Tanks',
                    'aboveground_aviation_fuel-storage_tanks' => '33 56 43.13 - Aboveground Aviation Fuel-Storage Tanks',
                    'underground_aviation_fuel-storage_tanks' => '33 56 43.16 - Underground Aviation Fuel-Storage Tanks',
                    'compressed_gases_storage_tanks' => '33 56 53 - Compressed Gases Storage Tanks',
                    'hydronic_and_steam_energy_utilities' => '33 60 00 - Hydronic and Steam Energy Utilities',
                    'hydronic_energy_distribution' => '33 61 00 - Hydronic Energy Distribution',
                    'underground_hydronic_energy_distribution' => '33 61 13 - Underground Hydronic Energy Distribution',
                    'aboveground_hydronic_energy_distribution' => '33 61 23 - Aboveground Hydronic Energy Distribution',
                    'hydronic_energy_distribution_metering' => '33 61 33 - Hydronic Energy Distribution Metering',
                    'steam_energy_distribution' => '33 63 00 - Steam Energy Distribution',
                    'underground_steam_and_condensate_distribution_piping' => '33 63 13 - Underground Steam and Condensate Distribution Piping',
                    'aboveground_steam_and_condensate_distribution_piping' => '33 63 23 - Aboveground Steam and Condensate Distribution Piping',
                    'steam_energy_distribution_metering' => '33 63 33 - Steam Energy Distribution Metering',
                    'electrical_utilities' => '33 70 00 - Electrical Utilities',
                    'bulk_material_conveyors' => '41 12 13 - Bulk Material Conveyors',
                    'airslide_bulk_material_conveyors' => '41 12 13.13 - Airslide Bulk Material Conveyors',
                    'auger_bulk_material_conveyors' => '41 12 13.16 - Auger Bulk Material Conveyors',
                    'belt_bulk_material_conveyors' => '41 12 13.19 - Belt Bulk Material Conveyors',
                    'container_bulk_material_conveyors' => '41 12 13.23 - Container Bulk Material Conveyors',
                    'drag_chain_bulk_material_conveyors' => '41 12 13.26 - Drag Chain Bulk Material Conveyors',
                    'hopper_bulk_material_conveyors' => '41 12 13.29 - Hopper Bulk Material Conveyors',
                    'reciprocating_bulk_material_conveyors' => '41 12 13.33 - Reciprocating Bulk Material Conveyors',
                    'screw_bulk_material_conveyors' => '41 12 13.36 - Screw Bulk Material Conveyors',
                    'stacking_and_reclaim_bulk_material_conveyor' => '41 12 13.39 - Stacking and Reclaim Bulk Material Conveyor',
                    'trough_bulk_material_conveyors' => '41 12 13.43 - Trough Bulk Material Conveyors',
                    'tube_bulk_material_conveyors' => '41 12 13.46 - Tube Bulk Material Conveyors',
                    'vibratory_bulk_material_conveyors' => '41 12 13.49 - Vibratory Bulk Material Conveyors',
                    'weigh-belt_bulk_material_conveyors' => '41 12 13.53 - Weigh-Belt Bulk Material Conveyors',
                    'bucket_elevators' => '41 12 16 - Bucket Elevators',
                    'pneumatic_conveyors' => '41 12 19 - Pneumatic Conveyors',
                    'dense_phase_pneumatic_conveyors' => '41 12 19.13 - Dense Phase Pneumatic Conveyors',
                    'dilute_phase_pneumatic_conveyors' => '41 12 19.16 - Dilute Phase Pneumatic Conveyors',
                    'bulk_material_feeders' => '41 13 00 - Bulk Material Feeders',
                    'bin_activators_or_live_bin_bottoms' => '41 13 13 - Bin Activators/Live Bin Bottoms',
                    'feeders' => '41 13 23 - Feeders',
                    'airlock_bulk_material_feeders' => '41 13 23.13 - Airlock Bulk Material Feeders',
                    'apron_bulk_material_feeders' => '41 13 23.16 - Apron Bulk Material Feeders',
                    'rotary-valve_bulk_material_feeders' => '41 13 23.19 - Rotary-Valve Bulk Material Feeders',
                    'screw_bulk_material_feeders' => '41 13 23.23 - Screw Bulk Material Feeders',
                    'vibratory_bulk_material_feeders' => '41 13 23.26 - Vibratory Bulk Material Feeders',
                    'volumetric_bulk_Material_feeders' => '41 13 23.29 - Volumetric Bulk Material Feeders',
                    'weigh_bulk_material_feeders' => '41 13 23.33 - Weigh Bulk Material Feeders',
                    'batching_equipment' => '41 14 00 - Batching Equipment',
                    'bag-handling_batching_equipment' => '41 14 13 - Bag-Handling Batching Equipment',
                    'batch_cars_or_transports' => '41 14 16 - Batch Cars/Transports',
                    'batch_hoppers' => '41 14 19 - Batch Hoppers',
                    'bulk_bag-handling_batching_equipment' => '41 14 23 - Bulk Bag-Handling Batching Equipment',
                    'blenders' => '41 14 26 - Blenders',
                    'drum-handling_batching_equipment' => '41 14 29 - Drum-Handling Batching Equipment',
                    'mixers' => '41 14 33 - Mixers',
                    'weigh_scales' => '41 14 36 - Weigh Scales',
                    'piece_material_handling_equipment' => '41 20 00 - Piece Material Handling Equipment',
                    'conveyors' => '41 21 00 - Conveyors',
                    'automatic_guided_vehicle_systems' => '41 21 13 - Automatic Guided Vehicle Systems',
                    'piece_material_conveyors' => '41 21 23 - Piece Material Conveyors',
                    'belt_piece_material_conveyors' => '41 21 23.13 - Belt Piece Material Conveyors',
                    'container_piece_material_conveyors' => '41 21 23.16 - Container Piece Material Conveyors',
                    'drag-Chain_piece_material_conveyors' => '41 21 23.19 - Drag-Chain Piece Material Conveyors',
                    'hopper_piece_material_conveyors' => '41 21 23.23 - Hopper Piece Material Conveyors',
                    'monorail_piece_material_conveyors' => '41 21 23.26 - Monorail Piece Material Conveyors',
                    'power_and_free_piece_material_conveyors' => '41 21 23.29 - Power and Free Piece Material Conveyors',
                    'reciprocating_piece_material_conveyors' => '41 21 23.33 - Reciprocating Piece Material Conveyors',
                    'roller_piece_material_conveyors' => '41 21 23.36 - Roller Piece Material Conveyors',
                    'vibratory_piece_material_conveyors' => '41 21 23.39 - Vibratory Piece Material Conveyors',
                    'walking-beam_piece_material_conveyors' => '41 21 23.43 - Walking-Beam Piece Material Conveyors',
                    'weigh-belt_piece_material_conveyors' => '41 21 23.46 - Weigh-Belt Piece Material Conveyors',
                );

                foreach ($area_of_expertise as $name => $value) {
                    (in_array($name, $data) ? $ae = $value : $ae = '');
                    echo '<li>' . $ae . '</li>';
                }
                ?>                
            </ul>
        </div>
    </div>
    <?php $this->load->view('templates/footer'); ?>

</body>
</html>