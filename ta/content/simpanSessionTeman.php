<?
$idUser=$_GET["id"];


$query="SELECT *
FROM (

SELECT mhs.NRP AS id
FROM ubaya.mahasiswa mhs
WHERE mhs.NRP = '$idUser'
UNION SELECT dsn.NPK AS id
FROM ubaya.karyawan dsn
WHERE dsn.NPK = '$idUser'
)tabel";

$hasilQuery=mysql_query($query);

$baris=mysql_num_rows($hasilQuery);

if($baris>=1)
{
	$queryAmbilTeman=mysql_query("SELECT tabel. *
FROM (
SELECT u.id_user,u.hobi,u.deskripsi,u.email,mhs.Nama,mhs.Alamat,u.foto,mhs.TglLahir 
FROM tgsakhir.user u
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
WHERE mhs.NRP = '$idUser'
UNION SELECT u.id_user,u.hobi,u.deskripsi,u.email,dsn.Nama,dsn.Alamat,u.foto,dsn.TglLahir 
FROM tgsakhir.user u
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
WHERE dsn.NPK = '$idUser'
)tabel");

$queryCekMahasiswa = mysql_query("SELECT * FROM ubaya.mahasiswa WHERE NRP='$idUser'");
if(mysql_num_rows($queryCekMahasiswa)>0) $_SESSION["peranTeman"]="Mahasiswa";
else $_SESSION["peranTeman"]="Dosen";


	
		$fetchAmbilTeman=mysql_fetch_array($queryAmbilTeman);
	

$_SESSION[masterAmbilTeman] = $fetchAmbilTeman;
	$_SESSION[masterQueryAmbilTeman]=$query;
$masterAmbilTeman = $_SESSION[masterAmbilTeman];

}
?>