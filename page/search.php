<?php
// Memperoleh parameter pencarian
@$key = $_GET['key'];
// Koneksi database
mysql_connect ("localhost","root","");
mysql_select_db ("pln1");
// Membuat halaman
@$hal = $_GET['hal'];
// Menentukan jumlah item perhalaman
if(!isset($hal)){
	$page=1;
}else{
	$page = $hal;
}
// Menentukan item perhalaman
$max_item = 3;
$from = (($page * $max_item) - $max_item);
// Mengambil jumlah item dari t_post
$total_item = mysql_result(mysql_query("select count(*) as num from t_post"),0);
?>
<div id="form-Pf">
<table width="600" >
<?
$query_pencarian = mysql_query("select judul,isi,id_post from t_post where isi like '%$key%' or judul like '%$key%' order by id_post desc limit $from,$max_item");
$jumlah_pencarian = mysql_num_rows($query_pencarian);
echo "<p style='font-style:italic;font-size:16px;'>Terdapat " . $jumlah_pencarian . " data<hr></p>" ;
echo "<h3>Hasil Pencarian : </h3>";
if($query_pencarian && mysql_num_rows($query_pencarian)){
	while($show_pencarian = mysql_fetch_array($query_pencarian)) {?>
		<tr>
			<td><b><?=@$show_pencarian[0];?></b></td>
		</tr>
		<tr>
			<td><a href="?page=view&id_post=<?=@$show_pencarian[2];?>"><?=@substr($show_pencarian[1],0,20);?>....</a></td>
		</tr>
		<tr>
			<td><hr style="border:1px #DDDDDD dashed" /></td>
		</tr>
	<? 
	} 
}
?>
</table>
<?php
// ceil melakukan pembulatan keatas
$total_hal = ceil($total_item / $max_item);
echo "Halaman : ";
// Membuat link back
if($hal > 1){
	$back = ($page - 1); 
	echo "<a href='$_SERVER[PHP_SELF]?page=search&hal=$back'> Back&nbsp;&nbsp;</a>";
}

// Membuat navigasi halaman
for($i=1; $i <= $total_hal; $i++){
	if(($hal) == $i){
		echo "<a href='$_SERVER[PHP_SELF]?page=search&hal=$i'> $i </a>";
	} else {
		echo "<a href='$_SERVER[PHP_SELF]?page=search&hal=$i'> $i </a>";
	}
}

// Membuat link Next
if($hal < $total_hal){
	$next = $page +1;
	echo "<a href='$_SERVER[PHP_SELF]?page=search&hal=$next'>&nbsp;&nbsp;Next </a>";
}
?>
</div>