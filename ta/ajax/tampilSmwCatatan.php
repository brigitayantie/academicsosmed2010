<? session_start();
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$idCatt = $_POST[idCatt];

  $sql=mysql_query("SELECT *
FROM tgsakhir.catatan c WHERE c.id_catt=$idCatt");

  
	$fetchArray = mysql_fetch_array($sql);
  if($fetchArray[id_user]!=$masterAmbilSemua[id_user])	$status="lain";
?>

  <table border='0' align='center'>
  
  
   <tr>
  <td> <div class='judul'><? echo "$fetchArray[topik]"; ?></div></td>
  		</tr>
        <?
  echo "<tr><td>";
					$tanggal = new DateTime($cariSemua[tanggal]);
					$tanggal2 =   $tanggal->format("j-F-Y H:i:s");
					if($status=="lain")
					echo  "Ditulis pada $tanggal2";
					else
					echo  "Ditulis pada $tanggal2 <a href='javascript:editCatt($fetchArray[id_catt])'>Edit</a> | <a href='javascript:hapusCatt($fetchArray[id_catt])'>Hapus</a>";
					//echo "$tanggal<br />";
					echo "</td></tr>";
					?>
        <tr>
  		<td><? echo "$fetchArray[isi]"; ?></td>
  </tr>
  
  </table>
  