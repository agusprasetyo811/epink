<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)) {
	@$check = $_GET["exist"];
	@$success = $_GET["success"];
	
	$perintah= "SELECT * FROM t_post ORDER BY id_post";
	$tampil_data = mysql_query($perintah);
	
	if ($check == "id_post_exist"){
		echo "Maaf id post berita tersebut sudah ada ";
	}else if ($success == "id_post_success"){
		echo "success";
	}
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({fullPanel : true}).panelInstance('area2');
});
</script>
<form action="proses/input_post.php" method="post">
				<table>
						<tr>
							<td>Judul post </td>
							<td><input type="text" name="judul" size="50" /></td>
						</tr>

						<tr>
							<td>Isi Berita </td>
							<td><textarea cols="60" id="area2" name="isi"> </textarea></td>
						</tr>
						<tr>
							<td>Kategori </td>
							<td><select name="kategori">
								<option value="berita">Berita</option>
								<option value="pengumuman"> Pengumuman</option>
								<option value="tips">Tips</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tanggal Berita </td>
							<td><input type="text" id="tanggal" readonly="readonly" name="tgl" size="50" value="<?=@$date;?>"/></td>
						</tr>
						<tr>
							<td></td>
							<td>
							<input type="reset" />&nbsp;&nbsp;<input type="submit" />
							<input type="hidden" name="id_admin" value="<?=@$session_id;?>" />
							</td>
						</tr>
				</table>
</form>
<br /><hr /><br />
<h1>Daftar Artikel</h1><br />
<br />
<div id="table">
<?php
echo "
	<table border=1px>
		<thead>
		<tr>
			<td>Id Post</td>
			<td>Id Admin</td> 
			<td>Judul Post</td> 
			<td>Isi Post</td> 
			<td>Kategori</td>
			<td>Tanggal Berita</td>
			<td>Aksi</td>
		</tr>
		</thead>
		<tbody>";
	while($data = mysql_fetch_row($tampil_data)){
			echo "<tr>
					<td>$data[0]</td>
					<td>$data[1]</td>
					<td>$data[2]</td>
					<td>$data[3]</td>
					<td>$data[4]</td>
					<td>$data[5]</td>
					<td><a href='proses/hapus_post.php?id_post=$data[0]'>Hapus</a></td>
				</tr>";
		} echo "
	</tbody>
</table>";
?>
</div>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
