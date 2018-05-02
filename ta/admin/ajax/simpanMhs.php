<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$mhs[id_user] = $_POST["nrp"];
$mhs[nama]  = $_POST["namaMhs"];
$mhs[password]  = $_POST["pwdMhs"];
$mhs[hp]  = $_POST["hpMhs"];
$mhs[gender]  = $_POST["genderMhs"];
$mhs[email]  = $_POST["emailMhs"];
$mhs[tglLahir]  = $_POST["tglLhrMhs"];
$mhs[t4Lahir]  = $_POST["t4LhrMhs"];
$mhs[alamat]  = $_POST["alamatMhs"];
$mhs[nama]  = $_POST["namaMhs"];
$thn[id_jurusan]  = $_POST["jurusan"];
$thn[thn]= $_POST["angkatanMhs"];
$thn[id_mhs] = $_POST["nrp"];
$db->query_insert("user", $mhs); //user-> nm tabel, $mhs -> nama field
$db->query_insert("mhs", $thn);

$album[subyekAlbum]="Profil";
$album[id_user]= $_POST["nrp"];
$album[bolehHapus]="t";
$db->query_insert("album", $album);
//hasil xmlHttpResponseText
echo "0";

?>
