<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idFoto = $_POST["idFoto"];
$idAlbum = $_POST["idAlbum"];
$sql = mysql_query("DELETE FROM tgsakhir.album  WHERE tgsakhir.album.id_album=$idAlbum");

if($sql) echo "true";
else echo "false";

?>