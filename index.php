<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$int = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE divisi = 'Intelektual'");
$kmb = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE divisi = 'KMB'");
$hms = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE divisi = 'Humas'");
$ors = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE divisi = 'Orasi'");

$jml_int = mysqli_num_rows($int);
$jml_kmb = mysqli_num_rows($kmb);
$jml_hms = mysqli_num_rows($hms);
$jml_ors = mysqli_num_rows($ors);
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
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
                            <h1 class="title-4">Welcome back!
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
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">Sistem Manajemen Himpunan Informatika</h3>
                                <h4 class="title-2 m-b-30">Ini merupakan sebuah projek yang dibuat oleh mahasiswa Teknik Informatika Mandala
                                     jurusan 2019/2020, tentang sistem manajemen mahasiswa himpunan Teknik Informatika
                                    yang berisikan biodata dari masing masing mahasiswa sesuai divisinya.
                                </h2>
                                <!-- STATISTIC-->
                                <section class="statistic statistic2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="statistic__item statistic__item--green">
                                                    <h2 class="number"><?= $jml_int; ?></h2>
                                                    <span class="desc">Jumlah Divisi Intelektual</span>
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-book"></i>
                                                    </div>
                                                </div>
                                                <a href="intel.php">
                                                <Button type="button" class="btn btn-lg btn-success m-b-30">
                                                    Tabel Intelektual
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="statistic__item statistic__item--orange">
                                                    <h2 class="number"><?= $jml_kmb; ?></h2>
                                                    <span class="desc">Jumlah Divisi kmb</span>
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-audio"></i>
                                                    </div>
                                                </div>
                                                <a href="kmb.php">
                                                <Button type="button" class="btn btn-lg btn-warning m-b-30">
                                                    Tabel kmb
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="statistic__item statistic__item--blue">
                                                    <h2 class="number"><?= $jml_hms; ?></h2>
                                                    <span class="desc">Jumlah Divisi Humas</span>
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-account-o"></i>
                                                    </div>
                                                </div>
                                                <a href="humas.php">
                                                <Button type="button" class="btn btn-lg btn-primary m-b-30">
                                                    Tabel Humas
                                                </Button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="statistic__item statistic__item--red">
                                                    <h2 class="number"><?= $jml_ors; ?></h2>
                                                    <span class="desc">Jumlah Divisi Orasi</span>
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-run"></i>
                                                    </div>
                                                </div>
                                                <a href="orasi.php">
                                                <Button type="button" class="btn btn-lg btn-danger m-b-30">
                                                    Tabel Orasi
                                                </Button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- END STATISTIC-->
                            </div>
                            <!-- END CHART-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <h3 class="title-5 m-b-35" style="text-align: center;">statistics</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1 ">
                                <h3 class="title-3 m-b-30">Jumlah Data Divisi</h3>
                                <div class="chart-wrap m-b-30">
                                    <canvas id="doughut"></canvas>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">Jumlah Data Angkatan</h3>
                                <div class="chart-wrap">
                                    <canvas id="teamChart"></canvas>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </section>

            

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
    <script>
        <?php 
        $produk = mysqli_query($konek, "SELECT divisi, COUNT(*) jumlah FROM mahasiswa GROUP BY divisi HAVING COUNT(jumlah)  > 0");
        while($row = mysqli_fetch_array($produk)){
        $nama_divisi[] = $row['divisi'];
        $jumlah_divisi[] = $row['jumlah'];
        }
        ?>

    var ctx = document.getElementById("doughut");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: <?php echo json_encode($jumlah_divisi); ?>,
            backgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ],
            hoverBackgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ]

          }],
          labels: <?php echo json_encode($nama_divisi); ?>
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true
        }
      });
  }
    </script>
    <script>

<?php 
        $produk = mysqli_query($konek, "SELECT angkatan, COUNT(*) jumlah FROM mahasiswa GROUP BY angkatan HAVING COUNT(jumlah)  > 0");
        while($row = mysqli_fetch_array($produk)){
        $angkatan[] = $row['angkatan'];
        $jumlah_angkatan[] = $row['jumlah'];
        }
        ?>

        var ctx = document.getElementById("teamChart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: <?php echo json_encode($angkatan); ?>,
          type: 'line',
          defaultFontFamily: 'Poppins',
          datasets: [{
            data: <?php echo json_encode($jumlah_angkatan); ?>,
            label: "Expense",
            backgroundColor: 'rgba(0,103,255,.15)',
            borderColor: 'rgba(0,103,255,0.5)',
            borderWidth: 3.5,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(0,103,255,0.5)',
          },]
        },
        options: {
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Poppins',
            bodyFontFamily: 'Poppins',
            cornerRadius: 3,
            intersect: false,
          },
          legend: {
            display: false,
            position: 'top',
            labels: {
              usePointStyle: true,
              fontFamily: 'Poppins',
            },


          },
          scales: {
            xAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: false,
                labelString: 'Month'
              },
              ticks: {
                fontFamily: "Poppins"
              }
            }],
            yAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: true,
                labelString: 'Value',
                fontFamily: "Poppins"
              },
              ticks: {
                fontFamily: "Poppins"
              }
            }]
          },
          title: {
            display: false,
          }
        }
      });
    }
    </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
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
