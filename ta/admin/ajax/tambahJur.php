<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$jur[id_jurusan]  = $_POST["idJur"];
$jur[nama_jurusan]  = $_POST["jurusan"];
$jur[id_fakultas]  = $_POST["fakultas"];
$db->query_insert("jurusan", $jur); 
//hasil xmlHttpResponseText
echo "0"; 
?>
