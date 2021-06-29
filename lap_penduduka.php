<script type="text/javascript" src="js/awesomechart.js"></script>
<?php
include_once "include/koneksi.php";
include_once "include/config.php";
$tgl_sekarang = date("d-m-Y");
$bulan = array("01" =>"Januari","02" =>"Pebruari","03" =>"Maret","04" =>"April","05" =>"Mei","06" =>"Juni","07" =>"Juli","08" =>"Agustus","09" =>"September","10" =>"Oktober","11" =>"Nopember","12" =>"Desember");
$tgl_arr=explode("-",$tgl_sekarang);
$periode = $tgl_arr['1']."-".$tgl_arr['2'];
// jumlah penduduk
$tmp_lk = mysqli_query($conn,"select count(*) from warga where status = '1' and j_kel='L'");
$tmp_pr = mysqli_query($conn,"select count(*) from warga where status = '1' and j_kel='W'");
$jumlah_lk = mysqli_fetch_row($tmp_lk);
$jumlah_pr = mysqli_fetch_row($tmp_pr);
$jumlah_semua = $jumlah_lk[0] + $jumlah_pr[0];
// jumlah mutasi penduduk ( lahir, mati, keluar ,masuk) untuk bulan ini
$jml_datang_lk = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='L' and jenis_mutasi='masuk'");
$jml_datang_pr = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='W' and jenis_mutasi='masuk'");
$jumlah_datang_lk = mysqli_fetch_row($jml_datang_lk);
$jumlah_datang_pr = mysqli_fetch_row($jml_datang_pr);
$jumlah_semua_datang = $jumlah_datang_lk[0] + $jumlah_datang_pr[0];
$jml_keluar_lk = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='L' and jenis_mutasi='keluar'");
$jml_keluar_pr = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='W' and jenis_mutasi='keluar'");
$jumlah_keluar_lk = mysqli_fetch_row($jml_keluar_pr);
$jumlah_keluar_pr = mysqli_fetch_row($jml_keluar_lk);
$jumlah_semua_keluar = $jumlah_keluar_lk[0] + $jumlah_keluar_pr[0];
$jml_lahir_lk = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='L' and jenis_mutasi='lahir'");
$jml_lahir_pr = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='W' and jenis_mutasi='lahir'");
$jumlah_lahir_lk = mysqli_fetch_row($jml_lahir_lk);
$jumlah_lahir_pr = mysqli_fetch_row($jml_lahir_pr);
$jumlah_semua_lahir = $jumlah_lahir_lk[0] + $jumlah_lahir_pr[0];
$jml_wafat_lk = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='L' and jenis_mutasi='wafat'");
$jml_wafat_pr = mysqli_query($conn,"select count(*) from v_mutasi_warga where periode = '".$periode."' and j_kel='W' and jenis_mutasi='wafat'");
$jumlah_wafat_lk = mysqli_fetch_row($jml_wafat_lk);
$jumlah_wafat_pr = mysqli_fetch_row($jml_wafat_pr);
$jumlah_semua_wafat = $jumlah_wafat_lk[0] + $jumlah_wafat_pr[0];
// jumlah bulan lalu
$jumlah_bulan_lalu_pr = $jumlah_pr[0] + $jumlah_keluar_pr[0] + $jumlah_wafat_pr[0] - $jumlah_datang_pr[0] - $jumlah_lahir_pr[0];
$jumlah_bulan_lalu_lk = $jumlah_lk[0] + $jumlah_keluar_lk[0] + $jumlah_wafat_lk[0] - $jumlah_datang_lk[0] - $jumlah_lahir_lk[0];
$jumlah_bulan_lalu = $jumlah_bulan_lalu_lk + $jumlah_bulan_lalu_pr;




$data = mysqli_query($conn, "SELECT * FROM warga");

$hasil = [];

while($row = mysqli_fetch_assoc($data)){
    $hasil[] = $row;
}


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
    <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Beranda</a>
  </li>
  <li class="nav-item dropdown">
      <a class="nav-link" href="pemerintahandesa.php"><i class="fa fa-home"></i> Pemerintah Desa</a>
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
    </body>
<div id="div_lap" class="container">
<div id="lap" style="text-transform:uppercase">
<h3 style="text-align:center">laporan penduduk</h3>
<table border="0">
  <tr>
    <td>desa</td><td>:</td><td><?php echo $desa['nama'] ?></td>
  </tr>
  <tr>
    <td>kecamatan</td><td>:</td><td><?php echo $desa['kecamatan'] ?></td>
  </tr>
  <tr>
    <td>kabupaten</td><td>:</td><td><?php echo $desa['kabupaten'] ?></td>
  </tr>
  <tr>
    <td>bulan</td><td>:</td><td><?php echo $bulan[$tgl_arr['1']]." ".$tgl_arr['2'] ?></td>
  </tr>
