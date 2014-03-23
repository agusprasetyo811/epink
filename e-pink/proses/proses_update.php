<?php
// Menangkap varible 
$id=$_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pass = $_POST['pass'];

mysql_connect("localhost","root");
mysql_select_db("pln1");

if($nama=="" || $alamat=="" || $pass=="") {
	// echo "<script>alert('Data masih kosong');javascript:history.go(-1);</script>";
} else {
	mysql_query("update t_admin set nama ='$nama', password='$pass', address='$alamat' where id_admin = '$id'");
	header("location: ../home.php?page=account&alert=sukses");
}
