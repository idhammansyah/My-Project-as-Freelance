<?php include 'koneksi.php'; 

session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}

?>

<?php
    // Check if user has requested to get detail
    if (isset($_POST["get_data"]))
    {
        // Get the ID of customer user has selected
        $id = $_POST["id"];

        // Connecting with database
        $connection = mysqli_connect("localhost", "root", "", "tribestmotor");

        // Getting specific customer's detail
        $sql = "SELECT * FROM gambar WHERE id='$id'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_object($result);

        // Important to echo the record in JSON format
        echo json_encode($row);

        // Important to stop further executing the script on AJAX by following line
        exit();
    }
?>

<?php
    // Connecting with database and executing query

    $keyword = $_GET['keyword'];
    $semuadata = array();

    $sql = "SELECT * FROM gambar WHERE MATCH( namaproduk )  AGAINST( '%$keyword%' )";
    $result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html>
	<head>
        <title>Pencarian <?php echo $keyword;?></title>
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
	<body>
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
                <a class="navbar-brand" href="indexlogin.php">Tribest Accessories</a>
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
                            <a href="indexlogin.php" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item active">
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
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form action ="pencarian.php" method="get" class="d-flex justify-content-between search-inner">
                        <input type="text" class="form-control" name ="keyword" placeholder="Search Here.." autocomplete="off">
                        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                    </form>
                    
                </div>
            </div>
        </nav>

        <script src="jquery-3.3.1.min.js"></script>

        <section class="ftco-section" style="border: 10px; background-color: #b0c7bd;">
            <div class="container-fluid" style="border: 10px; background-color: #b0c7bd;">
                    <h3>Hasil Pencarian : <?php echo $keyword ?></h3>
                        <?php  if ((mysqli_num_rows($result)==0)) { ?>
                        <div class="alert alert-danger">Produk <strong><?php echo $keyword;?></strong> Tidak Ada!</div>
                        <?php }?>
            <div class="container">
                <div class="row">
                    <!--Jalustang-->
                    <!-- query produk -->

                
                    <?php while ($row = mysqli_fetch_object($result)) { ?>
                        <!-- Include bootstrap & jQuery -->
                        
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="#" data-toggle="modal" data-target="#myModal" style="cursor:pointer" class="img-prod" onclick="loadData(this.getAttribute('data-id'))" 
                                                            data-id="<?php echo $row->id; ?>"  >
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
                                            <!-- <span class="price-sale">$80.00</span> -->
                                        </div>
                                    </div>
                                    <div style="cursor:pointer" class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a  class="buy-now d-flex justify-content-center align-items-center mx-1"
                                                onclick="loadData(this.getAttribute('data-id'))" 
                                                            data-id="<?php echo $row->id; ?>" >
                                                <span>

                                                    <i class="ion-ios-cart">
                                                            
                                                    </i>

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
                </div>
            </div>
        </section>

        <script>
    function loadData(id) {
        console.log(id);
        $.ajax({
            url: "shoplogin.php",
            method: "POST",
            data: {get_data: 1, id: id},success: function (response) {
                response = JSON.parse(response);
                console.log(response);
                var html = "";
                var linktokopedia = response.linktokped;
                var linkshopee = response.linkshopee;
                var linklinkbukalapak = response.linkbukalapak;
                var linklazada = response.linklazada;
                                        

            
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