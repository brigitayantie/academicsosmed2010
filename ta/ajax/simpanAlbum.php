<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$namaAlbum = $_POST[namaAlbum];
$keterangan = $_POST[keterangan];

$sql = mysql_query("INSERT INTO tgsakhir.album(subyekAlbum,ketAlbum,id_user) VALUES ('$namaAlbum','$keterangan','$masterAmbilSemua[id_user]')");

echo mysql_insert_id();

?>

 