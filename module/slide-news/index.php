<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../../jquery/jquery.js"></script>
<title></title>

<script language="javascript">
	 
	 /* parameter untuk menjalankan fungsi openContent ini adalah 	 
	     1. Element trigger (link) yang akan membuka content apabila di click
	     2. Id dari content yang akan ditampilkan
	 */
	  
	 // siapkan variable timer yang akan menyimpan fungsi animasi 
	 var timer = null; 
	 function openContent(trigger,divID) { 
	 	// semua link pada div dengan id='divTrigger' akan di setarakan style-nya menjadi style normal 
	 	$('#divTrigger a').each( 
	 		function(){
			 	$(this).css({'background-color':'#FFF','color':'#000'});			 	
			}
	 	);
		
	 	// semua div di dalam element dengan id='divContent' disembunyikan
	 	$('#divContent div').hide();
	 	
	 	// div yang akan ditampilkan diberi efek fadeIn (built-in dari JQuery) ketika ditampilkan
	 	$('#'+divID).fadeIn('slow');
	 	
	 	// link menjadi trigger diberi style berbeda dengan link lainnya agar dapat diketahui content nomor berapa yang sedang aktif
	 	$(trigger).css({'background-color':'#000','color':'#FFF'});	 	
		
		// timer di set 
		if(timer != null) clearTimeout(timer);
		timer = setTimeout( 
		  function(){		
			/* Cek terlebih dahulu apakah link yang sedang di-click saat ini ada link lagi setelah itu
			   apabila tidak ada link lagi setelah element yang sedang di-click maka pilih element link pertama
			   dengan selector ':first' dari jquery. Setelah sudah ditentukan link, maka lakukan event click
			   pada link tersebut. Setiap link yang di click akan menjalankan fungsi ini sehingga terjadi animasi
			   perpindahan content slideshow.
			*/	  
			var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
			nextAnchor.click();
		  }, 15000 // 3 detik waktu perpindahan content
		);
	 }	 
	 $(document).ready(
	  	function(){
	  		// untuk permulaan, tampilkan content nomor pertama '#firstSlide' adalah id dari trigger yang akan membuka content nomor pertama
	  		openContent($('#firstSlide'),'div1');			
		}
	 )
	</script>
</head>

<body>

<div id="divContent">
<div id="div1">
    <img id="images-news" width="70;" height="50" src="../../images/news/img1.png" align="left" /> 
    <p id="text-news" class="text-news">
    <span class="title">Petunjuk dan Rahmat</span>
    Rasulullah SAW pernah bersabda : "Silaturrahmi dapat memperpanjang umur dan sedekah dapat merubah taqdir yang mubram" 
	(HR. Bukhari, Muslim, at-Tirmidzi, Imam Ahmad)
    </p>
</div>
<div id="div2">
 	<img id="images-news" width="70;" height="50" src="../../images/news/img2.png" align="left" /> 
    <p id="text-news" class="text-news">
    <span class="title">Transaksi Dengan Allah SWT</span>
    Sesungguhnya orang-orang yang selalu membaca kitab Allah dan mendirikan shalat dan menafkahkan sebahagian dari rezki yang Kami 
	anugerahkan kepada mereka dengan diam-diam dan terang-terangan, mereka itu mengharapkan perniagaan yang tidak akan merugi,(QS. Al Fathir:29)
    </p>
</div>
<div id="div3">
 	<img id="images-news" width="70;" height="50" src="../../images/news/img3.png" align="left" /> 
    <p id="text-news" class="text-news">
    <span class="title">Itulah Jodoh</span>
	jodoh itu kau minta dari Tuhan, kau cari dalam pergaulan yang baik, kau undang ketertarikanya dengan menjadikan dirimu baik dan menarik,
	lalu kau bahagiakan dia dalam persahabatan yang penuh kasih dan hormat
    </p>
</div>
<div id="div4">
 	<img id="images-news" width="70;" height="50" src="../../images/news/img4.png" align="left" /> 
    <p id="text-news" class="text-news">
     <span class="title">Antara Pikiran Yang Baik dan Keberuntungan</span>
	Pikiran yang baik menentukan kualitas dari yang mengisi hati. Kebaikan yang mengisi hati menentukan kemudahan kita untuk merasa damai.
	Orang yang pikirannya baik, pekerjaannya akan membaikkan hati orang lain, dan yang dengannya keberuntungannya membaik.    
	</p>
</div>
</div>
<div id="page-number">
<div id="divTrigger">
 	<a href="javascript:;" onClick="openContent(this,'div1')" id="firstSlide">1</a>
 	<a href="javascript:;" onClick="openContent(this,'div2')">2</a>
 	<a href="javascript:;" onClick="openContent(this,'div3')">3</a>
 	<a href="javascript:;" onClick="openContent(this,'div4')">4</a>
</div>
</div>
</body>
</html>
