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
                    

<div style="width: 300; height: 600px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888">

<table width="100%" border="0" cellpadding="7">
<?

$idAlbum = $_GET["id"];

$queryFoto=mysql_query("SELECT * FROM foto WHERE id_album='$idAlbum'");

$queryNamaAlbum=mysql_query("SELECT subyekAlbum FROM album WHERE id_album='$idAlbum'");
$jumFoto = mysql_num_rows($queryFoto);
$counter=0;
$namaAlbum=mysql_fetch_array($queryNamaAlbum);
echo "<h2>$namaAlbum[0]</h2>";
while($row=mysql_fetch_array($queryFoto))
{	
	echo "<tr>";
	$a="images/foto/" . $row[id_foto] . "." . $row[jenisFoto];
	echo "<td rowspan='2'><img width='100px' height='100px'  src='$a'></td>";
	//echo "<td rowspan='2'><img width='100px' height='100px' src='images/foto/18.jpg'</td>";
	echo "<td width='33%'>Judul</td><td><input  type='text' value='$row[subyekFoto]' id='subyek" . $counter . "'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td width='33%'>Keterangan</td><td><textarea id='ket" . $counter . "'>$row[ketFoto]</textarea></td>";
	echo "</tr>";
	$counter++;
}
?>
<tr><td colspan="2"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<? echo "<a class=\"art-button\" href=\"javascript:simpanKeteranganAlbum($jumFoto,$idAlbum);\">Tambah</a>"; ?>
                                            		</span>
                                            	</p></td></tr>
</table>

</div>      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    