<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$semester = $_GET[semester];
$matkul = $_GET[matkul];
$sql = mysql_query("SELECT DISTINCT  dn.tanggal,dn.jenisNilai,dn.ke,dn.nilai,dn.persen,dn.jenisUjian,dn.fileSoal
FROM tgsakhir.detailnilai dn
INNER JOIN ubaya.mkbukajadwal jadwal ON jadwal.KodeMkBuka = dn.id_kelas
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = kelas.id_mk AND matkul.kodeMk='$matkul'
WHERE dn.id_mhs = '$masterAmbilSemua[id_user]'
AND dn.id_semester = '$semester'");

$sql2 = mysql_query("SELECT matkul.Nama FROM ubaya.matakuliah matkul WHERE matkul.KodeMk=$matkul");
$fetchArray = mysql_fetch_array($sql2);
?>
<h3 align="center"><? echo "$fetchArray[0]"; ?></h3>
  <table border='1' align='center' id='myTable'>
  
	<span id="headTabel"><tr align='center'><th scope='col' class='tabelkerenth'>No</th><th scope='col' class='tabelkerenth'>Tanggal</th><th scope='col' class='tabelkerenth'>Jenis</th><th scope='col' class='tabelkerenth'>Ke</th><th scope='col' class='tabelkerenth'>Nilai</th> <th scope='col' class='tabelkerenth'>%</th><th scope='col' class='tabelkerenth'>UTS/UAS</th><th scope='col' class='tabelkerenth'>File Soal</th></tr></span>
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
  