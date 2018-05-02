<div class="art-Post">
        <div class="art-Post-tl"></div>
        <div class="art-Post-tr"></div>
        <div class="art-Post-bl"></div>
        <div class="art-Post-br"></div>
        <div class="art-Post-tc"></div>
        <div class="art-Post-bc"></div>
        <div class="art-Post-cl"></div>
        <div class="art-Post-cr"></div>
        <div class="art-Post-cc"></div>
        <div class="art-Post-body">
    <div class="art-Post-inner">


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
  
<span id="tampilEvent"><? include "content/tampilEvent.php"; ?></span>
<!--span id="tampilIsiForum"></span>
<span id="tampilIsiDiskusi"></span>
<span id="tampilTextArea"></span-->
</span>
    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    