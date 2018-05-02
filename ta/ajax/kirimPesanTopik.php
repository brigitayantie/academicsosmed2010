<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];


	$subyekPesan=$_POST[subyekPesan];
	$isiPesan=$_POST[isiPesan];
	$untuk=$_POST[idPenerima];
	$idTopik=$_POST[idTopik];

	mysql_query("INSERT INTO tgsakhir.pesanbalas (id_pengirim,isi,id_topik) VALUES ('$masterAmbilSemua[id_user]','$isiPesan','$idTopik')");		
    //mysql_query("INSERT INTO tgsakhir.pesan (id_pengirim,id_penerima,isi,id_topik) VALUES ('$masterAmbilSemua[id_user]','$untuk','$isiPesan','$idTopik')");
 
	        ?>
    <div class="GBThreadMessageRow clearfix" bindpoint="root">
  <div class="GBThreadMessageRow_Image">
    <a href="profile.php?id=<?=$masterAmbilSemua[id_user]?>" class="GBThreadMessageRow_Image_Link">
        <? if($masterAmbilSemua[foto]=="") $masterAmbilSemua[foto]="images/01.png"; ?>
    <img src="thumb1.php?img=<?=$masterAmbilSemua[foto]?>&lebar=50" class="UIProfileImage UIProfileImage_Large">
    </a>
  </div>

  <div class="GBThreadMessageRow_Main">
    <div class="GBThreadMessageRow_Info">
      <span class="GBThreadMessageRow_AuthorLink_Wrapper" bindpoint="authorLinkWrapper">
        <a href="profile.php?id=<?=$masterAmbilSemua[id_user]?>" class="GBThreadMessageRow_AuthorLink"><?=$masterAmbilSemua[Nama]?></a>
      </span>
      <span class="GBThreadMessageRow_Date">
        <?=$fetchSql3[timestamp]?>
      </span>
      <span bindpoint="branchLinkWrapper" class="GBThreadMessageRow_BranchLink"></span>
      <span bindpoint="reportLinkWrapper" class="GBThreadMessageRow_ReportLink"></span>
    </div>
    <div class="GBThreadMessageRow_Body">
      <div class="GBThreadMessageRow_Body_Content">
     
        <?=$isiPesan?>
      </div>
      <div class="GBThreadMessageRow_ReferrerLink">
        
      </div>
      <div class="GBThreadMessageRow_Body_Attachment">
        
      </div>
    </div>
  </div>
</div>
