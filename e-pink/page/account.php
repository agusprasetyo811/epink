<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
@$alert = $_GET['alert'];
if(isset($alert)){
	echo"<script>alert('sukses');</script>";
}
if(isset($session_id)) {
mysql_connect("localhost","root");
mysql_select_db("pln1");

$query=mysql_query("select * from t_admin where id_admin = '$session_id'");
$show = mysql_fetch_object($query)
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>

<form action="proses/proses_update.php" method="post">
<table width="400">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?=@$show->nama?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?=@$show->address?>"/></td>
	</tr>
	<tr>
		<td>Passwod</td>
		<td><input type="password" name="pass" value="<?=@$show->password?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update"/><input type="hidden" name="id" value="<?=@$session_id;?>"></td>
	</tr>
</table>
</form>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
