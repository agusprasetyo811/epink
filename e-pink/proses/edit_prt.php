<?php
$id_prt = $_POST['id_prt'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$kecamatan = $_POST['kecamatan'];
$no_ktp = $_POST['no_ktp'];
$jk = $_POST['jk'];
$pekerjaan = $_POST['pekerjaan'];
$email = $_POST['email'];
$tarif = $_POST['tarif'];
$daya = $_POST['daya']; 
$stand_meter_pln = $_POST['stand_meter_pln'];
$tagihan = $_POST['tagihan'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tglLahir = $tanggal."-".$bulan."-".$tahun;

mysql_connect("localhost","root");
mysql_select_db("pln1");

if($nama=="" ||$no_telp=="" ||$alamat=="" ||$kecamatan=="" ||$tglLahir=="" ||$no_ktp=="" ||$jk=="" ||$pekerjaan=="" ||$email=="" ||$tarif=="" ||$daya=="" ||$stand_meter_pln=="" || $tagihan=="") {
	echo "<script>alert('Data masih kosong');javascript:history.go(-1);</script>";
} else {
	mysql_query("update t_prt set nama ='$nama', no_telp ='$no_telp', alamat ='$alamat', kecamatan ='$kecamatan', tglLahir ='$tglLahir', no_ktp ='$no_ktp', jk ='$jk', pekerjaan ='$pekerjaan', email ='$email', tarif ='$tarif', daya ='$daya', stand_meter ='$stand_meter_pln', tagihan='$tagihan' where id_prt = '$id_prt'");
 	header("location: ../home.php?page=prt_admin");
}