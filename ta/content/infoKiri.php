<?

    $tampung = $_SESSION[masterAmbilSemua];
   if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
    $status="lain";
	include "simpanSessionTeman.php";
    $tampung = $masterAmbilTeman;
}

      $tglLahir = $tampung[TglLahir];
      $dateTime = new DateTime($tglLahir);
      $tanggal = $dateTime->format("d M Y");

?>
                   <div class="art-Block">
            <div class="art-Block-body">
              <div class="art-BlockHeader">
                <div class="l"></div>
                <div class="r"></div>
                <div class="art-header-tag-icon">
                  <div class="t">Informasi</div>
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
                	<h5>Tanggal Lahir :</h5>
                    <div><? echo "$tanggal"; ?> </div>
                    <h5>Kota Tinggal :</h5>
                    <div class="last">Surabaya, Indonesia</div>
                  	<div class="cleared"></div>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>