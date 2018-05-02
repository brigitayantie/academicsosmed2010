<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   
 include "../lib/sambungDatabase.php";
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];
$kp = $_GET["kp"];
$sem = explode("-",$semester);
$gabungan = $idKelas . $sem[0] . $sem[1] . $kp;
$sqlUTS = mysql_query("SELECT DISTINCT  jkt.tanggal, jkt.jam, jkt.ruang, jkt.bahan,jkt.jenis_kt,jkt.ke,jkt.persen
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan' AND jkt.tipe='UTS' ORDER BY jkt.jenis_kt,jkt.ke ASC");

?>
<script language="javascript" type="text/javascript" src="../script/simpanPersen.js"></script>
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
<table class="biasa" align="center"><td id="tdUTS"><a href=# onclick="javascript:tampilTabel('tabelUTS');"> UTS</a></td><td>&nbsp&nbsp&nbsp&nbsp </td> <td id="tdUAS"><a href=# onclick="javascript:tampilTabel('tabelUAS');">UAS</a></td></table>
<span id="tabelUTS">

<h3 align="center"><? echo "$fetchArray[0]"; ?></h3>
  <table class="biasa" border='1' align='center'>
  
	<span  id="headTabel"><tr align='center'><td>No</td><td>Tanggal</td><td>Ke</td><td>Jam</td><td>Ruang</td><td>Bahan</td> </tr></span>
    <?
	$jumRowUTS = mysql_num_rows($sqlUTS);
    for($i=0;$i<mysql_num_rows($sqlUTS);$i++)
	{

	echo "<tr>";
	$fetchArrayUTS = mysql_fetch_array($sqlUTS,MYSQL_BOTH);	
	$b=$i+1;
	echo "<td>$b</td>";
		for($j=0;$j<mysql_num_fields($sqlUTS);$j++)
		 {
			 if($j==6)
					echo "<td><input size='5' value='$fetchArrayUTS[$j]' type='text' id='txtPersenUTS[$i]' /></td>";		
				else
				echo "<td>$fetchArrayUTS[$j]</td>";
		 }
	echo "</tr>";
		
	}
	?>
    <tr><td colspan="7" align="center"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<? echo "<a class=\"art-button\" href=\"javascript:simpanPersenUTS('UTS','$jumRowUTS','$gabungan')\">Simpan</a>";?>
                                            		</span>
                                            	</p></td></tr>
  
  </table>
  </span>
  
  <?
  $sql = mysql_query("SELECT DISTINCT  jkt.tanggal, jkt.jam, jkt.ruang, jkt.bahan,jkt.jenis_kt,jkt.ke,jkt.persen
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan' AND jkt.tipe='UAS' ORDER BY jkt.jenis_kt,jkt.ke ASC");

?>
<span id="tabelUAS" style="display:none">

<h3 align="center"><? echo "$fetchArray[0]"; ?></h3>
  <table class="biasa" border='1' align='center'>
  
	<span id="headTabel"><tr align='center'><td>No</td><td>Tanggal</td><td>Ke</td><td>Jam</td><td>Ruang</td><td>Bahan</td> </tr></span>
    <?
	$jumRow = mysql_num_rows($sql);

    for($i=0;$i<$jumRow;$i++)
	{
	$b=$i+1;
	$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);	
	echo "<tr>";
	echo "<td>$b</td>";
		for($j=0;$j<mysql_num_fields($sql);$j++)
		{
				if($j==6)
					echo "<td><input size='5' value='$fetchArray[$j]' type='text' id='txtUAS[$i]' /></td>";		
				else
				echo "<td>$fetchArray[$j]</td>";
		}
	}
	echo "</tr>";
	?>
  <tr><td colspan="7" align="center"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<? echo "<a class=\"art-button\" href=\"javascript:simpanPersen('UAS','$jumRowUAS','$gabungan')\">Simpan</a>";?>
                                            		</span>
                                            	</p></td></tr>
  </table>
  </span>