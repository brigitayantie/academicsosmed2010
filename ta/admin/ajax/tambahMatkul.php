<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$matkul[id_jurusan]  = $_POST["jurusan"];
$matkul[id_matkul]  = $_POST["idMatkul"];
$namaMatkul[id_matkul] = $_POST["idMatkul"];
$namaMatkul[nama_matkul]  = $_POST["matkul"];
$db->query_insert("matkul", $namaMatkul);
$db->query_insert("tbljurusanpnymatkul", $matkul);
//hasil xmlHttpResponseText
echo "0"; 
?>
