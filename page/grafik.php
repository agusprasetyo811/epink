<?php 
// Memisahkan date menjadi bentuk array
$dates = explode("-",$date);
// Memisahkan tahun bulan tanggal 
$tahun = $dates[0];
$bulan = $dates[1];
$tanggal = $dates[2];

// Memasukan tabel penyambungan sementara kedalam grafik
$query_ps = mysql_query("select id_prt from t_ps");
while($show_ps = mysql_fetch_array($query_ps)){
	$query_num_ps = mysql_query("select t_ps.id_prt,t_prt.kecamatan from t_ps,t_prt where t_ps.id_prt = '$show_ps[0]' and t_ps.id_prt = t_prt.id_prt");
	while($show_ps_prt= mysql_fetch_array($query_num_ps)){
		$show_num_ps = mysql_num_rows($query_num_ps);
		mysql_query("update t_grafik set penyambungan_sementara = '$show_num_ps' where kecamatan = '$show_ps_prt[1]'");
	}
}

// Memasukan tabel p2tl kedalam grafik
$query_p2tl = mysql_query("select id_prt from t_p2tl");
while($show_p2tl = mysql_fetch_array($query_p2tl)){
	$query_num_p2tl = mysql_query("select t_p2tl.id_prt,t_prt.kecamatan from t_p2tl,t_prt where t_p2tl.id_prt = '$show_p2tl[0]' and t_p2tl.id_prt = t_prt.id_prt");
	while($show_p2tl_prt= mysql_fetch_array($query_num_p2tl)){
		$show_num_p2tl = mysql_num_rows($query_num_p2tl);
		mysql_query("update t_grafik set p2tl = '$show_num_p2tl' where kecamatan = '$show_p2tl_prt[1]'");
	}
}

// Memasukan tabel keluhan kedalam grafik
$query_keluhan = mysql_query("select id_prt from t_keluhan");
while($show_keluhan = mysql_fetch_array($query_keluhan)){
	$query_num_keluhan = mysql_query("select t_keluhan.id_prt,
											 t_prt.kecamatan from t_keluhan,t_prt where t_keluhan.id_prt = '$show_keluhan[0]' and t_keluhan.id_prt = t_prt.id_prt");
	while($show_keluhan_prt= mysql_fetch_array($query_num_keluhan)){
		$show_num_keluhan = mysql_num_rows($query_num_keluhan);
		mysql_query("update t_grafik set keluhan = '$show_num_keluhan' where kecamatan = '$show_keluhan_prt[1]'");
	}
}

// Memasukan tabel meter listrik kedalam grafik
$query_m_listrik = mysql_query("select id_prt from t_meterlistrik");
while($show_m_listrik = mysql_fetch_array($query_m_listrik)){
	$query_num_m_listrik = mysql_query("select t_meterlistrik.id_prt,
											 t_prt.kecamatan from t_meterlistrik,
											 					  t_prt where t_meterlistrik.id_prt='$show_m_listrik[0]' and t_meterlistrik.id_prt = t_prt.id_prt");
	while($show_m_listrik_prt= mysql_fetch_array($query_num_m_listrik)){
		$show_num_m_listrik = mysql_num_rows($query_num_m_listrik);
		mysql_query("update t_grafik set meter_listrik = '$show_num_m_listrik' where kecamatan = '$show_m_listrik_prt[1]'");
	}
}


$query_t_laporan_date = mysql_query("select * from t_laporan where tgl_laporan = '$date'");
$show_t_laporan_date = mysql_fetch_array($query_t_laporan_date);
$show_num_t_laporan_date = mysql_num_rows($query_t_laporan_date);

$query_t_grafik = mysql_query("select * from t_grafik");
while($show_t_grafik = mysql_fetch_array($query_t_grafik)){
	// Mendeteksi jika bulan sekarang adalah sama maka akan melakukan update
	if($tanggal == 01){
		
		if($show_num_t_laporan_date == 0){
			mysql_query("insert into t_laporan(
									  kecamatan,
									  penyambungan_sementara,
									  p2tl,
									  keluhan,
									  meter_listrik,
									  tgl_laporan
							   )values(
									  '$show_t_grafik[1]',
									  '$show_t_grafik[2]',
									  '$show_t_grafik[3]',
									  '$show_t_grafik[4]',
									  '$show_t_grafik[5]',
									  '$date')");
		}else{
			mysql_query("update t_laporan set kecamatan = '$show_t_grafik[1]',
									  		  penyambungan_sementara = '$show_t_grafik[2]',
									  		  p2tl = '$show_t_grafik[3]',
									  		  keluhan = '$show_t_grafik[4]',
									   		  meter_listrik = '$show_t_grafik[5]',
									  		  tgl_laporan = '$date' where kecamatan = '$show_t_grafik[1]' and tgl_laporan = '$date'");
		}
	}else{
		if($show_num_t_laporan_date != 0){
			mysql_query("update t_laporan set kecamatan = '$show_t_grafik[1]',
									  		  penyambungan_sementara = '$show_t_grafik[2]',
									  		  p2tl = '$show_t_grafik[3]',
									  		  keluhan = '$show_t_grafik[4]',
									   		  meter_listrik = '$show_t_grafik[5]',
									  		  tgl_laporan = '$date' where kecamatan = '$show_t_grafik[1]' and tgl_laporan = '$date'");
		}else{
			mysql_query("insert into t_laporan(
									 kecamatan,
									 penyambungan_sementara,
									 p2tl,
									 keluhan,
									 meter_listrik,
									 tgl_laporan
							  )values(
									 '$show_t_grafik[1]',
									 '$show_t_grafik[2]',
									 '$show_t_grafik[3]',
									 '$show_t_grafik[4]',
									 '$show_t_grafik[5]',
									 '$date')");
			}
		}
	}
?>
<iframe src="page/komponen/grafik/index.php" frameborder="0" width="620" height="1100"></iframe>