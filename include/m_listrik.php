<form action="proses/mlist.php" method="post">
<div id="form-Pf">
<table border="0">
<tr>
<input type="hidden"  name="id_prt"  value="<?php echo "$baris[id_prt]"; ?>" />	
<tr>
	<td width="250">Nama</td>
	<td><input type="text" class="text" value="<?php echo "$baris[nama]" ;?>" readonly=readonly></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type="text" class="text" value="<?php echo "$baris[alamat]" ;?>" readonly=readonly></td>
</tr>
<tr>
	<td>Daya</td>
	<td><input type="text" class="text" value="<?php echo "$baris[daya]" ;?>" readonly=readonly></td>
						
</tr>
<tr>
	<td>Stand meter bulan lalu</td>
    <td><input type="text" class="text-t" name="smRumah"  id='numbers'/></td>
</tr>
<tr>
	<td>Stand meter bulan kini</td> 
    <td><input type="text" class="text-t" name="smRumah1"  id='numbers'/></td>
</tr>
<tr>
	<td>Stand meter pln</td>
	<td><input type="text" class="text" name="stand_meter_pln" value="<?php echo "$baris[stand_meter]" ;?>" readonly=readonly></td>
<tr>
	<td>Tanggal Lapor</td>
    <td><input type="text" class="text" name="tglPutus"/></td>
</tr>
<tr height="50" valign="bottom">
	<td colspan="2" align="right"><input type="submit" /> <input type="reset" /></td>
</tr>
</table>
</div>
</form>