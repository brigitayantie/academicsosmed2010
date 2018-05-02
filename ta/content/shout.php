     <?
                    if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
	include "simpanSessionTeman.php";
	$tampung = $masterAmbilTeman;
} else {
		$tampung = $masterAmbilSemua;
				} 
                
                $sql = mysql_query("SELECT DISTINCT tabel. *
FROM (SELECT u.id_user,u.foto,mhs.Nama as nama,s.isishoutout,s.timestamp,s.id_shoutout FROM tgsakhir.shoutout s INNER JOIN tgsakhir.user  u ON s.id_user=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE s.id_user='$tampung[id_user]' AND s.id_jenisshoutout='1'
	UNION
	SELECT u.id_user,u.foto,dsn.Nama,s.isishoutout,s.timestamp,s.id_shoutout FROM tgsakhir.shoutout s INNER JOIN tgsakhir.user u ON s.id_user=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE s.id_user='$tampung[id_user]' AND s.id_jenisshoutout='1'
		UNION
	SELECT u.id_user,u.foto,dsn.Nama,s.isishoutout,s.timestamp,s.id_shoutout FROM tgsakhir.shoutout s INNER JOIN tgsakhir.pengirimwall pw ON pw.id_shoutout=s.id_shoutout INNER JOIN tgsakhir.user u ON pw.id_pengirim=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE s.id_user='$tampung[id_user]' AND s.id_jenisshoutout='2' 
	UNION
	SELECT u.id_user,u.foto,mhs.Nama,s.isishoutout,s.timestamp,s.id_shoutout FROM tgsakhir.shoutout s INNER JOIN tgsakhir.pengirimwall pw ON pw.id_shoutout=s.id_shoutout INNER JOIN tgsakhir.user u ON pw.id_pengirim=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE s.id_user='$tampung[id_user]' AND s.id_jenisshoutout='2' ) tabel ORDER BY tabel.timestamp DESC");
	 

                                                $jumRow = mysql_num_rows($sql);
$cekTeman = mysql_query("SELECT tabel.* FROM 
(SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_subyek='$masterAmbilSemua[id_user]' AND t.id_obyek='$tampung[id_user]' UNION 
SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_obyek='$masterAmbilSemua[id_user]' AND t.id_subyek='$tampung[id_user]') tabel");

                                                ?>  
 
 
 <span id='shoutoutAtasWall'>
                     <? 
				
                    
                     ?> 
                     </span>
                     <span id='waktushoutout'>
                     </span>
                     <input type="hidden" id='startwaktushoutout' value="<? echo $status[timestamp]; ?>" />
                    <br>
                    <? if(mysql_num_rows($cekTeman)==1||$tampung[id_user]==$masterAmbilSemua[id_user]) { ?>
                    <textarea id="txtShoutOutWall" cols="64" rows="2" ></textarea>
                    <div  align="right" style="width:100%;">
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
  <?                                                        if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{ ?>  <a class="art-button" href="javascript:tambahShoutOutWall(<? echo $tampung[id_user]; ?>);">Shout It</a> <? } else { ?> <a class="art-button" href="javascript:tambahShoutOutWall('');updateShoutout();">Shout It</a>  <? } ?>
                                            		</span>
                                            	</div>
                    <? } ?>
                    
                                            
                                                
      <?
	  
/*
for($i=0;$i<$jumRow;$i++)
{	$fetchArray = mysql_fetch_array($sql);
	echo "<table id='shout_$fetchArray[id_shoutout]' width='100%'>";
	echo "<tr><td align='center' width='50px'>";
	//echo "-".file_exists('../images/01xx.png');
	//$file='$fetchArray[foto]';
	//if(file_exists($file)) {	echo "<img src='$fetchArray[foto]' />"; }
	//else 	{ echo "<img src='images/02.png' />"; }
	echo "<img src='$fetchArray[foto]' />";
	echo "</td>";
	echo "<td>";
	echo "<a href='profile.php?id=$fetchArray[id_user]'>$fetchArray[nama]</a>";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "$fetchArray[isishoutout]&nbsp;&nbsp;&nbsp;";
	if($fetchArray[id_user]==$masterAmbilSemua[id_user])
	echo "<a href='javascript:hapusKomentar($fetchArray[id_shoutout]);'>x</a>";
	$query = mysql_query("SELECT DISTINCT tabel. *
FROM (SELECT u.id_user,mhs.Nama as nama,ks.isi,ks.timestamp,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' 
	UNION
	SELECT u.id_user,dsn.Nama,ks.isi,ks.timestamp,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' ) tabel ORDER BY tabel.timestamp");
	$fetchArray2 = mysql_fetch_array($query);
	
	echo "<table bgcolor='#6699FF' id='kom_$fetchArray[id_shoutout]'>";
	while($ambilData=mysql_fetch_array($query))
	{
				
		echo "<tr id='k_$ambilData[id_shoutout]'><td><a href='profile.php?id=$ambilData[id_user]'>$ambilData[nama]</a>&nbsp;&nbsp;&nbsp;$ambilData[isi]&nbsp;&nbsp;&nbsp;";
		if($ambilData[id_user]==$masterAmbilSemua[id_user])
		echo "<a href='javascript:hapusKomentar2($ambilData[id_ks]);'>x</a>";
		echo"</td></tr>";
		
	}
	echo "</table>";
	echo "<table><tr><td><a href='javascript:halKomentar($fetchArray[id_shoutout]);'>Komentar</a></td></tr><br /><br /></table>";

	echo "</td></tr>";
	
	echo "</table>";	
	
}
*/

  ?> 
<ul class="wall" id="isiShoutOutWall">
<?

for($i=0;$i<$jumRow;$i++)
{
$fetchArray = mysql_fetch_array($sql);
$query = mysql_query("SELECT tabel. *
FROM (SELECT u.id_user,u.foto,mhs.Nama as nama,ks.isi,ks.timestamp,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' 
	UNION
	SELECT u.id_user,u.foto,dsn.Nama,ks.isi,ks.timestamp,ks.id_ks FROM tgsakhir.komentarshoutout as ks INNER JOIN tgsakhir.user as u ON ks.id_user=u.id_user INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE ks.id_shoutout='$fetchArray[id_shoutout]' ) tabel ORDER BY tabel.timestamp");
	//$fetchArray2 = mysql_fetch_array($query);
?>
<? echo "<li id=shout_$fetchArray[id_shoutout]>"; ?>
                        	<div>
                            	<? echo "<a href='profile.php?id=$fetchArray[id_user]' class='post-pic'>"; ?>
                                	<? if($fetchArray[foto]=="") $fetchArray[foto]="images/01.png"; ?>
                                	<img src="<? echo "thumb1.php?img=$fetchArray[foto]&lebar=50"; ?>" />
                                </a>
                                <div class="post">
                                	<h6>
                                    	<a href="profile.php?id=<?=$fetchArray[id_user]?>"><?=$fetchArray[nama]?></a>
                                       <? echo "$fetchArray[isishoutout]"; if($fetchArray[id_user]==$masterAmbilSemua[id_user])
	echo "<a href='javascript:hapusKomentar($fetchArray[id_shoutout]);'>&nbsp;&nbsp;x</a>";?>
                                    </h6>
                                    <div>
                                    	<? echo "<div class='comment-box'>"; ?>
                                        	<? echo "<div id='kom_$fetchArray[id_shoutout]'>"; ?>
                                            <? while($ambilData=mysql_fetch_array($query)) { 
											
                                            	echo "<div class='comment-feed' id='k_$ambilData[id_ks]'>"; ?>
                                                	<a href="profile.php?id=<?=$ambilData[id_user]?>"  class="comment-pic">
                                                    <? if($ambilData[foto]=="") $ambilData[foto]="images/01.png"; ?>
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
                                                     <? if((mysql_num_rows($cekTeman)==1)||($tampung[id_user]==$masterAmbilSemua[id_user])) { ?>
                                                    	<span class="art-button-wrapper"> 
                                                            <span class="l"> </span> 
                                                            <span class="r"> </span> 
                                                            <a class="art-button" href='javascript:halKomentar(<? echo "$fetchArray[id_shoutout]"; ?>)'>Beri Komentar</a> 
                                                        </span> 
                                                        <? } ?>
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
                                                
                    