<?
$user="root";
$pass="root";
$link=mysql_connect("localhost",$user,$pass);

if(!$link)
{ die("Tidak dapat terhubung dengan MySQL" . mysql_error()); }

mysql_selectdb("tgsakhir");
mysql_selectdb("ubaya");
?>