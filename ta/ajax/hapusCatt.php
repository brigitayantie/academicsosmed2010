<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

$idCatt = $_POST[idCatt];

$sql = mysql_query("DELETE FROM tgsakhir.catatan  WHERE id_catt=$idCatt");

include "../content/tampilCatatan.php";
//echo "Catatan sudah disimpan";
?>

 