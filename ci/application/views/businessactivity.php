<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ConstructMe</title>
        <?php $this->load->view('templates/header'); ?>
        <style>
            .switch-field {
                padding-top: 0px;
                overflow: hidden;
            }

            .switch-field input {
                position: absolute !important;
                clip: rect(0, 0, 0, 0);
                height: 1px;
                width: 1px;
                border: 0;
                overflow: hidden;
            }

            .switch-field label {
                float: left;
            }

            .switch-field label {
                display: inline-block;
                width: 25px;
                height:20px;
                background-color: #e4e4e4;
                /*        font-size: 14px;*/
                font-weight: normal;
                text-align: center;
                text-shadow: none;
                padding: 2px 6px;
                /*        border: 1px solid rgba(0, 0, 0, 0.2);*/
                /*        -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
                        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);*/
                -webkit-transition: all 0.1s ease-in-out;
                -moz-transition:    all 0.1s ease-in-out;
                -ms-transition:     all 0.1s ease-in-out;
                -o-transition:      all 0.1s ease-in-out;
                transition:         all 0.1s ease-in-out;
            }

            .switch-field label:hover {
                cursor: pointer;
            }

            .switch-field input:checked + label {
                background-color: #3faf00;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .radio_no input:checked + label {
                background-color: #cc4c4c;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .switch-field label:first-of-type {
                border-radius: 0px;
            }

            .switch-field label:last-of-type {
                border-radius:0px;
            }
            .column-list{
                column-count: 3;
                padding: 20px;
                margin: auto;
            }
            .switch-field{
                margin: 1px;
            }
            #business-activity-table tr{
                min-height: 30px;
            }
        </style> 
    </head>
    <body style="overflow-x: hidden">
        <?php $this->load->view('templates/navigation'); ?>
        <div style="width: 80%;margin: auto;box-shadow: 0px 0px 10px 0px grey;margin-bottom:20px;margin-top: 20px;padding:20px;">
            <h5>Business Activities</h5>
            <p style="margin:0px">Please select appropriate business activities.</p>
            <a style="font-size: 14px" href="<?php echo base_url('dashboard'); ?>"><- Go back</a>
            <hr>                
            <input type="checkbox" id="selectall"><span style="padding-left: 5px;">Select All</span>

            <form method="post" action="<?php echo base_url('profile/update'); ?>">

                <div class="column-list">
                    <table id="business-activity-table">
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
                            'acces_flooring' => '096900 - Access Flooring',
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
                            (in_array($name, $data) ? $check_yes = 'checked' AND $check_no = '' : $check_no = 'checked' AND $check_yes = '');
                            ?>
                            <!--                            <tr style="padding:0px;margin-bottom: 10px">
                                                            <td style="width: 60px">             
                                                                <div class="switch-field">
                                                                    <input type="radio" id="selectall_yes" value="true"/>
                                                                    <label for="selectall_yes"></label>
                                                                    <span  class="radio_no">
                                                                        <input type="radio" id="selectall_no" value="false" checked />
                                                                        <label for="selectall_no" style=""></label>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="title" style="padding-left:5px">Select All</span>
                                                            </td>
                                                        </tr>-->
                            <tr style="padding:0px;margin-bottom: 10px">
                                <td style="width: 60px">             
                                    <div class="switch-field">
                                        <input class="check_yes" type="radio" id="<?php echo $name; ?>_yes" name="ba_<?php echo $name; ?>" value="true" <?php echo $check_yes; ?>/>
                                        <label for="<?php echo $name; ?>_yes"></label>
                                        <span  class="radio_no">
                                            <input class="check_no" type="radio" id="<?php echo $name; ?>_no" name="ba_<?php echo $name; ?>" value="false" <?php echo $check_no; ?>/>
                                            <label for="<?php echo $name; ?>_no" style=""></label>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="title" style="padding-left:5px"><?php echo $value; ?></span>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>               
                </div>
                <div style="text-align:center;">
                    <button class="btn btn-primary" type="submit" style="text-align:center;width:200px;background-color:rgb(76,200,170);">Update</button>
                </div>
            </form>
        </div>
        <?php $this->load->view('templates/footer'); ?>
        <script>
            $('#selectall').change(function () {
                if ($(this).is(":checked")) {
                    $('.check_yes').prop('checked', 'true');
                } else {
                    $('.check_no').prop('checked', 'true');
                }
            });
        </script>

    </body>
</html>