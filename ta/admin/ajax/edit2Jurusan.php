<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();


$jur[id_jurusan]  = $_POST["idJur"];
$jur[nama_jurusan]  = $_POST["jur"];
$idFakultas  = $_POST["idFakultas"];
$index = $_POST["idx"];
$idJurusan = $_POST['idJur'];
$jurusan = $_POST['jur'];
$jurSblm = $_POST['idJurusanSblm'];
$hasil = $db->query_update("jurusan", $jur, "id_jurusan='$jurSblm'");

//echo "$idJurusan-$jurusan-<br /><a href='#' ondblclick='javascript: editJurusan($idJurusan,$idFakultas,$index);'>Edit</a>";
//echo "<input type='hidden' value='$index' id='idxTabel' />";

//hasil xmlHttpResponseText
echo $hasil; 

?>
