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

<span id="tampilPesan">                    
<!--div align="right"><a href='javascript:bukaPesan();'>Tambah Pesan</a></div-->
<!--div style="width: 300; height: 150px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888"-->

<!--table width="100%" border="0">
<?
$queryPesan=mysql_query("SELECT p.*,u.id_user,u.nama,u.foto FROM pesan  p INNER JOIN user  u ON p.id_penerima=u.id_user WHERE p.id_penerima='$masterAmbilSemua[id_user]'");


while($row=mysql_fetch_array($queryPesan))
{	
	$queryPengirim=mysql_query("SELECT u.id_user,mhs.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE u.id_user='$row[id_pengirim]' UNION SELECT u.id_user,dsn.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE u.id_user='$row[id_pengirim]'");
	$pengirim = mysql_fetch_array($queryPengirim);
	echo "<tr>";
	echo "<td width='10'><img src=\"thumb1.php?img=$pengirim[foto]&lebar=30\" /><br /></td>";
	echo "<td width='180'><a href='profile.php?id=$pengirim[id_user]'>$pengirim[nama]</a><br/>$row[timestamp]</td>";
	
	echo "<td ><a href='#detail=$row[id_pesan]' onclick='javascript:detailPesan($row[id_pesan]);'>$row[subyekPesan]</a>";
	
	echo "<br />";
	echo "$row[isi]</td>";
	echo "</tr>";
	
	


}
?>
</table-->

<div class="tobbar">                   
    <div class="tobbar-contents">
        <div class="tobbar-item rfloat">
            <a class="edit-link" href="kirimPesan.php" id="edit">
                <span>Kirim Pesan</span>
            </a>
            <a style="display: none;" id="simpan" href="javascript:edit2ProfilUser();" class="edit-link"><span>Simpan</span></a>
            
        </div>
        <div class="cleared"></div>
    </div>
</div>
<div class="pesan_wrapper">
    <div>
    
    <?php
        $queryPesan=mysql_query("SELECT p.*,u.id_user,u.nama,u.foto FROM pesan  p INNER JOIN user  u ON p.id_penerima=u.id_user WHERE p.id_penerima='$masterAmbilSemua[id_user]'");
        $i=1;
        while($row=mysql_fetch_array($queryPesan)) {
        $queryPengirim=mysql_query("SELECT u.id_user,mhs.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE u.id_user='$row[id_pengirim]' UNION SELECT u.id_user,dsn.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE u.id_user='$row[id_pengirim]'");
	$pengirim = mysql_fetch_array($queryPengirim);
    $query = mysql_query("Select MID('$row[isi]', 1, 50)");
					$fetchQuery=mysql_fetch_array($query);
					
    ?>
        <div id="pesan_<?=$row[id_pesan]?>">
            <div  class="pesan_row <?php echo ($i == 1 ? "first" : ""); $i++; ?>">
                <table cellpadding="0">
                    <tr>
                        <td class="foto">
                            <div class="pesan_foto">
                                <a href='profile.php?id=<?=$pengirim[id_user]?>'>
                                    <img src="thumb1.php?img=<?=$pengirim[foto]?>&lebar=50" />
                                </a>
                            </div>
                        </td>
                        <td class="pengirim">
                            <div class="line">
                                <a href='profile.php?id=<?=$pengirim[id_user]?>'><?=$pengirim[nama]?></a>
                            </div>
                            <div class="date tagline">
                                <?=$row[timestamp]?>
                            </div>
                        </td>
                        <td class="pesan_isi">
                            <a class="line" href='#detail=<?=$row[id_pesan]?>' onclick='javascript:detailPesan(<?=$row[id_pesan]?>);'><?=$row[subyekPesan]?></a>
                            <div class="tagline">
                                <?=$fetchQuery[0]?>...
                            </div>
                        </td>
                        <td>
                            <a class="delete_button" href="javascript:hapusPesan(<?=$row[id_pesan]?>);">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<?
/*
?>


<? while($row=mysql_fetch_array($queryPesan)) 
{
       $queryPengirim=mysql_query("SELECT u.id_user,mhs.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=u.id_user WHERE u.id_user='$row[id_pengirim]' UNION SELECT u.id_user,dsn.Nama as nama,u.foto FROM tgsakhir.user  u INNER JOIN ubaya.karyawan dsn ON dsn.NPK=u.id_user WHERE u.id_user='$row[id_pengirim]'");
	$pengirim = mysql_fetch_array($queryPengirim);

?>
<div><div class="GBThreadRow" bindpoint="root">
  <table cellpadding="0" id="1431898371838" bindpoint="thread_row" class=" unread">
    <tbody><tr>
      <td class="badge_column">
        <a onselectstart="return false;" listen="click: toggleUnread" bindpoint="badge" class="badge" href=""></a>
      </td>
      <td onselectstart="return false;" class="checkbox">
        <label bindpoint="selectorLabel">
          <input type="checkbox" value="1431898371838" listen="click: toggleSelect" bindpoint="selector">
        </label>
      </td>
      <td class="icon">
        <div class="Thread_Icon">
          <a tabindex="-1" bindpoint="iconAnchor" href="http://www.facebook.com/group.php?gid=226025700084">
            <img bindpoint="icon" class="UIProfileImage UIProfileImage_LARGE" src="http://profile.ak.fbcdn.net/object3/957/105/q226025700084_144.jpg" alt="KOmunitas Mahasiswa memulai &amp; Mengembangkan BISnis ( KOMmMBIS )">
          </a>
        </div>
      </td>
      <td listen="click: readThread" class="envelope clickable">
        <div class="authors line" bindpoint="authors"><a href="http://www.facebook.com/group.php?gid=226025700084" title="KOmunitas Mahasiswa memulai &amp; Mengembangkan BISnis ( KOMmMBIS )"><? echo "$pengirim[nama]";?></a></div>
        <div class="date tagline" bindpoint="date"><? echo "$row[timestamp]";?></div>
      </td>
      <td listen="click: readThread" class="thread_detail clickable">
        <a class="subject line" bindpoint="subject" href="/?page=1&amp;sk=messages&amp;tid=1431898371838" title="B A D MONDAY ? ? ?"><? echo "$row[subyekPesan]"; ?></a>
        <div class="preview tagline" bindpoint="preview"><? echo "$row[isi]";?></div>
      </td>
      <td listen="click: readThread" class="clickable">
        <a listen="click: deleteMessage" bindpoint="deleteButton" class="delete_button UIObjectListing_RemoveLink" href="">Delete</a>
      </td>
    </tr>
  </tbody></table>
</div></div>

<?
}
*/
?>
</span>

<span id="kirimPesan"></span>

<span id="detailPesan"></span>

<!--/div-->      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>