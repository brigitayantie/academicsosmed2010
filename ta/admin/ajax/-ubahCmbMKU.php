<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



$jur= $_POST["jurusanMK"];
$jenis  = $_POST["jenisMK"];
$query = "SELECT * FROM jurusan where nama_jurusan='$jur' ";
$rows = $db->fetch_all_array($query);
foreach($rows as $record) 
{$id_jur=$record[id_jurusan];

}
//$_SESSION["jenisMatkul"] = $jenis;
if($jenis=="mku")
{

echo "<select name='matkul' id='matkul'>";

$query = "SELECT * FROM matkul where ket='MKU' ";
												$rows = $db->fetch_all_array($query);
												/*$rows itu aray $rows[0]...
												for($i=0;$i<count($rows);$i++)
												$record=$row[i][nama_fakultas];
												*/
												foreach($rows as $record)
												{
													echo "<option value='$record[id_matkul]'>$record[nama_matkul]</option>";
												}

echo "</select>";
}


else if($jenis=="nonmku")
{

echo "<select name='matkul' id='matkul'>";

$query = "SELECT * FROM tbljurusanpnymatkul where id_jurusan='$id_jur'";
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
}


/*			 
echo "<select id='combo2' onchange='javascript: UbahCombo3();'>";
while(mysql_fetch_array($rec)) {
	echo "<option value='...'>......</option>";
	*/





//hasil xmlHttpResponseText

?>
