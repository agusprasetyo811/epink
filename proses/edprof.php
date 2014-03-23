<?php
$id_prt = $_POST["id_prt"];
$tlp = $_POST["tlp"];
$alamat = $_POST["alamat"];
$kecamatan = $_POST["kecamatan"];
$tgl = $_POST["tgl"];
$ktp = $_POST["ktp"];
$jk = $_POST["jk"];
$krj = $_POST["krj"];
$email = $_POST["email"];

mysql_connect("localhost","root","");
mysql_select_db("pln1");
$ubah = "UPDATE t_prt SET no_telp = '$tlp', 
						  alamat='$alamat', 
						  kecamatan='$kecamatan', 
						  tglLahir='$tgl', 
						  no_ktp='$ktp', 
						  jk='$jk', 
						  pekerjaan='$krj', 
						  email='$email' where id_prt='$id_prt'";
mysql_query($ubah);
header ("location:../index.php?page=edit_profile&success=edit_success");
?>