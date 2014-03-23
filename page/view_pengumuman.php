<?php

	$id = $_GET["id_pengumuman"];

	mysql_connect("localhost","root","");
	mysql_select_db("pln1");
	$perintah= "SELECT * FROM t_post where id_post= '".$id."' ";
	$tampil_data = mysql_query($perintah);
	while($data = mysql_fetch_row($tampil_data))
		{
			echo "<center> <b><h2> $data[1] </h2></b> </center>";
			echo "<br>($data[5])";
			echo "<br>$data[3]";
		}