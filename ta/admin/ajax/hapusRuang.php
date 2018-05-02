
<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
echo"
<form>
<input type='hidden' id='tipe' name='tipe' value='MKU' />
</form>
";
echo "Masuk Hapus Ruang";

$idRuang = $_POST["idRuang"];	
mysql_query("DELETE  FROM ruang where id_ruang=$idRuang");
$query = "SELECT * FROM ruang";
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
		$namaRuang=$rows[$i][nama_ruang];
		$idRuang=$rows[$i][id_ruang];
		
		
		//echo "<td><span id='txtIdJur[$i]'>$idJurusan</span></td><td><span id='txtNamaJur[$i]'>$namaJurusan</span></td><td><a href='#' onclick='javascript:editJurusan($idJurusan,$id_fakultas,$i);'><span id='edit[$i]'>Edit</span></a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "<td>
		<span id='spanIdRuang[$i]' style='display:inline;'>$idRuang</span>
		<input type='text' value='$idRuang'  style='display:none;'>
		</td>
		<td><span id='spanNamaRuang[$i]'>$namaRuang</span>
		<input type='text' value='$namaRuang' id='txtNamaRuang[$i]' style='display:none;'>
		</td>
		<td><a href='#' onclick='javascript:editRuang($i);'><span id='edit[$i]'>Edit</span></a>
		<a href='#' onclick='javascript:edit2Ruang($i);'><span id='simpan[$i]' style='display:none'>Simpan</span></a>
		/ <a href='#' onclick='javascript:hapusRuang($idRuang);'>Hapus</a> </td>";
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
