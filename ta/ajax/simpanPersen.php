<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   //include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];


$jmlBrs = $_POST["jmlBaris"];
$idKelas = $_POST["idKelas"];
$tipe = $_POST["tipe"];
$b = $jmlBrs;



$querySelect= mysql_query("SELECT tabel. *
FROM (
SELECT DISTINCT  jkt.id_kt,jkt.tanggal, jkt.jam, jkt.ruang, jkt.bahan,jkt.jenis_kt,jkt.ke,jkt.persen
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$idKelas' AND jkt.tipe='$tipe' ORDER BY jkt.jenis_kt,jkt.ke ASC) tabel ");

$jumRow=mysql_num_rows($querySelect);



for($i=0;$i<$jumRow;$i++)
{
	$a = $_POST[persen][$i];
	
	$fetchArray=mysql_fetch_array($querySelect);
	$queryUpdate = mysql_query("UPDATE jadwalkuistugas SET persen=$a WHERE id_kt='$fetchArray[id_kt]'");

}



?>

 