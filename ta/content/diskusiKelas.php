<?
$sql = mysql_query("SELECT * FROM ubaya.mkbuka mkb, ubaya.mhsambilmk mam, ubaya.matakuliah mk
				   where mam.KodeMkBuka=mkb.KodeMkBuka AND mk.KodeMk=mkb.KodeMk AND mam.NRP=$masterAmbilSemua[NRP]");

while($row = mysql_fetch_array($sql))
{
	echo "<a href='masukDiskusi.php?idkelas=$row[KodeMkBuka]&kp=$row[KP]'>$row[Nama] Kelas $row[KP]</a><br>";
}
?>