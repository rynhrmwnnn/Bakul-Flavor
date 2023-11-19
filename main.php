<?php
    // session_start();
    if(empty($_SESSION['username_bakul'])){
        header('location:login');
    }
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_bakul]'");
    $hasil = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bakul Flavor</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body>
    <!-- Navbar -->
    <?php include "navbar.php";?>
    <!-- End Navbar -->
    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php";?>
            <!-- End Side -->
            <!-- Content -->
            <?php 
                include $page;
            ?>
            <!-- End Content -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>