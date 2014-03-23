<?php
$id_prt = $_POST["id_prt"];
$file = $_FILES['file'];

// include fungsi upload
include '../include/php_upload_function.php';

mysql_connect("localhost","root","");
mysql_select_db("pln1");

if($file!=""){
	$foto = upload($file,'../images/','pelanggan');
	$ubah = "UPDATE t_prt SET foto = '$foto' where id_prt='$id_prt'";
	mysql_query($ubah);
	header ("location:../index.php?page=edit-foto&success=edit_success");
}else{
	header ("location:../index.php?page=edit-foto&success=edit_kosong");
}
