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
<section id="templatemo_about">
    <div class="container">  
    <img src="images/20180716_085734.jpg">      
        <div class="row">
            <H1>STRUKTUR ORGANISASI DESA</H1>
            <img src="images/Organisasi.jpg" style="width: 100%">
        </div><br><br>  <br>
    </div>

    <div class="row, container">
        <p><b>Struktur Organisasi Desa</b></p>
        <p>Struktur organisasi desa ini terdiri dari Kepala desa didampingi oleh <b>Badan Permusyawaratan Desa (BPD)</b> dan <b>Lembaga Kemasyarakatan Desa (LKD)</b>.<br><br>
        Badan Permusyawaratan Desa dibagi 3 yaitu:
        <table>
            <tr>
                <td>Ketua Badan Permusyawaratan Desa</td><br>
                <td>:</td>
                <td>Jumri Sitorus</td>
            </tr>
            <tr>
                <td>Wakil Ketua Badan Permusyawaratan Desa</td><br>
                <td>:</td>
                <td>Marojahan Sitorus</td>
            </tr>
            <tr>
                <td>Sekretaris Badan Permusyawaratan Desa</td><br>
            
                <td>:</td>
                <td>Endang Saragih</td>
            </tr>
        </table>
        <br><br>

        Dibawah Jabatan Kepala Desa terdapat Sekretaris Desa, Kepala Seksi dan Kepala Dusun. <br><br>

        <b>Sekretaris Desa adalah Sammas Sitorus</b> <br><br>
        Sekretaris Desa dibagi 3 yaitu:
        <br><br>
        <table>
            <tr>
                <td>Kepala Urusan Keuangan</td><br>
                <td>:</td>
                <td>Mince Sitorus</td>
            </tr>
            <tr>
                <td>Kepala Urusan Tata Usaha & Umum</td><br>
                <td>:</td>
                <td>Dermina Manurung</td>
            </tr>
            <tr>
                <td>Kepala Urusan Perencanaan</td><br>
                <td>:</td>
                <td>Naster Sitorus</td>
            </tr>        
        </table>

        Kepala Seksi dibagi 3 yaitu:
        <br><br>
        <table>
            <tr>
                <td>Kepala Seksi Pelayanan</td><br>
                <td>:</td>
                <td>Rahman Sitorus</td>
            </tr>
            <tr>
                <td>Kepala Seksi Kesejahteraan</td><br>
                <td>:</td>
                <td>Sondang Sitorus</td>
            </tr>
            <tr>
                <td>Kepala Seksi Pemerintahan</td><br>
                <td>:</td>
                <td>Srihartati S</td>
            </tr>
        </table><br><br>

        Kepala Dusun dibagi 2 yaitu:
        <br><br>
        <table>
            <tr>
                <td>Kepala Dusun I</td><br>
                <td>:</td>
                <td>Imran Sitorus</td>
            </tr>
            <tr>
                <td>Kepala Dusun II</td><br>
                <td>:</td>
                <td>Tetty Melisa Lumbantoruan</td>
            </tr>
        </table>

    </p>

    </div>   

   </section>
<div class="container">
    <div class="container">
    <div class="solidline"></div>
</div>
 <!-- end of templatemo_gallery -->
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