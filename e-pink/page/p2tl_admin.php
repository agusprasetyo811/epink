<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
@$perintah= "SELECT t_p2tl.id_p2tl,
					t_prt.id_prt,
					t_prt.nama,
					t_prt.alamat, 
					t_prt.daya, 
					t_p2tl.uraian_putus, 
					t_p2tl.tgl_putus 
			 FROM t_prt, 
			 	  t_p2tl 
		     WHERE t_p2tl.id_prt=t_prt.id_prt and t_p2tl.penanganan like '%belum%' ORDER BY id_p2tl";
@$tampil_data = mysql_query($perintah);
if(isset($session_id)) {
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<div id="table">
<?php
echo "<table border=1px>
	<thead>";
echo "<tr>
		<td>Id P2TL</td> 
		<td>Id PRT</td> 
		<td>Nama</td>  
		<td>Alamat</td>  
		<td>Daya Listrik</td>  
		<td>Uraian Pemutusan</td>  
		<td>Tgl_Putus</td>
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
		<td><a href=home.php?page=feedback&id_prt=$data[1]&id_p2tl=$data[0]>Feedback</a></td>";
}
echo "</tbody>
	</tr>
</table>";
?>
</div>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
