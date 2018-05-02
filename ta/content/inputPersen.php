<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   
 include "../lib/sambungDatabase.php";
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];
$sem = explode("-",$semester);
$gabungan = $idKelas . $sem[0] . $sem[1];

$sql = mysql_query("SELECT DISTINCT  jkt.tanggal, jkt.jam, jkt.ruang, jkt.bahan
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan' AND jkt.jenis_kt='UTS'");

?>
<script language="javascript" type="text/javascript">
function tampilTabel(a)
{

	if(a=="tabelUTS")
	{
	document.getElementById("tabelUTS").style.display = "inline";
	document.getElementById("tabelUAS").style.display = "none";
		document.getElementById("tdUTS").style.fontWeight="bold";
document.getElementById("tdUAS").style.fontWeight="100";
	}
	else
	{
	document.getElementById("tabelUTS").style.display = "none";
	document.getElementById("tabelUAS").style.display = "inline";
	document.getElementById("tdUTS").style.fontWeight="100";
document.getElementById("tdUAS").style.fontWeight="bold";
	}
}
</script>
<table align="center"><td id="tdUTS"><a href=# onclick="javascript:tampilTabel('tabelUTS');"> UTS</a></td><td>&nbsp&nbsp&nbsp&nbsp </td> <td id="tdUAS"><a href=# onclick="javascript:tampilTabel('tabelUAS');">UAS</a></td></table>
<span id="tabelUTS">

<h3 align="center"><? echo "$fetchArray[0]"; ?></h3>
  <table border='1' align='center'>
  
	<span  id="headTabel"><tr align='center'><td>No</td><td>Tanggal</td><td>Ke</td><td>Jam</td><td>Ruang</td><td>Bahan</td> </tr></span>
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
  </span>
  
  <?
  $sql = mysql_query("SELECT DISTINCT  jkt.tanggal, jkt.jam, jkt.ruang, jkt.bahan
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan' AND jkt.jenis_kt='UAS'");

?>
<span id="tabelUAS" style="display:none">

<h3 align="center"><? echo "$fetchArray[0]"; ?></h3>
  <table border='1' align='center'>
  
	<span id="headTabel"><tr align='center'><td>No</td><td>Tanggal</td><td>Ke</td><td>Jam</td><td>Ruang</td><td>Bahan</td> </tr></span>
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
  </span>