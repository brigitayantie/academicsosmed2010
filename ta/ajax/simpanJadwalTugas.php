<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   //include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

$idKelas = $_POST["idKelas"];
$kp = $_POST["KP"];
$gabungan= $idKelas . $kp;
$sqlSelectMurid = mysql_query("SELECT mk.NRP FROM ubaya.mhsambilmk mk WHERE mk.KodeMkBuka='$idKelas' AND mk.KP='$kp'");
$jumRowMurid = mysql_num_rows($sqlSelectMurid);
for($j=0;$j<$jumRowMurid;$j++)
	{
		
		$fetchMurid = mysql_fetch_array($sqlSelectMurid);
		$mrd[$j] = $fetchMurid[NRP];
	 
	}

$jmlBrs = $_POST["jmlBaris"];

$b = $jmlBrs-1;

for($i=0;$i<$b;$i++)
{	$tgl = $_POST[tanggal2][$i];
	list($d, $m, $y) = explode('-',$tgl);
	$formatTanggal = "$y-$m-$d";
	$tugas[tanggal] = $formatTanggal;
	$tugas[hari] = $_POST[hari2][$i];
	$tugas[jam] = $_POST[jam2][$i];
	$tugas[ruang] = $_POST[ruang2][$i];
	$tugas[bahan] = $_POST[bahan2][$i];
	$tugas[jenis_kt] = $_POST[tipe2][$i];
	$tugas[tipe] = "UAS";
	$tugas[id_kelas] = $gabungan;
	$db->query_insert("jadwalkuistugas", $tugas);
	$murid[id_kt] =mysql_insert_id();
	for($j=0;$j<$jumRowMurid;$j++)
	{
		
		$fetchMurid = mysql_fetch_array($sqlSelectMurid);
		$murid[id_mhs] = $mrd[$j];
		$db->query_insert("nilai", $murid);
	}
}




$querySelect= mysql_query("SELECT tabel. *
FROM (
SELECT jkt.id_kt, jkt.ke, jkt.tanggal
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.jenis_kt = 'Tugas'
AND jkt.tipe = 'UAS' 
AND jkt.id_kelas = '$gabungan' 
ORDER BY jkt.tanggal ASC
) tabel ");


$jumRow=mysql_num_rows($querySelect);
$a=1;


for($i=0;$i<$jumRow;$i++)
{
	$fetchArray=mysql_fetch_array($querySelect);
	$queryUpdate = mysql_query("UPDATE jadwalkuistugas SET ke='$a' WHERE id_kt='$fetchArray[id_kt]'");
	$a++;
	
}




$querySelect= mysql_query("SELECT tabel. *
FROM (
SELECT jkt.id_kt, jkt.ke, jkt.tanggal
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.jenis_kt = 'Kuis'
AND jkt.tipe = 'UAS' 
AND jkt.id_kelas = '$gabungan' 
ORDER BY jkt.tanggal ASC
) tabel ");


$jumRow=mysql_num_rows($querySelect);
$a=1;


for($i=0;$i<$jumRow;$i++)
{
	$fetchArray=mysql_fetch_array($querySelect);
	$queryUpdate = mysql_query("UPDATE jadwalkuistugas SET ke='$a' WHERE id_kt='$fetchArray[id_kt]'");
	$a++;
	
}

echo $a;

?>

 