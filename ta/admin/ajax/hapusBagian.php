
<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
echo"
<form>
<input type='hidden' id='tipe' name='tipe' value='MKU' />
</form>
";


$idBagian = $_POST["idBagian"];	
mysql_query("DELETE  FROM bagian where id_bagian=$idBagian");
$query = "SELECT * FROM bagian";
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
		$namaBagian=$rows[$i][nama_bagian];
		$idBagian=$rows[$i][id_bagian];
		
		
		//echo "<td><span id='txtIdJur[$i]'>$idJurusan</span></td><td><span id='txtNamaJur[$i]'>$namaJurusan</span></td><td><a href='#' onclick='javascript:editJurusan($idJurusan,$id_fakultas,$i);'><span id='edit[$i]'>Edit</span></a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "<td>
		<span id='spanIdBagian[$i]' style='display:inline;'>$idBagian</span>
		<input type='text' value='$idBagian'  style='display:none;'>
		</td>
		<td><span id='spanNamaBagian[$i]'>$namaBagian</span>
		<input type='text' value='$namaBagian' id='txtNamaBagian[$i]' style='display:none;'>
		</td>
		<td><a href='#' onclick='javascript:editBagian($i);'><span id='edit[$i]'>Edit</span></a>
		<a href='#' onclick='javascript:edit2Bagian($i);'><span id='simpan[$i]' style='display:none'>Simpan</span></a>
		/ <a href='#' onclick='javascript:hapusBagian($idBagian);'>Hapus</a> </td>";
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
