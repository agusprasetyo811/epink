<?php
	$id_prt=$_POST["id_prt"];
	$text1=$_POST["text1"];
	$tglputus=$_POST["tglPutus"];
	
	mysql_connect ("localhost","root","");
	mysql_select_db ("pln1");
	

if (!empty ($tglputus)) {
	$perintah = "insert into t_p2tl(id_prt, uraian_putus, tgl_putus) values ('$id_prt','$text1','$tglputus')";
	$isi_data=mysql_query($perintah);
	if(isset($isi_data)) {
		header ("location:../index.php?page=form_input&success=p2tl_success");
	} else { ?>
		<script>alert("data gagal diinput"); window.location="../index.php";</script><?php }
	}
else { ?>
		<script>alert("data belum lengkap"); window.location="../index.php";</script><?php 
}
?>	