<? include "cekSession.php";
session_start();

include "lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
// TODO : nanti ceksession
//include 'ceksession.php';
$id=$_SESSION["idUser"];
require ("lib/Profile.class.php");

$objUser = new Profile("$id"); //88888 harusnya pakai session


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="gecko firefox3  win" xml:lang="en" dir="ltr" 
xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>

<!--

    Created by Artisteer v2.3.0.21098

    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"

    -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title>Artisteer</title>
<link rel="stylesheet" href="script/tabber/example.css" 
type="text/css" media="screen">
<link rel="stylesheet" href="script/example-print.htm" 
type="text/css" media="print">
<script type="text/javascript" src="script/tabber/cookies.js"></script>
<style type="text/css">
.tabber {
	display:none;
}
</style>

<!-- Include the tabber code -->
<link rel="stylesheet" href="script/dhtmlmodal/windowfiles/dhtmlwindow.css" 
type="text/css">
<script language="javascript" src="script/dhtmlmodal/windowfiles/dhtmlwindow2.js" type="text/javascript"></script>
</head>
<body>
<div
 id="dhtmlwindowholder"><span style="display: none;">.</span></div>
<script type="text/javascript" src="script/tabber/tabber.js"></script> 
<script language="javascript" src="script/ajax.js"></script> 
<script language="javascript" src="script/catt.js" type="text/javascript"></script> 
<script type="text/javascript" src="script.js"></script> 
<script type="text/javascript" src="script/general.js"></script> 
<script type="text/javascript" src="script/scroll.js"></script> 
<script type="text/javascript" src="script/editProfilUser.js"></script> 
<script type="text/javascript" src="script/tampilShoutOutWall.js"></script> 
<script type="text/javascript" src="script/diskusi.js"></script>
<script type="text/javascript" src="script/cariJadwalAjar.js"></script>

<link rel="stylesheet" href="style.css" 
type="text/css" media="screen">
<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]--> 
<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]--> 
<script language="javascript">
function peringatan()
{
alert ("Input masih kosong");
}
</script>
<!--

<script language="javascript">

var counter = 0;

// call Update function 3 seconds after first load

WktShoutUser=window.setTimeout("UpdateWaktuShoutUser();",3000);

function UpdateWaktuShoutUser() {

   counter ++;

   window.status="The counter is now at " + counter;

 //  document.getElementById('waktushoutout').innerHTML="The counter is now at " + counter;

   document.getElementById('waktushoutout').innerHTML=KetWaktu(document.getElementById('startwaktushoutout').value);

// set another the timeout for the next count

   ShoutIt();

   WktShoutUser=window.setTimeout("UpdateWaktuShoutUser();",3000);

   

}



</script>

-->

<div id="art-page-background-simple-gradient"> </div>
<div id="art-page-background-glare">
  <div id="art-page-background-glare-image"></div>
</div>
<div id="art-main">
  <div class="art-Sheet">
    <div class="art-Sheet-tl"></div>
    <div class="art-Sheet-tr"></div>
    <div class="art-Sheet-bl"></div>
    <div class="art-Sheet-br"></div>
    <div class="art-Sheet-tc"></div>
    <div class="art-Sheet-bc"></div>
    <div class="art-Sheet-cl"></div>
    <div class="art-Sheet-cr"></div>
    <div class="art-Sheet-cc"></div>
    <div class="art-Sheet-body">
      <div class="art-nav">
        <div class="l"></div>
        <div class="r"></div>
        <ul class="art-menu">
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Home</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Profil</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Pesan</span>
            </a>
          </li>
          <li>
          	<a href="#"  class=" active">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Teman</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Perkuliahan</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Event</span>
            </a>
          </li>
          <li>
          	<a href="personal.php">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Personal</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="art-Header">
        <div class="art-Header-jpeg"></div>
        <div class="art-Logo">
          <h1 id="name-text" class="art-Logo-name"><a 
href="#">UBAYAKADEMIKA</a></h1>
          <div id="slogan-text" class="art-Logo-text">Tempat
            Berkumpul dan Belajar</div>
        </div>
      </div>
      <div class="art-contentLayout">
        <div class="art-sidebar1">
          <div class="art-Block">
            <div class="art-Block-body">
              <div class="art-BlockContent no-header">
                <div class="art-BlockContent-tl"></div>
                <div class="art-BlockContent-tr"></div>
                <div class="art-BlockContent-bl"></div>
                <div class="art-BlockContent-br"></div>
                <div class="art-BlockContent-tc"></div>
                <div class="art-BlockContent-bc"></div>
                <div class="art-BlockContent-cl"></div>
                <div class="art-BlockContent-cr"></div>
                <div class="art-BlockContent-cc"></div>
                <div class="art-BlockContent-body" align="center"> <img class="foto-profile" src="images/yan.jpg" align="center">
                  <div class="cleared"></div>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>
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
                    <div>29 Desember 1987</div>
                    <h5>Kota Tinggal :</h5>
                    <div class="last">Surabaya, Indonesia</div>
                  	<div class="cleared"></div>
                </div>
              </div>
              <div class="cleared"></div>
            </div>
          </div>
        </div>
        <div class="art-content">
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
                <h1><? echo "$masterAmbilSemua[Nama]"; ?></h1>
                <? include 'content/semuaTabJadwalAjar.php'; ?>
              </div>
              <div class="cleared"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="cleared"></div>
      <div class="art-Footer">
        <div class="art-Footer-inner"> 
          <div class="art-Footer-text">
            <p>Copyright © 2009 Ubayakademika. All Rights Reserved.</p>
          </div>
        </div>
        <div class="art-Footer-background"></div>
      </div>
      <div class="cleared"></div>
    </div>
  </div>
  <div class="cleared"></div>
</div>
<script type="text/javascript" src="script/chat/js/jquery.js"></script>
<script type="text/javascript" src="script/chat/js/chat.js"></script>
</body>
</html>