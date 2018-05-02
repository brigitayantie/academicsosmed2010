<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$perintah = $_POST["hslQuery"];

$tipe = $_POST["tipeUsr"];

$sql = mysql_query($perintah);
$jumField=mysql_num_fields($sql);

for($i=0;$i<$jumField;$i++) 
{
	$data[]=$_POST["nilaiKlm"][$i];

$namaField= mysql_field_name($sql, $i);

$dtUser[$namaField]=$data[$i];
}
$userSblm = $_POST['id_UserSblm'];

echo "$data[0]<br />";





/*
$jur[id_jurusan]  = $_POST["idJur"];
$jur[nama_jurusan]  = $_POST["jur"];
$idFakultas  = $_POST["idFakultas"];
$index = $_POST["idx"];
$idJurusan = $_POST['idJur'];
$jurusan = $_POST['jur'];
*/

//$hasil = $db->query_update("jurusan", $jur, "id_jurusan='$jurSblm'");
/*
$perintah = $_POST["sql"];


*/
if($tipe=="matkul")
{
$jpm[id_matkul]=$data[0];
$jpm[id_jurusan]=$_POST[jur];	
$hasil = $db->query_update("matkul", $dtUser, "id_matkul='$userSblm'");
$hasil2 = $db->query_update("tbljurusanpnymatkul", $jpm, "id_matkul='$userSblm'");	
}
else
{
$hasil = $db->query_update("user", $dtUser, "id_user='$userSblm'");
if($tipe=="Dosen")
{
$jpd[id_dosen]=$data[0];
$jpd[id_jurusan]=$_POST[jur];
$hasil2 = $db->query_update("tbljurusanpnydosen", $jpd, "id_dosen='$userSblm'");
}
else if($tipe=="Mhs")
{
$mhs[id_mhs]=$data[0];
$mhs[id_jurusan]=$_POST[jur];
$hasil2 = $db->query_update("mhs", $mhs, "id_mhs='$userSblm'");
}


}
//echo "$idJurusan-$jurusan-<br /><a href='#' ondblclick='javascript: editJurusan($idJurusan,$idFakultas,$index);'>Edit</a>";
//echo "<input type='hidden' value='$index' id='idxTabel' />";

//hasil xmlHttpResponseText
echo $hasil; 
echo $hasil2;


?>
