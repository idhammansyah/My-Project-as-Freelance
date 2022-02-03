<?php 
     // Check if user has requested to get detail
    if (isset($_POST["get_data"])){
         // Get the ID of customer user has selected
         $id = $_POST["id"];

        // Connecting with database
        // $connection = mysqli_connect("localhost", "root", "", "tribestmotor");
        include 'koneksi.php';

        // Getting specific customer's detail
        $sql = "SELECT * FROM gambar WHERE id='$id'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_object($result);

        // Important to echo the record in JSON format
        echo json_encode($row);

        // Important to stop further executing the script on AJAX by following line
        exit();  
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
    </head>
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
    <body class="goto-here">
        <nav
            class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
            id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">Tribest Accessories</a>
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
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item active">
                            <a href="shop.php" class="nav-link">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form action ="search.php" method="get" class="d-flex justify-content-between search-inner">
                        <input type="text" class="form-control" name ="keyword" placeholder="Search Here.." autocomplete="off">
                        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                    </form>
                    
                </div>
            </div>
        </nav>
        <!-- END nav -->

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
                                <!-- <p> <a href="#" class="btn btn-primary">View Details</a> </p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <hr>
        
        <br>


        <script src="jquery-3.3.1.min.js"></script>

        <section class="ftco-section" style="border: 10px; background-color: #b0c7bd;">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">  
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <!-- <span class="subheading">Featured Products</span> -->
                        <h1 class="mb-4">Our Products</h1>
                        <p>Check Our Product Here</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- query produk -->
                    <?php
                        // Connecting with database and executing query
                        include "koneksi.php"; 
                        $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                        
                        $limit = 16; 
                        $limit_start = ($page - 1) * $limit;
                        $no = $limit_start + 1;


                        $sql = "SELECT * FROM gambar LIMIT $limit_start, $limit";
                        $result = mysqli_query($db, $sql);
                    ?>                
                    <?php while ($row = mysqli_fetch_object($result)) { ?>
                        <!-- Include bootstrap & jQuery -->
                        
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="#" data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="img-prod" onclick="loadData(this.getAttribute('data-id'))" 
                                                            data-id="<?php echo $row->id; ?>" >
                                    <img class="img-fluid" img src="images/<?php echo $row->namabarang;?>" alt ="tribestmotor">
                                    <div class="overlay"></div>
                                </a>
                            
                                <div class="text py-3 pb-2 px-3 text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    <h8><?php echo $row->namaproduk;?></h8><p></p>
                                    <h9><?php echo $row->jenisbarang;?></h9>                
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <hr>
                                            <p class="price">
                                                <span class="price">Rp. <?php echo number_format($row->hargabarang);?> </span></p>
                                        </div>
                                    </div>
                                    <div style="cursor:pointer" class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a  class="buy-now d-flex justify-content-center align-items-center mx-1"
                                                onclick="loadData(this.getAttribute('data-id'))" 
                                                            data-id="<?php echo $row->id; ?>" >
                                                <span>
                                                    <i class="ion-ios-cart"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-hidden = "true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <center><h3>Yuk belanja dengan pilih link salah satu dibawah ini: </h3></center>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div id = "modal-body" >
                                    Press ESC button to exit.
                                </div>
                                <!-- <div class="modal-footer"> -->
                                <div class="text py-3 pb-2 px-3 text-center">
                                    <h4>SELAMAT BERBELANJA</h4>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!--Navigate halaman -->
                    <legend><div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27" id="mybutton">
                                <?php
                                    $query_jumlah = "SELECT count(*) AS jumlah FROM gambar";
                                    $data_produk = $db->prepare($query_jumlah);
                                    $data_produk->execute();
                                    $res1 = $data_produk->get_result();
                                    $row = $res1->fetch_assoc();
                                    $total_records = $row['jumlah'];
                                ?>
                                <ul>
                                  <?php
                                    $jumlah_page = ceil($total_records / $limit);
                                    $jumlah_number = 9; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                                    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                                    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
                                    
                                    if($page == 1){
                                      // echo '<li class="text-center disabled"><a class="block-27" href="#">First</a></li>';
                                      // echo '<li class="text-center disabled"><a class="block-27" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                                    } else {
                                      $link_prev = ($page > 1)? $page - 1 : 1;
                                      // echo '<li class="text-center"><a class="block-27" href="?page=1">First</a></li>';
                                      echo '<li class="text-center"><a class="block-27" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                                    }
                               
                                    for($i = $start_number; $i <= $end_number; $i++){
                                      $link_active = ($page == $i)? ' active' : '';
                                      echo '<li class="text-center '.$link_active.'"><a class="block-27" href="?page='.$i.'">'.$i.'</a></li>';
                                    }
                               
                                    if($page == $jumlah_page){
                                      echo '<li class="text-center disabled"><a class="block-27" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                                      // echo '<li class="text-center disabled"><a class="block-27" href="#">Last</a></li>';
                                    } else {
                                      $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                                      echo '<li class="text-center"><a class="block-27" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                                      // echo '<li class="text-center"><a class="block-27" href="?page='.$jumlah_page.'">Last</a></li>';
                                    }
                                  ?>
                                </ul>
                            </div>
                        </div>
                    </div></legend>
                </div>
            </div>
        </section>

        <script>
    function loadData(id) {
        console.log(id);
        $.ajax({
            url: "shop.php",
            method: "POST",
            data: {get_data: 1, id: id},success: function (response) {
                response = JSON.parse(response);
                console.log(response);
                var html = "";
                var linktokopedia = response.linktokped;
                var linkshopee = response.linkshopee;
                var linklinkbukalapak = response.linkbukalapak;
                var linklazada = response.linklazada;
                var linkblibli = response.linkblibli;                       

            
                html += "<div class='modal-body'>";                    
                html += "<div style='text-align:justify;' class='img-responsive'> <img src='img/tokopedia.jpg' width='100px' height='100px' style='float:left;'alt=''></div>";
                html += "<div class='text py-3 pb-2 px-3 text-center'>";
                html += "<h4><a href= "+linktokopedia+" >Klik link untuk belanja barang ini!</a></h4>";
                html += "</div>";
                html += "</div>";

                html += "<div class='modal-body'>";                    
                html += "<div style='text-align:justify;' class='img-responsive'> <img src='img/shopee.jpg' width='100px' height='100px' style='float:left;'alt=''></div>";
                html += "<div class='text py-3 pb-2 px-3 text-center'>";
                html += "<h4><a href= "+linkshopee+" >Klik link untuk belanja barang ini!</a></h4>";
                html += "</div>";
                html += "</div>";

                html += "<div class='modal-body'>";                    
                html += "<div style='text-align:justify;' class='img-responsive'> <img src='img/bukalapak.jpg' width='100px' height='100px' style='float:left;'alt=''></div>";
                html += "<div class='text py-3 pb-2 px-3 text-center'>";
                html += "<h4><a href= "+linklinkbukalapak+" >Klik link untuk belanja barang ini!</a></h4>";
                html += "</div>";
                html += "</div>";

                html += "<div class='modal-body'>";                    
                html += "<div style='text-align:justify;' class='img-responsive'> <img src='img/lazada.png' width='100px' height='100px' style='float:left;'alt=''></div>";
                html += "<div class='text py-3 pb-2 px-3 text-center'>";
                html += "<h4><a href= "+linklazada+" >Klik link untuk belanja barang ini!</a></h4>";
                html += "</div>";
                html += "</div>";

                html += "<div class='modal-body'>";                    
                html += "<div style='text-align:justify;' class='img-responsive'> <img src='img/blibli.png' width='100px' height='100px' style='float:left;'alt=''></div>";
                html += "<div class='text py-3 pb-2 px-3 text-center'>";
                html += "<h4><a href= "+linkblibli+" >Klik link untuk belanja barang ini!</a></h4>";
                html += "</div>";
                html += "</div>";

                // And now assign this HTML layout in pop-up body
                $("#modal-body").html(html);
                $("#myModal").modal();
                
            }
            
        });
        
    }
    
</script>
 
            <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light"></section>
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