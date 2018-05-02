<? session_start();
 require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
  
   include "../lib/sambungDatabase.php";
   
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$idKelas = $_POST[idKelas];


$tanggal = $_POST["tanggal"];
$tema = $_POST["tema"];

$jamMulaiE=$_POST["jamMulaiE"];
$jamSelesaiE=$_POST["jamSelesaiE"];
$tempat=$_POST["tempat"];
	$event[keterangan]= $_POST["ketEvent"];

	list($d, $m, $y) = explode('-',$tanggal);
	$formatTanggal = "$y-$m-$d";
	$event[tanggal] = $formatTanggal;
	$event[tema] = $tema;
	$event[jamMulaiE] = $jamMulaiE;
	$event[jamSelesaiE] = $jamSelesaiE;
	$event[tempat] = $tempat;
	$event[id_user] = $masterAmbilSemua["id_user"];

	$db->query_insert("event", $event);
	$today = new DateTime($formatTanggal);

	$today1 = $today->format("F j, Y");
	$id_event=mysql_insert_id();
?>
                 <!--div class="art-content">
                      
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
                        <div class="art-Post-body"-->
                          <div class="art-Post-inner">
                            <h2 class="art-PostHeader"> <img src="images/PostHeaderIcon.png" width="21" height="22" alt="PostHeaderIcon" /> <? echo "$_POST[tema]"; ?> </h2>
                            <table border="0">
                            <tr><td>Tanggal</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><? echo $today1; ?></tr>
                            <tr><td>Waktu</td><td></td><td><? echo "$_POST[jamMulaiE]-$_POST[jamSelesaiE]"; ?></td></tr>
                            <tr><td>Tempat</td><td></td><td><? echo "$_POST[tempat]"; ?></td></tr>
                            <tr><td>Keterangan</td><td></td><td><? echo "$_POST[ketEvent]"; ?></td></tr>
                            
                            </table>
                            <!--div class="art-PostContent">
                             
                            </div-->
                            <div class="cleared"></div>
                          </div>
                          <!--div class="cleared"></div>
                        </div>
                      </div>
                  </div-->
                  
                                                
<!--div align="right"><a href='javascript:bukaTambahFoto(<? echo "$id_event";?>);'>Tambah Foto</a></div-->
                             
<div align="right"><a href='fotoEvent.php?idEvent=<? echo "$id_event";?>'>Lihat Foto</a></div>
                 <div class="kotak">
                      
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
                                                     <div class="art-PostContent">
                            <textarea id="komentarEvent"></textarea> 
                            <div align="center"><span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:simpanKomentarEvent(<? echo $id_event; ?>);">Simpan</a>
                                            		</span></div>
    
  </span>
  <span id="tampilKomentar"></span>
                            </div>
                            <div class="cleared"></div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                      </div>
                  </div>
                  
                  
               
 