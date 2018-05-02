<?php
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];

$idShoutOut = $_POST["idShoutOut"];
$sql = mysql_query("DELETE FROM tgsakhir.shoutout  WHERE tgsakhir.shoutout.id_shoutout=$idShoutOut");


if($sql) echo "true";
else echo "false";

?>