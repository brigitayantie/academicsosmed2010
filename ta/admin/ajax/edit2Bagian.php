<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



$bagian[nama_bagian]  = $_POST["bagian"];
$bagianSblm = $_POST['idBagianSblm'];
//$bagian[id_bagian]  = $bagianSblm;

//$bagian[id_bagian]  = $bagianSblm ;

$hasil = $db->query_update("bagian", $bagian, "id_bagian='$bagianSblm'");

//echo "$idJurusan-$jurusan-<br /><a href='#' ondblclick='javascript: editJurusan($idJurusan,$idFakultas,$index);'>Edit</a>";
//echo "<input type='hidden' value='$index' id='idxTabel' />";

//hasil xmlHttpResponseText
echo $hasil; 

?>
