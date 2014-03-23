<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)) {
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<img src="../images/logo.png" /><br /><br />
<h2>Penyambungan Sementara</h2>
<?php
// Menampilkan history data penyambungan sementara yang sudah ditangani dengan parameter field penanganan->('sudah')
mysql_connect("localhost","root","");
mysql_select_db("pln1");

$perintah="SELECT t_ps.id_ps, t_prt.id_prt, t_prt.nama, t_prt.alamat, t_prt.tarif, t_prt.daya, t_ps.daya_ingin, t_ps.pemohon, t_ps.keperluan, t_ps.tgl_mulai, t_ps.tgl_akhir FROM t_prt, t_ps WHERE penanganan LIKE '%sudah%' and t_prt.id_prt=t_ps.id_prt ORDER BY id_ps"; 
$tampil_data = mysql_query($perintah);
?>
<table border=1px>
<thead>
	<tr>
		<td>ID PS</td>
		<td>ID PRT</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Tarif</td>
		<td>Daya Sekrang</td>
		<td>Daya yang diinginkan</td>
		<td>Pemohon</td>
		<td>Keperluan</td>
		<td>Tanggal Mulai</td>
		<td>Tanggal Akhir</td>
	</tr>
</thead>
<tbody>
	<?php
	while ($lihat_data = mysql_fetch_array($tampil_data)) { ?>
	<tr>
		<td><?=@ $lihat_data[0]?></td>
		<td><?=@ $lihat_data[1]?></td>
		<td><?=@ $lihat_data[2]?></td>
		<td><?=@ $lihat_data[3]?></td>
		<td><?=@ $lihat_data[4]?></td>
		<td><?=@ $lihat_data[5]?></td>
		<td><?=@ $lihat_data[6]?></td>
		<td><?=@ $lihat_data[7]?></td>
		<td><?=@ $lihat_data[8]?></td>
		<td><?=@ $lihat_data[9]?></td>
		<td><?=@ $lihat_data[10]?></td>
	</tr>
	<?php }?>
   </tbody>
</table>
<br>
<h2>P2TL</h2>
<?php
// Menampilkan history data penyambungan sementara yang sudah ditangani dengan parameter field penanganan->('sudah')
$perintah= "SELECT t_p2tl.id_p2tl,t_prt.id_prt,t_prt.nama,t_prt.alamat, t_prt.daya, t_p2tl.uraian_putus, t_p2tl.tgl_putus FROM t_prt, t_p2tl WHERE penanganan LIKE '%sudah%'and t_prt.id_prt=t_p2tl.id_prt ORDER BY id_p2tl";
$tampil_data = mysql_query($perintah);
?>
<table border=1px>
<thead>
	<tr>
		<td>ID P2TL</td>
		<td>ID PRT</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Uraian Pemutusan</td>
		<td>Daya Listrik</td>
		<td>Tanggal Putus</td>
	</tr>
</thead>
<tbody>
	<?php
	while ($lihat_data = mysql_fetch_array($tampil_data)) { ?>
	<tr>
		<td><?=@ $lihat_data[0]?></td>
		<td><?=@ $lihat_data[1]?></td>
		<td><?=@ $lihat_data[2]?></td>
		<td><?=@ $lihat_data[3]?></td>
		<td><?=@ $lihat_data[4]?></td>
		<td><?=@ $lihat_data[5]?></td>
		<td><?=@ $lihat_data[6]?></td>
	</tr>
	<?php }?>
</tbody>
</table>
<br>
<h2>Keluhan</h2>
<?php
// Menampilkan history data penyambungan sementara yang sudah ditangani dengan parameter field penanganan->('sudah')
$perintah= "SELECT t_keluhan.id_keluhan,t_prt.id_prt, t_keluhan.tgl_keluhan, t_prt.nama,t_prt.alamat, t_prt.no_telp, t_keluhan.uraian FROM t_prt, t_keluhan WHERE penanganan LIKE '%sudah%' and t_prt.id_prt=t_keluhan.id_prt ORDER BY id_keluhan";

$tampil_data = mysql_query($perintah);
?>
<table border=1px>
<thead>
	<tr>
		<td>ID KELUHAN</td>
		<td>ID PRT</td>
		<td>Tanggal Keluhan</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Telpon</td>
		<td>Uraian</td>
	</tr>
</thead>
<tbody>
	<?php
	while ($lihat_data = mysql_fetch_array($tampil_data)) { ?>
	<tr>
		<td><?=@ $lihat_data[0]?></td>
		<td><?=@ $lihat_data[1]?></td>
		<td><?=@ $lihat_data[2]?></td>
		<td><?=@ $lihat_data[3]?></td>
		<td><?=@ $lihat_data[4]?></td>
		<td><?=@ $lihat_data[5]?></td>
		<td><?=@ $lihat_data[6]?></td>
	</tr>
	<?php }?>
</tbody>
</table>
<br>
<h2>Meter Listrik</h2>
<?php
// Menampilkan history data penyambungan sementara yang sudah ditangani dengan parameter field penanganan->('sudah')
$perintah= "SELECT t_meterlistrik.id_meterlistrik,t_prt.id_prt, t_prt.nama, t_prt.alamat, t_prt.daya,  t_meterlistrik.stand_meter_rmh, t_prt.stand_meter, t_meterlistrik.tgl_lapor_meter FROM t_prt, t_meterlistrik WHERE penanganan LIKE '%sudah%' and t_prt.id_prt=t_meterlistrik.id_prt ORDER BY id_meterlistrik";
$tampil_data = mysql_query($perintah);
?>
<table border=1px>
<thead>
	<tr>
		<td>ID Meter Listrik</td>
		<td>ID PRT</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Daya</td>
		<td>Stan Meter Rumah</td>
		<td>Stan Meter PLN</td>
		<td>Tanggal Lapor</td>
	</tr>
</thead>
<tbody>
	<?php
	while ($lihat_data = mysql_fetch_array($tampil_data)) { ?>
	<tr>
		<td><?=@ $lihat_data[0]?></td>
		<td><?=@ $lihat_data[1]?></td>
		<td><?=@ $lihat_data[2]?></td>
		<td><?=@ $lihat_data[3]?></td>
		<td><?=@ $lihat_data[4]?></td>
		<td><?=@ $lihat_data[5]?></td>
		<td><?=@ $lihat_data[6]?></td>
		<td><?=@ $lihat_data[7]?></td>
	</tr>
	<?php }?>
</tbody>
</table>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}

