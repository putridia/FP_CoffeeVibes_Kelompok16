<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="restaurant.png">
    <title>Kategori Menu | CoffeeVibes</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
           <!--header starts-->
           <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php">
                        <b><img src="images/logocafe.png" alt="homepage" class="dark-logo" width = "25px"/></b>
                        <b>CoffeeVibes.
                    </a>                    
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kategori Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                                
                                    <?php  //fetching records from table and filter using html data-filter tag
                                        $ress= mysqli_query($db,"select * from menu_kategori");  
                                        while($rows=mysqli_fetch_array($ress)){	
                                            echo ' <div class="col-xs-10 col-md-12 single-restaurant all '.$rowss['title'].'">
                                            <div class="restaurant-wrap">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-5 col-md-10 col-lg-3 text-center">
                                                        <a class="restaurant-logo" href="menu.php?res_id='.$rows['mk_id'].'" > </a>
                                                    </div>
                                                    <!--end:col -->
                                                    <div class="col-xs-12 col-md-12" >
                                                        <h5><a href="menu.php?res_id='.$rows['mk_id'].'" >'.$rows['title'].'</a></h5>
                                                        <div class="bottom-part">
                                                        </div>
                                                    </div>
                                                    <!-- end:col -->
                                                </div>
                                                <!-- end:row -->
                                            </div>
                                            <!--end:Restaurant wrap -->
                                            </div>';
                                        }
                                    ?>
                                </div>
                            </li>							
                            <?php
                            if(empty($_SESSION["user_id"])){ // if user is not login
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                                <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
                            }
                            else{
								//if user is login
								echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
								echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}
						    ?> 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/menu.png">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-12">                            
                        <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php 
                                    $ress= mysqli_query($db,"select * from menu_kategori");
									while($rows=mysqli_fetch_array($ress)){
										echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
											<div class="entry-logo">
                                                <a class="img-fluid" href="menu.php?res_id='.$rows['mk_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Food logo"></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="entry-dscr">
                                                <h5><a href="menu.php?res_id='.$rows['mk_id'].'" >'.$rows['title'].'</a></h5> <h6>'.$rows['deskripsi'].' <a href="#"></a></h6>
                                            </div>
                                            <!-- end:Entry description -->
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                            <div class="right-content bg-white">
                                                <div class="right-review">
                                                    <a href="menu.php?res_id='.$rows['mk_id'].'" class="btn theme-btn-dash">View Menu</a> 
                                                </div>
                                            </div>
                                            <!-- end:right info -->
                                        </div>';
                                    }
						        ?> 
                                </div>
                                <!--end:row -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 payment-options color-gray">
                        <h5>Semua Kartu Kredit Utama Diterima</h5>
                        <ul>
                            <li>
                                <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 address color-gray">
                        <h5>Alamat:</h5>
                        <p>Surabaya Timur - 60293.</p>
                        <h5>Hubungi kami di: <a href="tel:+6285733005991">+62 8573 3005 991</a></h5></div>
                    <div class="col-xs-12 col-sm-5 additional-info color-gray">
                        <h5>Siapa kami?</h5>
                        <p>Website Coffee Vibes ini dibuat khusus untuk melihat menu - menu yang tersedia pada coffee shop vibes. Sehingga memudahkan pengunjung untuk melakukan pembelian dan melihat menu yang akan dipilih untuk dihidangkan.Coffee Vibes ini terdapat fitur order atau pesan makanan secara online.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end:Footer -->
        </div>
  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>