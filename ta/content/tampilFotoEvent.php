<?
$id_event=$_GET[idEvent];
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$queryFoto=mysql_query("SELECT * FROM tgsakhir.fotoEvent fe WHERE fe.id_event='$id_event' ORDER BY fe.id_foto ASC");
?>
                 <div class="art-Post">
                      
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
                                                     <div class="art-PostContent">
                                                     
<div align="right"><a href='javascript:bukaTambahFoto(<? echo "$id_event";?>);'>Tambah Foto</a></div>
                            <div style="width: 300; height: 150px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888">

<table width="100%" border="0">
<?



$counter=0;
while($row=mysql_fetch_array($queryFoto))
{	
	$counter++;
	if($counter==1) 	echo "<tr>";
	
	echo "<td width='33%'><a href='tampilDetailFotoEvent.php?idFoto=$row[id_foto]&idEvent=$id_event'><img width=100px height=100px src='images/foto/$row[id_foto].$row[jenisFoto]'></a></td>";
	
	if($counter==3) 
	{
		echo "</tr>";
		$counter=0;
	}
	
	
}
?>
</table>

</div>      
                   
                    
                            
                            
                            
                            </div>
    
  </span>
  <span id="tampilKomentar"></span>
                            </div>
                            <div class="cleared"></div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                      </div>
            
    