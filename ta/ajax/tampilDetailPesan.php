
                       <?
   require ("../lib/sambungDatabase.php");
   $idPesan = $_POST["idPesan"];
   
   
     $sql2=mysql_query("SELECT u.id_user,p.*,mhs.NRP as id,mhs.Nama as nama,u.foto FROM tgsakhir.pesan as p INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=p.id_pengirim INNER JOIN tgsakhir.user u ON mhs.NRP=u.id_user WHERE p.id_pesan=$idPesan UNION SELECT u.id_user,p.*,dsn.NPK as id,dsn.Nama as nama ,u.foto FROM tgsakhir.pesan as p INNER JOIN ubaya.karyawan dsn ON dsn.NPK=p.id_pengirim INNER JOIN tgsakhir.user u ON dsn.NPK=u.id_user WHERE p.id_pesan=$idPesan");
    
                    $jumRow2 = mysql_num_rows($sql2);
                   $cariTopik=mysql_fetch_array($sql2);
     /*  
     $sql3=mysql_query("SELECT p.*,mhs.NRP as id,mhs.Nama as nama FROM tgsakhir.pesanbalas as p INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]' UNION SELECT p.*,dsn.NPK as id,dsn.Nama as nama FROM tgsakhir.pesanbalas as p INNER JOIN ubaya.karyawan dsn ON dsn.NPK=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]'");
     */
     $sql3=mysql_query("SELECT p.*,mhs.NRP as id,mhs.Nama as nama FROM tgsakhir.pesan as p INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]' UNION SELECT p.*,dsn.NPK as id,dsn.Nama as nama FROM tgsakhir.pesan as p INNER JOIN ubaya.karyawan dsn ON dsn.NPK=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]'");
     //echo "SELECT p.*,mhs.NRP as id,mhs.Nama as nama FROM tgsakhir.pesanbalas as p INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]' UNION SELECT p.*,dsn.NPK as id,dsn.Nama as nama FROM tgsakhir.pesanbalas as p INNER JOIN ubaya.karyawan dsn ON dsn.NPK=p.id_pengirim WHERE p.id_topik='$cariTopik[id_topik]'";
       /*           
					  echo "<table class='position'>";					
					echo "<tr><td>";
  					echo "<div class='judul'>$cariTopik[subyekPesan]</div><br /><br /><br />";
                    echo "</td></tr>";
                    echo "<tr><td>";
					echo "<a href='profile.php?id=$cariTopik[id]'><div class='judul2'>$cariTopik[nama]</div></a>";
  					echo "$cariTopik[isi]";
					echo "</td></tr>";
                    echo "<span id='pesan2'>";
                     while($fetchSql3=mysql_fetch_array($sql3))
                     {
					
					echo "<tr><td>";
  					echo "<div>$fetchSql3[nama]<br />$fetchSql3[isi]</div><br /><br /><br />";
                    echo "</td></tr>";
					//echo "<span id='tampilTextArea1' style='display:none'>";
					
                    }
                    echo "</span>";
                    echo "<span id='kom'><tr><td><textarea id='kirimPesan2'></textarea></td></tr><tr></span>";
				    echo "</table>";
                    */
            ?>
                       <!--span class="art-button-wrapper"><span class="l"> </span><span class="r"></span><a class="art-button" href="javascript:kirimBP(<? echo "$cariTopik[id]"; ?>,<? echo "$cariTopik[id_pesan]"; ?>);">Kirim</a></span></div></span>
                       </span>
                       
                       </span-->
                       
                      
<h2><?=$cariTopik[subyekPesan]?></h2>
	
<div id='pesan2'>
 <div class="GBThreadMessageRow clearfix" bindpoint="root">
  <div class="GBThreadMessageRow_Image">
    <a href="profile.php?id=<?=$cariTopik[id_user]?>" class="GBThreadMessageRow_Image_Link">
    <? if($cariTopik[foto]=="") $cariTopik[foto]="images/01.png"; ?>
    
      <img src="thumb1.php?img=<?=$cariTopik[foto]?>&lebar=50" class="UIProfileImage UIProfileImage_Large">
    </a>
  </div>

  <div class="GBThreadMessageRow_Main">
    <div class="GBThreadMessageRow_Info">
      <span class="GBThreadMessageRow_AuthorLink_Wrapper" bindpoint="authorLinkWrapper">
        <a href="profile.php?id=<?=$cariTopik[id_user]?>" class="GBThreadMessageRow_AuthorLink"><?=$cariTopik[nama]?></a>
      </span>
      <span class="GBThreadMessageRow_Date">
        <?=$cariTopik[timestamp]?>
      </span>
      <span bindpoint="branchLinkWrapper" class="GBThreadMessageRow_BranchLink"></span>
      <span bindpoint="reportLinkWrapper" class="GBThreadMessageRow_ReportLink"></span>
    </div>
    <div class="GBThreadMessageRow_Body">
      <div class="GBThreadMessageRow_Body_Content">
     
        <?=$cariTopik[isi]?>
      </div>
      <div class="GBThreadMessageRow_ReferrerLink">
        
      </div>
      <div class="GBThreadMessageRow_Body_Attachment">
        
      </div>
    </div>
  </div>
</div>
<? while($fetchSql3=mysql_fetch_array($sql3))
{
?>
<div class="GBThreadMessageRow clearfix" bindpoint="root">
  <div class="GBThreadMessageRow_Image">
    <a href="profile.php?id=<?=$fetchSql3[id]?>" class="GBThreadMessageRow_Image_Link">
        <? if($cariTopik[foto]=="") $cariTopik[foto]="images/01.png"; ?>
    <img src="thumb1.php?img=<?=$cariTopik[foto]?>&lebar=50" class="UIProfileImage UIProfileImage_Large">
    </a>
  </div>

  <div class="GBThreadMessageRow_Main">
    <div class="GBThreadMessageRow_Info">
      <span class="GBThreadMessageRow_AuthorLink_Wrapper" bindpoint="authorLinkWrapper">
        <a href="profile.php?id=<?=$fetchSql3[id]?>" class="GBThreadMessageRow_AuthorLink"><?=$fetchSql3[nama]?></a>
      </span>
      <span class="GBThreadMessageRow_Date">
        <?=$fetchSql3[timestamp]?>
      </span>
      <span bindpoint="branchLinkWrapper" class="GBThreadMessageRow_BranchLink"></span>
      <span bindpoint="reportLinkWrapper" class="GBThreadMessageRow_ReportLink"></span>
    </div>
    <div class="GBThreadMessageRow_Body">
      <div class="GBThreadMessageRow_Body_Content">
     
        <?=$fetchSql3[isi]?>
      </div>
      <div class="GBThreadMessageRow_ReferrerLink">
        
      </div>
      <div class="GBThreadMessageRow_Body_Attachment">
        
      </div>
    </div>
  </div>
</div>
<? } ?>
</div>

<textarea rows='2' cols='64' id='kirimPesan2'></textarea>
<div align='right' style='padding-right:10px;'>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
   <a href="javascript:kirimBP(<? echo "$cariTopik[id]"; ?>,<? echo "$cariTopik[id_pesan]"; ?>);" class="art-button">Kirim</a>                                              		</span>
   </div>