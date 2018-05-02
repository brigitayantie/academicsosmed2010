<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   //include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];



$jmlBaris = $_POST["jmlBaris"];



for($i=0;$i<$jmlBaris;$i++)
{
	$mk = $_POST["mk"][$i];
	mysql_query("INSERT INTO mhsikutkelas (id_kelas,id_mhs,id_semester) VALUES ($mk,$masterAmbilSemua[id_user],2)");
}
?>

 