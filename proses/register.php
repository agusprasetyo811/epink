<?php

mysql_connect("localhost","root","");
mysql_select_db("pln1");

$id=$_POST['id'];
$nama=$_POST['nama'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

// mengeluarkan isi table PRT
$query = mysql_query("select id_prt from t_prt where id_prt = '$id'");
$show = mysql_fetch_array($query);
// membuat suatu kondisi
if ($id=="" || $password1=="" || $password2=="" || $nama==""){
	echo("<script>alert('field Kosong');javascript:history.go(-1);</script>");
} else if ($password1!= $password2){
	echo("<script>alert('Pasword Tidak Cocok');javascript:history.go(-1);</script>");
} else if ($id == $show[0]){
	echo("<script>alert('ID PRT sudah ada');javascript:history.go(-1);</script>");
} else {
	mysql_query("insert into t_prt(id_prt,nama,password)values('$id','$nama','$password2')");
	echo("<script>alert('Sukses');</script>");
	echo("<script>window.location=\"../index.php\";</script>");
}