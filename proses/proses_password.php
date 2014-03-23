<?php 
// Generate Email 
$email_send = $_POST['email'];
$email_from = "From: justfinna.part2@yahoo.com Reply-To: $email_send";
$subject = "Get Password";

// Buat konkesi
$koneksi=mysql_connect("localhost","root","");
mysql_select_db("pln1",$koneksi);

// Mengeluarkan nilai prt
$query = mysql_query("select id_prt,nama,password from t_prt where email='$email_send'");
$show= mysql_fetch_array($query);

// menampilkan kedalam layar
echo "id prt : ". $show[0]."<br>";
echo "nama : ". $show[1]."<br>";
echo "password : ". $show[2]."<br>";

$message = "Kepada pelanggan dengan id prt : ".$show[0]."<br>Nama : ".$show[1]."<br>Password :".$show[2]."";

// Fungsi mengirimkan email
mail($email_send,$subject,$message,$email_from);
?>