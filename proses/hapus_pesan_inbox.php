<?php
mysql_connect ("localhost","root","");
mysql_select_db ("pln1");
@$id_feedback = $_GET['id_feedback'];
mysql_query("delete from t_feedback where id_feedback = '$id_feedback'");
echo "<script>window.location='../?page=inbox';</script>";