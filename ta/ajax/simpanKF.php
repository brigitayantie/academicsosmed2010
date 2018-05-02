<? session_start();
include "../lib/Profile.class.php";
include "../lib/sambungDatabase.php";

$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$kf = $_POST["kf"];
$idFoto = $_POST["idFoto"];

$tambah = mysql_query("INSERT INTO tgsakhir.komentarfoto (timestamp,id_user,id_foto,isi) VALUES (CURRENT_TIMESTAMP,'$masterAmbilSemua[id_user]','$idFoto','$kf')");


$sql = mysql_query("SELECT mhs.Nama as nama, kf.* FROM tgsakhir.komentarfoto kf INNER JOIN ubaya.mahasiswa mhs ON kf.id_user=mhs.NRP WHERE kf.id_foto='$idFoto' UNION SELECT dsn.Nama as nama, kf.* FROM tgsakhir.komentarfoto kf INNER JOIN ubaya.karyawan dsn ON kf.id_user=dsn.NPK WHERE kf.id_foto='$idFoto'");
                  $jumRow = mysql_num_rows($sql);

for($i=0;$i<$jumRow;$i++)
{	$fetchArray = mysql_fetch_array($sql);
	echo "<table id='kf_$fetchArray[id_kf]' width='100%' bgcolor='#6699FF'>";
	echo "<tr><td align='center' width='50px'>";
	//echo "-".file_exists('../images/01xx.png');
	//$file='$fetchArray[foto]';
	//if(file_exists($file)) {	echo "<img src='$fetchArray[foto]' />"; }
	//else 	{ echo "<img src='images/02.png' />"; }
	echo "<img src='$fetchArray[foto]' />";
	echo "</td>";
	echo "<td>";
	echo "<a href='profilTeman.php?id=$fetchArray[id_user]'>$fetchArray[nama]</a>";
	echo " ";
	echo "$fetchArray[isi]<br />$fetchArray[timestamp]&nbsp;&nbsp;&nbsp;";
     if($masterAmbilSemua[id_user]==$fetchArray[id_user])
     echo "<a href='javascript:hapusKomentarFoto($fetchArray[id_kf]);'>Hapus</a>";
	echo "</td></tr>";
	
	echo "</table>";	
	
}             
$rowBaru = mysql_insert_id();

echo    "<span id='waktushoutout'></span>";
echo "<input type='hidden' id='startwaktushoutout' value='$status[timestamp]' />";


?>