
<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
echo"
<form>
<input type='hidden' id='tipe' name='tipe' value='MKU' />
</form>
";
echo "Masuk Hapus MKU";

$ket=$_POST["idKet"];
if($ket="MKU")
{
$idMatkul = $_POST["idMatkul"];	
mysql_query("DELETE  FROM matkul where id_matkul=$idMatkul");
$query = "SELECT * FROM matkul where ket=$ket";
}
else
{
$id_fakultas  = $_POST["idFakultas"];
$id_jurusan  = $_POST["idJurusan"];
mysql_query("DELETE  FROM jurusan where id_fakultas=$id_fakultas and id_jurusan=$id_jurusan");
$query = "SELECT * FROM jurusan where id_fakultas='$id_fakultas'";
}

$baris = 2;

//$db->query($hapus);

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
		/*
		echo "<tr>";
		$idJurusan = $rows[$i][id_jurusan];
		$namaJurusan=$rows[$i][nama_jurusan];
		echo "<td>$idJurusan</td><td>$namaJurusan</td><td><a href='#'    onclick='javascript:editJurusan($i);'>Edit</a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "</tr>";
		*/
		
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
