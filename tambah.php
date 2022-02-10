<?php 
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }

    }
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
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
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
                                    <i class="fas fa-tachometer-alt"></i>Home
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="tabel.php">
                                    <i class="fas fa-shopping-basket"></i>
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
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Tambah Data</a>
                            </li>
                            <li class="has-sub">
                                <a href="about.php">
                                    <i class="fas fa-desktop"></i>
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
                                    <i class="fas fa-tachometer-alt"></i>Home
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tabel</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Tabel Intelektual</a>
                                </li>
                                <li>
                                    <a href="index2.php">Tabel kmb</a>
                                </li>
                                <li>
                                    <a href="index3.php">Tabel Humas</a>
                                </li>
                                <li>
                                    <a href="index4.php">Tabel Orasi</a>
                                </li>
                            </ul>
                        </li>
                            <li>
                                <a href="tambah.php">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Tambah Data</a>
                            </li>
                            <li>
                                <a href="about.php">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>About Us</a>
                            </li>
                        </ul>
                </div>

            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
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
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
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
                            <h1 class="title-4">Tambah Data Mahasiswa
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
                        <div class="statistic-chart-1">
                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nim" class=" form-control-label">NIM</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nim" name="nim" placeholder="NIM" class="form-control" required>
                                        <small class="form-text text-muted">Masukkan NIM</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="nama" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Nama Lengkap</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="angkatan" class=" form-control-label">Angkatan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="angkatan" id="angkatan" class="form-control" required>
                                            <option value="2019/2020">2019 / 2020</option>
                                            <option value="2020/2021">2020 / 2021</option>
                                            <option value="2021/2022">2021 / 2022</option>
                                            <option value="2022/2023">2022 / 2023</option>
                                        </select>
                                        <small class="help-block form-text">Masukkan Angkatan Mahasiswa</small>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="tempat_lahir" class=" form-control-label">Tempat Lahir</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Tempat Lahir Mahasiswa</small>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Tanggal Lahir Mahasiswa</small>
                                    </div>
                                </div> -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="jk" class=" form-control-label">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                    <input type="radio" id="jk" name="jk" value="Laki-Laki" required>
                                      <label for="jk">Laki - laki</label>
                                      <input type="radio" id="jk" name="jk" value="Perempuan">
                                      <label for="jk">Perempuan</label>
                                    
                                    </div>
                                    
                                </div> -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="agama" class=" form-control-label">Agama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="agama" id="agama" class="form-control" required>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="alamat" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Alamat Lengkap</small>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="no_hp" class=" form-control-label">Nomor Handphone</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" id="no_hp" name="no_hp" placeholder="Nomor Handphone" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Nomor Handphone</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="divisi" class=" form-control-label">Divisi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="divisi" id="divisi" class="form-control" required>
                                            <option value="Intelektual">Intelektual</option>
                                            <option value="KMB">KMB</option>
                                            <option value="Humas">Humas</option>
                                            <option value="Orasi">Orasi</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                                        <small class="help-block form-text">Masukkan Email</small>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <button type="submit" class="btn btn-lg btn-primary btn-sm" name="submit">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
    <script src="vendor/jquery-3.2.1.min.js"></script>
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
