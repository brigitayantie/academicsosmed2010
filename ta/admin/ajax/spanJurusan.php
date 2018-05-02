<? require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



$id_fakultas  = $_POST["idFakultas"];
$id_jurusan  = $_POST["idJurusan"];
$index= $_POST["idx"];
//echo "a-b";

$baris = 2;
$query = "SELECT * FROM jurusan where id_fakultas='$id_fakultas' and id_jurusan='$id_jurusan'";
$rows = $db->fetch_all_array($query);
$idJur = $rows[0][id_jurusan];
$namaJur = $rows[0][nama_jurusan];
echo "<span id='txtIdJur[$index]'><input type='text' value='$idJur' id='spanIdJur' /></span>-<span id='txtNamaJur[$index]'><input id='spanNamaJur' type='text' value='$namaJur' /></span>-<span id='edit[$index]'><a href='#' onclick='javascript: edit2Jurusan($id_jurusan);'>Simpan</a></span>";
echo "<input type='hidden' value='$id_fakultas' id='idFakultas' /><input type='hidden' value='$index' id='idxTabel' />";

/*
//$rows itu aray $rows[0]...
	for($i=0;$i<count($rows);$i++)
	{
		echo "<tr>";
		$idJurusan = $rows[$i][id_jurusan];
		$namaJurusan=$rows[$i][nama_jurusan];
		echo "<td><span id='txtIdJur'>$idJurusan</span></td><td><span id='txtIdJur'>$namaJurusan</span></td><td><a href='#' onclick='javascript:editJurusan($idJurusan,$id_fakultas);'>Edit</a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "</tr>";
	}
*/
?>
