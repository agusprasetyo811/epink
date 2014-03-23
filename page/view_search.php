<?php
mysql_connect("localhost","root","");
mysql_select_db("pln1");

$id_post = $_GET['id_post'];

$perintah= "SELECT judul,isi FROM t_post where id_post = '$id_post'";
$tampil_data = mysql_query($perintah);
$hasil = mysql_fetch_array($tampil_data);
echo "<h2>$hasil[0]</h2>";
echo "$hasil[1]";