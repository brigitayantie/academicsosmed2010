<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$idKelas = $_POST[idKelas];


$komentarEvent = $_POST["komentarEvent"];

	$komEvent[id_pengirim] = $masterAmbilSemua["id_user"];
		$komEvent[komentar] =$komentarEvent ;
			$komEvent[id_event] =$_POST["idEvent"];
$idEvent=$_POST["idEvent"];
	$db->query_insert("komentarevent", $komEvent);

$sql = mysql_query("SELECT * FROM tgsakhir.komentarevent kom WHERE kom.id_event=$idEvent");	
$jumEvent = mysql_num_rows($sql);
?>
<table>

<?
for($i=0;$i<$jumEvent;$i++)
{
	$fetchArray = mysql_fetch_array($sql);
	echo "<tr><td>$fetchArray[id_pengirim]</td><td>$fetchArray[komentar]</td></tr>";
}
?>

</table>
               