
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
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
       <? 
       $idForum= $_GET["idForum"];
	   /*
	   $sqlAmbilAlbum = mysql_query("SELECT * FROM tgsakhir.album as alb WHERE alb.id_album='".$_GET["id"]. "'");
	   $fetchAlbum = mysql_fetch_array($sqlAmbilAlbum);
	   */
	   ?>

<!--h2><? echo"$fetchAlbum[subyekAlbum]";?></h2--> 
<form method="post" enctype="multipart/form-data" action="uploadProsesDiskusi.php">
<? echo "<input type=\"hidden\" value=\"$idForum\" name=\"idForum\" >"; ?> 
<table>
<tr><td colspan="3"><textarea name='komentar' id='komentar'></textarea></td></tr>
<tr>
<td>Foto 1 :</td><td><input type="file" id="file0" name="file0" /></td><td>Ket&nbsp;<input type="text" id="txt0" name="text0" /></td>
</tr>
<tr>
<td>Foto 2 :</td><td><input type="file" id="file1" name="file1" /></td><td>Ket&nbsp;<input type="text" id="txt1" name="text1" /></td>
</tr>
<tr>
<td>Foto 3 :</td><td><input type="file" id="file2" name="file2" /></td><td>Ket&nbsp;<input type="text" id="txt2" name="text2" /></td>
</tr>
<tr>
<td>Foto 4 :</td><td><input type="file" id="file3" name="file3" /></td><td>Ket&nbsp;<input type="text" id="txt3" name="text3" /></td>
</tr>
<tr>
<td>Foto 5 :</td><td><input type="file" id="file4" name="file4" /></td><td>Ket&nbsp;<input type="text" id="txt4" name="text4" /></td>
</tr>
<tr><td colspan="2"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                                        <input type="submit" class="art-button" value="Upload File"/>
                                            		</span>
                                            	</p></td></tr>
</table>                   
</form>                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    