<?php
include '../connectMySQL.php';
$conditions = "";
$city =(isset($_POST['city'])) ? $city = $_POST['city'] : '';
$barangay =(isset($_POST['barangay'])) ? $barangay = $_POST['barangay'] : '';
$tree_name =(isset($_POST['tree_name'])) ? $tree_name = $_POST['tree_name'] : '';
$planting_pattern =(isset($_POST['planting_pattern'])) ? $planting_pattern = $_POST['planting_pattern'] : '';
$planting_distance =(isset($_POST['planting_distance'])) ? $planting_distance = $_POST['planting_distance'] : '';

$conditions = ($city != '') ? $conditions." and city = '".$_POST['city']."' " :  $conditions;
$conditions = ($tree_name != '') ? $conditions." and tree_name = '".$_POST['tree_name']."' " :  $conditions;
$conditions = ($planting_pattern != '') ? $conditions." and planting_pattern = '".$_POST['planting_pattern']."' " :  $conditions;
$conditions = ($planting_distance != '') ? $conditions." and planting_distance = '".$_POST['planting_distance']."' " :  $conditions;
$conditions = ($barangay != '') ? $conditions." and barangay = '".$_POST['barangay']."' " :  $conditions;
$conditions = (isset($_POST['year_planted'])) ? $conditions." and year_planted = '".$_POST['year_planted']."' " :  $conditions;
$conditions = (isset($_POST['longitude'])) ? $conditions." and longitude = '".$_POST['longitude']."' " :  $conditions;
$conditions = (isset($_POST['latitude'])) ? $conditions." and latitude = '".$_POST['latitude']."' " :  $conditions;
$conditions = (isset($_POST['copra'])) ? $conditions." and copra = '".$_POST['copra']."' " :  $conditions;
$conditions = (isset($_POST['whole_nut'])) ? $conditions." and whole_nut = '".$_POST['whole_nut']."' " :  $conditions;
$conditions = (isset($_POST['buko'])) ? $conditions." and buko = '".$_POST['buko']."' " :  $conditions;
$conditions = (isset($_POST['vco'])) ? $conditions." and vco = '".$_POST['vco']."' " :  $conditions;
$conditions = (isset($_POST['sugar'])) ? $conditions." and sugar = '".$_POST['sugar']."' " :  $conditions;
$conditions = (isset($_POST['vinegar'])) ? $conditions." and vinegar = '".$_POST['vinegar']."' " :  $conditions;
$conditions = (isset($_POST['tuba'])) ? $conditions." and tuba = '".$_POST['tuba']."' " :  $conditions;
$conditions = (isset($_POST['husk'])) ? $conditions." and husk = '".$_POST['husk']."' " :  $conditions;
$conditions = (isset($_POST['shell'])) ? $conditions." and shell = '".$_POST['shell']."' " :  $conditions;
$conditions = (isset($_POST['coffee'])) ? $conditions." and coffee = '".$_POST['coffee']."' " :  $conditions;
$conditions = (isset($_POST['cacao'])) ? $conditions." and cacao = '".$_POST['cacao']."' " :  $conditions;
$conditions = (isset($_POST['corn'])) ? $conditions." and corn = '".$_POST['corn']."' " :  $conditions;
$conditions = (isset($_POST['vegetable'])) ? $conditions." and vegetable = '".$_POST['vegetable']."' " :  $conditions;
$conditions = (isset($_POST['rice'])) ? $conditions." and rice = '".$_POST['rice']."' " :  $conditions;
$conditions = (isset($_POST['carabao'])) ? $conditions." and carabao = '".$_POST['carabao']."' " :  $conditions;
$conditions = (isset($_POST['cattle'])) ? $conditions." and cattle = '".$_POST['cattle']."' " :  $conditions;
$conditions = (isset($_POST['pig'])) ? $conditions." and pig = '".$_POST['pig']."' " :  $conditions;
$conditions = (isset($_POST['goat'])) ? $conditions." and goat = '".$_POST['goat']."' " :  $conditions;
$conditions = (isset($_POST['chicken'])) ? $conditions." and chicken = '".$_POST['chicken']."' " :  $conditions;
$conditions = (isset($_POST['farm_labor'])) ? $conditions." and farm_labor = '".$_POST['farm_labor']."' " :  $conditions;
$conditions = (isset($_POST['marketing'])) ? $conditions." and marketing = '".$_POST['marketing']."' " :  $conditions;
$conditions = (isset($_POST['farm_inputs'])) ? $conditions." and farm_inputs = '".$_POST['farm_inputs']."' " :  $conditions;
$conditions = (isset($_POST['fuel_for_copra_making'])) ? $conditions." and fuel_for_copra_making = '".$_POST['fuel_for_copra_making']."' " :  $conditions;
$conditions = (isset($_POST['household_fuel'])) ? $conditions." and household_fuel = '".$_POST['household_fuel']."' " :  $conditions;
$conditions = (isset($_POST['handicraft'])) ? $conditions." and handicraft = '".$_POST['handicraft']."' " :  $conditions;
$conditions = (isset($_POST['ornamental'])) ? $conditions." and ornamental = '".$_POST['ornamental']."' " :  $conditions;
$conditions = (isset($_POST['farm_mulching'])) ? $conditions." and farm_mulching = '".$_POST['farm_mulching']."' " :  $conditions;
$conditions = (isset($_POST['wasted'])) ? $conditions." and wasted = '".$_POST['wasted']."' " :  $conditions;
$conditions = (isset($_POST['fuel_for_copra_making2'])) ? $conditions." and fuel_for_copra_making2 = '".$_POST['fuel_for_copra_making2']."' " :  $conditions;
$conditions = (isset($_POST['household_fuel2'])) ? $conditions." and household_fuel2 = '".$_POST['household_fuel2']."' " :  $conditions;
$conditions = (isset($_POST['handicraft2'])) ? $conditions." and handicraft2 = '".$_POST['handicraft2']."' " :  $conditions;
$conditions = (isset($_POST['direct_sold'])) ? $conditions." and direct_sold = '".$_POST['direct_sold']."' " :  $conditions;
$conditions = (isset($_POST['charcoal_making'])) ? $conditions." and charcoal_making = '".$_POST['charcoal_making']."' " :  $conditions;
$conditions = (isset($_POST['wasted2'])) ? $conditions." and wasted2 = '".$_POST['wasted2']."' " :  $conditions;
$conditions = (isset($_POST['vinegar_making'])) ? $conditions." and vinegar_making = '".$_POST['vinegar_making']."' " :  $conditions;
$conditions = (isset($_POST['wasted3'])) ? $conditions." and wasted3 = '".$_POST['wasted3']."' " :  $conditions;
$conditions = (isset($_POST['picked_up_by_buyer'])) ? $conditions." and picked_up_by_buyer = '".$_POST['picked_up_by_buyer']."' " :  $conditions;
$conditions = (isset($_POST['delivered_to_buyer'])) ? $conditions." and delivered_to_buyer = '".$_POST['delivered_to_buyer']."' " :  $conditions;
$conditions = (isset($_POST['direct_to_process'])) ? $conditions." and direct_to_process = '".$_POST['direct_to_process']."' " :  $conditions;
$conditions = (isset($_POST['direct_to_exporter'])) ? $conditions." and direct_to_exporter = '".$_POST['direct_to_exporter']."' " :  $conditions;
$conditions = (isset($_POST['trader_within_the_brgy'])) ? $conditions." and trader_within_the_brgy = '".$_POST['trader_within_the_brgy']."' " :  $conditions;
$conditions = (isset($_POST['trader_within_the_municipal'])) ? $conditions." and trader_within_the_municipal = '".$_POST['trader_within_the_municipal']."' " :  $conditions;
$conditions = (isset($_POST['trader_in_neighoring_city'])) ? $conditions." and trader_in_neighoring_city = '".$_POST['trader_in_neighoring_city']."' " :  $conditions;
$conditions = (isset($_POST['land_preparation'])) ? $conditions." and land_preparation = '".$_POST['land_preparation']."' " :  $conditions;
$conditions = (isset($_POST['planting'])) ? $conditions." and planting = '".$_POST['planting']."' " :  $conditions;
$conditions = (isset($_POST['cultivation'])) ? $conditions." and cultivation = '".$_POST['cultivation']."' " :  $conditions;
$conditions = (isset($_POST['farm_maintenance'])) ? $conditions." and farm_maintenance = '".$_POST['farm_maintenance']."' " :  $conditions;
$conditions = (isset($_POST['copra_making3'])) ? $conditions." and copra_making3 = '".$_POST['copra_making3']."' " :  $conditions;
$conditions = (isset($_POST['dehusking'])) ? $conditions." and dehusking = '".$_POST['dehusking']."' " :  $conditions;
$conditions = (isset($_POST['drying'])) ? $conditions." and drying = '".$_POST['drying']."' " :  $conditions;
$conditions = (isset($_POST['charcoal_making2'])) ? $conditions." and charcoal_making2 = '".$_POST['charcoal_making2']."' " :  $conditions;

