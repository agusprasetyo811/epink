<?php
	session_start();
	$id_prt=$_POST["prt"];
	$password=$_POST["pass"];

	mysql_connect("localhost","root");
	mysql_select_db("pln1");
	
	$query = " select id_prt,nama,password from t_prt where id_prt='$id_prt'";
	$exec=mysql_query($query);
	$data = mysql_fetch_array($exec);
	
	// Melakukan pengecekan kondisi
	if($id_prt == "" || $password == "") {
		echo("<script>alert('Field kosong');javascript:history.go(-1);</script>");
	} else if ($password != $data[2]) {
		echo("<script>alert('Password salah');javascript:history.go(-1);</script>");
	} else if ($id_prt != $data[0]) {
		echo("<script>alert('Pelanggan asing');javascript:history.go(-1);</script>");
	} else {
		$_SESSION['login'] = $data[1];
		$_SESSION['id'] = $data[0];
		header("location:../index.php");		
	} 
	