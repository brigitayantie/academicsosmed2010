<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$semester = $_POST[semester];

$sql = mysql_query("SELECT DISTINCT matkul.id_matkul,matkul.nama_matkul
FROM mhsikutkelas
INNER JOIN kelas ON kelas.id_kelas = mhsikutkelas.id_kelas
INNER JOIN matkul ON matkul.id_matkul = kelas.id_mk
WHERE mhsikutkelas.id_mhs = '$masterAmbilSemua[id_user]'
AND mhsikutkelas.id_semester = '$semester'");
?>
  <select id="matkul" onchange="javascript:cariDetailNilai();">
    <?
    for($i=0;$i<mysql_num_rows($sql);$i++)
	{
	$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);	
	echo "<option value='$fetchArray[id_matkul]'>";
	echo "$fetchArray[nama_matkul]";
	echo "</option>";
	}
	?>
  
  </select>
  