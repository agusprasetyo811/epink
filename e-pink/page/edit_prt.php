<?php

@session_start();
@$id = $_SESSION['id'];
if(isset($_SESSION['log'])) { 
mysql_connect("localhost","root");
mysql_select_db("pln1");
$id_prt = $_GET['id_prt'];

$query=mysql_query("select nama, alamat, no_telp, kecamatan, tglLahir, no_ktp, jk, pekerjaan, email, tarif, daya, stand_meter, tagihan from t_prt where id_prt = '$id_prt'");
$show = mysql_fetch_object($query)
?>

<form action="proses/edit_prt.php" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?=@$show->nama?>"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?=@$show->alamat?>"/></td>
	</tr>
	<tr>
		<td>No Telpon</td>
		<td><input type="text" name="no_telp" value="<?=@$show->no_telp?>"/></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td><select style="padding:6px;" name="kecamatan">
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
		<td>Tanggal Lahir</td>
		<td width="400">
        <select name="tanggal"> 
            <option>- Pilih Tanggal -</option>
            <? for($i=1; $i<=31; ++$i){?>
			<option value="<?=$i?>"><?=$i?></option>	
			<? }?>
        </select> - 
        <select name="bulan">
        	<option>- Pilih Bulan -</option>
            <? $bulan = array('Januari','Februari','Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');?>
            <? for($i=0;$i<=11;++$i){?>
            <option value="<?=$bulan[$i]?>"><?=$bulan[$i]?></option>
            <? }?>
        </select> - 
        <select name="tahun"> 
            <option>- Pilih Tahun -</option>
            <? for($i=1950; $i<=1993; ++$i){?>
			<option value="<?=$i?>"><?=$i?></option>	
			<? }?>
        </select>
        </td>
	</tr>
	<tr>
		<td>No KTP</td>
		<td><input type="text" name="no_ktp" value="<?=@$show->no_ktp?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
			<td>
    		<input <? if($show->jk=='L'){?> checked="checked"<? }?> type="radio" name="jk" value="L"> Laki-laki &nbsp;&nbsp;
    		<input <? if($show->jk=='P'){?> checked="checked"<? }?> type="radio" name="jk" value="P"> Perempuan 
    		</td>							
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><input type="text" name="pekerjaan" value="<?=@$show->pekerjaan?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?=@$show->email?>"/></td>
	</tr>
	<tr>
		<td>Tarif</td>
		<td><input type="text" name="tarif" value="<?=@$show->tarif?>"/></td>
	</tr>
	<tr>
		<td>Daya</td>
		<td><input type="text" name="daya" value="<?=@$show->daya?>"/></td>
	</tr>
		<td>Stand Meter PLN</td>
		<td><input type="text" name="stand_meter_pln" value="<?=@$show->stand_meter?>"/></td>
	</tr>
	<tr>
		<td>Tagihan</td>
		<td><input type="text" name="tagihan" value="<?=@$show->tagihan?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update"/><input type="hidden" name="id_prt" value="<?=@$id_prt?>"></td>
	</tr>
</table>
</form>
<? } else {
	echo("<script>window.location=\"index.php\";</script>");
} ?>