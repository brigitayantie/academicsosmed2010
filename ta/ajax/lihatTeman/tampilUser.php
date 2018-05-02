<? 
require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();

function enum_select( $table , $field ){
$query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
$result = mysql_query( $query ) or die( 'error getting enum field ' . mysql_error() );
$row = mysql_fetch_array( $result , MYSQL_NUM );
#extract the values
#the values are enclosed in single quotes
#and separated by commas
$regex = "/'(.*?)'/";
preg_match_all( $regex , $row[1], $enum_array );
$enum_fields = $enum_array[1];
return( $enum_fields );
} 



echo "<input type='hidden' id='isiArray[]' value='$query' />";
$peran = $_POST["peran"];
$id_fakultas  = $_POST["cmbFakultas"];
$id_jurusan = $_POST["cmbJurusan"];

echo $_idjurusan;
$baris = 2;
if($peran=="dosen")
{
$query = "SELECT user.* FROM tbljurusanpnydosen,user 
WHERE 	tbljurusanpnydosen.id_jurusan=" . $id_jurusan . "
AND			user.id_user=tbljurusanpnydosen.id_dosen";
echo "<input type='hidden' id='perintah' value='$query' />";
}
else if($peran=="mhs")
{
$query = "SELECT user.* FROM mhs,user 
WHERE 	mhs.id_jurusan=" . $id_jurusan . "
AND			user.id_user=mhs.id_mhs";
echo "<input type='hidden' id='perintah' value='$query' />";
}
$hasilQuery = mysql_query($query);
$jumRow = mysql_num_rows($hasilQuery);
$rows = $db->fetch_all_array($query);
?>									
<table class="art-article"  border="1" width='90%'>
                                              <tr align="center">
                                                <td width="17%" align="center">Id Jurusan</td>
                                                <td width='50%'>Jurusan</td>
                                                <td >Keterangan</td>
                                              </tr>
<?
//$rows itu aray $rows[0]...
	//for($i=0;$i<count($rows);$i++)
	$jumField = mysql_num_fields($hasilQuery);	
	$i=0;
	foreach($rows as $record)
	{
		
		echo "<tr>";
		/*
		$idUser = $rows[$i][id_user];
	*/

		for($a=0;$a<$jumField;$a++)
		{
		
			
			$flags= mysql_field_flags($hasilQuery,$a);
			$length= mysql_field_type($hasilQuery,$a);
			$fieldName= mysql_field_name($hasilQuery,$a);
			//echo $fieldName;
			if($flags=="enum")
			{
			$nilaiEnum = enum_select("user",$fieldName);
			//$tipeEnum=explode(",",$record[$a]);
			//echo count($nilaiEnum);
			//echo $nilaiEnum[0];
			echo "<td><span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>
			<select id='txt" . $a . "[$i]' style='display:none;'/>";
			for($z=0;$z<count($nilaiEnum);$z++)
			{
			echo "<option value='$nilaiEnum[$z]'>$nilaiEnum[$z]</option>";
			
			}
			echo "</select></td>";
			}
			else
			{
			echo "
			<td>
			<span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>
			<input  size='5' type='text' value='$record[$a]' id='txt" . $a . "[$i]' style='display:none;'>
			</td>
			";
			}//$data[$a] = $record[$a];

		}
	

		echo "<td><a href='#' onclick='javascript:editUser($i,$jumField);'><span id='edit[$i]'>Edit</span></a> 

		<a href='#' onclick='javascript:edit2User($i,$jumField);'><span id='simpan[$i]' style='display:none'>Simpan</span></a> /
		
		<a href='#' onclick='javascript:hapusUser($record[id_user]);'>Hapus</a> </td>";
		
		echo "</tr>";
		$i++;
	}



echo "</table>";






//hasil xmlHttpResponseText

?>
