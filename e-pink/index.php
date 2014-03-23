<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin PLN UP Bojonegoro</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<form method="post" action="proses/login_admin.php">
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Id Admin PLN </th>
			<td><input type="text"  class="login-inp" name="id_admin"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password"  class="login-inp" name="pass_admin"/></td>
		</tr>
        <tr>
			<th></th>
			<td height="20">
            <select name="type">
            	<option>Pilih Type Admin</option>
                <option value="ps">Penyambungan Sementara</option>
                <option value="p2tl">P2TL</option>
                <option value="keluhan">Keluhan</option>
                <option value="meterlistrik">Meter Listrik</option> 
            </select>
            </td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
	</div>
	</form>
</div>
<!-- End: login-holder -->
</body>
</html>