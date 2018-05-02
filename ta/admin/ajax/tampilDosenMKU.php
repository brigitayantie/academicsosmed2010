<? 

require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
    $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();




$baris = 2;
$query = "SELECT * FROM user where sebagai='DosenMKU'";
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
	for($i=0;$i<count($rows);$i++)
	{
		echo "<tr>";
		$idMatkul = $rows[$i][id_user];
		$namaMatkul=$rows[$i][nama];
		
		
		//echo "<td><span id='txtIdJur[$i]'>$idMatkul</span></td><td><span id='txtNamaJur[$i]'>$namaMatkul</span></td><td><a href='#' onclick='javascript:editJurusan($idMatkul,$id_fakultas,$i);'><span id='edit[$i]'>Edit</span></a> / <a href='#' onclick='javascript:hapusJurusan($idMatkul,$id_fakultas);'>Hapus</a> </td>";
		echo "<td>
		<span id='spanIdJur[$i]' style='display:inline;'>$idMatkul</span>
		<input type='text' value='$idMatkul' id='txtIdJur[$i]' style='display:none;'>
		</td>
		<td><span id='spanNamaJur[$i]'>$namaMatkul</span>
		<input type='text' value='$namaMatkul' id='txtNamaJur[$i]' style='display:none;'>
		</td>
		<td><a href='#' onclick='javascript:editJurusan($i);'><span id='edit[$i]'>Edit</span></a>
		<a href='#' onclick='javascript:editMKU($i);'><span id='simpan[$i]' style='display:none'>Simpan</span></a>
		/ <a href='#' onclick='javascript:hapusMKU($idMatkul);'>Hapus</a> </td>";
		echo "</tr>";
	}/*
												foreach($rows as $record)
												{
													echo "<option value='$record[id_jurusan]'>$record[nama_jurusan]</option>";
												}
												*/



echo "</table>";

/*			 
echo "<select id='combo2' onchange='javascript: UbahCombo3();'>";
while(mysql_fetch_array($rec)) {
	echo "<option value='...'>......</option>";
	*/






//hasil xmlHttpResponseText

?>
