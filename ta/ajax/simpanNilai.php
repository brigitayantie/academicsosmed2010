<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   //include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];


$jmlMurid = $_POST["jmlMurid"];
$jumRowUTS = $_POST["jumRowUTS"];
$idKelas = $_POST["idKelas"];
$idKls = explode("-",$idKelas);
$gabungan = $idKls[0] . $idKls[1];
/*
$querySelect= mysql_query("SELECT tabel. *
FROM (
SELECT DISTINCT  id_kt,tanggal, jam, ruang, bahan,jenis_kt,ke,persen
FROM jadwalkuistugas
WHERE id_kelas=$idKelas AND tipe='$tipe' ORDER BY jenis_kt,ke ASC) tabel ");
*/
$queryMurid= mysql_query("SELECT  mhs.NRP,mhs.Nama FROM ubaya.mhsambilmk mk
INNER JOIN ubaya.Mahasiswa mhs ON mk.NRP=mhs.NRP WHERE mk.KodeMkBuka = '$idKls[0]' AND mk.KP = '$idKls[1]' ORDER BY mk.NRP");
echo "SELECT  mhs.NRP,mhs.Nama FROM ubaya.mhsambilmk mk
INNER JOIN ubaya.Mahasiswa mhs ON mk.NRP=mhs.NRP WHERE mk.KodeMkBuka = '$idKls[0]' AND mk.KP = '$idKls[1]' ORDER BY mk.NRP";
$querySelect = mysql_query("SELECT id_kt FROM tgsakhir.jadwalkuistugas as jkt WHERE jkt.id_kelas='$gabungan' AND jkt.tipe='UTS' ORDER BY jkt.jenis_kt,jkt.ke ASC");
echo "SELECT id_kt FROM tgsakhir.jadwalkuistugas as jkt WHERE jkt.id_kelas='$gabungan' AND jkt.tipe='UTS' ORDER BY jkt.jenis_kt,jkt.ke ASC";
$b=0;
for($i=0;$i<$jmlMurid;$i++)
{
	$fetchMurid = mysql_fetch_array($queryMurid);
	$murid[$i]=$fetchMurid[NRP];
}

for($i=0;$i<$jumRowUTS;$i++)
{
	$fetchSelect = mysql_fetch_array($querySelect);
	$uts[$i]=$fetchSelect[id_kt];
}

	for($i=0;$i<$jmlMurid;$i++)
	{	
	for($j=0;$j<$jumRowUTS;$j++)
	{
		
	//$queryUpdate = mysql_query("UPDATE jadwalkuistugas SET persen=$a WHERE id_kt='$fetchSelect[id_kt]'");
		
		$a = $_POST[nilaiUTS][$i][$j];
	mysql_query("UPDATE tgsakhir.nilai as nli SET nli.nilai=$a WHERE nli.id_kt='$uts[$j]' AND nli.id_mhs=$murid[$i]");
		$b++;
		echo "UPDATE tgsakhir.nilai as nli SET nli.nilai=$a WHERE nli.id_kt='$uts[$j]' AND nli.id_mhs=$murid[$i]";
		}
		
	}



?>

 