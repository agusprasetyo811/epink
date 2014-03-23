<?php
mysql_connect ("localhost","root","");
mysql_select_db ("pln1");
@$id_post = $_GET['id_post'];
mysql_query("delete from t_post where id_post = '$id_post'");
echo "<script>window.location='../home.php?page=post';</script>";