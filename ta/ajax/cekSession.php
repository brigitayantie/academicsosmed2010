<? session_start();
require_once "../lib/config.inc.php"; 
require_once"../lib/Database.class.php";
require_once "../lib/Session.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$idUser=$_POST["id_user"];
$pw=$_POST["password"];

/*
$peran=$_POST["peran"];
$_SESSION["peran"]=$peran;
if($peran=="mahasiswa")
$query = "SELECT * FROM ubaya.mahasiswa mhs WHERE 	mhs.NRP='$idUser'";
else
$query = "SELECT * FROM ubaya.karyawan dsn WHERE 	dsn.NPK='$idUser'";

//$_SESSION["pw"]=$pw;
$hasilQuery=mysql_query($query);

$baris=mysql_num_rows($hasilQuery);

if($baris>=1)
{
	if($peran=="mahasiswa")
	{
    $peran = "Mhs";
    $queryAmbilSemua=mysql_query("SELECT mhs.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto,u.sebagai from ubaya.mahasiswa mhs INNER JOIN tgsakhir.user u ON mhs.NRP=u.id_user WHERE mhs.NRP='$idUser' AND u.password='$pw'");
    
    }
	else
    {
    $peran= "Dosen";
	$queryAmbilSemua=mysql_query("SELECT dsn.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto,u.sebagai from ubaya.karyawan dsn INNER JOIN tgsakhir.user u ON dsn.NPK=u.id_user WHERE dsn.NPK='$idUser' AND u.password='$pw'");
	}
	$fetchAmbilSemua=mysql_fetch_array($queryAmbilSemua);	

$_SESSION["masterAmbilSemua"] = $fetchAmbilSemua;
	$_SESSION["masterQueryAmbilSemua"]=$queryAmbilSemua;
    if(mysql_num_rows($queryAmbilSemua))
    echo "1";
    else if($masterAmbilSemua[sebagai]!=$peran)
    echo "2";
    else if($masterAmbilSemua[password]!=$pw)
    echo "3";
    else
    echo "4";
$objSession = new whosOnline(session_id(),$idUser); //session_id sudah otomatis mengenerate session_id tiap buka halaman 
$objSession->tambahSession();

$_SESSION['username'] =$idUser;
$_SESSION['idUser'] =$idUser;
$_SESSION['namalain'] =$fetchAmbilSemua['Nama'];

}




$_SESSION["peran"]=$peran;
if($peran=="mahasiswa")
$query = "SELECT * FROM ubaya.mahasiswa mhs WHERE 	mhs.NRP='$idUser'";
else
$query = "SELECT * FROM ubaya.karyawan dsn WHERE 	dsn.NPK='$idUser'";
$peran=$_POST["peran"];

//$_SESSION["pw"]=$pw;
$hasilQuery=mysql_query($query);

$baris=mysql_num_rows($hasilQuery);

if($baris>=1)
{
*/

    $queryAmbilSemua=mysql_query("SELECT mhs.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto,u.sebagai from ubaya.mahasiswa mhs INNER JOIN tgsakhir.user u ON mhs.NRP=u.id_user WHERE mhs.NRP='$idUser' AND u.password='$pw'");
    $_SESSION['peran'] = "Mahasiswa";
if(mysql_num_rows($queryAmbilSemua)==0) 
{
	$queryAmbilSemua=mysql_query("SELECT dsn.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto,u.sebagai from ubaya.karyawan dsn INNER JOIN tgsakhir.user u ON dsn.NPK=u.id_user WHERE dsn.NPK='$idUser' AND u.password='$pw'");
    $_SESSION['peran'] = "Dosen";
}	
	$fetchAmbilSemua=mysql_fetch_array($queryAmbilSemua);	

$_SESSION["masterAmbilSemua"] = $fetchAmbilSemua;
	$_SESSION["masterQueryAmbilSemua"]=$queryAmbilSemua;
    if(mysql_num_rows($queryAmbilSemua))
    echo "1";
    else
    echo "2";
$objSession = new whosOnline(session_id(),$idUser); //session_id sudah otomatis mengenerate session_id tiap buka halaman 
$objSession->tambahSession();

$_SESSION['username'] =$idUser;
$_SESSION['idUser'] =$idUser;
$_SESSION['namalain'] =$fetchAmbilSemua['Nama'];

/*
}

*/
?>


