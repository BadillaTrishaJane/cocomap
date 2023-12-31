<?php
include('../connectMySql.php');

if(isset($_POST['btn_save']))
{
$farm_id = $_POST['farm_id'];
$tree_name = $_POST['tree_name'];
$planting_pattern = $_POST['planting_pattern'];
$planting_distance = $_POST['planting_distance'];
$total = $_POST['total'];

$sql = "INSERT INTO tree 
(
    farm_id,
    tree_name,
    planting_pattern,
    planting_distance,
    total
)
VALUES 
(
    '". $farm_id ."',
    '". $tree_name. "',
    '". $planting_pattern. "',
    '". $planting_distance. "',
    '". $total. "'
)";
echo $sql;
$result = mysqli_query($conn, $sql);
header("location:tree.php");
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

    <title>Barangay</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
                                                    <h1 class="h4 text-gray-900 mb-4">TREE INFORMATION</h1>
                                                </div>
                                                <form class="user" method="post">
                                                                                                        <div class="form-group row">

                                                        <div class="col-6">
                                                        <label>Farm name</label>
                                                            <select class="form-control" name="farm_id" required>
                                                                <option value=""></option>
                                                                <?php
                                                                    $query = "SELECT * FROM farm ORDER BY farm_name";
                                                                    $result = $conn->query($query);
                                                                    while ($row = $result->fetch_assoc()) 
                                                                    {
                                                                     echo '<option value="'.$row['farm_id'].'">'.$row['farm_name'].'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                        <label>Tree/Variety</label>
                                                            <select class="form-control " name="tree_name" required>
                                                                <option value=""></option>
                                                                <option value="Laguna Tall">Laguna Tall</option>
                                                                <option value="Tagnanan Tall">Tagnanan Tall</option>
                                                                <option value="Tacunan Dwarf">Tacunan Dwarf</option>
                                                                <option value="Catigan Dwarf">Catigan Dwarf</option>
                                                                <option value="Tagnaman Tall">Tagnaman Tall</option>  
                                                                <option value="Local Tall">Local Tall</option>
                                                                <option value="Makapuno">Makapuno</option>
                                                                <option value="Native">Native</option>
                                                                <option value="PCA 15-1">PCA 15-1</option>
                                                                <option value="PCA 15-2">PCA 15-2</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                        <label>Planting Pattern</label>
                                                            <select class="form-control " name="planting_pattern" >
                                                                <option value=""></option>
                                                                <option value="Triangular">Triangular</option>
                                                                <option value="Square">Square</option>
                                                                <option value="Irregular">Irregular</option>
                                                                <option value="Triple Planting">Triple Planting</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                        <label>Planting Distance</label>
                                                            <select class="form-control " name="planting_distance" >
                                                                <option value=""></option>
                                                                <option value="8x8">8x8</option>
                                                                <option value="9x9">9x9</option>
                                                                <option value="10x10">10x10</option>
                                                                <option value="Irregular">Irregular</option>
                                                              
                                                            </select>
                                                        </div>
                                                         <div class="col-6">
                                                            <label>Total</label>
                                                            <input type="number" class="form-control " name="total" required >
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="form-group row">
                                                    <button type="submit" name="btn_save" class="btn btn-primary btn-user btn-block col-sm-6"> Save </button>
                                                    <hr>
                                                    <a href="tree.php" class="btn btn-google btn-user btn-block col-sm-6"> Cancel </a>
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
    <script src="../js/demo/datatables-demo.js"></script>
    <script>
      $(function () {
        $("#dataTable").DataTable({
          "responsive": true,
          "autoWidth": false,
          "bDestroy": true,
        });
      });
    </script>
</body>

</html>