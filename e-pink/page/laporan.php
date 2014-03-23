<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
$bulan = array('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember');
if(isset($session_id)){ 
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
<img src="../images/logo.png" /><br />
<form method="get" action="">
    Filter -  
    Tanggal 
    <select name="tanggal">
        <option value="">-Tanggal-</option>
		<option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select>
    Bulan  
    <select name="bulan">
        <option value="">-Bulan-</option>
		<option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>        
    </select>
    Tahun  
    <select name="tahun">
        <option value="">-Tahun-</option>
        <? for ($i=2011;$i<=2020;$i++){?>
		<option value="<?=$i?>"><?=$i?></option>
		<? } ?>
    </select>
    <input type="hidden" name="page" value="laporan" />
    <input type="submit" value="Filter"/>
</form>
<br /><br />
<div id="table"> 
<?php
// membuat variable tanggal
@$tgl = $_GET['tanggal'];
@$bln = $_GET['bulan'];
@$thn = $_GET['tahun'];

$dateView = $date;

if($tgl == ""||$bln == ""||$thn == ""){
	$dateView = $date;
}else{
	$dateView = $thn."-".$bln."-".$tgl;
}

$perintah= "SELECT kecamatan, penyambungan_sementara, p2tl, keluhan, meter_listrik, tgl_laporan FROM t_laporan where tgl_laporan = '$dateView'";
$tampil_data = mysql_query($perintah);

// Menampilkan data grafik
echo "<table border=1px>";
echo "<thead>";
echo "<tr>
			<td>Kecamatan</td> 
			<td>Penyambungan Sementara</td> 
			<td>P2TL</td>  
			<td>Keluhan</td> 
			<td>Meter Listrik</td>  
			<td>Periode</td>  
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
			<td>$data[5]</td>"; 
		}
echo "</tr>
	  </tbody>
</table>";
?>
</div>
<br />
Jika anda belum mempunyai Do PDF 
<a href="">Klik Disini</a>
<br><br>
<a href="page/laporan_view.php">Cetak</a>
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
 