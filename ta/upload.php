<? session_start();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
// TODO : nanti ceksession
//include 'ceksession.php';
$id=$_SESSION["idUser"];
require ("lib/Profile.class.php");

$objUser = new Profile("$id"); //88888 harusnya pakai session



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>


    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>UBAYAKADEMIKA</title>
<script type="text/javascript" src="script/Auto_suggestion/jquery.js"></script>
<script type="text/javascript" src="script/Auto_suggestion/jquery.watermarkinput.js"></script>
      
<script type="text/javascript" src="script/whosOnline.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="script/chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="script/chat/css/screen.css" />


<link rel="stylesheet" href="script/tabber/example.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="script/tabber/example-print.css" TYPE="text/css" MEDIA="print">




<script type="text/javascript" src="script/tabber/cookies.js"></script>


<!-- Include the tabber code -->
<script type="text/javascript" src="script/tabber/tabber.js"></script>
<script language="javascript" src="script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/catt.js" type="text/javascript"></script>
    <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="script/general.js"></script>
                <script type="text/javascript" src="script/scroll.js"></script>
<script type="text/javascript" src="script/editProfilUser.js"></script>
<script type="text/javascript" src="script/tampilShoutOut.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>

<body>
<div id="art-page-background-simple-gradient">
    </div>
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
          	<a href="home.php" class=" active">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Beranda</span>
            </a>
          </li>
          <li>
          	<a href="profile.php">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Profil</span>
            </a>
          </li>
          <li>
          	<a href="pesan.php">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Pesan</span>
            </a>
          </li>
          <li>
          	<a href="#">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Teman</span>
            </a>
            <ul>
                				<li><a href="semuateman.php">Cari Teman</a></li>
<li><a href="permintaanTeman.php">Permintaan Teman</a></li>
                				<li><a href="daftarTeman.php">Teman</a></li>
            </ul>
          </li>
          <li>
          	
            <? if($_SESSION["peran"]=="Mahasiswa") {
							?>
                			<a href="jadwalkul.php"><span class="l"></span><span class="r"></span><span class="t">Jadwal Kuliah</span></a>
                			<?
						}
						else { ?>
                        <a href="jadwalajar.php"><span class="l"></span><span class="r"></span><span class="t">Jadwal Ajar</span></a>
                		<?	}?>
          </li>
          <li>
          	<a href="personal.php">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Personal</span>
            </a>
          </li>
          <li>
          	<a href="logout.php">
            	<span class="l"></span>
                <span class="r"></span>
                <span class="t">Keluar</span>
            </a>
          </li>
          <li>
          <? include "script/Auto_suggestion/auto.htm"; ?>
          </li>
          
        </ul>
      </div>
                <div class="art-Header">
                    <div class="art-Header-jpeg"></div>
                    <div class="art-Logo">
                        <h1 id="name-text" class="art-Logo-name"><a href="#">UBAYAKADEMIKA</a></h1>
                        <div id="slogan-text" class="art-Logo-text">Tempat Berkumpul dan Belajar</div>
                    </div>
                </div>
                <div class="art-contentLayout">
                    <div class="art-sidebar1">
                        <? include 'content/foto.php'; ?>
                         <? include 'content/infoKiri.php'; ?>

                    </div>
                    <div class="art-content">
                        <? include 'content/upload.php'; ?>
                        
                         
                    </div>
                    <div class="art-sidebar2">
   <? include 'content/whosOnline.php'; ?>
                        <? //include 'content/permintaan.php'; ?>
                        <? include 'content/ultah.php'; ?>
                        
                    </div>               
                </div>
                <div class="cleared"></div>  
                
                 <div class="art-Footer">
        <div class="art-Footer-inner"> 
          <div class="art-Footer-text">
<p><a href="http://www.facebook.com/profile.php?id=564600572">Contact Us</a><br />
            <p>Copyright &copy; 2010 Ubayakademika. All Rights Reserved.</p>
          </div>
        </div>
        <div class="art-Footer-background"></div>
      </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer"><a href="http://www.artisteer.com/">Web Template</a> created with Artisteer.</p>
    </div>
    

<script type="text/javascript" src="script/chat/js/jquery.js"></script>
<script type="text/javascript" src="script/chat/js/chat.js"></script>
</body>
</html>