</table>
</div>
<div style="clear:both;margin:10px;">&nbsp;</div>
<!-- <center>
<table class='data' border="3px" style="background-color: black; color: khaki;">
  <thead>
    <tr>
      <td rowspan="3">No</td><td rowspan="2" colspan="3">Penduduk Bulan Lalu</td><td colspan="12">Keadaan Bulan Ini</td>
      <td colspan="3" rowspan="2">Jumlah s/d Bulan ini</td>
    </tr>
    <tr>
      <td colspan="3">Lahir</td><td colspan="3">Mati</td><td colspan="3">Pindah</td><td colspan="3">Datang</td>
    </tr>
    <tr>
      <td>Jumlah</td><td>Lk</td><td>Pr</td><td>Jumlah lahir</td><td>Lk</td><td>Pr</td><td>Jumlah Mati</td><td>Lk</td><td>Pr</td>
      <td>Jumlah pindah</td><td>Lk</td><td>Pr</td><td>Jumlah datang</td><td>Lk</td><td>Pr</td><td>Jumlah</td><td>Lk</td><td>Pr</td>
    </tr>
    <tr>
      <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
      <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td><?php echo $jumlah_bulan_lalu ?></td><td><?php echo $jumlah_bulan_lalu_lk ?></td><td><?php echo $jumlah_bulan_lalu_pr ?></td>
      <td class="data_lahir"><?php echo $jumlah_semua_lahir ?></td><td class="data_lahir"><?php echo $jumlah_lahir_lk[0] ?></td><td class="data_lahir"><?php echo $jumlah_lahir_pr[0] ?></td>
      <td class="data_wafat"><?php echo $jumlah_semua_wafat ?></td><td class="data_wafat"><?php echo $jumlah_wafat_lk[0] ?></td><td class="data_wafat"><?php echo $jumlah_wafat_pr[0] ?></td>
      <td class="data_keluar"><?php echo $jumlah_semua_keluar ?></td><td class="data_keluar"><?php echo $jumlah_keluar_lk[0] ?></td><td class="data_keluar"><?php echo $jumlah_keluar_pr[0] ?></td>
      <td class="data_datang"><?php echo $jumlah_semua_datang ?></td><td class="data_datang"><?php echo $jumlah_datang_lk[0] ?></td><td class="data_datang"><?php echo $jumlah_datang_pr[0] ?></td>
      <td class="data_semua"><?php echo $jumlah_semua ?></td><td class="data_semua"><?php echo $jumlah_lk[0] ?></td><td class="data_semua"><?php echo $jumlah_pr[0] ?></td>
    </tr>
  </tbody>  
</table>
</center> -->

<table border="1" style ="text-align: center;" >
    <tr>
        <td>No KTP</td>
        <td>Nama</td>
        <td>Agama</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Golongan Darah</td>
        <td>Warga Negara</td>
        <td>Pendidikan</td>
        <td>Pekerjaan</td>
        <td>Status Nikah</td>
    </tr>
<?php foreach($hasil as $satu) : ?>

<tr>
    <td><?= $satu['no_ktp']; ?></td>
    <td><?= $satu['nama']; ?></td>
    <td><?= $satu['agama']; ?></td>
    <td><?= $satu['t_lahir']; ?></td>
    <td><?= $satu['tgl_lahir']; ?></td>
    <td><?= $satu['j_kel']; ?></td>
    <td><?= $satu['gol_darah']; ?></td>
    <td><?= $satu['w_negara']; ?></td>
    <td><?= $satu['pendidikan']; ?></td>
    <td><?= $satu['pekerjaan']; ?></td>
    <td><?= $satu['s_nikah']; ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>

<script type="text/javascript">
function isi_data_html(){
  $("input[name=data_html]").val($("#div_lap").html());
  }
function clearCanvas(id_canvas){
    var canvas = document.getElementById(id_canvas);
    var context = canvas.getContext("2d");
    context.clearRect(0, 0, canvas.width, canvas.height);
} 
})              
</script>
<style>
#lap label{
display:block;
width:140px;
float:left;
clear:both;
}
#lap span.s_kanan{
float:left;
max-width:200px;
text-align:justify;
}
#lap span.titik{
float:left;
width:10px;
}   
#slide_show {
  width:75%;
  margin:2px auto;
  padding:4px;
  }
#slide_show div{
  float:left;
  border:1px solid green;
  padding:2px;
  margin:2px; 
  background:#FFFFFF;
  opacity:0.7;
  }
#slide_show div:hover{
  opacity:1;
  cursor:pointer;
  
  }
</style>
<br><br><br><br>
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

