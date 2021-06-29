<?php
  session_start();
//   if(!isset($_SESSION['username'])){
//       header('location:login.php');
//   }
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pelayanan Desa Lumban Sitorus</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/jquery.lightbox.css" rel="stylesheet"/>
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/templatemo_style.css" rel="stylesheet" />
</head>
<body>
     <div>
        <?php  
    include_once"header.php";
  ?>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color: lavender">
      <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="indexa.php"><i class="fa fa-home"></i>Beranda</a>
  </li>
  <li class="nav-item dropdown">
      <a class="nav-link" href="pemerintahandesaa.php"><i class="fa fa-home"></i> Pemerintah Desa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index1a.php"><i class="fa fa-binoculars"></i>Pelayanan Desa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="organisasia.php"><i class="fa fa-folder-open"></i>Organisasi Desa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="kegiatandesaa.php"><i class="fa fa-folder-open"></i>Kegiatan Desa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="lap_penduduka.php"><i class="fa fa-folder-open"></i>Laporan Penduduk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logouta.php"><i class="fa fa-folder-open" id="logout"></i>Keluar</a>
  </li>
</ul>
    </nav>
  <section id="templatemo_slideshow">
    <div class="container">
        <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li class="row">
                <img src="images/lum.jpg" alt="slider image 1;" style="height: 480px" />
                <div class="flex-caption col-md-5 col-md-push-1 hidden-xs">
                    <img src="images/jis.jpg">
                </div>
            </li>
            <li class="row">
                <img src="images/IMG_1196.jpg" alt="slider image 2" style="height: 480px"/>
            </li>
            <li class="row">
                <img src="images/IMG_1190.jpg" alt="slider image 4" style="height: 480px"/> 
            </li>
        </ul>
        </div>
    </div>  
</section>
<section id="templatemo_about">
    <div class="container">
        <div class="row">
            <h1>Tentang Desa Lumban Sitorus</h1>
        </div>
        <div class="row">
           <p><b>Lumban Sitorus</b> adalah salah satu desa di Kecamatan Parmaksian, Kabupaten Toba Samosir, Provinsi Sumatera Utara, Indonesia.<br>
              
                Luas Desa Lumban Sitorus: 2.08 km <sup>2</sup><br>
                Jumlah Penduduk: 615 jiwa (tahun 2015)<br>
                Kepadatan : 295.67 jiwa/km<sup>2</sup></p>
            Kepala Desa Lumban Sitorus saat ini adalah Bapak Jisman Sitorus.
        
            <br><br><br>
                <h2><b>Sosial Kemasyarakatan</b></h2>
                <b>Suku</b>
                  <p>
                    Mayoritas penduduk Desa Lumban Sitorus adalah suku <font color="blue">Toba</font>.
                </p>    
    
                <b>Agama</b>
                  <p>
                    Mayoritas penduduk Desa Lumban Sitorus memeluk agama <font color="blue">Kristen</font>.
                    Di Desa Lumban Sitorus juga terdapat sarana ibadah yaitu dua bangunan Gereja dan satu Masjid.
                </p>  
            </div>


        <div class="container">
            <div class="solidline" ></div>
        </div>
        <section id="templatemo_services" style="background-color: skyblue">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <h1>Visi dan Misi</h1>
                    <br>
                    <h2>Visi:</h2>
                    "Terbangunnya tata kelola Pemerintahan Desa yang baik dan bersih guna terwujudnya kehidupan masyarakat desa yang adil, makmur dan sejahtera serta berbudaya dan berakhlak mulia."

                    <br><br><br><h2>Misi:</h2><br>
                    1. Meningkatkan tata pemerintahan yang demokratis, transparan, efisien dan efektif.<br>
                    2. Meningkatkan pembangunan infrastruktur pedesaan yang terarah dan berkualitas.<br>
                    3. Meningkatkan peran kelembagaan dan masyarakat desa dalam mendorong pembangunan desa.</p>
        </div>
       </div>
   </section>
<div class="container">
    <div class="container">
    <div class="solidline"></div>
</div>
<section id="templatemo_gallery">
    <div id="gallery" class="container">
        <div class="row">
            <h1>Gallery</h1>
        </div>
        <ul class="thumbs row">
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery"
                        href="images/IMG_0163.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_0163.jpg" alt="image 1" />   
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery"
                        href="images/IMG_0143.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_0143.jpg" alt="image 2" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
            <div>
                <a 
                    class="overlay" 
                    data-lightbox="gallery"
                    href="images/IMG_1265.jpg">
                    <span class="glyphicon glyphicon-zoom-in"></span>
                </a>
                <img src="images/IMG_1265.jpg" alt="image 3" />
            </div>
            </li>
            <li class="col-md-1 col-sm-1 hidden-xs"></li>
        </ul>
        <ul class="thumbs row">
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="images/IMG_0239.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_0239.jpg" alt="image 4" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="images/IMG_0876.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_0876.jpg" alt="image 5" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="images/IMG_1221.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_1221.jpg" alt="image 6" />
                </div>
            </li>
            <li class="col-md-1"></li>
        </ul>
        <ul class="thumbs row">
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="images/IMG_1225.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_1225.jpg" alt="image 7" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="images/IMG_1195.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="images/IMG_1195.jpg" alt="image 8" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
            <div>
                <a 
                    class="overlay" 
                    data-lightbox="gallery"
                    href="images/IMG_1187.jpg">
                    <span class="glyphicon glyphicon-zoom-in"></span>
                </a>
                <img src="images/IMG_1187.jpg" alt="image 9" />
            </div>
            </li>
        </ul>
    </div>
</section> <!-- end of templatemo_gallery -->
<section id="templatemo_contact">
    <div class="container">
        <div class="row" id="templatemo_contact_gray_wap">
            <div class="col-md-24 col-sm-24">
                <h1 class="margin_top">Kontak</h1>
            </div>
            <div class="col-md-24 col-sm-24">
                <div id="map-canvas"></div>
            </div>
            <div class="col-md-9 col-sm-18 col-sm-push-3">
                <p>
                    <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp; Desa Lumban Sitorus, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parmaksian, Toba Samosir, Sumatera Utara<br />
                    <span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp; Tel: 0812-6025-1484<br />
                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp; Email: imransitorus@gmail.com<br />
                </p>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-9  col-sm-18 col-sm-push-3">
               <ul class="icon">
                    <li><a href="#"><img src="images/facebook.jpg" style="border-radius: 50%" alt="Facebook" /></a></li>
                    <li><a href="#"><img src="images/templatemo_icon_2.png" alt="Google+" /></a></li>
                    <li><a href="#"><img src="images/templatemo_icon_3.png" alt="Instagram" /></a></li>
                    <li><a href="#"><img src="images/templatemo_icon_4.png" alt="RSS" /></a></li>
                </ul>
            </div>  
        </div>
        <div class="row" id="templatemo_footer">
            <div class="col-md-24" >
                <p>Copyright &copy; Desa Lumban Sitorus</p>
            </div>
        </div>
    </div>  
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</section>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollto.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.lightbox.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>