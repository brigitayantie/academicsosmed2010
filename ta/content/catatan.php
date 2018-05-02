<? session_start();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
   require ("../lib/sambungDatabase.php");
  
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

?>
<span id="cattBaru">
  <table border='0' align='center'>
  <tr>
  <td>Topik</td><td>:</td><td><input type="text" size="47"id="txtTopik"></td>
  		</tr>
        <tr>
  		<td>Isi</td><td>:</td><td><textarea  id="txtCatt" rows="15" cols="80" style="width: 80%"></textarea></td>
  </tr>
  
  </table>
  <div align="center"><span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:simpanCatt();">Simpan</a>
                                            		</span></div>
    <div align="center"><span id="tampilHasil"></span></div>                                                
  </span>
  
