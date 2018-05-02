<? session_start();

include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
/*
$sql =mysql_query(" 
SELECT DISTINCT tabel. *
FROM (

SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_obyek
WHERE t.id_subyek = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_subyek
WHERE t.id_obyek = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT isi. * , u.nama, u.id_user, u.foto
FROM isishoutout isi
INNER JOIN tgsakhir.shoutout s ON isi.id_shoutout = s.id_shoutout
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
WHERE s.id_user = '88888'
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");
*/
/*
$sql =mysql_query(" 
SELECT DISTINCT tabel. *
FROM (

SELECT s.* , u.nama,  u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s.* , u.nama,  u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN tgsakhir.teman t ON u.id_user = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s.* , u.nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]'
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");
*/


$sql = mysql_query(
"SELECT DISTINCT tabel. *
FROM (
SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
INNER JOIN tgsakhir.teman t ON mhs.NRP = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]' AND t.status = 'terima'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
INNER JOIN tgsakhir.teman t ON dsn.NPK = t.id_obyek
WHERE t.id_subyek = '$masterAmbilSemua[id_user]' AND t.status = 'terima'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
INNER JOIN tgsakhir.teman t ON mhs.NRP = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]' AND t.status = 'terima'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON s.id_user = u.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
INNER JOIN tgsakhir.teman t ON dsn.NPK = t.id_subyek
WHERE t.id_obyek = '$masterAmbilSemua[id_user]' AND t.status = 'terima'
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , mhs.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP = u.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]' 
AND s.id_jenisshoutout
IN (
'1', '2'
)
UNION SELECT s. * , dsn.Nama as nama, u.foto
FROM tgsakhir.shoutout s
INNER JOIN tgsakhir.user u ON u.id_user = s.id_user
INNER JOIN ubaya.karyawan dsn ON dsn.NPK = u.id_user
WHERE s.id_user = '$masterAmbilSemua[id_user]' 
AND s.id_jenisshoutout
IN (
'1', '2'
)
)tabel
ORDER BY tabel.id_shoutout DESC");

?>


<ul class="wall" id="isiShoutOut">
<?
$jumRow = mysql_num_rows($sql);
for($i=0;$i<$jumRow;$i++)
{

$fetchArray = mysql_fetch_array($sql);
$query = mysql_query("SELECT DISTINCT tabel. *
FROM (SELECT u.id_user,mhs.Nama as nama,ks.isi,ks.timestamp,u.foto,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' 
	UNION
	SELECT u.id_user,dsn.Nama as nama,ks.isi,ks.timestamp,u.foto,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' ) tabel ORDER BY tabel.timestamp");
	//$fetchArray2 = mysql_fetch_array($query);
    if($fetchArray[id_jenisshoutout]==2) 
    {
     $sql2 = mysql_query("SELECT tabel.* FROM
                         (SELECT mhs.Nama as Nama,mhs.NRP as id FROM tgsakhir.pengirimwall pw INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=pw.id_pengirim
                         WHERE pw.id_shoutout=$fetchArray[id_shoutout]
                         UNION
                         SELECT dsn.Nama as Nama,dsn.NPK as id FROM tgsakhir.pengirimwall pw INNER JOIN ubaya.karyawan dsn ON dsn.NPK=pw.id_pengirim
                         WHERE pw.id_shoutout=$fetchArray[id_shoutout]) tabel");
                         
     $fetchArrayPengirim = mysql_fetch_array($sql2);
     
    }
?>
<? echo "<li id=shout_$fetchArray[id_shoutout]>"; ?>
                        	<div>
                            	<a href="#" class="post-pic"><? if($fetchArray[id_jenisshoutout]==2) $fetchArray[foto] = $fetchArrayPengirim[foto]; ?>
                                	<? if($fetchArray[foto]=="") $fetchArray[foto]="images/01.png"; ?>
                                	<img src="<? echo "thumb1.php?img=$fetchArray[foto]&lebar=50"; ?>" />
                                </a>
                                <div class="post" >
                                	<h6><? if($fetchArray[id_jenisshoutout]==2) {?>
                                        <? echo "<a href='profile.php?id=$fetchArrayPengirim[id]'>$fetchArrayPengirim[Nama]</a> -> <a href='profile.php?id=$fetchArray[id_user]'>$fetchArray[nama]</a>";?>
                                        <? } else { ?>
                                    	<a href="profile.php?id=<?=$fetchArray[id_user]?>"><? echo "$fetchArray[nama]"; ?></a>
                                        <? } ?>
                                       <? echo "$fetchArray[isishoutout]"; 
                                      if(($fetchArray[id_jenisshoutout]==1)&&($fetchArray[id_user]==$masterAmbilSemua[id_user])||($fetchArray[id_jenisshoutout]==2)&&($fetchArrayPengirim[id]==$masterAmbilSemua[id_user]))
	echo "<a href='javascript:hapusKomentar($fetchArray[id_shoutout]);'>&nbsp;&nbsp;x</a>";?>
                                    </h6>
                                    <div>
                                    	<? echo "<div class='comment-box'>"; ?>
                                        	<? echo "<div id='kom_$fetchArray[id_shoutout]'>"; ?>
                                            <? while($ambilData=mysql_fetch_array($query)) { 
											
                                            	echo "<div class='comment-feed' id='k_$ambilData[id_ks]'>"; ?>
                                                	<a href="#"  class="comment-pic">
                                                   <? 
                                                    if($ambilData[foto]=="") $ambilData[foto]="images/01.png"; ?>
                                	<img src="<? echo "thumb1.php?img=$ambilData[foto]&lebar=50"; ?>" />
                                                    </a>
                                                    <div class="post">
                                                    	<div class="comment-text">
                                                        	<a href="profile.php?id=<?=$ambilData[id_user]?>"><? echo "$ambilData[nama]"; ?> </a>
                                                            <? echo "$ambilData[isi]"; if($ambilData[id_user]==$masterAmbilSemua[id_user])
		echo "<a href='javascript:hapusKomentar2($ambilData[id_ks]);'>&nbsp;&nbsp;x</a>";?>
                                                        </div>
                                                    </div>
                                                </div>
                                             <? } ?>   
                                                
                                            </div>
                                            <div class="comment-actions">
                                            	<div class="comment-feed">
                                                	<label class="comment-add-button">
                                                    	<span class="art-button-wrapper"> 
                                                            <span class="l"> </span> 
                                                            <span class="r"> </span> 
                                                            <a class="art-button" href='javascript:halKomentar(<? echo "$fetchArray[id_shoutout]"; ?>)'>Beri Komentar</a> 
                                                        </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
<? } ?>
                        </ul>                                             
                    
