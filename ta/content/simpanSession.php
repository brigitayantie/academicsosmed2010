<?


	$hasilQuery=mysql_query("SELECT mhs.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto from ubaya.mahasiswa mhs INNER JOIN tgsakhir.user u ON mhs.NRP=u.id_user WHERE mhs.NRP='".$_SESSION['idUser']."'");
	if(mysql_num_rows($hasilQuery)==0)
	$hasilQuery=mysql_query("SELECT dsn.*,u.hobi,u.deskripsi,u.id_user,u.email,u.foto from ubaya.karyawan dsn INNER JOIN tgsakhir.user u ON dsn.NPK=u.id_user WHERE dsn.NPK='".$_SESSION['idUser']."'");
	


$baris=mysql_num_rows($hasilQuery);

if($baris>=1)
{
	
	$fetchAmbilSemua=mysql_fetch_array($hasilQuery);	

$_SESSION[masterAmbilSemua] = $fetchAmbilSemua;
	$_SESSION[masterQueryAmbilSemua]=$query;
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

}

?>