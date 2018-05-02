<? require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahMKU.js" type="text/javascript"></script>
  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Mata Kuliah Umum</title>

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
                			<a href="#" ><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                        
                        <li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Jurusan</span></a>
                			<ul>
                				<li><a href="tambahJurusan.php">Tambah Jurusan</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Jurusan</a></li>
                				<li><a href="#">Hapus Jurusan</a></li>
                			</ul>
                		</li>
                        <li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah Jurusan</span></a>
                			<ul>
                				<li><a href="tambahmatkul.php">Tambah Mata Kuliah</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Mata Kuliah</a></li>
                				<li><a href="#">Hapus Mata Kuliah</a></li>
                			</ul>
                		</li>
                         <li>
                			<a href="#" class="active"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah Umum</span></a>
                			<ul>
                				<li><a href="#">Tambah Mata Kuliah Umum</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Mata Kuliah Umum</a></li>
                				<li><a href="#">Hapus Mata Kuliah Umum</a></li>
                			</ul>
                		</li>				
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Kelas</span></a>
                			<ul>
                				<li><a href="#">Tambah Kelas</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Kelas</a></li>
                				<li><a href="#">Hapus Kelas</a></li>
                			</ul>
                		</li>
                        <li>
                			<a href="#" ><span class="l"></span><span class="r"></span><span class="t">Mahasiswa</span></a>
                			<ul>
                				<li><a href="#">Tambah Mahasiswa</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Mahasiswa</a></li>
                				<li><a href="#">Hapus Mahasiswa</a></li>
                			</ul>
                		</li>		
                	<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Dosen</span></a>
                			<ul>
                				<li><a href="#">Tambah Dosen</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Edit Dosen</a></li>
                				<li><a href="#">Hapus Dosen</a></li>
                			</ul>
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
                                            Tambah Mahasiswa</h2>
                                        <div class="art-PostContent" >
                                            
                                            
                                          <div align="center">Anda dapat menambah data mahasiswa pada form berikut</div><br /><br />
                                            <table align="center" width="51%" border="0" cellspacing="1" cellpadding="1">
                                              
                                              <tr>
                                                <td align="right">Id Mata Kuliah</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" id="idMatkul" name="idMatkul" maxlength="30" />                                                  <span style="color:#F00" id="err_idMatkul"></span>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td align="right">Mata Kuliah</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" id="namaMatkul" name="namaMatkul" maxlength="30" />                                                  <span style="color:#F00" id="err_matkul"></span>
                                                </td>
                                              </tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </table>

                                            
                                            <p> <div align="center">
                                            	<span class="art-button-wrapper" >
                                            		<span class="l"> </span>
                                            		<span class="r"> </span>
                                            		<a class="art-button" onclick="javascript: tambahMKU();">Simpan</a>
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
