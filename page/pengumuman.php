<b>PENGUMUMAN</b> <br><br>

<?php
mysql_connect("localhost","root","");
	mysql_select_db("pln1");
	$perintah= "SELECT * FROM t_post where kategori = 'pengumuman' ORDER BY id_post  limit 5";
	$tampil_data = mysql_query($perintah);
	while($data = mysql_fetch_row($tampil_data))
		{
			echo " <b><a href=index.php?page=view_pengumuman&id_pengumuman=$data[0] class = ainput>$data[2]</a><i style='font-size:11px;'> Posted On : $data[5]</i><br>";
		}