<?php
@session_start ();
@$id_prt = $_SESSION['id'];
@$user = $_SESSION['login'];

if(isset($id_prt)){

	mysql_connect ("localhost","root","");
	mysql_select_db ("pln1");
	
	// Mendeteksi jumlah pesan yang belum dibuka
	$query_jumlah = mysql_query("select * from t_feedback where id_prt = '$id_prt' and status like '%tutup%'");
	$show_jumlah = mysql_num_rows($query_jumlah); 
	
	// Merubah nilai status inbox
	mysql_query("update t_prt set inbox = '$show_jumlah' where id_prt = '$id_prt'");
	echo("<div id='form-Pf'>");
	echo("<h1>PESAN DARI ADMIN</h1><hr>");
	echo("<h4>Pesan yang belum dibaca : </h4>");
	//  Menampilkan data feedback yang belum dibaca
	$query = mysql_query("select *  from t_feedback where id_prt='$id_prt' and status like '%tutup%'");
	$check = mysql_num_rows($query);
	if($check >= 1) { 
		echo "<table class='tabss' border=0 cellpadding=5>";
		echo "<thead>";
		echo "<tr><td>No</td><td>Pesan</td><td>Isi Pesan</td><td>Aksi</td></tr>";
		echo "</thead>";
		echo "<tbody>";
		$i=1;
		while($show = mysql_fetch_array($query)) {
			echo "<tr><td>$i</td><td width=100><a href='index.php?page=inbox&id=$show[0]&status=buka&display=show'>$show[2]</a></td><td width=400><a href='index.php?page=inbox&id=$show[0]&status=buka&display=show'>" . substr($show[4],0,20) ."</a></td><td width=150><a href='proses/hapus_pesan_inbox.php?id_feedback=$show[0]'>Hapus pesan</a></td></tr>";
			$i++;
		}
		echo "<tbody>";
		echo "</table>";
	} else {
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak ada pesan<br>";
	}		
	echo("<br>");
	echo("<h4>Pesan Yang sudah dibaca :</h4>");
	//  Menampilkan data feedback yang sudah dibaca
	$query = mysql_query("select *  from t_feedback where id_prt='$id_prt' and status like '%buka%'");
	$check = mysql_num_rows($query);
	if($check >=1) {
		echo "<table class='tabss' border=0 cellpadding=5>";
		echo "<thead>";
		echo "<tr><td>No</td><td>Pesan</td><td>Isi Pesan</td><td>Aksi</td></tr>";
		echo "</thead>";
		echo "<tbody>";
		$i=1;
		while($show = mysql_fetch_array($query)) {
			echo "<tr><td>$i</td><td width=100><a href='index.php?page=inbox&id=$show[0]&status=buka&display=show'>$show[2]</a></td><td width=400><a href='index.php?page=inbox&id=$show[0]&status=buka&display=show'>" . substr($show[4],0,20) ."</a></td><td width=150><a href='proses/hapus_pesan_inbox.php?id_feedback=$show[0]'>Hapus pesan</a></td></tr>";
			$i++;
		}
		echo "<tbody>";
		echo "</table>";
	} else {
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak ada pesan<br>";
	}
	echo("<br><br>");
	
	@$status = $_GET['status'];
	@$id = $_GET['id'];
	@$display = $_GET['display'];
	if($status == 'buka') {
		mysql_query("update t_feedback set status = '$status' where id_feedback = '$id'");
		echo "<div style='position:absolute;top:20px;width:603px;-moz-box-shadow: 6px 6px 6px #ccc;-webkit-box-shadow: 6px 6px 6px #ccc;border:1px #ccc solid;padding:8px;background:#ffffff;' id='$display'><h2>DETAIL MESSAGE<hr></h2>";
		$query = mysql_query("select * from t_feedback where id_feedback = '$id'");
		$show = mysql_fetch_array($query);
		echo("<h3>Judul Pesan : " . $show[2]."</h3>");
		echo("" . $show[3]."<br>");
		echo("<br>Isi pesan : " . $show[4]."<br><br><hr>");
		echo("<a href='index.php?page=inbox&dispaly=hide'>Tutup Pesan</a>");
		echo("</div>");
	}
	echo("</div>");
}else{
	echo "<center> Maaf Anda tidak berhak mengakses Hal ini</center>";
}
?>