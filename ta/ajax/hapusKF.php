<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idShoutOut = $_POST["idShoutOut"];
$sql = mysql_query("DELETE FROM tgsakhir.komentarfoto  WHERE tgsakhir.komentarfoto.id_kf=$idShoutOut");


if($sql) echo "true";
else echo "false";
//include "shout.php";
?>