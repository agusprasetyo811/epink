<?php
include '../apps/date-time/index.php';

	$id_prt = $_POST["id_prt"];
	$dayaingin = $_POST["dayaIngin"];
	$pemohon = $_POST["pemohon"];
	$keperluan = $_POST["keperluan"];
	$tglMulai = $_POST["tglMulai"];
	$tglAkhir = $_POST["tglAkhir"];
	
	mysql_connect ("localhost","root","");
	mysql_select_db ("pln1");
	

$query = mysql_query("select * from t_ps where id_prt = '$id_prt' order by id_ps desc");
$num = mysql_num_rows($query);
$show = mysql_fetch_array($query);

if ($keperluan=="" || $tglMulai=="" || $tglAkhir==""){?>
	<script>alert("data belum lengkap");javascript:history.go(-1);</script><? 
} else if($tglAkhir < $show[4]|| $tglMulai < $show[4]) {?>
	<script>alert("Cek Kalender"); window.location="../index.php?";javascript:history.go(-1);</script><?
}else if ($tglAkhir <= $show[5] || $tglMulai <= $show[5]){?>
	<script>alert("Anda masih dalam masa waktu tenggang tanggal"); window.location="../index.php?";javascript:history.go(-1);</script><?
}else if ($tglMulai > $tglAkhir) {?>
	<script>alert("Tanggal Akhir harus lebih besar dari Tanggal Awal");javascript:history.go(-1);</script><? 
 } else {
	$perintah = "insert into t_ps (id_prt,daya_ingin, pemohon, keperluan, tgl_mulai, tgl_akhir) values ('$id_prt', '$dayaingin', '$pemohon','$keperluan', '$tglMulai', '$tglAkhir')";
	$isi_data=mysql_query($perintah);
	header ("location:../index.php?page=form_input&success=penyambungan_sementara_success");
}
?>	