<?php  
    include_once"header.php";
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pelayanan Desa Lumban Sitorus</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <!-- <link  href="css/admin.css" rel="stylesheet" type="text/css" /> -->
    <link  href="css/form.css" rel="stylesheet" type="text/css" />
    
    <link  href="css/surat.css" rel="stylesheet" type="text/css" media="screen"/>
    <link  href="css/surat_cetak.css" rel="stylesheet" type="text/css" media="print"/>
   <link  href="css/jquery-ui-1.8.19.custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
    <script type="text/javascript" src="js/buatan_sendiri.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/jquery.lightbox.css" rel="stylesheet"/>
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/templatemo_style.css" rel="stylesheet" />
    <style>
    #left-column {
  float:left;
  padding:1px 14px 0 12px;
  width:100px;
  }
    #center-column {
      padding-top: -70px;
        display: flex;
    overflow:auto;
    float:right;
    width:1300px;
    background-color: beige;
    
    );
    border-radius: 15px;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    min-height:510px;
    padding:12px 16px 8px 13px;
}
#middle{
    width: 100%;
    }

    </style>
</head>
<div>
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
  <li class="nav-item" style="margin-left: 400px;">
    <a class="nav-link" href="logouta.php"><i class="fa fa-folder-open" id="logout"></i>Keluar</a>
  </li>
</ul>
    </nav>


<script type="text/javascript">
$(function(){
    $("ul.nav:not(:first)").fadeIn();
    $("#left-column h3").click(function(){
        $(".nav").fadeOut("slow");
        $(this).next().fadeIn("slow");
        })
    $("#left-column h3").css({"margin-top":"5px","cursor":"pointer"});  
    $("#left-column ul.nav li, #top-navigation li").click(function(){
        var url = $(this).find("a").attr("href");
        // load div center-column dengan url dari anchor tsb
        $("#center-column").html("<div class='loading'>Mohon ditunggu .........</div>")
        .load(url);
        $("li").removeClass("li_terpilih");
        $(this).addClass("li_terpilih");
     $(this).css({"background":"#FFFFFF"});
        return false;
        })
    })
</script>
<body style="width: 100%">
       <div ">
            <div id="left-column">
                <h3>Surat</h3>
                <ul class="nav">
                    <li><a href="tambah_surat_link.php">Buat Surat</a></li>
                </ul>
                <h3>Data Master</h3>
                <ul class="nav">
                  <li><a href="tambah_penduduk.php">Tambah penduduk</a></li>
                  <li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
                </ul>
                <!-- <h3>Data Master</h3>
                <ul class="nav">
                    <li><a href="daftar_penduduk2.php">Daftar Penduduk</a></li>
                    <li><a href="tambah_penduduk.php">Tambah Penduduk</a></li> 
                               
                </ul> -->
              </div>
              <center>
            <div id="center-column">
                
            </div>
     </center>
   </div>
 </body>
 </html>
