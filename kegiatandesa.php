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
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pemerintahandesa.php"><i class="fa fa-home"></i>Pemerintah Desa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index1.php"><i class="fa fa-binoculars"></i>Pelayanan Desa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="organisasi.php"><i class="fa fa-folder-open"></i>Organisasi Desa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="kegiatandesa.php"><i class="fa fa-folder-open"></i>Kegiatan Desa</a>
         </li>
        <li class="nav-item">
            <a class="nav-link" href="lap_penduduk.php"><i class="fa fa-folder-open"></i>Laporan Penduduk</a>
        </li>
        <li class="nav-item" style="margin-left: 400px;">
            <a class="nav-link" href="logout.php"><i class="fa fa-folder-open" id="logout"></i>Keluar</a>
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
            <h1>Kegiatan di Desa Lumban Sitorus</h1>
        </div>
        <div class="row">
           
            <p><b>1. Program peningkatan kemampuan dan profesionalisme aparat pemerintah desa yaitu Kepala Desa dan Perangkat Desa, serta Badan Permusyawaratan Desa (BPD), dilaksanakan dengan kegiatan :</b></p>
                <ul>
                    <ol>Peningkatan disiplin aparat pemerintah desa;</ol>
                    <ol>Pembinaan aparat pemerintah desa;</ol>
                    <ol>Rapat koordinasi aparat Pemerintah Desa bersama Badan Permusyawaratan Desa dengan SKPD Kabupaten, Camat, atau UPT Dinas Kecamatan;</ol>
                </ul><br><br>   
            <p><b>2. Program tata kelola pemerintahan yang baik, serta mewujudkan kerjasama yang baik antara pemerintah desa dan Badan Permusyawaratan Desa (BPD) sesuai tugas pokok dan fungsinya masing-masing, dilaksanakan dengan kegiatan:</b></p>                 
                <ul>
                    <ol>Pengisian kekosongan perangkat desa;</ol>
                    <ol>Reorganisasi Badan Permusyawaratan Desa periode 2013-2019;</ol>
                    <ol>Pemilihan Kepala Desa masa jabatan 2013-2019;</ol>
                    <ol>Penyusunan Peraturan Desa tentang Kewenangan Desa.</ol>
                </ul><br><br>
            <p><b>3. Program peningkatan tertib administrasi penyelenggaraan pemerintahan desa, dilaksanakan dengan kegiatan:</b></p>
                <ul>
                    <ol>Pengisian buku-buku administrasi desa secara rutin dan benar;</ol>
                    <ol>Pengelolaan ketata usahan secara benar dan prosedural;</ol>
                    <ol>Pengelolaan kearsipan secara baik dan benar;</ol>
                    <ol>Pengisian buku profil desa dan pembuatan papan (data dinding) profil desa;</ol>
                </ul><br><br>
            <p><b>4. Program peningkatan kualitas pelayanan umum kepada masyarakat, dilaksanakan dengan kegiatan:</b></p>
                <ul>
                    <ol>Memberikan pelayanan administrasi secara secara cepat, tepat dan transparan</ol>
                    <ol>Memberikan layanan komunikasi dan informasi kepada masyarakat;</ol>
                    <ol>Pengadaan papan informasi;</ol>
                    <ol>Penyelesaian renovasi balai desa;</ol>
                </ul>
        </div>
            </div>

            <section id="templatemo_gallery">
    <div id="gallery" class="container">
        <div class="row">
            <h1>Gallery</h1>
        </div>
        <ul class="thumbs row">
            <h1><b>Foto Rapat</b></h1>
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery"
                        href="rapat/1.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="rapat/1.jpg" alt="image 1" />   
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery"
                        href="rapat/2.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="rapat/2.jpg" alt="image 2" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
            <div>
                <a 
                    class="overlay" 
                    data-lightbox="gallery"
                    href="rapat/3.jpg">
                    <span class="glyphicon glyphicon-zoom-in"></span>
                </a>
                <img src="rapat/3.jpg" alt="image 3" />
            </div>
            </li>
            <li class="col-md-1 col-sm-1 hidden-xs"></li>
        </ul>
        <ul class="thumbs row">
            <h1><b>Pembangunan Desa</b></h1>
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="pembangunan/1.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="pembangunan/1.jpg" alt="image 4" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="pembangunan/2.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="pembangunan/2.jpg" alt="image 5" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="pembangunan/3.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="pembangunan/3.jpg" alt="image 6" />
                </div>
            </li>
            <li class="col-md-1"></li>
        </ul>
        <ul class="thumbs row">
            <h1><b>Gotong Royong</b></h1>
            <li class="col-sm-1 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="gotong royong/1.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="gotong royong/1.jpg" alt="image 4" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="gotong royong/2.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="gotong royong/2.jpg" alt="image 5" />
                </div>
            </li>
            <li class="col-sm-2 hidden-xs"></li>
            <li class="item-thumbs col-sm-6 col-xs-8">
                <div>
                    <a 
                        class="overlay" 
                        data-lightbox="gallery" 
                        href="gotong royong/3.jpg">
                        <span class="glyphicon glyphicon-zoom-in"></span>
                    </a>
                    <img src="gotong royong/3.jpg" alt="image 6" />
                </div>
            </li>
            <li class="col-md-1"></li>
        </ul>    

    </div>
</section>


        <div class="container">
            <div class="solidline" ></div>
        </div>
        <section id="templatemo_services" style="background-color:">
       
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