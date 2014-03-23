<?php @session_start ();
@$id_prt=$_SESSION['id'];
if(@$_SESSION['login']!=""){
?>
<script src="jquery/jquery.js" type="text/javascript"></script>
<title>PT. PLN UP BOJONEGORO</title>

<link type="text/css" href="css/smoothness/style.css" rel="stylesheet" />
<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$('#tabs').tabs();
$("input[name='tglMulai']").datepicker({dateFormat:'yy-mm-dd'});
$("input[name='tglAkhir']").datepicker({dateFormat:'yy-mm-dd'});
$("input[name='tglPutus']").datepicker({dateFormat:'yy-mm-dd'});
$("input[name='tglKeluh']").datepicker({dateFormat:'yy-mm-dd'});
});
</script>


<?php
$check = @$_GET["exist"];
$success = @$_GET["success"];
$invalid = @$_GET["invalid"];
$id=$_SESSION['login'];
mysql_connect ("localhost","root","");
mysql_select_db ("pln1");

if ($check == "penyambungan_sementara_exist")
{
	
$perintah= "SELECT * FROM t_ps where id_prt='$id'";
$hasil=mysql_query ($perintah);
$baris=mysql_fetch_array($hasil); 

	echo "<div id=warning>Maaf saudara : ";
	echo $_SESSION['login']; 
	echo "<br>Anda sudah menginputkan data Penyambungan Sementara";
	echo "<br>silahkan input lagi pada tanggal : ";
	echo "$baris[8]</div>";
}
else if ($check == "p2tl_exist")
{
	echo "<div id=warning>Maaf saudara : ";echo $_SESSION['login']; echo "<br>Anda sudah menginputkan data P2TL</div>";
}
else if ($check == "keluhan_exist")
{
	echo "<div id=warning>Maaf saudara : ";echo $_SESSION['login']; echo "<br>Anda sudah menginputkan data Keluhan</div>";
}
else if ($check == "mlist_exist")
{
	echo "<div id=warning>Maaf saudara : ";echo $_SESSION['login']; echo "<br>Anda sudah menginputkan data Meter Listrik</div>";
}
else if ($success == "penyambungan_sementara_success")
{
	echo "<div id=warning>Terima Kasih saudara : ";
	echo $_SESSION['login']; 
	echo "<br>Anda telah berhasil menginputkan data Penyambungan Sementara";
	echo "<br>silahkan menunggu feedback dari Admin </div>";
}
else if ($success == "p2tl_success")
{
	echo "<div id=warning>Terima Kasih saudara : ";echo $_SESSION['login']; echo "<br>Anda telah menginputkan data P2TL</div>";
}
else if ($success == "keluhan_success")
{
	echo "<div id=warning>Terima Kasih saudara : ";echo $_SESSION['login']; echo "<br>Anda telah menginputkan data keluhan</div>";
}

else if ($success == "mlist_success")
{
	echo "<div id=warning>Terima Kasih saudara : ";echo $_SESSION['login']; echo "<br>Anda telah menginputkan data Meter Listrik</div>";
}
else if ($invalid == "mlist_invalid")
{
	echo "<div id=warning>Maaf saudara : ";echo $_SESSION['login']; echo "<br>data yang Anda inputkan invalid</div>";
}


?>
<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Penyambungan Sementara</a></li>
					<li><a href="#tabs-2">P2TL</a></li>
					<li><a href="#tabs-3">Keluhan</a></li>
					<li><a href="#tabs-4">Meter Listrik</a></li>
					<li><a href="#tabs-5">Rekening Listrik</a></li>
				</ul>
				
				<div id="tabs-1">
				
				<?php 
				include "include/form_ps.php";
				?> 
				</div>
				<div id="tabs-2">
				<?php 
				include "include/form_p2tl.php";
				?> 
				</div>
				<div id="tabs-3">
				<?php 
				include "include/form_keluhan.php";
				?> 
				</div> 
				
				<div id="tabs-4">
				<?php 
				include "include/m_listrik.php";
				?>
				</div>
				<div id="tabs-5">
				<?php 
				include "include/tag_listrik.php";
				?>
				</div>
</div>
<?php }
else{
echo "<center> Maaf Anda tidak berhak mengakses Hal ini</center>";
}
?>