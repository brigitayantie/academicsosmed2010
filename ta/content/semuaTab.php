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
                    <?
                    if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
	include "simpanSessionTeman.php";
	?> <h1><? echo "$masterAmbilTeman[Nama]"; ?></h1>       
                    <?
} else {
					?>
              <h1><? echo "$masterAmbilSemua[Nama]"; ?></h1>       
                   <? 	 $status=$objUser2->GetStatus();
					 echo "<div id='divStatus'>$status[isishoutout]</div>"; ?>
         <? } ?> 
         <?           
                    
$queryCekTeman = mysql_query("SELECT tabel.* FROM 
(SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_subyek='$masterAmbilSemua[id_user]' AND t.id_obyek='$_GET[id]' UNION 
SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_obyek='$masterAmbilSemua[id_user]' AND t.id_subyek='$_GET[id]') tabel");

$cekTeman = mysql_num_rows($queryCekTeman);
if($cekTeman==1||$_GET[id]==$masterAmbilSemua[id_user]||$_GET[id]=="") 
   { 
   ?>
<div class="tabber" id="mytabber1"  >

     <div class="tabbertab" <?=$classHide?>>
   
	  <h2>Wall</h2>
	  <p><div class="art-PostContent">
                <? include "content/shout.php";?>
                    </div></p>
     </div>


     <div class="tabbertab">
    
	  <h2>Informasi</h2>
	  <p><div class="art-PostContent">
                <? include "content/info.php";?>
                    </div></p>
     </div>
     
     <div class="tabbertab" >
    
	  <h2>Foto</h2>
	  <p><div class="art-PostContent">
                <? include "content/foto2.php";?>
                    </div></p>
     </div>  


     <!--div class="tabbertab">
   
	  <h2>Input Catatan</h2>
	  <p><div class="art-PostContent">
                <? //include "content/catatan.php";?>
                    </div></p>
     </div-->
     
      <div class="tabbertab">
	  <h2>Catatan</h2>
	  <p><div class="art-PostContent">
                <? include "content/tampilCatatan.php";?>
                <span id="editCatt"></span> 
                    </div></p>
     </div>
     
         <div class="tabbertab" >
    
	  <h2>Diskusi</h2>
	  <p><div class="art-PostContent">
                <? include "content/diskusi.php";?>
                    </div></p>
     </div>


</div>
                    
                    
                  
    <? }
else
{
    ?><div class="tabber" id="mytabber1"  >
     <div class="tabbertab">
    
	  <h2>Informasi</h2>
	  <p><div class="art-PostContent">
                <? include "content/info.php";?>
                    </div></p>
     </div></div>
     <? } ?>
      <div class="cleared"></div>
    </div>
            <div class="cleared"></div>
        </div>
    </div>
    