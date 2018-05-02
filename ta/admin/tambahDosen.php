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

<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>

<script language="javascript" src="script/tambahMahasiswa.js" type="text/javascript"></script>
<script language="javascript" src="script/editUser.js" type="text/javascript"></script>

<script language="javascript" src="script/ubahRadioDosenMKU.js" type="text/javascript"></script>

    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Dosen</title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body onload="
javascript : 
document.getElementById('teksnyaFakultas').innerHTML='';
document.getElementById('teksnyaJurusan').innerHTML='';
document.getElementById('spanJurusan').style.display='none';
document.getElementById('fakultas').style.display='none';
//ubahCmbMKU2();
">

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
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah</span></a>
                			<ul>
                				<li><a href="#">Tambah Mata Kuliah</a>
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
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Mahasiswa</span></a>
                			<ul>
                				<li><a href="tambahMhs.php">Tambah Mahasiswa</a>
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
                			<a href="#" class="active"><span class="l"></span><span class="r"></span><span class="t">Dosen</span></a>
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
                                            Tambah Data Dosen</h2>
                                        <div class="art-PostContent" >
                                            
                                            
                                          <div align="center">Anda dapat menambah data dosen pada form berikut</div><br /><br />
                                            <table align="center" width="41%" border="0" cellspacing="1" cellpadding="1">
                                              <tr>
                                                <td width="68" align="right">NIP  </td>
                                                <td width="11">&nbsp;</td>
                                                <td width="217"><input maxlength="7" type="text" name="nip" id="nip"> <span style="color:#F00" id="err_nip"></span> </td>
                                              </tr>
                                              <tr>
                                                <td align="right">Nama</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="namaDosen" id="namaDosen"><span style="color:#F00" id="err_namaDosen"></span></td>
                                              </tr>
                                              <tr>
                                               <tr>
                                                <td align="right">Gender</td>
                                                <td>&nbsp;</td>
                                                <td>
                                                <select name="gender" id="gender">
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                                </select>
                                                </td>
                                              </tr>
                                                <td align="right">Password</td>
                                                <td>&nbsp;</td>
                                                <td><input type="password" name="pwdDosen" id="pwdDosen"><span style="color:#F00" id="err_pwdDosen"></span></td>
                                              </tr>
                                              <tr>
                                                <td align="right">Handphone</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="hpDosen" id="hpDosen"><span style="color:#F00" id="err_hpDosen"></span></td>
                                              </tr>
                                               <tr>
                                                <td align="right">Email</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="emailDosen" id="emailDosen"><span style="color:#F00" id="err_emailDosen"></span></td>
                                              </tr>
                                                <tr>
                                                <td align="right">Tanggal Lahir</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="tglLhrDosen" id="tglLhrDosen"><span style="color:#F00" id="err_tglLhrDosen"></span></td>
                                              </tr>
                                                <tr>
                                                <td align="right">Tempat Lahir</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="t4LhrDosen" id="t4LhrDosen"><span style="color:#F00" id="err_t4LhrDosen"></span></td>
                                              </tr>
                                                <tr>
                                                <td align="right">Alamat</td>
                                                <td>&nbsp;</td>
                                                <td><input type="text" name="alamatDosen" id="alamatDosen"><span style="color:#F00" id="err_alamatDosen"></span></td>
                                              </tr>
                                                  <tr>
                                                <td width="87" align="right">Jenis Mata Kuliah </td>
                                                <td width="15">&nbsp;</td>
                                                <td width="195"><p>
                        
                                                  
                           <input type="radio"  name="jenisMK" value="nonmku" id="jenisNon" onclick="javascript :ubahCmbMKU(this.value);"/>									Non-MKU<br />
                                                    
                          <input type="radio" name="jenisMK" value="mku" id="jenisMKU" onclick="javascript :ubahCmbMKU(this.value);"/>
                                                    MKU<br />
                                         
							      </td>
                                              </tr>
                                              
                                              <tr>
                                                <td align="right"><span id="teksnyaFakultas">Fakultas</span></td>
                                                <td>&nbsp;</td>
                                                <td><select name="fakultas" id="fakultas" onchange="javascript: ubahCmbJurusan();">
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
                                              </span>
                                              <tr>
                                                <td align="right"><span id="teksnyaJurusan">Jurusan</span></td>
                                                <td>&nbsp;</td>
                                                <td>
                                                <span id='spanJurusan'>
													<select><option>Pilih Satu</option></select>
													<br />
												</span>
                                                <span id="pesan"></span> 
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
                                            		<a class="art-button" onclick="javascript: tambahDosen();">Simpan</a>
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
