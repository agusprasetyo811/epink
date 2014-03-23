<?php @session_start ();
if($_SESSION['login']!=""){
?>
<?php
@$success = $_GET["success"];
@$id=$_SESSION['login'];
$id_prt = $_SESSION['id'];
mysql_connect ("localhost","root","");
mysql_select_db ("pln1");
$query=mysql_query("select * from t_prt where id_prt = '$id_prt'");
$data=mysql_fetch_array($query);
if ($success == "edit_success"){
	echo "<div id=warning>Terima Kasih saudara : ";echo $_SESSION['login']; echo "<br>Anda telah menupdate data pribadi anda</div>";
}elseif($success == "edit_kosong"){
	echo "<div id=warning>Maaf saudara : ";echo $_SESSION['login']; echo "<br>Field inputan masih kosong</div>";
}
?>
<form method="post" enctype="multipart/form-data" action="proses/edprofoto.php">
<div id="form-Pf">
<input type="hidden" name="id_prt" value="<?=@$id_prt;?>"/>
<h1>Ubah Foto</h1><hr />
<table border="0">
	<tr>
    	<td rowspan="3" width="330"><img style="
        								-moz-border-radius:5px;
                                        -webkit-border-radius:5px;
                                        " src="images/<?=@$data[16];?>" width="320" height="430"/></td><td height="15">Pilih File Foto</td>
    </tr>
    <tr>
    	<td valign="top" height="31"><input type="file" name="file" /></td>
    </tr>
    <tr>
    	<td align="right" valign="bottom"><input type="submit" value="Update Foto" /></td>
    </tr>
</table>
<br /><br />
</div>
</form>
<?php }
else{
echo "<center> Maaf Anda tidak berhak mengakses Hal ini</center>";
}
?>