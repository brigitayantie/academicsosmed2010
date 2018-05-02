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
$idEvent=$_GET["idEvent"];
$idFoto = $_GET["idFoto"];
$queryFoto=mysql_query("SELECT * FROM tgsakhir.fotoEvent as fe WHERE fe.id_foto='$idFoto'");
$queryAlbum=mysql_query("SELECT fe.id_foto,fe.jenisFoto FROM tgsakhir.fotoEvent fe WHERE fe.id_event='$idEvent' ORDER BY fe.id_foto ASC");
$jumRow = mysql_num_rows($queryAlbum);

for($i=0;$i<$jumRow;$i++)
{
	$fetchArray = mysql_fetch_array($queryAlbum);
	$foto[$i]=$fetchArray[id_foto];
	$jumRowMin = $jumRow-1;
	if(($foto[$i]==$idFoto)&&($i==$jumRowMin)) $tampung=0;
	else if($foto[$i]==$idFoto) $tampung=$i;
	
	
}

$row = mysql_fetch_array($queryFoto);
$b = $tampung+1;
$tampilFoto = $foto[$b];
echo "<tr><td align='center'><a href='tampilDetailFotoEvent.php?idFoto=$tampilFoto&idEvent=$idEvent'><img width=300px height=300px src='images/foto/$row[id_foto].$row[jenisFoto]'></a><br />$row[ketFoto]</td></tr>";

?>
</table>

   
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    