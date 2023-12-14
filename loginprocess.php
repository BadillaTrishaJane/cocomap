<?php
include 'connectMySQL.php';

if (isset($_POST['LOGIN'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        // Display error message if username or password is empty
        echo "<script src='js/sweetalert2.all.min.js'></script>
           <body onload='error()'></body>
           <script> 
           function error(){
           Swal.fire({
                icon: 'error',
                title: 'Login failed!'
           })
           }</script>";
        include 'index.php';
    } else {



        $query = "SELECT * FROM users WHERE username = '$username' AND  password = '$password'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                echo 'tas';
                $user_id = $row['user_id'];
                $account_type = $row['account_type'];

                session_start();
                $_SESSION['user_id'] = $user_id;

                if($account_type == '1')
                {
                    header('location:admin/');
                }
                else
                {
                    header('location:user/');
                }
            }
        }


        echo "<script src='js/sweetalert2.all.min.js'></script>
           <body onload='error()'></body>
           <script> 
           function error(){
           Swal.fire({
                icon: 'error',
                title: 'Login failed!'
           })
           }</script>";
        include 'login.php';
    }
}
?>
