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
                    
<!--div align="right"><a href='javascript:bukaPesan();'>Tambah Pesan</a></div-->
<!--div style="width: 300; height: 150px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888"-->

<!--span id="tampilTeman"-->
<table width="100%" border="1">
           <?
   require ("lib/sambungDatabase.php");
   $masterAmbilSemua = $_SESSION["masterAmbilSemua"];
   
     $sql=mysql_query("SELECT DISTINCT u.foto,u.id_user,mhs.Nama as nama FROM tgsakhir.teman t INNER JOIN tgsakhir.user u ON t.id_subyek=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE t.id_obyek='$masterAmbilSemua[id_user]' AND t.status='' UNION SELECT DISTINCT u.foto,u.id_user,dsn.Nama as nama FROM tgsakhir.teman t INNER JOIN tgsakhir.user u ON t.id_subyek=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE t.id_obyek='$masterAmbilSemua[id_user]' AND t.status=''");
   
    
					 $jumRow = mysql_num_rows($sql);
/*
if($jumRow==0) echo "Anda belum mendapat permintaan teman";
else
{
					for($i=0;$i<$jumRow;$i++)
					{
					//$cariSemua=mysql_fetch_array($sql);
					
					echo "<tr><td>
  					<a href='profile.php?id=$cariSemua[id_user]'>$cariSemua[foto]</a><br />
					</td><td width='400px'>
  					<a href='profile.php?id=$cariSemua[id_user]'>$cariSemua[nama]</a><br />
					</td><td width='30px'><p>
                                            		<span class='art-button-wrapper'>
                                            			<span class='l'> </span>
                                            			<span class='r'> </span>
                                            			<a class='art-button' href='javascript:prosesTeman($cariSemua[id_user],\"terima\");'>Terima</a>
                                            		</span>
                                            	</p></td><td width='30px'><p>
                                            		<span class='art-button-wrapper'>
                                            			<span class='l'> </span>
                                            			<span class='r'> </span>
                                            			<a class='art-button' href='javascript:prosesTeman($cariSemua[id_user],\"tolak\");'>Tolak</a>
                                            		</span>
                                            	</p></td></tr>";
					
					}
}
*/
?>
</table>
<!--/span-->
<h2 class="auiList">Permintaan Teman</h2>
<div id='tampilTeman' class="friendsDashboardRequests">
<?
if($jumRow==0) echo "Anda belum mendapat permintaan teman";
else
{
$a=1;
for($i=0;$i<$jumRow;$i++)
{
$cariSemua=mysql_fetch_array($sql); 
?>				
<ul   class="uiList pbm">
    <li id="u651566_1" class="uiListItem uiListLight uiListVerticalItemBorder objectListItem <?php echo ($a == 1 ? "first" : ""); $a++; ?>">
        <div class="UIImageBlock clearfix">
            <a tabindex="-1" href="http://www.facebook.com/profile.php?id=100000854356951" class="UIImageBlock_Image UIImageBlock_SMALL_Image">
            <? if($cariSemua[foto]=="") $cariSemua[foto]="images/01.png";?>
                <img src="thumb1.php?img=<?=$cariSemua[foto]?>&lebar=50" class="img">
            </a>
            <div id="u651566_1_aux" class="auxiliary UIImageBlock_Ext" style="padding-top:7px"><span class='art-button-wrapper'>
                                            			<span class='l'> </span>
                                            			<span class='r'> </span>
                                            			<a class='art-button' href='javascript:prosesTeman(<?=$cariSemua[id_user]?>,"terima");'>Terima</a>
                                            		</span>
                                                    <span class='art-button-wrapper'>
                                            			<span class='l'> </span>
                                            			<span class='r'> </span>
                                            			<a class='art-button' href='javascript:prosesTeman(<?=$cariSemua[id_user]?>,"tolak");'>Tolak</a>
                                            		</span></div>
            <div class="UIImageBlock_Content UIImageBlock_SMALL_Content" id="u651566_1_status">
                <div class="uiTextTitle"><a href="" class="auiList"><?=$cariSemua[nama]?></a></div>
            </div>
        </div>
    </li>
</ul>
<?
}
}
?>
</div>


<!--/div-->      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    