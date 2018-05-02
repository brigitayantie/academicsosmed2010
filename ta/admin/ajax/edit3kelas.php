<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$perintah = $_POST['hslQuery'];

$tipe = $_POST["tipeMK"];
$idUserSblm = $_POST["id_UserSblm"];
$idKelasSblm = $_POST["id_KelasSblm"];

if($tipe=="nonmku")
$jur = $_POST["jur"];
//$sql = mysql_query($perintah);
//$jumField=mysql_num_fields($sql);
//echo $perintah;

for($i=0;$i<10;$i++) 
{
	$data[]=$_POST["nilaiKlm"][$i];

//$namaField= mysql_field_name($sql, $i);

//$dtUser[$namaField]=$data[$i];
}



$status=1;
$ket[id_jadwalkul]= $data[0];
$ket[hari]= $data[4];
$ket[jamMulai] = $data[2];
$ket[jamSelesai] = $data[3];
$ket[id_ruang] = $data[9];

$ket2[id_kelas]= $data[1];
$ket2[id_mk]= $data[5];
$ket2[id_kp] = $data[9];
$ket2[id_dosen] = $data[7];
//$ket[id_semester] = $data[8];
//$ket[id_kelas] = $_POST["kls"];
 
$sql="SELECT * FROM jadwalkul WHERE id_ruang='$ket[id_ruang]' AND hari='$ket[hari]' AND id_jadwalkul != '$idUserSblm' AND  (jamMulai between '$ket[jamMulai]' and '$ket[jamSelesai]' or jamSelesai between '$ket[jamMulai]' and '$ket[jamSelesai]')";
$hasilSql = mysql_query($sql);
$jumlah = mysql_num_rows($hasilSql);

//echo "jumlah = $jumlah";
if($ket[jamSelesai]<$ket[jamMulai]) { echo "1"; exit; }
if($jumlah>0) { echo "0"; exit; }


$sql="SELECT * FROM jadwalkul WHERE id_jadwalkul='$data[0]'  AND id_jadwalkul != '$idUserSblm'";
$hasilSql = mysql_query($sql);
$jumlah = mysql_num_rows($hasilSql);
if($jumlah>0) { echo "2"; exit; }


$hasil = $db->query_update("jadwalkul", $ket, "id_jadwalkul='$idUserSblm'");	
$hasil2 = $db->query_update("kelas", $ket2, "id_kelas='$idKelasSblm'");	


/*
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
*/
//echo $status;
/*
if($tipe=="mku")
{
$jpm[id_matkul]=$data[0];
$jpm[id_jurusan]=$_POST[jur];	
$hasil = $db->query_update("matkul", $dtUser, "id_matkul='$userSblm'");
$hasil2 = $db->query_update("tbljurusanpnymatkul", $jpm, "id_matkul='$userSblm'");	
}
//$db->query_insert("jadwalkul", $ket);
*/
?>