$conditions = ($conditions != '') ? $conditions = " WHERE a.farm_id > 0 ".$conditions :  '';

$pinpoints = "";
$query = "select * from farm a
left join tree b on b.farm_id = a.farm_id 
".$conditions;
$result = $conn->query($query);
while($row = $result->fetch_assoc())
{
$pinpoints = $pinpoints ."
{ name: 'Farm : ".$row['farm_name']." <br> Year : ".$row['year_planted']."', coordinates: ['".$row['longitude']."', '".$row['latitude']."'] },";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COCOMAP</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    <style>
      .marker {
        background-image: url('../img/pinpoint.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
      }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php include'nav.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                            <form method="post"> 
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">FILTER</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample" style="">
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <div class="col-6">
                                            <label>Municipality/City</label>
                                                <select class="form-control " name="city" >
                                                    <option value=""></option>
                                                    <option value="Baganga">Baganga</option>
                                                    <option value="Banaybanay">Banaybanay</option>
                                                    <option value="Boston">Boston</option>
                                                    <option value="Caraga">Caraga</option>
                                                    <option value="Cateel">Cateel</option>
                                                    <option value="Governor Generoso">Governor Generoso</option>
                                                    <option value="Lupon">Lupon</option>
                                                    <option value="Manay">Manay</option>
                                                    <option value="Mati">Mati</option>
                                                    <option value="San Isidro">San Isidro</option>
                                                    <option value="Tarragona">Tarragona</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label>Barangay</label>
                                                <input type="text" class="form-control " name="barangay"  >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <h5>COCONUT TREES</h5>
                                                <hr class="sidebar-divider">
                                            </div>
                                            <div class="col-4">
                                                <label>Variety</label>
                                                <select class="form-control " name="tree_name" >
                                                    <option value=""></option>
                                                    <option value="Laguna Tall">Laguna Tall</option>
                                                    <option value="Tagnanan Tall">Tagnanan Tall</option>
                                                    <option value="Tacunan Dwarf">Tacunan Dwarf</option>
                                                    <option value="Catigan Dwarf">Catigan Dwarf</option>
                                                    <option value="makapuno">makapuno</option>
                                                    <option value="PCA 15-1">PCA 15-1</option>
                                                    <option value="PCA 15-2">PCA 15-2</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                            <label>Planting Pattern</label>
                                                <select class="form-control " name="planting_pattern" >
                                                    <option value=""></option>
                                                    <option value="Triangular">Triangular</option>
                                                    <option value="Square">Square</option>
                                                    <option value="Irregular">Irregular</option>
                                                    <option value="Triple Planting">Triple Planting</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                            <label>Planting Distance</label>
                                                <select class="form-control " name="planting_distance" >
                                                    <option value=""></option>
                                                    <option value="8x8">8x8</option>
                                                    <option value="9x9">9x9</option>
                                                    <option value="10x10">10x10</option>
                                                    <option value="Irregular">Irregular</option>
                                                </select>
                                            </div>
                                        </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5>FARM INCOM TYPES</h5>
                                                            <hr class="sidebar-divider">
                                                            <h6>Coconut Products</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="copra" type="checkbox" name="copra">
                                                                <label class="form-check-label" for="copra">Copra</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="whole_nut" type="checkbox" name="whole_nut">
                                                                <label class="form-check-label" for="whole_nut">Whole Nut</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="buko" type="checkbox" name="buko">
                                                                <label class="form-check-label" for="buko">Buko</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Food By Products</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="vco" type="checkbox" name="vco">
                                                                <label class="form-check-label" for="vco">VCO</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="sugar" type="checkbox" name="sugar">
                                                                <label class="form-check-label" for="sugar">Sugar</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="vinegar" type="checkbox" name="vinegar">
                                                                <label class="form-check-label" for="vinegar">Vinegar</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="tuba" type="checkbox" name="tuba">
                                                                <label class="form-check-label" for="tuba">Tuba</label>
                                                            </div>
                                                        </div>


                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Non-Food By Products</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="husk" type="checkbox" name="husk">
                                                                <label class="form-check-label" for="husk">Husk</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="shell" type="checkbox" name="shell">
                                                                <label class="form-check-label" for="shell">Shell</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Intercops</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="coffee" type="checkbox" name="coffee">
                                                                <label class="form-check-label" for="coffee">Coffee</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="cacao" type="checkbox" name="cacao">
                                                                <label class="form-check-label" for="cacao">Cacao</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="corn" type="checkbox" name="corn">
                                                                <label class="form-check-label" for="corn">Corn</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="vegetable" type="checkbox" name="vegetable">
                                                                <label class="form-check-label" for="vegetable">Vegetables</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Other Crops</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="rice" type="checkbox" name="rice">
                                                                <label class="form-check-label" for="rice">Rice</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Livestock/Poultry</h6>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="carabao" type="checkbox" name="carabao">
                                                                <label class="form-check-label" for="carabao">Carabao</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="cattle" type="checkbox" name="cattle">
                                                                <label class="form-check-label" for="cattle">Cattle</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="pig" type="checkbox" name="pig">
                                                                <label class="form-check-label" for="pig">Pig</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="goat" type="checkbox" name="goat">
                                                                <label class="form-check-label" for="goat">Goat</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="chicken" type="checkbox" name="chicken">
                                                                <label class="form-check-label" for="chicken">Chicken</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Expenses Type</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="farm_labor" type="checkbox" name="farm_labor">
                                                                <label class="form-check-label" for="farm_labor">Farm Labor</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="marketing" type="checkbox" name="marketing">
                                                                <label class="form-check-label" for="marketing">Marketing</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="farm_inputs" type="checkbox" name="farm_inputs">
                                                                <label class="form-check-label" for="farm_inputs">Farm Inputs</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Husk Utilization</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="fuel_for_copra_making" type="checkbox" name="fuel_for_copra_making">
                                                                <label class="form-check-label" for="fuel_for_copra_making">Fuel for Copra Making</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="household_fuel" type="checkbox" name="household_fuel">
                                                                <label class="form-check-label" for="household_fuel">Household Fuel</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="handicraft" type="checkbox" name="handicraft">
                                                                <label class="form-check-label" for="handicraft">Handicraft</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="ornamental" type="checkbox" name="ornamental">
                                                                <label class="form-check-label" for="ornamental">Ornamental</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="farm_mulching" type="checkbox" name="farm_mulching">
                                                                <label class="form-check-label" for="farm_mulching">Farm Mulching</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="wasted" type="checkbox" name="wasted">
                                                                <label class="form-check-label" for="wasted">Wasted</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Shell Utilization</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="fuel_for_copra_making2" type="checkbox" name="fuel_for_copra_making2">
                                                                <label class="form-check-label" for="fuel_for_copra_making2">Fuel for Copra Making</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="household_fuel2" type="checkbox" name="household_fuel2">
                                                                <label class="form-check-label" for="household_fuel2">Household Fuel</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="handicraft2" type="checkbox" name="handicraft2">
                                                                <label class="form-check-label" for="handicraft2">Handicraft</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="direct_sold" type="checkbox" name="direct_sold">
                                                                <label class="form-check-label" for="direct_sold">Direct Sold</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="charcoal_making" type="checkbox" name="charcoal_making">
                                                                <label class="form-check-label" for="charcoal_making">Charcoal Making</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="wasted2" type="checkbox" name="wasted2">
                                                                <label class="form-check-label" for="wasted2">Wasted</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Water Utilization</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="vinegar_making" type="checkbox" name="vinegar_making">
                                                                <label class="form-check-label" for="vinegar_making">Vinegar Making</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="wasted3" type="checkbox" name="wasted3">
                                                                <label class="form-check-label" for="wasted3">Wasted</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Whom Sold(A)</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="picked_up_by_buyer" type="checkbox" name="picked_up_by_buyer">
                                                                <label class="form-check-label" for="picked_up_by_buyer">Picked-up by Buyer</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="delivered_to_buyer" type="checkbox" name="delivered_to_buyer">
                                                                <label class="form-check-label" for="delivered_to_buyer">Delivered to Buyer</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="direct_to_process" type="checkbox" name="direct_to_process">
                                                                <label class="form-check-label" for="direct_to_process">Direct to Process</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="direct_to_exporter" type="checkbox" name="direct_to_exporter">
                                                                <label class="form-check-label" for="direct_to_exporter">Direct to Exporter</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Whom Sold(B)</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="trader_within_the_brgy" type="checkbox" name="trader_within_the_brgy">
                                                                <label class="form-check-label" for="trader_within_the_brgy">Trader within the Brgy</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="trader_within_the_municipal" type="checkbox" name="trader_within_the_municipal">
                                                                <label class="form-check-label" for="trader_within_the_municipal">Trader within the Municipal</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="trader_in_neighoring_city" type="checkbox" name="trader_in_neighoring_city">
                                                                <label class="form-check-label" for="trader_in_neighoring_city">Trader in Neighboring City</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <hr class="sidebar-divider">
                                                            <h6>Kind of Work</h6>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="land_preparation" type="checkbox" name="land_preparation">
                                                                <label class="form-check-label" for="land_preparation">Land Preparaion</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="planting" type="checkbox" name="planting">
                                                                <label class="form-check-label" for="planting">Planting</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="cultivation" type="checkbox" name="cultivation">
                                                                <label class="form-check-label" for="cultivation">Cultivation</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="farm_maintenance" type="checkbox" name="farm_maintenance">
                                                                <label class="form-check-label" for="farm_maintenance">Farm Maintenance</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="copra_making3" type="checkbox" name="copra_making3">
                                                                <label class="form-check-label" for="copra_making3">Copra making</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="dehusking" type="checkbox" name="dehusking">
                                                                <label class="form-check-label" for="dehusking">Dehusking</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="drying" type="checkbox" name="drying">
                                                                <label class="form-check-label" for="drying">Drying</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="charcoal_making2" type="checkbox" name="charcoal_making2">
                                                                <label class="form-check-label" for="charcoal_making2">Charcoal Making</label>
                                                            </div>
                                                        </div>
                                   <hr class="sidebar-divider">
                                   <hr class="sidebar-divider">
                                   <button class="btn btn-success rounded-pill col-12"><i class="fas fa-search"></i> Search</button>
                                </div>
                    </div>
                </div>
            </div>
</form>

                        


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Information</h1>
                    </div>
                         <div class="col-12 card shadow mb-4" style="height:300px;">  
                              <canvas id="myDoughnutChart" width="400" height="400"></canvas>
                        </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Farms</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 <?php
                                                    $count = 0;
                                                    $query = "SELECT * from farm a
                                                    left join tree b on b.farm_id = a.farm_id 
                                                    ".$conditions." GROUP BY a.farm_id ";
                                                    $result = $conn->query($query);
                                                    while ($row = $result->fetch_assoc()) {
                                                        $count = $count + 1;
                                                    }
                                                    echo $count;
                                                  ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Trees</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT SUM(a.total) as total FROM tree a
                                                    left join farm b on b.farm_id = a.farm_id 
                                                     ".$conditions."";
                                                    $result = $conn->query($query);
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo $row['total'];
                                                    }
                                                  ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tree fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 card shadow mb-4">
                            
                              <div class="row">
                                <div class="col-sm-12 col-12"> 
                                <div id='map' style='width: 100%; height: 500px;'></div>
                                </div>
                              </div> 
                              
                        </div>
                        
                    </div>
            </div>
            <!-- End of Main Content -->

            <?php include'footer.php';?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script>
   

      mapboxgl.accessToken = 'pk.eyJ1Ijoicm9tZ29kIiwiYSI6ImNsaTc2c3lpMzBsejgzZWx1eHF2N2szMDkifQ.f3wXh8auB8hZQ1oB_ojnNw';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [126.2510726,6.9322763],
        zoom: 12
      });

       var pinpoints = [
        <?php echo $pinpoints;?>
      ];

      pinpoints.forEach(function(pinpoint) {
        var el = document.createElement('div');
        el.className = 'marker';
        new mapboxgl.Marker(el)
          .setLngLat(pinpoint.coordinates)
          .setPopup(new mapboxgl.Popup().setHTML('<h3>' + pinpoint.name + '</h3>'))
          .addTo(map);
      });
    </script>
     <script>
     <?php
     $tree_names = "";
     $totals = "";
                                        $query = "SELECT GROUP_CONCAT(totals) as totals,GROUP_CONCAT('''',tree_name,' : ',percentage,'%''') as tree_name,sum(totals) FROM (SELECT 
    tree_name,
    SUM(total) AS totals,
    FORMAT(SUM(total) * 100.0 / (SELECT SUM(total) FROM tree),2) AS percentage
FROM 
    tree
GROUP BY 
    tree_name
)a";
                                        $result = $conn->query($query);
                                        while ($row = $result->fetch_assoc()) {
                                                 $tree_names = $row['tree_name'];
                                                 $totals = $row['totals'];
                                        }
                                      ?>
    var data = {
      labels: [<?php echo  $tree_names;?>],
      datasets: [{
        data: [<?php echo  $totals;?>],
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
      }]
    };

    // Get the canvas element
    var ctx = document.getElementById('myDoughnutChart').getContext('2d');

    // Create the doughnut chart
    var myDoughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Sample Doughnut Chart'
        }
      }
    });
  </script>
</body>
</html>