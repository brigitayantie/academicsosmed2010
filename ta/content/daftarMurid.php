<? session_start(); ?> 
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<html>
<body>
<script type="text/javascript" language="javascript" src="../script/simpanNilai.js">;

<?



require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   require ("../lib/sambungDatabase.php");

   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];
$kp = $_GET["kp"];
$sem = explode("-",$semester);
$gabungan = $idKelas . $sem[0] . $sem[1];
$gabungan2 = $idKelas . $sem[0] . $sem[1] . $kp;

$sql = mysql_query("SELECT mhs.NRP, mhs.Nama
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = mhsmk.NRP
WHERE mhsmk.KodeMkBuka ='$gabungan' AND mhsmk.KP='$kp'
ORDER BY mhs.NRP");

$jmlMurid = mysql_num_rows($sql);
$sql2 = mysql_query("SELECT DISTINCT  jkt.jenis_kt,jkt.ke
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan2' AND jkt.tipe='UTS' ORDER BY jkt.jenis_kt,jkt.ke ASC");
$jumRowUTS = mysql_num_rows($sql2);
$sql3 = mysql_query("SELECT DISTINCT  jkt.jenis_kt,jkt.ke
FROM tgsakhir.jadwalkuistugas jkt
WHERE jkt.id_kelas='$gabungan2' AND jkt.tipe='UAS' ORDER BY jkt.jenis_kt,jkt.ke ASC");
$jumRowUAS = mysql_num_rows($sql3);

$querySelect = mysql_query("SELECT jkt.id_kt FROM tgsakhir.jadwalkuistugas jkt WHERE jkt.id_kelas='$gabungan2' AND jkt.tipe='UTS' ORDER BY jkt.jenis_kt,jkt.ke ASC");

$jumSemuaUTS=mysql_num_rows($querySelect);

?>
<script language="javascript" type="text/javascript">

function tampilTabel2(a)
{

	if(a=="tabelUTS2")
	{
	document.getElementById("tabelUTS2").style.display = "inline";
	document.getElementById("tabelUAS2").style.display = "none";
	document.getElementById("tdUTS2").style.fontWeight="bold";
	document.getElementById("tdUAS2").style.fontWeight="100";
	}
	else
	{
	document.getElementById("tabelUTS2").style.display = "none";
	document.getElementById("tabelUAS2").style.display = "inline";
	document.getElementById("tdUTS2").style.fontWeight="100";
document.getElementById("tdUAS2").style.fontWeight="bold";
	}
}
</script>
<table class="biasa" align="center">
<td id="tdUTS2"><a href=# onClick="javascript:tampilTabel2('tabelUTS2');"> UTS</a></td><td>&nbsp&nbsp&nbsp&nbsp </td> <td id="tdUAS2"><a href=# onClick="javascript:tampilTabel2('tabelUAS2');">UAS</a></td></table>
<span id="tabelUTS2">
<?
echo "<table class='biasa' align='center' border=1>";

echo "<tr align=center><td>No</td><td>Nama</td><td>Keterangan</td>";
/////
$queryMurid= mysql_query("SELECT mhs.NRP, mhs.Nama
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = mhsmk.NRP
WHERE mhsmk.KodeMkBuka ='$gabungan'
ORDER BY mhs.NRP");

$querySelect = mysql_query("SELECT jkt.id_kt FROM tgsakhir.jadwalkuistugas jkt WHERE jkt.id_kelas='$gabungan2' AND jkt.tipe='UTS' ORDER BY jenis_kt,jkt.ke ASC");
$b=0;
for($i=0;$i<mysql_num_rows($queryMurid);$i++)
{
	$fetchMurid = mysql_fetch_array($queryMurid);
	$murid[$i]=$fetchMurid[NRP];
	$namaMurid[$i]=$fetchMurid[Nama];
}

for($i=0;$i<mysql_num_rows($querySelect);$i++)
{
	$fetchSelect = mysql_fetch_array($querySelect);
	$uts[$i]=$fetchSelect[id_kt];
}

for($i=0;$i<mysql_num_rows($queryMurid);$i++)
	{	
	for($j=0;$j<mysql_num_rows($querySelect);$j++)
	{
		
	$fetchArray=mysql_fetch_array(mysql_query("SELECT nli.nilai FROM tgsakhir.nilai nli WHERE nli.id_mhs='$murid[$i]' AND nli.id_kt='$uts[$j]'"));
		$nilai[$i][$j]=$fetchArray[0];
		
		}
		
	}

///
for($k=0;$k<$jumRowUTS;$k++)
	{
		$fetchArray2 = mysql_fetch_array($sql2);
		echo "<td>$fetchArray2[jenis_kt]-$fetchArray2[ke]</td>";
	}
echo "</tr>";
for($i=0;$i<(mysql_num_rows($sql));$i++)
{
	$b = $i+1;
echo "<tr><td>$b</td>";
$fetchArray = mysql_fetch_array($sql);
	for($j=0;$j<(mysql_num_fields($sql));$j++)
	{
		if($j==1) echo "<td><a href=\"../profile.php?id=$murid[$i]\">$fetchArray[$j]</a></td>";
		else
		echo "<td>$fetchArray[$j]</td>";
	}
	for($k=0;$k<$jumRowUTS;$k++)
	{
		$tampung =$nilai[$i][$k];
                                       
		echo "<td align='center'><input value='$tampung'  type='text' id='txtNilaiUTS[$i][$k]' size=3></td>";
	}
	

echo "</tr>";
}
echo "</table>";

?>
<p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                               			<? echo "<a class=\"art-button\" href=\"javascript:simpanNilaiUTS($jmlMurid,$jumRowUTS,'$gabungan-$kp');\">SimpanNilai</a>"; ?>
                                            		</span>
                                            	</p>
</span>

<span id="tabelUAS2" style="display:none">
<?
echo "<table class='biasa' align='center' border=1>";

echo "<tr align=center><td>No</td><td>Nama</td><td>Keterangan</td>";
/////

$queryMurid2= mysql_query("SELECT mhs.NRP, mhs.Nama
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = mhsmk.NRP
WHERE mhsmk.KodeMkBuka ='$gabungan'
ORDER BY mhs.NRP");

$querySelect2 = mysql_query("SELECT jkt.id_kt FROM tgsakhir.jadwalkuistugas jkt WHERE jkt.id_kelas='$gabungan2' AND jkt.tipe='UAS' ORDER BY jkt.jenis_kt,jkt.ke ASC");
$b=0;
for($i=0;$i<mysql_num_rows($queryMurid2);$i++)
{
	$fetchMurid2 = mysql_fetch_array($queryMurid2);
		$murid2[$i]=$fetchMurid2[NRP];
	$namaMurid2[$i]=$fetchMurid2[Nama];

}

for($i=0;$i<mysql_num_rows($querySelect2);$i++)
{
	$fetchSelect2 = mysql_fetch_array($querySelect2);
	$uas[$i]=$fetchSelect2[id_kt];
}

for($i=0;$i<mysql_num_rows($queryMurid2);$i++)
	{	
	for($j=0;$j<mysql_num_rows($querySelect2);$j++)
	{
		
	$fetchArray2=mysql_fetch_array(mysql_query("SELECT nli.nilai FROM tgsakhir.nilai nli WHERE nli.id_mhs='$murid2[$i]' AND nli.id_kt='$uas[$j]'"));
		$nilai2[$i][$j]=$fetchArray2[0];
		
		}
		
	}

///

for($k=0;$k<$jumRowUAS;$k++)
	{
		$fetchArraySql3 = mysql_fetch_array($sql3);
		echo "<td>$fetchArraySql3[jenis_kt]-$fetchArraySql3[ke]</td>";
	}
echo "</tr>";
for($i=0;$i<(mysql_num_rows($sql));$i++)
{
	$b = $i+1;
echo "<tr><td>$b</td>";
	echo "<td>$murid[$i]</a></td>";
		echo "<td><a href=\"../profile.php?id=$murid[$i]\">$namaMurid[$i]</td>";
	
	for($k=0;$k<$jumRowUAS;$k++)
	{
		$tampung =$nilai2[$i][$k];
                                       
		echo "<td align='center'><input value='$tampung'  type='text' id='txtNilaiUAS[$i][$k]' size=3></td>";
	}
	

echo "</tr>";
}
echo "</table>";

?>
<p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                               			<? echo "<a class=\"art-button\" href=\"javascript:simpanNilaiUAS($jmlMurid,$jumRowUAS,'$gabungan-$kp');\">SimpanNilai</a>"; ?>
                                            		</span>
                                            	</p>
</span>
</body>
</html>