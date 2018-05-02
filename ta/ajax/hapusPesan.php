<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idPesan = $_POST["idPesan"];
$sql = mysql_query("DELETE FROM tgsakhir.pesan  WHERE tgsakhir.pesan.id_pesan=$idPesan");

if($sql) echo "true";
else echo "false";

?>