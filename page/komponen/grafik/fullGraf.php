<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Index Persediaan</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="plugin/chart/css/demopage.css" type="text/css"/>
<script type="text/javascript" src="plugin/chart/js/jquery.min.js"></script>
<script type="text/javascript" src="plugin/chart/jsfull/visualize.jQuery.js"></script>
<link rel="stylesheet" href="plugin/chart/css/visualize.jQuery.css" type="text/css"/>
<script language="javascript">
// Fungsi untuk membuat Chart Grafik
$(function(){
	// Membuat beberapa type Chart	
	$('table').visualize({type:'line', title: 'Grafik PLN Kabupaten Bojonegoro',height: '500',width: '500'});
	$('table').visualize({type:'pie', title: 'Grafik PLN Kabupaten Bojonegoro',height: '500',width: '500'});
	$('table').visualize({title: 'Grafik PLN Kabupaten Bojonegoro',height: '500',width: '500'});
});
</script>
<?php // koneksi db
$conn = mysql_connect ("localhost","root","")  or die ("database error");
mysql_select_db ("pln1",$conn) or die ("database kosong");
?>
</head>
<body style="
	background:#ccc;
	background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ccc));
	background: -moz-linear-gradient(top, #ffffff, #ccc);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ccc'); 
	-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ccc');
">
<div>
<h1 align="">Grafik PLN Kabupaten Bojonegoro</h1>
<hr><br>
<table>
<thead>
<tr>
	<th></th>
	<th>Penyambungan Sementara</th>
    <th>P2TL</th>
    <th>Keluhan</th>
    <th>Meter Listrik</th>
</tr>
</thead>
<tbody>
<?php 
// Menampilkan grafik
$query_grafik = mysql_query("select * from t_grafik");
while($show_grafik = mysql_fetch_array($query_grafik)){ ?>
<tr>
    <th><?=@$show_grafik[1];?></th>
    <td><?=@$show_grafik[2];?></td>
    <td><?=@$show_grafik[3];?></td>
    <td><?=@$show_grafik[4];?></td>
    <td><?=@$show_grafik[5];?></td>
</tr>
<? } ?>
</tbody>
</table>
</div>
<br><br>
</body>
</html>
