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
if ($success == "edit_success")
{
	echo "<div id=warning>Terima Kasih saudara : ";echo $_SESSION['login']; echo "<br>Anda telah menupdate data pribadi anda</div>";
}
?>
<div id="form-Pf">
<h1>Profile <?=@$data[1]?> | <a href="?page=edit-foto" title="Klik disini untuk mengganti foto">Ganti foto</a></h1><hr />
<form method="post" action="proses/edprof.php">
<input type="hidden" name="id_prt" value="<?=@$id_prt;?>"/>
<table class="tabs">
<tr>
	<td width="130">No Telp. </td> <td><input type="text" name="tlp" value="<?=@$data[2];?>" class="text" /></td>
</tr>
<tr>
	<td>ALamat </td> <td><input type="text" name="alamat" value="<?=@$data[3];?>" class="text" /></td>
</tr>
<tr>
	<td>Kecamatan</td>
    <td><select name="kecamatan">
    	<?php 
		$query_kecamatan = mysql_query("select kecamatan from t_grafik"); 
		while($show_kecamatan = mysql_fetch_array($query_kecamatan)) {
        	$query_kec = mysql_query("select kecamatan from t_prt where id_prt = '$id_prt'");
			$show_kec = mysql_fetch_array($query_kec);
			?>
        	<option <?php if($show_kecamatan[0] == $show_kec[0]){?> selected="selected" <? }?> value="<?=@$show_kecamatan[0];?>"><?=@$show_kecamatan[0];?></option>
		<? } ?>
    </select></td>
</tr>

<tr>
	<td>Tanggal Lahir </td> <td><input type="text" name="tgl" value="<?=@$data[6];?>" class="text" /></td>
</tr>
<tr>
	<td>No KTP </td> <td><input type="text" name="ktp" value="<?=@$data[7];?>"  class="text"/></td>
</tr>
<tr>
	<td>Jenis Kelamin </td><td>
    <input class="radio" <? if($data[8]=='L'){?> checked="checked"<? }?> type="radio" name="jk" value="L">Laki-laki &nbsp;&nbsp;
    <input <? if($data[8]=='P'){?> checked="checked"<? }?> type="radio" name="jk" value="P">Perempuan 
    </td>
</tr>
<tr>
	<td>Pekerjaan </td> <td><input type="text" name="krj" value="<?=@$data[9];?>"  class="text"/></td>
</tr>
<tr>
	<td>Email </td> <td><input type="text" name="email" value="<?=@$data[10];?>" class="text" /></td>
</tr>
<tr height="50" valign="bottom">
	<td colspan="2" align="right"> <input type="submit" value="update"> <input type="reset" value="cancel"> </td>
</tr>
</table>
</div>
</form>
<?php }
else{
echo "<center> Maaf Anda tidak berhak mengakses Hal ini</center>";
}
?>