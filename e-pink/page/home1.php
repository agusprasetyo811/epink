<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
if(isset($session_id)) {
#--------------------------------------------------------------------------------------------------------------------------------------------------------?>
--- Selamat Datang di Aplikasi E-Services PT PLN UP Bojonegoro disisi Admin ---
<? #-------------------------------------------------------------------------------------------------------------------------------------------------------
} else {
	echo("<script>window.location='index.php';</script>");
}
