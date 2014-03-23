<?php session_start ();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery/jquery.js" type="text/javascript"></script>
<link type="text/css" href="css/smoothness/style.css" rel="stylesheet" />
<link rel="stylesheet" href="style/style.css" >
<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$('#tabs').tabs();
$("input[name='tgl']").datepicker({
	dateFormat:'yy-mm-dd',
	changeMonth: true,
	changeYear: true
	});
});
</script>
<title>PT. PLN UP BOJONEGORO</title>
</head>

<body id="all">
	<div id="layout">
    <div id="main-body">
	
		<!-- Logo -->
	  	<div id="logo"></div>
        
        <!-- News -->
	  	<div id="news" class="fonts">
        <object data="module/slide-news/index.php" id="content-news"></object>
        </div>
        
		<!-- Top And Search Menu -->
        <div id="menu">
        <ul id="css3menu1" class="topmenu">
		<?php
			$page = $_GET["page"];
		?>
			<li <?php if ($page=="grafik" || $page=="")?> class="topmenu"><a href="index.php?page=grafik" title="Home" style="height:16px;line-height:16px;">Beranda</a></li>
			<li class="topmenu"><a href="#" title="Service" style="height:16px;line-height:16px;"><span>Pelayanan Pelanggan</span></a>
			<ul>
			  <li <?php if ($page=="penyambungan" || $page=="")?> class="subfirst"><a href="index.php?page=penyambungan" title="penyambungan">Penyambungan Sementara</a></li>
				<li <?php if ($page=="prabayar" || $page=="")?>><a href="index.php?page=prabayar" title="prabayar">Listrik Prabayar</a></li>
			</ul></li>
			<li <?php if ($page=="profil" || $page=="")?> class="topmenu"><a href="index.php?page=profil" title="Profile" style="height:16px;line-height:16px;">Profil perusahaan</a></li>
			<li <?php if ($page=="kontak" || $page=="")?> class="topmenu"><a href="index.php?page=kontak" title="About Us" style="height:16px;line-height:16px;">Kontak Kami</a></li>
		</ul>
        
        <div id="form_search">
			<form action="" method="get" class=""> 
               <input class="carifield" onblur="
               	if (this.value == '') {
               		this.value = 'Pencarian....';
               	}" onfocus="
                if (this.value == 'Pencarian....') {
               		this.value = '';
               	}" type="text" value="Pencarian...." name="key" />
                <input type="hidden" name="page" value="search" />
              <input value="GO" class="caributton" name="search" type="submit"/>
			</form>
			</div>
        </div>
        
        <div id="header" align="center">
        <iframe scrolling="no" id="content-slider" frameborder="0" width="900" height="200" src="module/slide-header/index.php"></iframe>
        </div>
         
		<div id="body">
        
        <!-- Sidebar Area -->
       	  <div id="sidebar">
          		<!-- Tanggal dan Waktu -->
                <div id="sidebar-date-time">
                	<iframe width="238" height="130" frameborder="0" src="module/date-time/index.php"></iframe>
                </div>
          
            	<!-- Login area -->        
					<?php
					include('apps/date-time/index.php');
					if(@$_SESSION['login']!="") {
						$id=$_SESSION['login'];
						@$id_prt=$_SESSION['id'];
						
						mysql_connect ("localhost","root","");
						mysql_select_db ("pln1");
						
						// Mendeteksi jumlah pesan yang belum dibuka
						$query_jumlah = mysql_query("select * from t_feedback where id_prt ='$id_prt' and status like '%tutup%'");
						$show_jumlah = mysql_num_rows($query_jumlah);
						
							
						// Merubah nilai status inbox
						mysql_query("update t_prt set inbox = '$show_jumlah' where id_prt = '$id_prt'");
						$perintah= "SELECT * FROM t_prt where nama='".$id."'";
						$hasil=mysql_query ($perintah);
						$baris=mysql_fetch_array($hasil); 
							echo "<div id='menu-Area'><a class='button' title='Input data PLN' href=index.php?page=form_input> Input Data </a>";
							echo "<a class='button' title='Klik untuk keluar dari sistem' href=proses/logout.php>Logout System</a></div>";
							echo "<div id=sidebar1>";
							echo "<div style=padding:5px;margin-top:-17px;>";
							echo "<h3 id=sidebar-menu>Zona Pelanggan</h3>";
							echo "<div style='position:relative; top:-16px; bottom:17px;'>Selamat Datang : " ;
							echo "<a href=index.php?page=edit_profile title='Klik untuk melihat dan merubah profile'>";echo $_SESSION['login'];echo "</a></div>";
							echo "<center><a href=index.php?page=edit-foto title='Klik untuk merubah foto'><img style='-moz-border-radius:5px;
                                        			  -webkit-border-radius:5px;' src=images/$baris[16] width=150 height= 170 /></a></center><br>";
							echo "<a href='index.php?page=inbox' title='Klik untuk melihat pesan yang masuk'>Inbox (".@$baris['inbox'].")</a>";
					}
					else
					{
					?>
					 <div id="sidebar1">
                	<div style="padding:5px;margin-top:-10px;">
                    <h3 id="sidebar-menu">Login Pelanggan</h3> 
                	<form name="form-login" id="form-login" method="post" action="proses/login.php">
 						 <!-- id_prt field -->
                        <p style="margin-top:-5px;"><input class="field-login" onblur="
                        if(this.value == '') {
                        	this.value = 'id_pelanggan';
                        }" onfocus="
                        if(this.value == 'id_pelanggan') {
                        	this.value = '';
                        }" type="text" value="id_pelanggan" name="prt"/></p> 

                        <!-- password field -->
                        <p style="margin-top:-10px;"><input class="field-login" onblur="
                        if(this.value == '') {
                        	this.value = 'password';
                        }" onfocus="
                        if(this.value == 'password') {
                        	this.value = ''
                        }" type="password" value="password" name="pass" /></p> 
                 
                        <!-- button-login -->
                       <a href="index.php?page=form_register"><input class="button-login" type="button" value="Register"/></a>
					   <input class="button-login" type="submit" value="Login" name="login" /><hr />
                        
                        <!-- Forgot password -->
                      	<p align="center" id="forgot-login">
									Lupa <a href="index.php?page=forgot_password">Password</a>
						</p>
                    </form>
					<?php } ?>
                    </div>
                </div>
                
				<!-- Content bawah login -->
          		<div id="sidebar1">
                	<p style="height:auto;"><?php include "page/pengumuman.php"; ?></p>
                </div>
                <div id="sidebar1">
                	<p style="height:auto;"><?php include "page/berita.php"; ?></p>
                </div>
                <div id="sidebar1">
                	<p style="height:auto;"><?php include "page/tips.php"; ?></p>
                </div>
          </div>
                <!-- Content Area -->
			
           	<div id="content" class="fonts">
				
			<?php
			if ($page=="grafik" || $page=="")
			{
				include "page/grafik.php";
			}
			else if($page=="profil")
			{
				include "page/profil.php";
			}
			else if($page=="penyambungan")
			{
				include "page/penyambungan.php";
			}
			else if($page=="prabayar")
			{
				include "page/prabayar.php";
			}
			else if($page=="meterlistrik")
			{
				include "page/meterlistrik.php";
			}
			else if($page=="kontak")
			{
				include "page/kontak.php";
			}
			else if($page=="form_register")
			{
				include "page/form_register.php";
			}
			else if ($page=="form_input" || $page=="")
			{
				include "page/form_input.php";
			}
			else if ($page=="edit_profile" || $page=="")
			{
				include "page/editprofile.php";
			}
			else if ($page=="view_pengumuman" || $page=="")
			{
				include "page/view_pengumuman.php";
			}
			else if ($page=="view_berita" || $page=="")
			{
				include "page/view_berita.php";
			}
			else if ($page=="view_tips" || $page=="")
			{
				include "page/view_tips.php";
			}
			else if ($page=="inbox" || $page=="")
			{
				include "page/inbox.php";
			}
			else if ($page=="forgot_password" || $page=="")
			{
				include "page/forgot.php";
			}
			else if ($page=="search" || $page=="")
			{
				include "page/search.php";
			}
			else if ($page=="view" || $page=="")
			{
				include "page/view_search.php";
			}
			else if ($page=="edit-foto" || $page=="")
			{
				include "page/editfoto.php";
			}
			?>       
      </div>
        <!-- Sponsor Area  -->
        <div align="left" id="sponsor">
       		<div align="center" id="sponsor1">
            	<a href="#"><div id="sp_01"></div></a>
            </div>
            <div align="center" id="sponsor1">
            	<a href="#"><div id="sp_02"></div></a>
            </div>
            <div align="center" id="sponsor1">
            	<a href="#"><div id="sp_03"></div></a>
            </div>
        </div>
		
        <!-- Footer Area -->
        <div align="center" id="footer" class="fonts">
        	Copyright &copy; Alfina Nuraini. Kirimkan komentar, saran dan pertanyaan anda kepada <a href="justfinna.part2@yahoo.com">finna <?php echo date('Y');?>
        </div>        
        
	</div>
  	</div>
</body>
</html>
