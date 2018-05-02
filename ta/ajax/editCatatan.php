<? session_start();
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$idCatt = $_POST[idCatt];
  $sql=mysql_query("SELECT *
FROM tgsakhir.catatan c WHERE c.id_user=$masterAmbilSemua[id_user] and c.id_catt=$idCatt");
	$fetchArray = mysql_fetch_array($sql);
	
?>

  <table border='0' align='center'>
  <tr>
  <td>Topik</td><td>:</td><td><input type="text" size="47" id="txtTopik2" value="<? echo "$fetchArray[topik]"; ?>"></td>
  		</tr>
        <tr>
  		<td>Isi</td><td>:</td><td><textarea  id="txtCatt2" rows="15" cols="80" style="width: 80%"><? echo "$fetchArray[isi]"; ?></textarea></td>
  </tr>
  
  </table>
  <div align="center"><span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                                        <? echo "
                                            			<a class=\"art-button\" href=\"#\" onclick=\"javascript:edit2Catt($fetchArray[id_catt]);\">Simpan</a>"; ?>
                                            		</span></div>
    <div align="center"><span id="tampilHasil"></span></div>                                                
  