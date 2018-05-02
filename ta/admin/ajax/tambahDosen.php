<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$Dosen[id_user] = $_POST["nip"];
$Dosen[nama]  = $_POST["namaDosen"];
$Dosen[password]  = $_POST["pwdDosen"];
$Dosen[hp]  = $_POST["hpDosen"];
$Dosen[gender]  = $_POST["genderDosen"];
$Dosen[email]  = $_POST["emailDosen"];
$Dosen[tglLahir]  = $_POST["tglLhrDosen"];
$Dosen[t4Lahir]  = $_POST["t4LhrDosen"];
$Dosen[alamat]  = $_POST["alamatDosen"];
$Dosen[nama]  = $_POST["namaDosen"];
$Dosen[sebagai]  = "Dosen";
$jpd[id_jurusan]  = $_POST["jurusan"];
$jpd[id_dosen] = $_POST["nip"];

if($jpd[id_jurusan]=="MKU") $Dosen[sebagai]  = "DosenMKU";
else
$db->query_insert("tbljurusanpnydosen", $jpd);

$db->query_insert("user", $Dosen);

$album[subyekAlbum]="Profil";
$album[id_user]= $_POST["nip"];
$album[bolehHapus]="t";
$db->query_insert("album", $album);

//user-> nm tabel, $Dosen -> nama field
//hasil xmlHttpResponseText
echo "0"; 
?>
