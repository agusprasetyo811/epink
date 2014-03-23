<?php
	
	$id_prt=$_POST["id_prt"];
	$tgl_keluhan=$_POST["tglKeluh"];
	$text1=$_POST["text1"];
	
	mysql_connect ("localhost","root","");
	mysql_select_db ("pln1");
	
	if (!empty ($tgl_keluhan) and !empty ($text1)) {
		$perintah = "insert into t_keluhan(id_prt, tgl_keluhan, uraian) values ('$id_prt','$tgl_keluhan', '$text1')";
		$isi_data=mysql_query($perintah);
			if(isset($isi_data)) {
				header ("location:../index.php?page=form_input&success=keluhan_success");
			} else { ?>
				<script>alert("data gagal diinput"); window.location="../index.php";</script><?php }
			}
		else { ?>
				<script>alert("data belum lengkap"); window.location="../index.php";</script><?php 
		}
		?>	