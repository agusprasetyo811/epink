<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin PLN UP Bojonegoro</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" href="../css/smoothness/style.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script type="text/javascript" src="../jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
</script>
</script>
<?php
@session_start();
@$session_nama=$_SESSION['log'];
@$session_id=$_SESSION['id'];
@$session_type=$_SESSION['type'];
include '../apps/date-time/index.php';
if(isset($session_id)) {
// Koneksi
mysql_connect("localhost","root","");
mysql_select_db("pln1");
?>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""></a>
	</div>
	<!-- end logo -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="home.php?page=account"><div style="margin-top:10px;"><img src="images/shared/nav/nav_myaccount.gif"  width="93" height="14" alt="" /></div></a>
			<div class="nav-divider">&nbsp;</div>
			<a href="proses/logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="tables">
		<?php
		@$page = $_GET["page"];
		?>
		<ul class="select"><li <?php if (@$page=="home" || @$page=="")?>><a href="home.php?page=home"><b>HOME</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="#"><b>Services</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<?php 
				if($session_type == 'ps'){?>
                    <li <?php if (@$page=="penyambungan_sementara" || @$page=="")?>><a href="home.php?page=penyambungan_sementara">Penyambungan Sementara</a></li>
                    <li <?php if (@$page=="p2tl_admin" || @$page=="")?>><a href="home.php?page=hak_akses">P2TL</a></li>
                    <li <?php if (@$page=="keluhan_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Keluhan</a></li>
                    <li <?php if (@$page=="mlistrik_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Meter Listrik</a></li><? 
				}elseif($session_type == 'p2tl'){?>
                    <li <?php if (@$page=="penyambungan_sementara" || @$page=="")?>><a href="home.php?page=hak_akses">Penyambungan Sementara</a></li>
                    <li <?php if (@$page=="p2tl_admin" || @$page=="")?>><a href="home.php?page=p2tl_admin">P2TL</a></li>
                    <li <?php if (@$page=="keluhan_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Keluhan</a></li>
                    <li <?php if (@$page=="mlistrik_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Meter Listrik</a></li><?
               	}elseif($session_type == 'keluhan'){?>
                	<li <?php if (@$page=="penyambungan_sementara" || @$page=="")?>><a href="home.php?page=hak_akses">Penyambungan Sementara</a></li>
                    <li <?php if (@$page=="p2tl_admin" || @$page=="")?>><a href="home.php?page=hak_akses">P2TL</a></li>
                    <li <?php if (@$page=="keluhan_admin" || @$page=="")?>><a href="home.php?page=keluhan_admin">Keluhan</a></li>
                    <li <?php if (@$page=="mlistrik_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Meter Listrik</a></li><?
                }elseif($session_type == 'meterlistrik'){?>
                	<li <?php if (@$page=="penyambungan_sementara" || @$page=="")?>><a href="home.php?page=hak_akses">Penyambungan Sementara</a></li>
                    <li <?php if (@$page=="p2tl_admin" || @$page=="")?>><a href="home.php?page=hak_akses">P2TL</a></li>
                    <li <?php if (@$page=="keluhan_admin" || @$page=="")?>><a href="home.php?page=hak_akses">Keluhan</a></li>
                    <li <?php if (@$page=="mlistrik_admin" || @$page=="")?>><a href="home.php?page=mlistrik_admin">Meter Listrik</a></li><? 
				}?>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li <?php if (@$page=="post" || @$page=="")?>><a href="home.php?page=post"><b>Post</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="#"><b>User</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><?php if (@$page=="prt_admin" || @$page=="")?>><a href="home.php?page=prt_admin">PRT Table</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li <?php if (@$page=="history" || $page=="")?>><a href="home.php?page=history"><b>History</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
        
        <div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li <?php if (@$page=="laporan" || $page=="")?>><a href="home.php?page=laporan"><b>Laporan</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>

		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Welcome Admin</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
			<!--  start table-content  -->
			<div id="table-content">
			<?php
			if (@$page=="home" || @$page=="")
			{
				include "page/home1.php";
			}
			else if (@$page=="penyambungan_sementara" || @$page=="")
			{
				include "page/penyambungan_sementara.php";
			}
			else if(@$page=="p2tl_admin" || @$page=="")
			{
				include "page/p2tl_admin.php";
			}
			else if(@$page=="keluhan_admin" || @$page=="")
			{
				include "page/keluhan_admin.php";
			}
			else if(@$page=="mlistrik_admin" || @$page=="")
			{
				include "page/mlistrik_admin.php";
			}
			else if(@$page=="prt_admin" || @$page=="")
			{
				include "page/prt_admin.php";
			}
			else if(@$page=="account" || @$page=="")
			{
				include "page/account.php";
			}
			else if(@$page=="edit_prt" || @$page=="")
			{
				include "page/edit_prt.php";
			}
			else if(@$page=="post" || @$page=="")
			{
				include "page/post.php";
			}
				else if(@$page=="feedback" || @$page=="")
			{
				include "page/feedback.php";
			}
				else if(@$page=="history" || @$page=="")
			{
				include "page/history.php";
			}
				else if(@$page=="hak_akses" || @$page=="")
			{
				include "page/hak_akses.php";
			}
			else if(@$page=="laporan" || @$page=="")
			{
				include "page/laporan.php";
			}
			else if(@$page=="laporanlayanan" || @$page=="")
			{
				include "page/laporanlayanan.php";
			}
		?>
			
			
			</div>
			<!--  end table-content  -->
	
<!-- start footer -->         
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left -->
	<div id="footer-left">
		 Copyright &copy; Alfina Nuraini. Kirimkan komentar, saran dan pertanyaan anda kepada <a href="justfinna.part2@yahoo.com">finna <?php echo date('Y');?>
	</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
</body>
</html>
<?php 
}else{
	echo("<script>window.location='index.php';</script>");
}
?>