<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pelayanan Desa Lumban Sitorus</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="images/templatemo_favicon.ico">
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
        <li class="nav-item">
            <a class="nav-link" href="pemerintahandesaa.php"><i class="fa fa-home"></i>Pemerintah Desa</a>
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
        <li class="nav-item" style="margin-left: 400px;">
            <a class="nav-link" href="logouta.php"><i class="fa fa-folder-open" id="logout"></i>Keluar</a>
        </li>
    </ul>
</nav>

<section id="templatemo_blog">
    <div class="container">
        <div class="row">
            <h1>Organisasi Desa</h1>
            <h4> Berikut beberapa organisasi yang ada di desa : </h4>
        </div>
        <div class="row, container">
                <center><h2>PEMBERDAYA DAN KESEJAHTERAAN KELUARGA (PKK)</h2></center>
            <center><img src="images/pkk.jpg"></center>    
                <p>
                  <b>VISI PKK</b>
                  <br>
                  Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia dan berbudi luhur, sehat sejahtera, maju – mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.
                  <br>
                  <b>MISI PKK</b>
                  <br>
                  <ol>
                      <li>Meningkatkan mental spiritual, perilaku hidup dengan menghayati dan mengamalkan Pancasila serta meningkatkan pelaksanaan hak dan kewajiban sesuai dengan hak azasi manusia (HAM), demokrasi, meningkatkan kesetiakawanan sosial dan kegotong royongan serta pembentukan watak bangsa yang selaras, serasi dan seimbang.</li><br>
                      <li>Meningkatkan pendidikan dan ketrampilan yang diperlukan, dalam upaya mencerdaskan kehidupan bangsa serta pendapatan keluarga</li><br>
                      <li>Meningkatkan kualitas dan kuantitas pangan keluarga, serta upaya peningkatan pemanfaatan pekarangan melalui Halaman Asri, Teratur, Indah dan Nyaman (HATINYA PKK), sandang dan perumahan serta tata laksana rumah tangga yang sehat</li><br>
                      <li>Meningkatkan derajat kesehatan, kelestarian lingkungan hidup serta membiasakan hidup berencana dlam semua aspek kehidupan dan perencanaan ekonomi keluarga dengan membiasakan menabung.</li><br>
                      <li>Meningkatkan pengelolaan Gerakan PKK baik kegiatan pengorganisasian maupun pelaksanaan program-programnya yang disesuaikan dengan situasi dan kondisi masyarakat setempat.</li><br>
                  </ol>     
                </p>
            </div><br><br><br>

        <div class="row, container">
                <center><h2>BADAN PERMUSYAWARATAN DESA (BPD)</h2></center>
            <center><img src="images/bpd.jpg"></center>    
                <p>
                  <b>VISI BPD</b>
                  <br>
                  TERCIPTANYA PEMERINTAHAN YANG BERSIH, MELAYANI DAN AGAMIS
                  <br>
                  <b>MISI BPD</b>
                  <br>
                  <ol>
                      <li>Meningkatkan profesionalisme seluruh anggota BPD.</li><br>
                      <li>Meningkatkan pelayanan, pembinaan dan pemberdayaan masyarakat sesuai dengan Tugas Pokok ddan Fungsi BPD</li><br>
                      <li>Meningkatkan konsultasi dan koordinasi dengan lembaga-lembaga tingkat pemerintahan desa, kecamatan, kabupaten dan provinsi</li><br>
                      <li>Meningkatkan penyerapan aspirasi masyarakat</li><br>
                      <li>Memantapkan kualitas hidup beragama.</li><br>
                      <li>Meningkatkan peran dan fungsi kelembagaan</li>
                  </ol>     
                </p>
            </div>
        </div>

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