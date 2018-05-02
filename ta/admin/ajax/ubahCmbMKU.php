<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();




$jenis  = $_POST["jenisMK"];

if($jenis=="nonmku")
{
$jur= $_POST["jurusanMK"];
$query = "SELECT * FROM jurusan where nama_jurusan='$jur' ";
//0
echo "<select name='kodematkul' id='kodematkul' onchange='javascript:gantiNamaM();'>";

$query = "SELECT * FROM tbljurusanpnymatkul where id_jurusan='$jur'";
		$rows = $db->fetch_all_array($query);
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			$query2 = "SELECT * FROM matkul where id_matkul='$record[id_matkul]'";
			$rows2 = $db->fetch_all_array($query2);
			foreach($rows2 as $record2)
			echo "<option value='$record2[id_matkul]'>$record2[id_matkul]</option>";
		}


echo "</select>";

echo "-";
//1
echo "<select name='matkul' id='matkul' onchange='javascript:gantiIdM();'>";

$query = "SELECT * FROM tbljurusanpnymatkul where id_jurusan='$jur'";
		$rows = $db->fetch_all_array($query);
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			$query2 = "SELECT * FROM matkul where id_matkul='$record[id_matkul]'";
			$rows2 = $db->fetch_all_array($query2);
			foreach($rows2 as $record2)
			echo "<option value='$record2[id_matkul]'>$record2[nama_matkul]</option>";
		}


echo "</select>";
echo "-";
//2
echo "<select  name='idDosen' id='idDosen' onchange='javascript:gantiNamaD();'>";

$query = "SELECT * FROM tbljurusanpnydosen where id_jurusan='$jur'";
		$rows = $db->fetch_all_array($query);
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			$query2 = "SELECT * FROM user where id_user='$record[id_dosen]'";
			$rows2 = $db->fetch_all_array($query2);
			foreach($rows2 as $record2)
			echo "<option value='$record2[id_user]'>$record2[id_user]</option>";
		}


echo "</select>";
//3
echo "-";
echo "<select name='dosen' id='dosen' onchange='javascript:gantiIdD();'>";

$query = "SELECT * FROM tbljurusanpnydosen where id_jurusan='$jur'";
		$rows = $db->fetch_all_array($query);
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			$query2 = "SELECT * FROM user where id_user='$record[id_dosen]'";
			$rows2 = $db->fetch_all_array($query2);
			foreach($rows2 as $record2)
			echo "<option value='$record2[id_user]'>$record2[nama]</option>";
		}


echo "</select>";

}

else if($jenis=="mku")
{
	



$query = "SELECT * FROM matkul where ket='MKU' ";
//0
echo "<select name='kodematkul' id='kodematkul' onchange='javascript:gantiNamaM();'>";
$rows = $db->fetch_all_array($query);
foreach($rows as $record)
	{
		echo "<option value='$record[id_matkul]'>$record[id_matkul]</option>";
	}

echo "</select>";
echo "-";
//1
echo "<select name='matkul' id='matkul' onchange='javascript:gantiIdM();'>";

foreach($rows as $record)
	{
		echo "<option value='$record[id_matkul]'>$record[nama_matkul]</option>";
	}

echo "</select>";

echo "-";
//2
$query = "SELECT * FROM user where sebagai='DosenMKU'";
echo "<select name='idDosen' id='idDosen' onchange='javascript:gantiNamaD();'>";

	$rows = $db->fetch_all_array($query);
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			echo "<option value='$record[id_user]'>$record[id_user]</option>";
		}


echo "</select>";
//3
echo "-";
echo "<select name='dosen' id='dosen' onchange='javascript:gantiIdD();'>";
		/*$rows itu aray $rows[0]...
		for($i=0;$i<count($rows);$i++)
		$record=$row[i][nama_fakultas];
		*/
		foreach($rows as $record)
		{
			echo "<option value='$record[id_user]'>$record[nama]</option>";
		}


echo "</select>";
echo "-mku";
}

/*			 
echo "<select id='combo2' onchange='javascript: UbahCombo3();'>";
while(mysql_fetch_array($rec)) {
	echo "<option value='...'>......</option>";
	*/
//echo "-$jur";

?>
