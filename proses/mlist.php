<?php
	$id_prt=$_POST["id_prt"];
	$stand_meter=$_POST["stand_meter_pln"];
	$smRumah2=$_POST["smRumah"];
	$smRumah3=$_POST["smRumah1"];
	$smRumah = $smRumah2 .'-'. $smRumah3 ;
	$tglputus=$_POST["tglPutus"];
	$angka="^[0-9]+$^";
	
	mysql_connect ("localhost","root","");
	mysql_select_db ("pln1");
	
if(empty ($smRumah) || empty($tglputus) ) {?> 
	<script>alert("data belum lengkap"); window.location="../index.php";</script><?php	
}elseif((!preg_match($angka,$smRumah2)) || (!preg_match($angka,$smRumah3))) {
	header("location:../index.php?page=form_input&invalid=mlist_invalid");
}else { 
	$perintah = "insert into t_meterlistrik(id_prt, stand_meter_rmh, tgl_lapor_meter)values('$id_prt','$smRumah','$tglputus')";
	$isi_data = mysql_query($perintah);
	if(isset($isi_data)) {
		header ("location:../index.php?page=form_input&success=mlist_success");
	} else { ?>
		<script>alert("data gagal diinput"); window.location="../index.php";</script><?php 
	}
}	