<?  

    $tampung = $_SESSION[masterAmbilSemua];
   if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
    $status="lain";
	include "simpanSessionTeman.php";
    $tampung = $masterAmbilTeman;
}
  
?>
<div class="art-Block">
            <div class="art-Block-body">
              <div class="art-BlockContent no-header">
                <div class="art-Post-tl"></div>
                <div class="art-Post-tr"></div>
                <div class="art-Post-bl"></div>
                <div class="art-Post-br"></div>
                <div class="art-Post-tc"></div>
                <div class="art-Post-bc"></div>
                <div class="art-Post-cl"></div>
                <div class="art-Post-cr"></div>
                <div class="art-Post-cc"></div>
                <div class="art-BlockContent-body" align="center"> 
                <? if($tampung[foto]=="") { ?>
                <img class="foto-profile" src="images/01.png" align="center">
                <? }
				else 
				{?>
                 <img class="foto-profile" src="thumb1.php?img=<?=$tampung[foto]?>&lebar=250" align="center">
                 <? } ?>
                  <div class="cleared"></div>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>
          
          