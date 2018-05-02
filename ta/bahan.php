<? session_start();
?>
<link rel="stylesheet" href="style.css" TYPE="text/css" MEDIA="screen">
<?
require "lib/config.inc.php"; 
   require "lib/Database.class.php";
   require ("lib/sambungDatabase.php");
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester = $_GET["semester"];
$idMatkul = $_GET["idMatkul"];

$sem = explode("-", $semester);
$gabungan = $idMatkul . $sem[0] . $sem[1] . $sem[2];

$sql = mysql_query("SELECT bhn.subyekBahan,bhn.ketBahan,bhn.id_bahan,bhn.jenis_file
FROM tgsakhir.bahan bhn
WHERE bhn.id_kelas ='$gabungan'");

echo "<table align='center' cellspacing='0' border='0' id='myTable' >";
echo "<tr align=center><th scope='col' class='tabelkerenth'>No</th><th scope='col' class='tabelkerenth'>Subyek</th><th scope='col' class='tabelkerenth'>Keterangan</th><th scope='col' class='tabelkerenth'>Download</th></tr>";
for($i=0;$i<(mysql_num_rows($sql));$i++)
{
	$b = $i+1;
    if($i%2!=0)
    echo "<tr class='specalt'>";
    else
    echo "<tr class='spec'>";
    echo"<td class='tabelkerentd' width='2%'>$b</td>";
$fetchArray = mysql_fetch_array($sql);
	for($j=0;$j<(mysql_num_fields($sql)-1);$j++)
	{
        if($j==2) echo "<td class='tabelkerentd' width='20%'><a href=\"bahan/$fetchArray[$j].$fetchArray[3]\">$fetchArray[$j].$fetchArray[3]</a></td>";
		else
		echo "<td class='tabelkerentd' width='20%'>$fetchArray[$j]</td>";
	}


echo "</tr>";
}
echo "</table>";

?>