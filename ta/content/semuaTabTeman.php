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
                    
              <h1><? echo "$masterAmbilSemua[nama]"; ?></h1>       
                              <?
include "simpanSessionTeman.php";
?>
                    
                    


<div class="tabber" id="mytabber1">

     <div class="tabbertab">
   
	  <h2>Wall</h2>
	  <p><div class="art-PostContent">
                <? include "content/shoutTeman.php";?>
                    </div></p>
     </div>


     <div class="tabbertab">
    
	  <h2>Informasi</h2>
	  <p><div class="art-PostContent">
                <? include "content/infoTeman.php";?>
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
                <? include "content/tampilCatatanTeman.php";?>
                <span id="editCatt"></span> 
                    </div></p>
     </div>
     
         <div class="tabbertab">
    
	  <h2>Diskusi</h2>
	  <p><div class="art-PostContent">
                <? include "content/diskusi.php";?>
                    </div></p>
     </div>

</div>
                    
                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    