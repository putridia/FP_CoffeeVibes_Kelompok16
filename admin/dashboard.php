<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("../connection/connect.php");
error_reporting(0);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logocafe.png">
    <title>CoffeeVibes - Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header bg-dark">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header bg-dark">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b><img src="images/logocafe.png" alt="homepage" class="dark-logo" width = "25px"/></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="text-white"><b>CoffeeVibes.</b></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifikasi</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Periksa Semua Notifikasi</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> LogOut</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar" style="position: fixed;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Admin Panel</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Home</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Options</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Users</a></li>
								<li><a href="add_users.php">Add Users</a></li>
								
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Kategori Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="allkategori.php">All Kategori Menu</a></li>
                                <li><a href="add_kategori.php">Add Kategori Menu</a></li>
                                
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menu</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_orders.php">All Orders</a></li>
								  
                            </ul>
                        </li>
                         
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                     <div class="row">
                   
                    <div class="col-md-3">
                        <div class="card p-30 bg-info">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="text-white"><?php $sql="select * from menu_kategori";
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0 text-white">Kategori Menu</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					 <div class="col-md-3 ">
                        <div class="card p-30 bg-primary">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="text-white"><?php $sql="select * from menu";
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0 text-white">Menu</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media ">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from users";
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-3">
                        <div class="card p-30 bg-secondary">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-shopping-cart f-s-40 color-white" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="text-white"><?php $sql="select * from users_orders";
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0 text-white">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Chart Bar -->
                    <div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <canvas id="chart-bar" style="width: 100%; height: 270px;"></canvas>
                                    <br>
                                    <h6 class="m-0 font-weight-bold text-dark"><center>Jumlah Berdasarkan Status Order</center></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <!--Custom JavaScript -->
                    <script src="js/custom.min.js"></script>
                    <?php
                    // $db = mysqli_connect("localhost", "root", "", "easpemweb_db");

                    // Memastikan koneksi berhasil
                    // if (!$db) {
                    //     die("Koneksi gagal: " . mysqli_connect_error());
                    // }

                    $pesanan = mysqli_query($db, "SELECT status, COUNT(*) as date FROM users_orders GROUP BY status ORDER BY date DESC");
                    $nama_pesanan = array();
                    $jumlah_pesanan = array();
                    $pesanan = mysqli_query($db, "SELECT status, COUNT(*) as jumlah FROM users_orders GROUP BY status ORDER BY jumlah DESC");

                    while ($row = mysqli_fetch_array($pesanan)) {
                        $pesanan_value = $row['status'];
                        if ($pesanan_value === null) {
                            $pesanan_value = "unprocessed";
                        }
                        // Tambahkan "Data Belum Diproses" ke dalam array jika tidak ada status yang null
                        $nama_pesanan[] = $pesanan_value;
                        $jumlah_pesanan[] = $row['jumlah'];
                    }                    

                    // Array warna sesuai dengan jumlah label
                    $warna_label = array(
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    );
                    ?>
                    <script>
                        // Chart.js code
                        document.addEventListener("DOMContentLoaded", function(event) {
                            var ctx = document.getElementById("chart-bar").getContext("2d");
                            var chartData = {
                                labels: <?php echo json_encode($nama_pesanan); ?>,
                                datasets: [{
                                    label: 'Total Pesanan',
                                    data: <?php echo json_encode($jumlah_pesanan); ?>,
                                    backgroundColor: <?php echo json_encode($warna_label); ?>,
                                    borderColor: 'rgba(38, 50, 56, 1)',
                                    borderWidth: 1
                                }]
                            };
                            var chartOptions = {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            };
                            var myBarChart = new Chart(ctx, {
                                type: "bar",
                                data: chartData,
                                options: chartOptions
                            });
                        });
                    </script>


                    <!-- End Chart Bar -->

                    <!-- Start Chat Pie -->
                    </script>
                    <div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <canvas id="chart-pie" style="width: 300px; height: 270px;"></canvas>
                                    <br>
                                    <h6 class="m-0 font-weight-bold text-dark"><center>Jumlah Menu Berdasarkan Kategori Menu</center></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <style>
                        .media {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                    </style>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <!--Custom JavaScript -->
                    <script src="js/custom.min.js"></script>
                    <?php
                    // $db = mysqli_connect("localhost", "root", "", "easpemweb_db");

                    // Memastikan koneksi berhasil
                    // if (!$db) {
                    //     die("Koneksi gagal: " . mysqli_connect_error());
                    // }

                    $kategori = mysqli_query($db, "SELECT m.mk_id, m.jumlah, k.title FROM 
                                                    (SELECT mk_id, COUNT(*) as jumlah FROM menu GROUP BY mk_id) m 
                                                    JOIN menu_kategori k ON m.mk_id = k.mk_id");
                    $nama_kategori = array();
                    $jumlah_menu = array();

                    while ($row = mysqli_fetch_array($kategori)) {
                        $kategori_value = $row['title'];
                        $nama_kategori[] = $kategori_value;

                        $jumlah_value = $row['jumlah'];
                        $jumlah_menu[] = $jumlah_value;
                    }
                    ?>

                    <!-- Custome Chart -->
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var nama_kategori = <?php echo json_encode($nama_kategori); ?>;
                        var jumlah_menu = <?php echo json_encode($jumlah_menu); ?>;
                        
                        var configPie = {
                            type: 'pie',
                            data: {
                                labels: <?php echo json_encode($nama_kategori); ?>,
                                datasets: [{
                                    data: <?php echo json_encode($jumlah_menu); ?>,
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.8)',
                                        'rgba(75, 192, 192, 0.8)',
                                        'rgba(255, 206, 86, 0.8)',
                                        'rgba(255, 99, 132, 0.8)',
                                        'rgba(153, 102, 255, 0.8)',
                                        'rgba(255, 159, 64, 0.8)'
                                    ],
                                    borderColor: 'rgba(255, 255, 255, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }
                        };

                        var ctxPie = document.getElementById('chart-pie');
                        if (ctxPie) {
                            var chartPie = new Chart(ctxPie, configPie);
                        }
                    });
                    </script>

                    <!-- End Chart Line -->
        </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2023 All rights reserved. Made with 21082010021 | 21082010035 </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
