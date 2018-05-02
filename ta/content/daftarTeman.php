<?  require ("lib/sambungDatabase.php");
  $tampung = $_SESSION[masterAmbilSemua];
   if(($_GET[id]!="")&&($_GET[id]!="$tampung[id_user]")) 
{
    $status="lain";
	include "simpanSessionTeman.php";
    $tampung = $masterAmbilTeman;
}
?>
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
                    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<!--div align="right"><a href='javascript:bukaPesan();'>Tambah Pesan</a></div-->
<!--div style="width: 300; height: 150px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888"-->

<span id="tampilDaftarTeman">
<table width="100%" border="0">
           <?
   
   

$sql=mysql_query("SELECT u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = mhs.NRP
WHERE t.id_subyek = '$tampung[id_user]'
AND t.status= 'terima'
UNION
SELECT u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = dsn.NPK
WHERE t.id_subyek = '$tampung[id_user]'
AND t.status= 'terima'
UNION SELECT  u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =mhs.NRP
WHERE t.id_obyek = '$tampung[id_user]'
AND t.status = 'terima'
UNION SELECT  u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =dsn.NPK
WHERE t.id_obyek = '$tampung[id_user]'
AND t.status = 'terima'");

					 $jumRow = mysql_num_rows($sql);
?><h2 class="auiList">Teman dari <?=$tampung[Nama]?></h2><?
if($jumRow==0) echo "$tampung[Nama] belum mendapat teman";
else
{
            $a=1;
            $b=1;
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
					
					?>
                    <ul   class="uiList pbm">
    <li id="u651566_1" class="uiListItem uiListLight uiListVerticalItemBorder objectListItem <?php echo ($a == 1 ? "first" : ""); $a++; ?>">
        <div class="UIImageBlock clearfix">
            <a tabindex="-1" href="" class="UIImageBlock_Image UIImageBlock_SMALL_Image">
            <? if($cariSemua[foto]=="") $cariSemua[foto]="images/01.png";?>
                <img src="thumb1.php?img=<?=$cariSemua[foto]?>&lebar=50" class="img">
            </a>
            <div id="u651566_1_aux" class="auxiliary UIImageBlock_Ext" style="padding-top:7px">
            <? 
            $sql2 = mysql_query("SELECT * FROM tgsakhir.teman t WHERE t.id_subyek='$masterAmbilSemua[id_user]' AND t.id_obyek='$cariSemua[id_user]' UNION SELECT * FROM tgsakhir.teman t WHERE t.id_obyek='$masterAmbilSemua[id_user]' AND t.id_subyek='$cariSemua[id_user]'");
            
            $fetchRequest = mysql_fetch_array($sql2);
            if ($cariSemua[id_user]!=$masterAmbilSemua[id_user])
            {
            if((mysql_num_rows($sql2)==0)||$fetchRequest[status]=="tolak") 
            {echo "<span id='r_$b'><a href='javascript:prosesTeman($cariSemua[id_user],\"request-$b\");'>Tambahkan sebagai teman</a></span>";$b++;}
            else if($fetchRequest[status]=="")
            echo "Sedang menunggu permintaan teman";
            }
            ?>
                                                   </div>
            <div class="UIImageBlock_Content UIImageBlock_SMALL_Content" id="u651566_1_status">
                <div class="uiTextTitle"><a href="profile.php?id=<?=$cariSemua[id_user]?>" class="auiList"><?=$cariSemua[nama]?></a></div>
            </div>
        </div>
    </li>
</ul>
                    <?
					}
}
?>
</table>
</span>




<!--/div-->      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    