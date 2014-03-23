<div id="table"> 
<?php
// Koneksi
mysql_connect("localhost","root","");
mysql_select_db("pln1");

$perintah = "SELECT kecamatan, penyambungan_sementara, p2tl, keluhan, meter_listrik FROM t_grafik";
$tampil_data = mysql_query($perintah);

echo "<div align=center>";
// Menampilkan data grafik
echo "<img align='left' src='../../images/logo.png' /><br />";
echo "<table border=1 width=100% style='font-size:44px;'>";
echo "<thead>";
echo "<tr>
			<td>Kecamatan</td> 
			<td>Penyambungan Sementara</td> 
			<td>P2TL</td>  
			<td>Keluhan</td> 
			<td>Meter Listrik</td>  
	  </tr>
	  </thead>
	  <tbody>";
while($data = mysql_fetch_row($tampil_data)){
echo "<tr> 
			<td>$data[0]</td> 
			<td>$data[1]</td> 
			<td>$data[2]</td> 
			<td>$data[3]</td> 
			<td>$data[4]</td>"; 
		}
echo "</tr>
	  </tbody>
</table>";
echo"</div>";?>
<br><br>
<a href="#" onClick="window.print()">Print</a><br><br>
