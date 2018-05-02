<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



$ruang[nama_ruang]  = $_POST["ruang"];
$idFakultas  = $_POST["idFakultas"];
$ruangSblm = $_POST['idRuangSblm'];
//$ruang[id_ruang]  = $ruangSblm ;

$hasil = $db->query_update("ruang", $ruang, "id_ruang='$ruangSblm'");

//echo "$idJurusan-$jurusan-<br /><a href='#' ondblclick='javascript: editJurusan($idJurusan,$idFakultas,$index);'>Edit</a>";
//echo "<input type='hidden' value='$index' id='idxTabel' />";

//hasil xmlHttpResponseText
echo $hasil; 

?>
