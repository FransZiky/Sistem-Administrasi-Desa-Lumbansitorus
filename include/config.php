<?php
// data desa
$desa["kode"] = "2002/Pem-Ls/IX/2018 ";
$desa["nama"] = "Lumban Sitorus";
$desa["alamat"] = "Lumban Sitorus";
$desa["tlp"] = "082273584843";
$desa["kades"] = "Jisman Sitorus";
$desa["kades_nip"] = "";
$desa["sekdes"] = " ";
$desa["sekdes_nip"] = " ";
$desa["tt_kades"] = "KEPALA DESA LUMBAN SITORUS";
$desa["tt_sekdes"] = "An.KEPALA DESA LUMBAN SITORUS <br />SEKRETARIS DESA";
// nama kecamatan
$desa["kecamatan"] = "Parmaksian";
$desa["kabupaten"] = "Toba Samosir";
// untuk pilihan
$agama = array("Pilih agama anda","Islam","Kristen_Katolik","Kristen_Protestan","Hindhu","Budha","Kong_Huchu","Lainnya");
$s_pernikahan = array("Pilih status anda","belum_nikah","nikah","janda/duda","lainnya");
$j_kelamin = array("Pilih jenis kelamin ","L" => "Laki - Laki","W" => "Wanita"); 
$gol_darah = array("Pilih golongan darah","A","AB","B","O","--");
// gunakan underscore(_) sebagai pengganti spasi antara 2 kata
$dusun = array("Pilih dusun anda","I","II");
$ekonomi = array("Pilih ekonomi anda","Sangat_Kaya","Kaya","Cukup","Miskin","Sangat_Miskin","Nemen_pollll","Lainnya");
// untuk jenis surat, SK = surat keterangan SKP = surat keterangan pindah,SL = Surat lahir, SM = Surat kematian
// jangan dirubah untuk kode suratnya
$j_surat = array("SK" => "470","SKP" => "475","SKA" => "470","SL" =>"474.1","SM" =>"474.3");
// untuk set nomer awal surat, isi dengan nama index pada jenis surat
$awal_nomer_surat["SK"]=3;
$awal_nomer_surat["SKP"]=0;
$awal_nomer_surat["SKA"]=0;
$awal_nomer_surat["SL"]=0;
$awal_nomer_surat["SM"]=0;

$surat_ket = array("Pilih Jenis Keterangan","Adat - Istiadat","Usaha","Domisili");
// untuk paging
$limit = 8;
$paging_tampil = 4;
?>
