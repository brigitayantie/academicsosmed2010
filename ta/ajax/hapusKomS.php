<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idShoutOut = $_POST["idShoutOut"];
$sql = mysql_query("DELETE FROM tgsakhir.komentarshoutout  WHERE tgsakhir.komentarshoutout.id_ks=$idShoutOut");


if($sql) echo "true";
else echo "false";
//include "shout.php";
?>