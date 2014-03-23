<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
$perintah= "SELECT t_ps.id_ps,
				   t_prt.id_prt,
				   t_prt.nama,
				   t_prt.alamat,
				   t_prt.tarif, 
				   t_prt.daya, 
				   t_ps.daya_ingin, 
				   t_ps.pemohon, 
				   t_ps.keperluan, 
				   t_ps.tgl_mulai, 
				   t_ps.tgl_akhir
		    FROM t_prt, 
				 t_ps 
			WHERE t_ps.id_prt=t_prt.id_prt and t_ps.penanganan like '%belum%' ORDER BY id_ps";
$tampil_data = mysql_query($perintah);
if(isset($session_id)){
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<div id="table">
<?php
// Menampilkan data penyambungan sementara
echo "<table border=1px>";
echo "<thead>";
echo "<tr>
			<td>Id PS</td> 
			<td>Id PRT</td> 
			<td>Nama</td>  
			<td>Alamat</td> 
			<td>Tarif</td>  
			<td>Daya Sekarang</td>  
			<td>Daya yg Inginkan</td> 
			<td>Pemohon</td>  
			<td>Keperluan</td>  
			<td>Tgl Mulai</td>  
			<td>Tgl Akhir</td>  
			<td>Feedback</td>
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
			<td>$data[6]</td> 
			<td>$data[7]</td> 
			<td>$data[8]</td>
			<td>$data[9]</td>
			<td>$data[10]</td>
			<td><a href=home.php?page=feedback&id_prt=$data[1]&id_ps=$data[0]>feedback</a></td>";
		}

echo "</tr>
	  </tbody>
</table>";
?>
</div>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
