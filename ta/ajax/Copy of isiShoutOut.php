<? session_start();

include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
/*
$sql =mysql_query(" 
SELECT DISTINCT tabel. *
FROM (

SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_obyek
WHERE t.id_subyek = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_subyek
WHERE t.id_obyek = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
WHERE s.id_user = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");
*/
/*
$sql =mysql_query(" 
SELECT DISTINCT tabel. *
FROM (

SELECT s.* , u.nama,  u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s.* , u.nama,  u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s.* , u.nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");
*/


$sql = mysql_query(
"SELECT DISTINCT tabel. *
FROM (
SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
INNER JOIN tgsakhir.teman t ON mhs.NRP = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
INNER JOIN tgsakhir.teman t ON dsn.NPK = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
INNER JOIN tgsakhir.teman t ON mhs.NRP = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
INNER JOIN tgsakhir.teman t ON dsn.NPK = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");



$jumRow = mysql_num_rows($sql);
echo "<span id='komentarWall'>";
for($i=0;$i<$jumRow;$i++)
{	$fetchArray = mysql_fetch_array($sql);
	echo "<table width='100%'>";
	echo "<tr><td align='center' width='50px'>";
	//echo "-".file_exists('../images/01xx.png');
	//$file='$fetchArray[foto]';
	//if(file_exists($file)) {	echo "<img src='$fetchArray[foto]' />"; }
	//else 	{ echo "<img src='images/02.png' />"; }
	echo "<img src='$fetchArray[foto]' />";
	echo "</td>";
	echo "<td>";
	echo "<a href='profile.php?id=$fetchArray[id_user]'>$fetchArray[nama]</a>";
	echo "<br /><br />";
	echo "$fetchArray[isishoutout]";
	$query = mysql_query("SELECT DISTINCT tabel. *
FROM (SELECT u.id_user,mhs.Nama as nama,ks.isi,ks.timestamp FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' 
	UNION
	SELECT u.id_user,dsn.Nama,ks.isi,ks.timestamp FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' ) tabel ORDER BY tabel.timestamp");
	echo "<table bgcolor='#6699FF'>";
	while($ambilData=mysql_fetch_array($query))
	{
				
		echo "<tr><td><a href='profile.php?id=$ambilData[id_user]'>$ambilData[nama]</a></td><td>$ambilData[isi]</td></tr>";
	}
	echo "<tr><td><a href='javascript:halKomentar($fetchArray[id_shoutout]);'>Komentar</a></td></tr>";
	echo "</table>";
	echo "</td></tr>";
	
	echo "</table>";	
	
}
echo "</span>";

?>