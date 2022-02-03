<?php
session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tribest Accessories</title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">

        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            @font-face { 
                font-family: 'Dodge'; 
                src: url(fonts/dodge/Dodgv2i.ttf) format('truetype');
                }
                .kontener{ 
                 background-color: green; 
                 display: flex; 
                 justify-content: center; 
                 align-items: stretch; 
                } 
                .child-div{ 
                 background-color: red; 
                 margin: 0 20px; 
                } 
        </style>
    </head>
    <body class="goto-here">

            <div align='center'>
                <?php
                //ubah timezone menjadi jakarta
                date_default_timezone_set("Asia/Jakarta");

                //ambil jam dan menit
                $jam = date('H:i');

                //atur salam menggunakan IF
                if ($jam > '05:30' && $jam < '10:00') {
                   $salam = 'Pagi';
                } elseif ($jam >= '10:00' && $jam < '15:00') {
                    $salam = 'Siang';
                } elseif ($jam < '18:00') {
                    $salam = 'Sore';
                } else {
                    $salam = 'Malam';
                }
                echo 'Selamat ' . $salam;?>, <b><?php echo $nama;?>, ingin </b> <a href="logout.php"><b>Logout ?</b></a>
            </div>
        <nav
            class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
            id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="indexlogin.php">TRIBEST ACCESSORIES</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#ftco-nav"
                    aria-controls="ftco-nav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                    Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="indexlogin.php" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="shoplogin.php" class="nav-link">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutlogin.php" class="nav-link">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="contactlogin.php" class="nav-link">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a href="paneladmin.php" class="nav-link">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="search_input" id="search_input_box">
                <div class="container ">
                    <form class="d-flex justify-content-between search-inner">
                        <input
                            type="text"
                            class="form-control"
                            id="search_input"
                            placeholder="Search Here...">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div> -->
        </nav>
    <!-- END nav -->

    <!-- Home Photo Slider-->
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(img/motor_awal.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div
                        class="row slider-text justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2" style="font-family: Dodge;">BUY AND SHOP NOW</h1>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Slider item number 2 -->
            <div class="slider-item" style="background-image: url(img/motorw.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div
                        class="row slider-text justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">100% Best Qu1ality &amp; Products</h1>
                            <h2 class="subheading mb-4">We Sell The Best Motorcycle Accessories
                            </h2>
                            <p>
                                <!-- <a href="#" class="btn btn-primary">View Details</a> -->
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <hr>
    <br>

    <!-- Product Sections -->
    <section class="ftco-section" style="border: 10px; background-color: #b0c7bd;">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <!-- <span class="subheading">Featured Products</span> -->
                    <h1 class="mb-4">Our Products</h1>
                    <p>Check Our Product By Categories</p>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="border: 10px; background-color: #b0c7bd;">
            <div class="row">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/shockbreakerr.png" alt="Tribest">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">ShockBreaker</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/klaksonn.png" alt="Tribest">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Klakson</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/spionn.png" alt="Tribest">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Spion</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/lampu.png" alt="TriBest">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Lampu Motor</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/handgripp.png" alt="TriBest">
                            <!-- <span class="status">30%</span> -->
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Hand Grip</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="shop.php" class="img-prod"><img class="img-fluid" src="img/next.png" alt="TriBest">
                        <!-- <div class="overlay"></div> -->
                    </a>
                </div>

            </div>

        </div>
    </section>
    <br>
    <!-- ALAMAT TOKO : Jalan Perumahan STS 3 Block C/7 -->

    <hr><br>
    <!-- Social Media Service -->
    <section class="ftco-section" style="background-color: whitesmoke;">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="mb-4">Our Social Media</h1>
                    <p>Follow And Contact Us On Social Media</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/fb.png" alt="Facebook">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Facebook</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/ig.png" alt="Instagram">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Instagram</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="https://bit.ly/3rsY2u8" class="img-prod1"><img class="img-fluid" src="img/wa.png" alt="WhatsApp">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="https://bit.ly/3rsY2u8">WhatsApp</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <hr><br>
    <!-- Store Media Online Partnership Sections -->
    <section class="ftco-section" style="background-color: skyblue;">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="mb-4">Visit Our Online Store</h1>
                    <p>We Are On Online Store And GET IT NOW</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="img/bukalapak.jpg" alt="BukaLapak">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">BukaLapak</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/blibli.png" alt="BliBli">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">BliBli</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/shopee.jpg" alt="Shopee">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Shopee</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/Tokopedia.jpg" alt="Tokopedia">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Tokopedia</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/lazada.png" alt="Lazada">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-3 px-3 text-center">
                            <h3>
                                <a href="#">Lazada</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <hr>
    <br>
    <!-- Section Service -->
    <section class="ftco-section" style="background-color: whitesmoke;">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="mb-4">Our Service Are The Best</h1>
                    <p>We Serve The Best Out Of The Best</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/starss.png" alt="Rating">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">4.7 Rating On
                                    <p>E-Commerce Shop</p>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod2"><img class="img-fluid" src="img/100.png" alt="Quality">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">100% Best
                                    <p>Quality Product</p>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod1"><img class="img-fluid" src="img/customer.png" alt="CS">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3>
                                <a href="#">Fast Respons
                                    <p>Customer Service</p>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <hr>
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel">
                            <span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!--Copy right-->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | TriBest Accessories
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px"><circle
            class="path-bg"
            cx="24"
            cy="24"
            r="22"
            fill="none"
            stroke-width="4"
            stroke="#eeeeee"/><circle
            class="path"
            cx="24"
            cy="24"
            r="22"
            fill="none"
            stroke-width="4"
            stroke-miterlimit="10"
            stroke="#F96D00"/></svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>