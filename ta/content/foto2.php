<div class="art-Post">
        
        <div class="art-Post-body">
    <div class="art-Post-inner">
            <?
                    if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
	include "simpanSessionTeman.php";
	$tampung = $masterAmbilTeman;
} else {
		$tampung = $masterAmbilSemua;
				} 
              if(($_GET[id]=="")||($_GET[id]=="$masterAmbilSemua[id_user]"))   { ?>  
             <div class="tobbar">
                        	<div class="tobbar-contents">
                            	<div class="tobbar-item rfloat">
                                	<a href="tambahAlbum.php" class="edit-link">
                                    	<span>Tambah Album</span>
                                    </a>
                                </div>
                                <div class="cleared"></div>
                            </div>
                        </div>
                        <? } ?>
<!--div style="width: 300; height: 500px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888"-->

<!--table width="100%" border="0"-->
<?
//$queryAlbum=mysql_query("SELECT a.subyekAlbum,f.id_foto,a.id_album,f.jenisFoto,a.id_user FROM tgsakhir.album as a LEFT JOIN tgsakhir.foto as f ON a.id_fotoCover=f.id_foto WHERE a.id_user='$tampung[id_user]'");
$queryAlbum=mysql_query("SELECT a.subyekAlbum,f.id_foto,a.id_album,f.jenisFoto,a.id_user FROM tgsakhir.album as a LEFT JOIN tgsakhir.foto as f ON a.id_fotoCover=f.id_foto WHERE a.id_user='$tampung[id_user]'");
$counter=0;

$queryAlbumDefault = mysql_query("SELECT DISTINCT * FROM tgsakhir.userpnyfoto uf INNER JOIN tgsakhir.foto f ON uf.id_foto=f.id_foto WHERE uf.id_user='$tampung[id_user]'");

$jumAlbum = mysql_num_rows($queryAlbum);
$jumAlbum2 = $jumAlbum+1;
for($i=0;$i<$jumAlbum2;$i++)
{	
    
	$counter++;
		
    if($i==0)
    {
    $jumFotoAD = mysql_num_rows($queryAlbumDefault);
    ?>
    <div class="album_cell">
    <div style="background-image: url(<? echo "thumb1.php?img=$gambar&lebar=133"; ?>);" id="318348" class="album_thumb">
        <a title="<? echo "$row[subyekAlbum]"; ?>" href="<? echo "tampilFoto.php?status=profil&id=$row[id_user]"; ?>" class="album_link"></a>
        <!--a title="Edit Album" href="/editphoto.php?aid=318348" class="edit_link">&nbsp;</a-->
    </div>
    <a href="<? echo "tampilFoto.php?idAlbum=0&id=$row[id_user]"; ?>" class="album_title"><? echo "Profil"; ?></a>
    <div class="photo_count"><? echo " $jumFotoAD" ;?> photos</div>
</div>
    <?
    }
    else
    {
    $row=mysql_fetch_array($queryAlbum);
	$queryJumFoto = mysql_query("SELECT f.id_foto FROM tgsakhir.foto f WHERE f.id_album=$row[id_album]");
	$fetchJumFoto = mysql_num_rows($queryJumFoto);
    $gambar = "images/foto/$row[id_foto].$row[jenisFoto]";
	?>
	<div class="album_cell">
    <div style="background-image: url(<? echo "thumb1.php?img=$gambar&lebar=133"; ?>);" id="318348" class="album_thumb">
        <a title="<? echo "$row[subyekAlbum]"; ?>" 
        href="<? echo "tampilFoto.php?idAlbum=$row[id_album]&id=$row[id_user]"; ?>" class="album_link"></a>
        <!--a title="Edit Album" href="/editphoto.php?aid=318348" class="edit_link">&nbsp;</a-->
    </div>
    <a href="<? echo "tampilFoto.php?idAlbum=$row[id_album]&id=$row[id_user]"; ?>" class="album_title"><? echo "$row[subyekAlbum]"; ?></a>
    <div class="photo_count"><? echo "$fetchJumFoto" ;?> photos</div>
</div>
	<?
    }
	if($counter==3) 
	{
		$counter=0;
	}
}
?>
<!--/table-->

<!--/div--> 
  
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    