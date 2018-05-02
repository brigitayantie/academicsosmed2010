<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$MKU[id_matkul] = $_POST[idMatkul];
$MKU[nama_matkul] = $_POST[namaMatkul];
$MKU[ket] = "MKU";
$db->query_insert("matkul", $MKU); //user-> nm tabel, $mhs -> nama field
//hasil xmlHttpResponseText
$baris = 2;
$query = "SELECT * FROM matkul where ket='MKU'";
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
		$idJurusan = $rows[$i][id_matkul];
		$namaJurusan=$rows[$i][nama_matkul];
		
		
		//echo "<td><span id='txtIdJur[$i]'>$idJurusan</span></td><td><span id='txtNamaJur[$i]'>$namaJurusan</span></td><td><a href='#' onclick='javascript:editJurusan($idJurusan,$id_fakultas,$i);'><span id='edit[$i]'>Edit</span></a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "<td>
		<span id='spanIdJur[$i]' style='display:inline;'>$idJurusan</span>
		<input type='text' value='$idJurusan' id='txtIdJur[$i]' style='display:none;'>
		</td>
		<td><span id='spanNamaJur[$i]'>$namaJurusan</span>
		<input type='text' value='$namaJurusan' id='txtNamaJur[$i]' style='display:none;'>
		</td>
		<td><a href='#' onclick='javascript:editJurusan($i);'><span id='edit[$i]'>Edit</span></a>
		<a href='#' onclick='javascript:edit2Jurusan($i);'><span id='simpan[$i]' style='display:none'>Simpan</span></a>
		/ <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
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
