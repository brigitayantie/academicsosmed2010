<? session_start();
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";
$id=$_SESSION["idUser"];

$query=mysql_query("SELECT s.isishoutout,s.timestamp FROM tgsakhir.shoutout s 
		INNER JOIN tgsakhir.user u ON s.id_shoutout=u.id_shoutout
		WHERE s.id_user = '$id' and s.id_jenisshoutout='1'");
      
$fetchStatus = mysql_fetch_array($query);

echo "$fetchStatus[isishoutout]";

?>