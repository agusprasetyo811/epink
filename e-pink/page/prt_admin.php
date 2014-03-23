<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)) {
$perintah= "SELECT * FROM t_prt ORDER BY id_prt";
$tampil_data = mysql_query($perintah);
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>

<link type="text/css" href="../css/smoothness/style.css" rel="stylesheet" />
<div id="table">
<?php
echo "<table style='font-size:10px' border=1px>";
echo "<thead>
	<tr>
			<td>Id PRT</td> 
			<td>Nama</td> 
			<td>No Telepon</td>  
			<td>Alamat</td> 
			<td>Kecamatan</td>  
			<td>TglLahir</td>  
			<td>No KTP</td>  
			<td>Jenis Kelamin</td> 
			<td>Pekerjaan</td> 
			<td>Email</td> 
			<td>Tarif</td> 
			<td>Daya</td> 
			<td>Stand_meter</td> 
			<td>Tagihan</td> 
			<td>Update</td>
	</tr>";

while($data = mysql_fetch_row($tampil_data))
		{
			echo "<tr> 
						<td>$data[0]</td> 
						<td>$data[1]</td> 
						<td>$data[2]</td> 
						<td>$data[3]</td>  
						<td>$data[5]</td> 
						<td>$data[6]</td> 
						<td>$data[7]</td> 
						<td>$data[8]</td> 
						<td>$data[9]</td> 
						<td>$data[10]</td> 
						<td>$data[11]</td> 
						<td>$data[12]</td> 
						<td>$data[13]</td> 
						<td>$data[14]</td>
						<td><a href=home.php?page=edit_prt&id_prt=$data[0]>Edit</a></td>";
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
