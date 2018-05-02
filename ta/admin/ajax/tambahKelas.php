<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
/*
$sql= mysql_query("SELECT * FROM semester order by id_sem desc limit 1");
//$sql=@mysql_query("SELECT LAST(id_sem) FROM semester");

while ($row = mysql_fetch_array($sql,MYSQL_BOTH)) {
    $a=$row["id_sem"];
}

$kls[id_semester] = $a;
*/
/*
$row = mysql_fetch_array($sql);
$kls[id_semester]=$row[0]; 
*/
$jmlBrs = $_POST["jmlBaris"];

$kls[id_kp]=$_POST["kp"];
$kls[id_mk]=$_POST["mk"];
$kls[id_dosen]=$_POST["dsn"];
$kls[id_kelas]=$_POST["idKls"];
$b = $jmlBrs-1;

for($i=0;$i<$b;$i++)
{
		$kelas[id_kelas]=$_POST["idKls"];
		$kelas[hari]=$_POST["hr"][$i];
		$kelas[id_ruang]=$_POST["rg"][$i]; 
		$kelas[jamMulai]=$_POST["jamM"][$i];
		$kelas[jamSelesai]=$_POST["jamS"][$i]; 
		$db->query_insert("jadwalkul", $kelas);
	/*
	
		$hari=$_POST["hr"][$i];
		$id_ruang=$_POST["rg"][$i]; 
		$jamMulai=$_POST["jamM"][$i];
		$jamSelesai=$_POST["jamS"][$i]; 

		mysql_query("INSERT INTO jadwalkul (id_kelas,id_ruang,hari,jamMulai,jamSelesai) VALUES ('$kls','$id_ruang','$hari','$jamMulai','$jamSelesai')");		
*/
}
$db->query_insert("kelas", $kls);
$idKelas = $_POST["idKls"];
$sql = mysql_query("SELECT id_mhs from mhsikutkelas WHERE id_kelas=$idKelas");
$jumMurid = mysql_num_rows($sql);

$kt[jenis_kt]="UTS";
$kt[tipe]="UTS";
$kt[id_kelas]=$_POST["idKls"];
$db->query_insert("jadwalkuistugas", $kt);
$idUTS = mysql_insert_id();
for($i=0;$i<$jumMurid;$i++)
{
	$fetchArray=mysql_fetch_array($sql);
	$idMhs = $fetchArray[id_mhs];
	$nrpMurid[$i] = $idMhs; 
}
for($i=0;$i<$jumMurid;$i++)
{
	$nilai[id_mhs] = $nrpMurid[$i];
	$nilai[id_kt] = $idUTS;
	$db->query_insert("nilai", $nilai);
}



$kt2[jenis_kt]="UAS";
$kt2[tipe]="UAS";
$kt2[id_kelas]=$_POST["idKls"];
$db->query_insert("jadwalkuistugas", $kt2);
$idUAS = mysql_insert_id();


for($i=0;$i<$jumMurid;$i++)
{
	$nilai[id_mhs] = $nrpMurid[$i];
	$nilai[id_kt] = $idUAS;
	$db->query_insert("nilai", $nilai);
}

/*

if($jpd[id_jurusan]=="MKU") $Dosen[sebagai]  = "DosenMKU";
else
$db->query_insert("tbljurusanpnydosen", $jpd);

$db->query_insert("user", $Dosen); //user-> nm tabel, $Dosen -> nama field
//hasil xmlHttpResponseText
echo "0";
*/
?>
