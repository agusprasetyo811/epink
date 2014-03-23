<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)) {
$perintah = "SELECT t_meterlistrik.id_meterlistrik,
					t_prt.id_prt,
					t_prt.nama, 
					t_prt.alamat, 
					t_prt.daya,  
					t_meterlistrik.stand_meter_rmh, 
					t_prt.stand_meter, 
					t_meterlistrik.tgl_lapor_meter 
			FROM t_prt, 
				 t_meterlistrik 
			WHERE t_meterlistrik.id_prt=t_prt.id_prt and t_meterlistrik.penanganan like '%belum%' ORDER BY id_meterlistrik";
$tampil_data = mysql_query($perintah);
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>

<div id="table">
<?php
echo "<table border=1px>";
echo "<thead>
		<tr>
			<td>Id Meter</td> 
			<td>Id PRT</td> 
			<td>Nama</td>  
			<td>Alamat</td>  
			<td>Daya</td>  
			<td>Stand Meter Rumah</td>  
			<td>Stand Meter PLN</td>  
			<td>Tgl lapor</td>
			<td>Feedback</td>
	</tr>
	</thead>
	</tbody>";
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
			<td><a href=home.php?page=feedback&id_prt=$data[1]&id_meterlistrik=$data[0]>feedback </a></td>";
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
