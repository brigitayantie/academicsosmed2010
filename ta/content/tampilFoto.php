<script src="script/foto.js" type="text/javascript"></script>
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
$counter = 0;
if($_GET[status]=="")
{
$idAlbum=$_GET["idAlbum"];

$queryFoto=mysql_query("SELECT * FROM tgsakhir.foto ft WHERE ft.id_album='$idAlbum' ORDER BY ft.id_foto ASC");

$queryAlbum = mysql_query("SELECT * FROM tgsakhir.album a WHERE a.id_album='$idAlbum'");
$fetchAlbum = mysql_fetch_array($queryAlbum);
$jumFoto = mysql_num_rows($queryFoto);
}
else
{
$queryFoto=mysql_query("SELECT DISTINCT * FROM tgsakhir.userpnyfoto uf INNER JOIN tgsakhir.foto ft ON ft.id_foto=uf.id_foto WHERE uf.id_user='$_GET[id]' ORDER BY ft.id_foto ASC");


}
if($jumFoto==0&&($masterAmbilSemua[id_user]==$fetchAlbum[id_user])) 
{
    echo "Anda belum mengupload foto pada album $fetchAlbum[subyekAlbum], silakan upload dahulu. Atau <a href='javascript:hapusAlbum($idAlbum);'>hapus </a> album ini";
    
	   ?>

<h2><? echo"$fetchAlbum[subyekAlbum]";?></h2> 
<form method="post" enctype="multipart/form-data" action="uploadProses.php">
<? echo "<input type=\"hidden\" value=\"$idAlbum\" name=\"idAlbum\" >"; ?> 
<table>
<tr>
<td>Foto 1 :</td><td><input type="file" id="file0" name="file0" /></td>
</tr>
<tr>
<td>Foto 2 :</td><td><input type="file" id="file1" name="file1" /></td>
</tr>
<tr>
<td>Foto 3 :</td><td><input type="file" id="file2" name="file2" /></td>
</tr>
<tr>
<td>Foto 4 :</td><td><input type="file" id="file3" name="file3" /></td>
</tr>
<tr>
<td>Foto 5 :</td><td><input type="file" id="file4" name="file4" /></td>
</tr>
<tr><td colspan="2"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                                        <input type="submit" class="art-button" value="Simpan Foto"/>
                                            		</span>
                                            	</p></td></tr>
</table>                   
</form>      <?

}
else
{

 if(($_GET[id]=="")||($_GET[id]=="$masterAmbilSemua[id_user]"))   { ?>
<div class="summary"><h4 class='fb'><? echo "$jumFoto";?> photos<span class="pipe">|</span><a class="fb" href="editFoto.php?id=<? echo "$idAlbum"; ?>">Edit Foto</a><span class="pipe">|</span><a class="fb" href="upload.php?id=<? echo "$idAlbum"; ?>">Tambah Foto</a><span class="pipe">|</span><a class="fb" href='javascript:hapusAlbum(<?=$idAlbum?>);'>Hapus Album</a></h4></div>
<? } ?>

<div id="album_container">
<table cellspacing="0" cellpadding="0" class="UIPhotoGrid_Table">
<?
while($row=mysql_fetch_array($queryFoto))
{	
	$counter++;
	if($counter==1) 	echo "<tr>";
	$gambar = "images/foto/$row[id_foto].$row[jenisFoto]";
  

?>
    
            <td class="UIPhotoGrid_TableCell">
                <? if($_GET[status]=="profil") { ?>
                <a title="<? echo "$row[subyekFoto]"; ?>" href="<? echo "tampilDetailFoto2.php?idFoto=$row[id_foto]&id=$_GET[id]"; ?>" class="UIPhotoGrid_PhotoLink clearfix">
                <? } else { ?>
                <a title="<? echo "$row[subyekFoto]"; ?>" href="<? echo "tampilDetailFoto2.php?idFoto=$row[id_foto]&idAlbum=$idAlbum"; ?>" class="UIPhotoGrid_PhotoLink clearfix">
                <? } ?>
                <img onload="this.fb_loaded = true;" src="<? echo "thumb1.php?img=$gambar&lebar=133"; ?>" class="UIPhotoGrid_Image img">
                </a>
            </td>
<? 
    if($counter==3) 
	{
		echo "</tr>";
		$counter=0;
	}
    
  } 
 ?>
    
</table>
</div>
 <? } ?>
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    