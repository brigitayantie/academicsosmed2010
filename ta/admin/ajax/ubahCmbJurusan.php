<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

$id_fakultas  = $_POST["cmbFakultas"];
if($_POST[edtUser]=="1")
{ 
	echo "<select onchange='javascript:tampilDosen();' name='jurusan' id='jurusan'>";}
else if($_POST[edtKelas]=="1")
{ 

$tipe = "nonmku";
	?><select onchange="javascript:tampilKelas('nonmku');" name="jurusan" id="jurusan"><?
    }
else if($_POST[edtUser]=="2")
{ 
	echo "<select onchange='javascript:tampilMhs();' name='jurusan' id='jurusan'>";}
	else if($_POST[lks]=="mk")
{ 
	echo "<select onchange='javascript:tampilMatkul();' name='jurusan' id='jurusan'>";}
else
{echo "<select name='jurusan' id='jurusan'>";}

$query = "SELECT * FROM jurusan where id_fakultas='$id_fakultas'";
												$rows = $db->fetch_all_array($query);
												/*$rows itu aray $rows[0]...
												for($i=0;$i<count($rows);$i++)
												$record=$row[i][nama_fakultas];
												*/
												foreach($rows as $record)
												{
													echo "<option value='$record[id_jurusan]'>$record[nama_jurusan]</option>";
												}

echo "</select>";



/*			 
echo "<select id='combo2' onchange='javascript: UbahCombo3();'>";
while(mysql_fetch_array($rec)) {
	echo "<option value='...'>......</option>";
	*/






//hasil xmlHttpResponseText

?>
