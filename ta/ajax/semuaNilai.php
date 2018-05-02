<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$semester = $_POST[semester];

$sql = mysql_query("SELECT DISTINCT  matkul.id_matkul,matkul.nama_matkul,detailnilai.tanggal,detailnilai.jenisNilai,detailnilai.ke,detailnilai.nilai,detailnilai.persen,detailnilai.jenisUjian,detailnilai.fileSoal FROM detailnilai
INNER JOIN kelas ON kelas.id_kelas = detailnilai.id_kelas
INNER JOIN matkul ON matkul.id_matkul = kelas.id_mk 
WHERE detailnilai.id_mhs = '$masterAmbilSemua[id_user]'
AND detailnilai.id_semester = '$semester'");

?>

  <table border='1' align='center'>
  
	<span id="headTabel"><tr align='center'><td>No</td><td>Id Matkul</td><td>Matkul</td><td>Tanggal</td><td>Tipe</td> <td>Ke</td><td>Nilai</td><td>%</td><td>Jenis</td><td>File Soal</td></tr></span>
    <?
    for($i=0;$i<mysql_num_rows($sql);$i++)
	{

	echo "<tr>";
	$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);	
	$b=$i+1;
	echo "<td>$b</td>";
		for($j=0;$j<mysql_num_fields($sql);$j++)
		 	echo "<td>$fetchArray[$j]</td>";
	echo "</tr>";

	}
	?>
  
  </table>
  