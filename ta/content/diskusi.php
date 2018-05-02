<? session_start();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
   require ("lib/sambungDatabase.php");
  
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

?>
<? //include "content/diskusi.php"; ?>

<span id="topikBaru" style="display:none">
  <table border='0' align='center'>
  <tr>
  <td>Topik</td><td>:</td><td><input type="text" size="47"id="txtTopikForum"></td>
  		</tr>
        <tr>
  		<td>Isi</td><td>:</td><td><textarea  id="txtIsiTopikForum" rows="7" cols="45" style="width: 80%"></textarea></td>
  </tr>
  
  </table>
  <div align="center"><span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:simpanTopikForum();">Simpan</a>
                                            		</span></div>
    
  </span>

<span id="tampilTopikForum"><? include "content/tampilDiskusi.php"; ?></span>
<span id="tampilIsiForum"></span>
<span id="tampilIsiDiskusi"></span>
<span id="tampilTextArea"></span>
</span>