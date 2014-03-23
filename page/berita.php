<b>BERITA</b> <br><br>
<?php
mysql_connect("localhost","root","");
	mysql_select_db("pln1");
	$perintah= "SELECT * FROM t_post where kategori = 'berita' ORDER BY id_post  limit 5";
	$tampil_data = mysql_query($perintah);
	while($data = mysql_fetch_row($tampil_data)){
			echo " <a href=index.php?page=view_berita&id_berita=$data[0] class = ainput>$data[2]</a><i style='font-size:11px;'> Posted On : $data[5]</i><br>";
	}