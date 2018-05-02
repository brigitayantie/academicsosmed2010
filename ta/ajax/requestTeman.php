<? session_start();
   require ("../lib/sambungDatabase.php");
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$teman = $_POST[teman];

$sql = mysql_query("INSERT INTO tgsakhir.teman(id_subyek,id_obyek) VALUES('$masterAmbilSemua[id_user]','$teman')");
echo "Permintaan sudah ditambahkan";
   
     //$sql=mysql_query("SELECT DISTINCT u.id_user,mhs.Nama as nama FROM tgsakhir.teman t INNER JOIN tgsakhir.user u ON t.id_subyek=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE t.id_obyek='$masterAmbilSemua[id_user]' AND t.status='' UNION SELECT DISTINCT u.id_user,dsn.Nama as nama FROM tgsakhir.teman t INNER JOIN tgsakhir.user u ON t.id_subyek=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE t.id_obyek='$masterAmbilSemua[id_user]' AND t.status=''");
     //$jumRow = mysql_num_rows($sql);
/*

?>
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
*/
?>
