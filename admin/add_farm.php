<?php
include('../connectMySql.php');
if(isset($_POST['farm_save']))
{

$farm_name = $_POST['farm_name'];
$city = $_POST['city'];
$barangay = $_POST['barangay'];
$year_planted = $_POST['year_planted'];
$longitude = $_POST['lng'];
$latitude = $_POST['lat'];
$copra = (isset($_POST['copra']))? 'on' : 'off';
$whole_nut = (isset($_POST['whole_nut']))? 'on' : 'off';
$buko = (isset($_POST['buko']))? 'on' : 'off';
$vco = (isset($_POST['vco']))? 'on' : 'off';
$sugar = (isset($_POST['sugar']))? 'on' : 'off';
$vinegar = (isset($_POST['vinegar']))? 'on' : 'off';
$tuba = (isset($_POST['tuba']))? 'on' : 'off';
$husk = (isset($_POST['husk']))? 'on' : 'off';
$shell = (isset($_POST['shell']))? 'on' : 'off';
$coffee = (isset($_POST['coffee']))? 'on' : 'off';
$cacao = (isset($_POST['cacao']))? 'on' : 'off';
$corn = (isset($_POST['corn']))? 'on' : 'off';
$vegetable = (isset($_POST['vegetable']))? 'on' : 'off';
$rice = (isset($_POST['rice']))? 'on' : 'off';
$carabao = (isset($_POST['carabao']))? 'on' : 'off';
$cattle = (isset($_POST['cattle']))? 'on' : 'off';
$pig = (isset($_POST['pig']))? 'on' : 'off';
$goat = (isset($_POST['goat']))? 'on' : 'off';
$chicken = (isset($_POST['chicken']))? 'on' : 'off';
$farm_labor = (isset($_POST['farm_labor']))? 'on' : 'off';
$marketing = (isset($_POST['marketing']))? 'on' : 'off';
$farm_inputs = (isset($_POST['farm_inputs']))? 'on' : 'off';
$fuel_for_copra_making = (isset($_POST['fuel_for_copra_making']))? 'on' : 'off';
$household_fuel = (isset($_POST['household_fuel']))? 'on' : 'off';
$handicraft = (isset($_POST['handicraft']))? 'on' : 'off';
$ornamental = (isset($_POST['ornamental']))? 'on' : 'off';
$farm_mulching = (isset($_POST['farm_mulching']))? 'on' : 'off';
$wasted = (isset($_POST['wasted']))? 'on' : 'off';
$fuel_for_copra_making2 = (isset($_POST['fuel_for_copra_making2']))? 'on' : 'off';
$household_fuel2 = (isset($_POST['household_fuel2']))? 'on' : 'off';
$handicraft2 = (isset($_POST['handicraft2']))? 'on' : 'off';
$direct_sold = (isset($_POST['direct_sold']))? 'on' : 'off';
$charcoal_making = (isset($_POST['charcoal_making']))? 'on' : 'off';
$wasted2 = (isset($_POST['wasted2']))? 'on' : 'off';
$vinegar_making = (isset($_POST['vinegar_making']))? 'on' : 'off';
$wasted3 = (isset($_POST['wasted3']))? 'on' : 'off';
$picked_up_by_buyer = (isset($_POST['picked_up_by_buyer']))? 'on' : 'off';
$delivered_to_buyer = (isset($_POST['delivered_to_buyer']))? 'on' : 'off';
$direct_to_process = (isset($_POST['direct_to_process']))? 'on' : 'off';
$direct_to_exporter = (isset($_POST['direct_to_exporter']))? 'on' : 'off';
$trader_within_the_brgy = (isset($_POST['trader_within_the_brgy']))? 'on' : 'off';
$trader_within_the_municipal = (isset($_POST['trader_within_the_municipal']))? 'on' : 'off';
$trader_in_neighoring_city = (isset($_POST['trader_in_neighoring_city']))? 'on' : 'off';
$land_preparation = (isset($_POST['land_preparation']))? 'on' : 'off';
$planting = (isset($_POST['planting']))? 'on' : 'off';
$cultivation = (isset($_POST['cultivation']))? 'on' : 'off';
$farm_maintenance = (isset($_POST['farm_maintenance']))? 'on' : 'off';
$copra_making3 = (isset($_POST['copra_making3']))? 'on' : 'off';
$dehusking = (isset($_POST['dehusking']))? 'on' : 'off';
$drying = (isset($_POST['drying']))? 'on' : 'off';
$charcoal_making2 = (isset($_POST['charcoal_making2']))? 'on' : 'off';


$sql = "INSERT INTO farm 
(
    farm_name,
    city,
    barangay,
    year_planted,
    longitude,
    latitude,
    copra,
    whole_nut,
    buko,
    vco,
    sugar,
    vinegar,
    tuba,
    husk,
    shell,
    coffee,
    cacao,
    corn,
    vegetable,
    rice,
    carabao,
    cattle,
    pig,
    goat,
    chicken,
    farm_labor,
    marketing,
    farm_inputs,
    fuel_for_copra_making,
    household_fuel,
    handicraft,
    ornamental,
    farm_mulching,
    wasted,
    fuel_for_copra_making2,
    household_fuel2,
    handicraft2,
    direct_sold,
    charcoal_making,
    wasted2,
    vinegar_making,
    wasted3,
    picked_up_by_buyer,
    delivered_to_buyer,
    direct_to_process,
    direct_to_exporter,
    trader_within_the_brgy,
    trader_within_the_municipal,
    trader_in_neighoring_city,
    land_preparation,
    planting,
    cultivation,
    farm_maintenance,
    copra_making3,
    dehusking,
    drying,
    charcoal_making2
)
VALUES 
(
    '".$farm_name."' ,
    '".$city."' ,
    '".$barangay."' ,
    '".$year_planted."' ,
    '".$longitude."' ,
    '".$latitude."' ,
    '".$copra."' ,
    '".$whole_nut . "',
    '".$buko . "',
    '".$vco . "',
    '".$sugar . "',
    '".$vinegar . "',
    '".$tuba . "',
    '".$husk . "',
    '".$shell . "',
    '".$coffee . "',
    '".$cacao . "',
    '".$corn . "',
    '".$vegetable . "',
    '".$rice . "',
    '".$carabao . "',
    '".$cattle . "',
    '".$pig . "',
    '".$goat . "',
    '".$chicken . "',
    '".$farm_labor . "',
    '".$marketing . "',
    '".$farm_inputs . "',
    '".$fuel_for_copra_making . "',
    '".$household_fuel . "',
    '".$handicraft . "',
    '".$ornamental . "',
    '".$farm_mulching . "',
    '".$wasted . "',
    '".$fuel_for_copra_making2 . "',
    '".$household_fuel2 . "',
    '".$handicraft2 . "',
    '".$direct_sold . "',
    '".$charcoal_making . "',
    '".$wasted2 . "',
    '".$vinegar_making . "',
    '".$wasted3 . "',
    '".$picked_up_by_buyer . "',
    '".$delivered_to_buyer . "',
    '".$direct_to_process . "',
    '".$direct_to_exporter . "',
    '".$trader_within_the_brgy . "',
    '".$trader_within_the_municipal . "',
    '".$trader_in_neighoring_city . "',
    '".$land_preparation . "',
    '".$planting . "',
    '".$cultivation . "',
    '".$farm_maintenance . "',
    '".$copra_making3 . "',
    '".$dehusking . "',
    '".$drying . "',
    '".$charcoal_making2 ."'
)";
$result = mysqli_query($conn, $sql);
header('location:farm.php');
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

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body id="page-top" onload="getLocation()">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <?php include'sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php include'nav.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                         <div class="container">

                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">FARM INFORMATION</h1>
                                                </div>
                                                <form class="user" method="post">
                                                    <input type="hidden" name="lng" id="lng" value=""  />
                                                    <input type="hidden" name="lat" id="lat" value=""  />
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <label>Farm Name</label>
                                                            <input type="text" class="form-control " name="farm_name" required >
                                                        </div>
                                                        <div class="col-4">
                                                        <label>Municipality/City</label>
                                                            <select class="form-control " name="city" required>
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
                                                        <div class="col-4">
                                                            <label>Barangay</label>
                                                            <input type="text" class="form-control " name="barangay" required >
                                                        </div>
                                                        <div class="col-4">
                                                            <label>Year Planted</label>
                                                            <input type="number" id="yearInput" min="1900" max="2100" step="1" class="form-control " name="year_planted" required>
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

                                                    </div>

                                                            <hr class="sidebar-divider">
                                                            <hr class="sidebar-divider">
                                                    
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12"> 
                                                            <div class="form_group">
                                                             <label for="map_link">Map Location : </label>
                                                            </div>
                                                        </div> 
                                                            <div id='map' style='width: 100%; height: 300px;'></div>
                                                    </div> 
                                                    <hr>
                                                    <div class="form-group row">
                                                    <button type="submit" name="farm_save" class="btn btn-primary btn-user btn-block col-sm-6"> Save </button>
                                                    <hr>
                                                    <a href="farm.php" class="btn btn-google btn-user btn-block col-sm-6"> Cancel </a>
                                                    </div>
                                                </form>
                                                <hr>
                                            </div>
                                        </div>
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

    
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
      $(function () {
        $("#dataTable").DataTable({
          "responsive": true,
          "autoWidth": false,
          "bDestroy": true,
        });
      });
    </script>
    <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        alert('Geolocation is not supported by this browser.');
      }
    }

    function showPosition(position) {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
      document.getElementById('lng').value = longitude;
      document.getElementById('lat').value = latitude;
      mapboxgl.accessToken = 'pk.eyJ1Ijoicm9tZ29kIiwiYSI6ImNsaTc2c3lpMzBsejgzZWx1eHF2N2szMDkifQ.f3wXh8auB8hZQ1oB_ojnNw';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [126.2510726,6.9322763],
    zoom: 11
  });
  
  var draggableMarker = new mapboxgl.Marker({
  draggable: true
}).setLngLat([126.2510726,6.9322763])
  .addTo(map);
  
  
  draggableMarker.on('dragend', function(e) {
  var lngLat = draggableMarker.getLngLat();
  console.clear();
  console.log(lngLat.lng + ', ' + lngLat.lat);
  document.getElementById('lng').value = lngLat.lng;
  document.getElementById('lat').value = lngLat.lat;
});
    }
    function showError(error) {
      let message = '';
      switch(error.code) {
        case error.PERMISSION_DENIED:
          message = 'User denied the request for Geolocation.';
          break;
        case error.POSITION_UNAVAILABLE:
          message = 'Location information is unavailable.';
          break;
        case error.TIMEOUT:
          message = 'The request to get user location timed out.';
          break;
        case error.UNKNOWN_ERROR:
          message = 'An unknown error occurred.';
          break;
      }
      alert(message);
    }
    longitude = document.getElementById('lng').value;
    latitude = document.getElementById('lat').value ;
  </script>
</body>
</html> 