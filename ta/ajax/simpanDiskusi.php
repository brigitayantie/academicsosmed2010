<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$txtTopikForum=$_POST[txtTopikForum];
$txtIsiTopikForum=$_POST[txtIsiTopikForum];
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
mysql_query("INSERT INTO tgsakhir.forum (id_admin, topik, isi) VALUES ('$masterAmbilSemua[id_user]', '$txtTopikForum', '$txtIsiTopikForum')");
$idBaru = mysql_insert_id();
$sql = mysql_query("INSERT INTO tgsakhir.attforum(id_forum,jenis_file) VALUES ('$idForum','$extension')");
include "../content/tampilDiskusi.php"; 

?>

 