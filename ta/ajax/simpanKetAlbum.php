<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$idAlbum=$_POST[idAlbum];
$profil = $_POST[profil];
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

$sql = mysql_query("SELECT * FROM tgsakhir.foto f WHERE f.id_album='$_POST[idAlbum]'");

for($i=0;$i<$_POST["jumFoto"];$i++)
{
	$a=$_POST[namaFoto][$i];
	$b=$_POST[ketFoto][$i];
	$fetchArray=mysql_fetch_array($sql);
	mysql_query("UPDATE tgsakhir.foto f SET f.subyekFoto='$a',f.ketFoto='$b' WHERE f.id_foto=$fetchArray[id_foto]");		
}
$pathFoto = "images/foto/$profil";

mysql_query("UPDATE tgsakhir.user u SET u.foto='$pathFoto' WHERE u.id_user='$masterAmbilSemua[id_user]'");
//echo "UPDATE tgsakhir.user u SET u.foto='$pathFoto' WHERE u.id_user='$masterAmbilSemua[id_user]'";
include "../content/simpanSession.php";
?>

 