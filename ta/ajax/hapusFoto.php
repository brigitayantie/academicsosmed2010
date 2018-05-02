<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idFoto = $_POST["idFoto"];
$idAlbum = $_POST["idAlbum"];
$sql = mysql_query("DELETE FROM tgsakhir.foto  WHERE tgsakhir.foto.id_foto=$idFoto");
/*
$sqlSelect = mysql_query("SELECT * FROM tgsakhir.foto WHERE foto='$idFoto'");
$fetchFoto = $fetchSelect($sqlSelect);
$sqlSelectFU = mysql_query("SELECT * FROM tgsakhir.user WHERE foto='$idFoto'");
if()
$sql2 =  mysql_query("UPDATE");
*/
if($sql) echo "true";
else echo "false";

?>