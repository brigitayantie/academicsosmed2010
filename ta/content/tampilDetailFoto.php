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
                    



<table align='center'  width="100%" border="0">
<?
$idAlbum=$_GET["idAlbum"];
$idFoto = $_GET["idFoto"];
$queryFoto=mysql_query("SELECT * FROM foto WHERE id_foto='$idFoto'");
$queryAlbum=mysql_query("SELECT id_foto,jenisFoto FROM foto WHERE id_album='$idAlbum' ORDER BY id_foto ASC");
$jumRow = mysql_num_rows($queryAlbum);

for($i=0;$i<$jumRow;$i++)
{
	$fetchArray = mysql_fetch_array($queryAlbum);
	$foto[$i]=$fetchArray[id_foto];
	$jumRowMin = $jumRow-1;
	if(($foto[$i]==$idFoto)&&($i==$jumRowMin)) $tampung=-1;
	else if($foto[$i]==$idFoto) $tampung=$i;
	
	
}

$row = mysql_fetch_array($queryFoto);
$b = $tampung+1;
$tampilFoto = $foto[$b];
echo "<tr><td align='center'><a href='tampilDetailFoto2.php?idFoto=$tampilFoto&idAlbum=$idAlbum'><img width=300px height=300px src='images/foto/$row[id_foto].$row[jenisFoto]'></a><br />$row[ketFoto]</td></tr>";

?>
</table>

   
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    