<?php
@$id_ps = $_POST['id_ps'];
@$id_p2tl = $_POST['id_p2tl'];
@$id_prt = $_POST['id_prt'];
@$id_keluhan = $_POST['id_keluhan'];
@$id_meter = $_POST['id_meterlistrik'];
@$judul = $_POST['judul'];
@$pesan = $_POST['pesan'];
@$isi = $_POST['isi'];

@$tgl = date('Y-m-d');

mysql_connect ("localhost","root","");
mysql_select_db ("pln1");

if(isset($id_ps)){
	mysql_query("update t_ps set penanganan='sudah' where id_ps = '$id_ps'");
	if (!empty($pesan) and !empty($isi)){
		$perintah = "insert into t_feedback(id_prt,judul,pesan,isi,tgl_feedback)values('$id_prt','$judul', '$pesan', '$isi', '$tgl')";
		$isi_data=mysql_query($perintah);
		if(isset($isi_data))
		{
			header ("location:../home.php?page=penyambungan_sementara");
		} else{ ?>
			<script>alert("data gagal diinput");javascript:history.go(-1);</script>
		<?php }
	} else { ?>
		<script>alert("data belum lengkap"); javascript.history.go(-1);</script>
	<?php }
} else if (isset($id_p2tl)) {
	mysql_query("update t_p2tl set penanganan = 'sudah' where id_p2tl='$id_p2tl' ");
	if (!empty($pesan) and !empty($isi)) {
		$perintah = "insert into t_feedback(id_prt,judul,pesan,isi,tgl_feedback)values('$id_prt','$judul', '$pesan', '$isi', '$tgl')";
		$isi_data=mysql_query($perintah);
		if(isset($isi_data))
		{
			echo $id_p2tl;
			header ("location:../home.php?page=p2tl_admin");
		}
		else{ ?>
			<script>alert("data gagal diinput"); javascript.history.go(-1);</script>
		<?php }
	} else { ?>
		<script>alert("data belum lengkap"); javascript.history.go(-1);</script>
		<?php 
	}
} else if(isset($id_keluhan)) {
echo "Keluhan";
	mysql_query("update t_keluhan set penanganan='sudah' where id_keluhan = '$id_keluhan'");
	if (!empty($pesan) and !empty($isi)) {
		$perintah = "insert into t_feedback(id_prt,judul,pesan,isi,tgl_feedback)values('$id_prt','$judul', '$pesan', '$isi', '$tgl')";
		$isi_data=mysql_query($perintah);
		if(isset($isi_data))
		{
			header ("location:../home.php?page=keluhan_admin");
		}
		else{ ?>
			<script>alert("data gagal diinput"); window.location="../index.php";</script><?php 
		}
	} else { ?>
		<script>alert("data belum lengkap"); window.location="../index.php";</script><?php 
	}
} else if(isset($id_meter)) {
	mysql_query("update t_meterlistrik set penanganan='sudah' where id_meterlistrik = '$id_meter'");
	if (!empty($pesan) and !empty($isi))
	{
		$perintah = "insert into t_feedback(id_prt,judul,pesan,isi,tgl_feedback)values('$id_prt','$judul', '$pesan', '$isi', '$tgl')";
		$isi_data=mysql_query($perintah);
		if(isset($isi_data))
		{
			header ("location:../home.php?page=mlistrik_admin");
		}
		else{ ?>
<script>alert("data gagal diinput"); window.location="../index.php";</script>
		<?php }
} else { ?>
<script>alert("data belum lengkap"); window.location="../index.php";</script>
	<?php }
}
?>