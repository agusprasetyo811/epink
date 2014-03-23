<?php
$id_admin=$_POST["id_admin"];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$tgl = $_POST['tgl'];

mysql_connect ("localhost","root","");
mysql_select_db ("pln1");


	if (!empty($judul) and !empty($isi) and !empty($tgl) )
		{
		$perintah = "insert into t_post (id_admin, judul, isi, kategori, tgl_post) values ('$id_admin','$judul','$isi','$kategori', '$tgl')";
		$isi_data = mysql_query($perintah);
		if(isset($isi_data)) {
				header ("location:../home.php?page=post");
			}
			else { 
				?><script>alert("data gagal diinput"); window.location="../home.php?page=post";</script><? 
			}
		}			
		else { 
			?><script>alert("data belum lengkap"); window.location="../home.php?page=post";</script><?php 
		}
	