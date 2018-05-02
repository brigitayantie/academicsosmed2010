<? require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

//$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$idUser = $_POST["idUser"];
//$user[id_user] =$_POST["idUser"];
$user[email] =$_POST["email"];
$user2[Alamat] =$_POST["alamat"];
$user[hobi] =$_POST["hobi"];
$user[deskripsi] =$_POST["deskripsi"];

$hasil = $db->query_update("user", $user, "id_user='$idUser'");

mysql_query("UPDATE ubaya.mahasiswa mhs SET mhs.Alamat='$_POST[alamat]'");
mysql_query("UPDATE ubaya.karyawan dsn SET dsn.Alamat='$_POST[alamat]'");

echo $hasil;


$query = "SELECT * FROM user WHERE 	id_user='$idUser'";

$hasilQuery=mysql_query($query);

$baris=mysql_num_rows($hasilQuery);

if($baris>=1)
{
	
	$fetchAmbilSemua=mysql_fetch_array($hasilQuery);	

$_SESSION[masterAmbilSemua] = $fetchAmbilSemua;
	$_SESSION[masterQueryAmbilSemua]=$query;
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

}


?>
