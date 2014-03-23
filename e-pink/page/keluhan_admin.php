<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)){
$perintah = "SELECT t_keluhan.id_keluhan,
					t_prt.id_prt, 
					t_keluhan.tgl_keluhan, 
					t_prt.nama,
					t_prt.alamat, 
					t_prt.no_telp,  
					t_keluhan.uraian 
			 FROM t_prt, 
			 	  t_keluhan 
			 WHERE t_keluhan.id_prt=t_prt.id_prt and t_keluhan.penanganan like '%belum%' ORDER BY id_keluhan";
$tampil_data = mysql_query($perintah);
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<div id="table">
<?php
echo "<table border=1px>";
echo "<thead>
		<tr>
			<td>Id Keluhan</td> 
			<td>Id PRT</td> 
			<td>Tgl Keluhan</td>  
			<td>Nama</td>  
			<td>Alamat</td>  
			<td>Telepon</td>  
			<td>Uraian Keluhan</td>
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
		<td><a href=home.php?page=feedback&id_prt=$data[1]&id_keluhan=$data[0]>feedback </a></td>";
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

