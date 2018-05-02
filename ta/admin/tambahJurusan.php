<? require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<link rel="stylesheet" href="../script/dhtmlmodal/windowfiles/dhtmlwindow.css"  type="text/css"/>

<script language="javascript" src="../script/dhtmlmodal/windowfiles/dhtmlwindow.js" type="text/javascript"></script>

<script language="javascript" src="script/editJurusan.js" type="text/javascript"></script>
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahJurusan.js" type="text/javascript"></script>
    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Jurusan</title>

    <script type="text/javascript" src="script.js"></script>
    
  

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
                                            
                                            
                                          <div align="center">Anda dapat <a href="#">menambah</a> dan mengedit data jurusan pada form berikut</div><br /><br />
                                            <table align="center" width="41%" border="0" cellspacing="1" cellpadding="1">
                                              
                                              <tr>
                                                <td align="right">Fakultas</td>
                                                <td>&nbsp;</td>
                                                <td><select name="fakultas" id="fakultas">
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
                                                </select></td>
                                              </tr>
                                              <tr>
                                                <td align="right">Id Jurusan</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" id="idJur" name="idJur" maxlength="10" />                                                  <span style="color:#F00" id="err_idJur"></span>
                                                </td>
                                              </tr>
                                              
                                              <tr>
                                                <td align="right">Jurusan</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" id="jur" name="jur" maxlength="30" />                                                  <span style="color:#F00" id="err_jur"></span>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </table>

                                            
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
