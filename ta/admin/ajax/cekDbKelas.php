<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();


$status=1;
$ket[hari]= $_POST["hr"];
$ket[jamMulai] = $_POST["jamM"];
$ket[jamSelesai] = $_POST["jamS"];
$ket[id_ruang] = $_POST["rg"];
//$ket[id_kelas] = $_POST["kls"];
 /////
 $sql="SELECT * FROM jadwalkul WHERE id_ruang='$ket[id_ruang]' AND hari='$ket[hari]' AND  (jamMulai between '$ket[jamMulai]' and '$ket[jamSelesai]' or jamSelesai between '$ket[jamMulai]' and '$ket[jamSelesai]')";
$hasilSql = mysql_query($sql);
$jumlah = mysql_num_rows($hasilSql);

if($ket[jamSelesai]<=$ket[jamMulai]) { echo "1"; exit; }
if($jumlah>0) { echo "0"; exit; }

/*
$sql="SELECT * FROM jadwalkul WHERE id_kelas='$data[0]'  AND id_kelas != '$idUserSblm'";
$hasilSql = mysql_query($sql);
$jumlah = mysql_num_rows($hasilSql);
if($jumlah>0) { echo "2"; exit; }
 
 ////
 
$sql="SELECT * FROM jadwalkul WHERE id_ruang='$ket[id_ruang]' AND hari='$ket[hari]'";
$hasilSql = mysql_query($sql);
$jumlah = mysql_num_rows($hasilSql);

$splitJamM = explode(".", $ket[jamMulai]);
$jumlahMenitM = ($splitJamM[0]*60)+$splitJamM[1];
	
$splitJamS = explode(".", $ket[jamSelesai]);
$jumlahMenitS = ($splitJamS[0]*60)+$splitJamS[1];

if($jumlahMenitS<=$jumlahMenitM )
	{
	$status=2;
	$i=$jumlah;
	}

else if($jumlah>0)
{
for($i=0;$i<$jumlah;$i++)
{
		
	$record=mysql_fetch_array($hasilSql);
	$jmMulai=$record[jamMulai];
	$split1=explode(".", $jmMulai);
	$cekJumlahMenitM = ($split1[0]*60)+$split1[1];
	$jmSelesai=$record[jamSelesai];
	$split2=explode(".", $jmSelesai);
	$cekJumlahMenitS = ($split2[0]*60)+$split2[1];
	
	
	if($jumlahMenitM<=$cekJumlahMenitS &&$jumlahMenitM>=$cekJumlahMenitM )
	{
	
	$status=0;
	$i=$jumlah;
	}

}

}
echo $status;
*/
//$db->query_insert("jadwalkul", $ket);
?>
