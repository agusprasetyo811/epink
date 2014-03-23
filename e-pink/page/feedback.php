<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({fullPanel : true}).panelInstance('area2');
	new nicEditor({fullPanel : true}).panelInstance('area3');
});
</script>
<?php
@$id_ps = $_GET['id_ps'];
@$id_prt = $_GET['id_prt'];
@$id_p2tl = $_GET['id_p2tl'];
@$id_keluhan = $_GET['id_keluhan'];
@$id_meterlistrik = $_GET['id_meterlistrik'];

mysql_connect ("localhost","root","");
mysql_select_db ("pln1");


if(isset($id_ps)){
	$perintah= "SELECT t_ps.id_ps, t_prt.id_prt, t_prt.nama, t_prt.alamat, t_prt.tarif, t_prt.daya, t_ps.daya_ingin, t_ps.pemohon, t_ps.keperluan, t_ps.tgl_mulai, t_ps.tgl_akhir FROM t_prt,t_ps WHERE t_ps.id_prt='$id_prt' and t_ps.id_prt=t_prt.id_prt and t_ps.penanganan like '%belum%' and t_ps.id_ps = $id_ps ORDER BY id_ps";
	$hasil=mysql_query ($perintah);
	$baris=mysql_fetch_array($hasil); 
	
	echo "
	<form method=post action=proses/send_msg.php>
	<input type=hidden name=id_ps value=$id_ps>
	<input type=hidden name=id_prt value=$id_prt> 
	
	<input type=hidden name=judul value= PS>
	<h1>Isi pesan PS :</h1><br>
	<textarea cols=80 id=area2 name=pesan>Kepada Yang terhormat Saudara : $baris[2] <br>
	bertempat tinggal di :  $baris[3] <br>
	Dengan tarif : $baris[4] <br>
	Daya listrik yang anda dirumah sekarang : $baris[5]<br>
	Daya listrik yang anda inginkan untuk dipasang : $baris[6]<br>
	Dengan pemohon : $baris[7] <br> 
	Dengan keperluan : $baris[8]<br> 
	dari tanggal : $baris[9]<br>
	sampai tanggal : $baris[10]</textarea><br><br>
	
	<h1>Isi feedback :</h1><br>
	<textarea cols=80 id=area3 name=isi> </textarea><br><br>
	<input type=submit value=kirim> <input type=reset>
	</form>
	";
}else if (isset($id_p2tl)){
	$perintah= "SELECT t_p2tl.id_p2tl, t_prt.id_prt, t_prt.nama, t_prt.daya, t_p2tl.tgl_putus, t_p2tl.uraian_putus FROM t_prt, t_p2tl WHERE t_p2tl.penanganan like '%belum%' and t_p2tl.id_prt='$id_prt' and t_p2tl.id_prt=t_prt.id_prt and t_p2tl.id_p2tl='$id_p2tl' ORDER BY id_p2tl";
	$hasil=mysql_query ($perintah);
	$baris=mysql_fetch_array($hasil); 
	echo "
	<form method='post' action='proses/send_msg.php'>
	
	<input type=hidden name=id_p2tl value=$id_p2tl>
	<input type=hidden name=id_prt value=$id_prt> 
	
	<input type=hidden name=judul value= P2TL>
	
	<h1>Isi pesan P2tl</h1><br>
	<textarea cols=80 id=area2 name=pesan>Kepada Yang terhormat Saudara : $baris[2] <br>
	Daya listrik yang anda gunakan sebesar : $baris[3]<br>
	Uraian pemutusan : $baris[5]<br>
	Tanggal lapor diputus oleh PLN pada : $baris[4]<br><br> </textarea><br><br>
	
	<h1>Isi feedback :</h1><br>
	<textarea cols=80 id=area3 name=isi> </textarea><br><br>
	<input type=submit value=kirim> <input type=reset>
	</form>
	";
}else if (isset($id_keluhan)){
	$perintah= "SELECT t_keluhan.id_keluhan, t_prt.id_prt, t_prt.nama, t_prt.alamat, t_keluhan.uraian FROM t_prt, t_keluhan WHERE t_keluhan.penanganan LIKE '%belum%' AND t_keluhan.id_prt = '$id_prt' AND t_keluhan.id_prt = t_prt.id_prt AND t_keluhan.id_keluhan = '$id_keluhan' ORDER BY id_keluhan";
	$hasil=mysql_query ($perintah);
	$baris=mysql_fetch_array($hasil); 
	echo "
	<form method=post action=proses/send_msg.php>
	
	<input type=hidden name=id_keluhan value=$id_keluhan>
	<input type=hidden name=id_prt value=$id_prt> 
	
	<input type=hidden name=judul value= Keluhan>
	
	<h1>Isi pesan Keluhan :</h1><br>	
	<textarea cols=80 id=area2 name=pesan>
	Kepada Yang terhormat Saudara : $baris[2] <br>
	Bertempat tinggal di : $baris[3]<br>
	Uraian keluhan : $baris[4]<br><br> </textarea><br><br>
	
	<h1>Isi feedback :</h1><br>
	<textarea cols=80 id=area3 name=isi> </textarea><br><br>
	<input type=submit value=kirim> <input type=reset>
	</form>
	";
}else if (isset($id_meterlistrik)){
	$perintah= "SELECT t_meterlistrik.id_meterlistrik, t_prt.id_prt, t_prt.nama, t_prt.daya,  t_meterlistrik.stand_meter_rmh, t_prt.stand_meter FROM t_prt, t_meterlistrik WHERE t_meterlistrik.penanganan like '%belum%' and t_meterlistrik.id_prt='$id_prt' and t_meterlistrik.id_prt=t_prt.id_prt and t_meterlistrik.id_meterlistrik='$id_meterlistrik' ORDER BY id_meterlistrik";
	$hasil=mysql_query ($perintah);
	$baris=mysql_fetch_array($hasil); 
	echo "
	<form method=post action=proses/send_msg.php>
	
	<input type=hidden name=id_meterlistrik value=$id_meterlistrik>
	<input type=hidden name=id_prt value=$id_prt> 
	
	<input type=hidden name=judul value= Meter_Listrik>
	
	<h1>Isi pesan Meter Listrik : </h1><br>
	<textarea cols=80 id=area2 name=pesan>Kepada Yang terhormat Saudara : $baris[2] <br>
	Dengan daya : $baris[3]<br>
	Terdapat ketidaksesuaian meter listrik yaitu yang tercatat dirumah : $baris[4]<br>
	dan yang tercatat di PLN : $baris[5]<br><br> </textarea><br><br>
	
	<h1>Isi feedback : </h1><br>
	<textarea cols=80 id=area3 name=isi> </textarea><br><br>
	<input type=submit value=kirim> <input type=reset>
	</form>
	";
}