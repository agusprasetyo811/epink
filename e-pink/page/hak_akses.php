<?php 
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
@$session_type=$_SESSION['type'];
if(isset($session_id)){?>
	<h1>Maaf Anda tidak berhak mengakses!!</h1><?
}else{
	echo("<script>window.location='index.php';</script>");
}
