<? require ("lib/sambungDatabase.php");
    $tampung = $_SESSION[masterAmbilSemua];
   if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
    $status="lain";
	include "simpanSessionTeman.php";
    $tampung = $masterAmbilTeman;
}
   
   

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
?>
                   <div class="art-Block">
            <div class="art-Block-body">
              <div class="art-BlockHeader">
                <div class="l"></div>
                <div class="r"></div>
                <div class="art-header-tag-icon">
                  <div class="t">Teman</div>
                </div>
              </div>
              <div class="art-BlockContent">
                <div class="art-BlockContent-tl"></div>
                <div class="art-BlockContent-tr"></div>
                <div class="art-BlockContent-bl"></div>
                <div class="art-BlockContent-br"></div>
                <div class="art-BlockContent-tc"></div>
                <div class="art-BlockContent-bc"></div>
                <div class="art-BlockContent-cl"></div>
                <div class="art-BlockContent-cr"></div>
                <div class="art-BlockContent-cc"></div>
                <div class="art-BlockContent-body profile">
<?                	
                    $jumRow = mysql_num_rows($sql);
$counter=0;
if($jumRow==0) echo "$tampung[Nama] belum mendapat teman";
else
{
                    echo "<table border='0' cellspacing='0'  cellpadding='0' valign='top'>";
					 $jumTampung = $jumRow;
                    if($jumRow>2) $jumTampung = 2;
                   
                    for($i=0;$i<$jumTampung;$i++)
					{
                    $cariSemua=mysql_fetch_array($sql);
					$counter++ ;
                    if($counter==1) 	echo "<tr align='center'>";
                  
					?>
                   <td valign='top'><table border='0' ><tr><td><a href="profile.php?id=<?=$cariSemua[id_user]?>">
                   <?
                    if($cariSemua[foto]=="") $cariSemua[foto]="images/01.png"; ?>
                    <img src="<? echo "thumb1.php?img=$cariSemua[foto]&lebar=35"; ?>" /></a></td>
					<tr><td><a href='profile.php?id=<?=$cariSemua[id_user]?>'><? echo "$cariSemua[nama]"; ?></a>
					</td></tr></table></td>
					<?
                     if($counter==3) 
                        {
                            echo "</tr>";
                            $counter=0;
                        }
					}
}                   echo "</table>";
                    
                    if($jumRow > 2) echo "<div align='right'><a href='daftarteman.php?id=$tampung[id_user]'>Lihat Semua Teman >></a></div>";
?>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>