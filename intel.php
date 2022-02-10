<?php 
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE divisi = 'Intelektual'");
 ?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Manajemen Informatika | Dashboard</title>

    <!-- Fontfaces CSS-->
     <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-columns"></i>Home
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="tabel.php">
                                    <i class="fas fa-table"></i>
                                    <span class="bot-line"></span>Tabel
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="intel.php">Tabel Intelektual</a>
                                    </li>
                                    <li>
                                        <a href="kmb.php">Tabel kmb</a>
                                    </li>
                                    <li>
                                        <a href="humas.php">Tabel Humas</a>
                                    </li>
                                    <li>
                                        <a href="orasi.php">Tabel Orasi</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tambah.php">
                                    <i class="fas fa-indent"></i>
                                    <span class="bot-line"></span>Tambah Data</a>
                            </li>
                            <li class="has-sub">
                                <a href="about.php">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-columns"></i>Home
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                            <a class="js-arrow" href="tabel.php">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="intel.php">Tabel Intelektual</a>
                                </li>
                                <li>
                                    <a href="kmb.php">Tabel KMB</a>
                                </li>
                                <li>
                                    <a href="humas.php">Tabel Humas</a>
                                </li>
                                <li>
                                    <a href="orasi.php">Tabel Orasi</a>
                                </li>
                            </ul>
                        </li>
                            <li>
                                <a href="tambah.php">
                                    <i class="fas fa-indent"></i>
                                    <span class="bot-line"></span>Tambah Data</a>
                            </li>
                            <li>
                                <a href="about.php">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>About Us</a>
                            </li>
                        </ul>
                </div>
            </nav>
            <div class="sub-header-mobile-2 d-block d-lg-none">
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">john doe</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">john doe</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        <!-- END HEADER MOBILE -->
        </header>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Tabel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Tabel Semua Mahasiswa
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <a href="intel.php">
                                                <Button type="button" class="btn btn-lg btn-success m-b-30">
                                                    Tabel Intelektual
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <a href="kmb.php">
                                                <Button type="button" class="btn btn-lg btn-warning m-b-30">
                                                    Tabel kmb
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <a href="humas.php">
                                                <Button type="button" class="btn btn-lg btn-primary m-b-30">
                                                    Tabel Humas
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <a href="orasi.php">
                                                <Button type="button" class="btn btn-lg btn-danger m-b-30">
                                                    Tabel Orasi
                                                </Button>
                                                </a>
                                            </div>
                                        </div>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="table_id" class="table table-borderless table-data3 display">
                                        <thead>
                                            <tr>
                                                <th>Aksi</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Angkatan</th>
                                                <th>No HP</th>
                                                <th>Divisi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($mahasiswa as $row) :?>
                                            <tr>
                                                <td>
                                                    <a href="edit.php?id=<?= $row["id"]; ?>"> <button type="button" class="btn btn-warning btn-sm">Edit</button></a><hr>  
                                                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');"> <button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                                                </td>
                                                <td><?= $row["nim"]; ?></td>
                                                <td><?= $row["nama"]; ?></td>
                                                <td><?= $row["angkatan"]; ?></td>
                                                <td><?= $row["no_hp"]; ?></td>
                                                <td><?= $row["divisi"]; ?></td>
                                            </tr>
                                            <?php $i++ ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © Himpunan Teknik Informatika Angkatan 2019/2020, created by <a href="https://web.facebook.com/bayu.cisaranten.14">Bayu Dirga</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
    <!--  <script src="vendor/jquery-3.2.1.min.js"></script> -->
    <script src="js/jquery.dataTables.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
