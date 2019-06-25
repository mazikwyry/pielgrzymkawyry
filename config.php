<?php
$dbhost="cufal.pl";
$dbuser="mazikwyr_mazik";
$dbpassword="matzik";
$dbdatabase="mazikwyr_pielgrzymka";



//połączenie

$db=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatabase,$db);

//kodownie znaków

$sql = "SET NAMES utf8";
mysql_query($sql);

?>