<?php
@session_start();

@$id_admin=$_POST["id_admin"];
@$password=$_POST["pass_admin"];
@$type=$_POST['type'];

mysql_connect("localhost","root");
mysql_select_db("pln1");

if(!empty($id_admin) and !empty($password)){
	$query="select * from t_admin where id_admin='".$id_admin."'";
	$exec=mysql_query($query);
	$data=mysql_fetch_array($exec);
	
	if($id_admin=="" || $password==""){
		echo("<script>alert('Fields kosong');window.location='../';javascript:history.go(-1);</script>");
	}elseif($id_admin!=$data[0]){
		echo("<script>alert('Admin asing');window.location='../';javascript:history.go(-1);</script>");
	}elseif($password!=$data[2]){
		echo("<script>alert('Password Salah');window.location='../';javascript:history.go(-1);</script>");
	}elseif($type!=$data[4]){
		echo("<script>alert('Cek type Admin');window.location='../';javascript:history.go(-1);</script>");
	}else{
		if($type=='ps'){
			$_SESSION['log']=$data['nama'];
			$_SESSION['id'] =$data['id_admin'];
			$_SESSION['type']=$data['type'];
			header("location: ../home.php");
		}elseif($type=='p2tl'){
			$_SESSION['log']=$data['nama'];
			$_SESSION['id'] =$data['id_admin'];
			$_SESSION['type']=$data['type'];
			header("location: ../home.php");
		}elseif($type=='keluhan'){
			$_SESSION['log']=$data['nama'];
			$_SESSION['id'] =$data['id_admin'];
			$_SESSION['type']=$data['type'];
			header("location: ../home.php");
		}elseif($type=='meterlistrik'){
			$_SESSION['log']=$data['nama'];
			$_SESSION['id'] =$data['id_admin'];
			$_SESSION['type']=$data['type'];
			header("location: ../home.php");
		}
	}	
} else {
	?><script>alert("Kosong"); window.location="../";</script><?php 
}