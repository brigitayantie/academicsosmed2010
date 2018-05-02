 <? require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
       require "../lib/Pager.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahJurusan.js" type="text/javascript"></script>
<script language="javascript" src="script/editJurusan.js" type="text/javascript"></script>


    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Jurusan</title>

  

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    

    
</head>
<link rel="stylesheet" href="../script/dhtmlmodal/windowfiles/dhtmlwindow.css"  type="text/css"/>

<script language="javascript" src="../script/dhtmlmodal/windowfiles/dhtmlwindow.js" type="text/javascript"></script>

<script type="text/javascript">

function openmypage()
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")

var ajaxwin=dhtmlwindow.open("box", "iframe", "http://localhost/ta/admin/tambahJurusan.php", "Tambah Jurusan", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup jendela tambah jurusan?")} //Run custom code when window is about to be closed

}



   
</script>
<body>
<input type="hidden" id="page" value="1" />
<input type="hidden" id="lokasi" value="jurusan" />
<script type="text/javascript"> 
/*
if(document.getElementById("bukaFrame").value == "1" )
{
tampilJurusan();
openmypage();
}
*/
</script>
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
               <? include "atas.php"; ?>
                </div>
                <div class="art-Header">
                    <div class="art-Header-jpeg"></div>
                    <div class="art-Logo">
                        <h1 id="name-text" class="art-Logo-name"><a href="#">UBAYAKADEMIKA</a></h1>
                        <div id="slogan-text" class="art-Logo-text">Tempat Berkumpul dan Belajar</div>
                    </div>
                </div>
                <div class="art-contentLayout">
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
                                        <h2 class="art-PostHeader">
                                            <img src="images/PostHeaderIcon.png" width="21" height="22" alt="PostHeaderIcon" />
                                            Tambah Data Jurusan</h2>
                                        <div class="art-PostContent" >

                                          <div align="center">Anda dapat <a  href="#" onclick="javascript:openmypage(); return false;">menambah</a> dan mengedit data jurusan pada form berikut</div></div><br /><br />
                                            <table class="art-article" align="center"  border="0" cellspacing="1" cellpadding="1">
                                              <tr><td colspan="2">Fakultas</td><td><select onchange="javascript:tampilJurusan();" name="fakultas" id="fakultas">
                                                  <?
												$query = "SELECT * FROM fakultas order by id_fakultas";
												$rows = $db->fetch_all_array($query);
												/*$rows itu aray $rows[0]...
												for($i=0;$i<count($rows);$i++)
												$record=$row[i][nama_fakultas];
												*/
												foreach($rows as $record)
												{
													echo "<option value='$record[id_fakultas]'>$record[nama_fakultas]</option>";
												}
                                               ?>
                                                </select></td></tr>
                                                </table>
                                                <span id="tampilJurusan">
                                                <table class="art-article"  border="1">
                                              <tr align="center">
                                                <td width="17%" align="center">Id Jurusan</td>
                                                <td >Jurusan</td>
                                                <td >Keterangan</td>
                                              </tr>
                                              
                                             </table>
</span>
                                            
<p> <div align="center">
                                            	<span class="art-button-wrapper" >
                                            		<span class="l"> </span>
                                            		<span class="r"> </span>
                                            		<a class="art-button" onclick="javascript: tambahJurusan();" >Simpan</a>
                                            	</span>
                                                </div>
                                            </p>
                                            <br /><span id="tampilHasil"></span>
                                            <table class="table" width="100%">
                                            	
                                          </table>
                                                
                                        </div>
                                        <div class="cleared"></div>
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
                    </div>
                        
                              
                  </div>
                <div class="cleared"></div>
              <div class="art-Footer">
                    <div class="art-Footer-inner">
                        <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-Footer-text">
                            <p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | <a href="#">Trademarks</a>
                                | <a href="#">Privacy Statement</a><br />
                                Copyright &copy; 2009 ---. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                 </div>
</div>
</body>
</html>
