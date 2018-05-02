<? session_start(); 

require "../lib/config.inc.php"; 
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
<script language="javascript" src="script/tambahPesertaKelas.js" type="text/javascript"></script>

<script language="javascript" src="script/tambahMahasiswa.js" type="text/javascript"></script>
<script language="javascript" src="script/editUser.js" type="text/javascript"></script>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Dosen</title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/editKelas.js" type="text/javascript"></script>

<script language="javascript" src="script/tambahInput.js" type="text/javascript"></script>
<!--script language="javascript" src="script/tambahKelas.js" type="text/javascript"></script-->
<script language="javascript" src="script/editJurusan.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahMahasiswa.js" type="text/javascript"></script>

<script language="javascript" src="script/editUser.js" type="text/javascript"></script>

    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah Data Mahasiswa</title>

  

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    

    
</head>
<link rel="stylesheet" href="../script/dhtmlmodal/windowfiles/dhtmlwindow.css"  type="text/css"/>
<script type="text/javascript" src="../script/ajax.js"></script>
<script language="javascript" src="../script/dhtmlmodal/windowfiles/dhtmlwindow.js" type="text/javascript"></script>
<script type="text/javascript">

function openmypage2(idJ)
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")
/*
function update_value(){
  var sQty = $('#quantity').val();
  var url = "calc_update.php";
  $.post(url,{qty:sQty},function(data){
    $('#update_text').html(data);
  }
*/

	
	url = "http://localhost/ta/admin/tambahPesertaKelas.php?id=" + idJ ;
	url = new String(url);
	
	
	
var ajaxwin=dhtmlwindow.open("box", "iframe", url , "Tambah Peserta Kelas", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup menu tambah kelas?")} //Run custom code when window is about to be closed

}

 
</script>
<script type="text/javascript">

function openmypage()
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")

var ajaxwin=dhtmlwindow.open("box", "iframe", "http://localhost/ta/admin/tambahKelas.php", "Tambah Kelas", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup menu tambah kelas?")} //Run custom code when window is about to be closed

}

 
</script>
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
                			<a href="editJurusan.php"><span class="l"></span><span class="r"></span><span class="t">Jurusan</span></a>
                			
                		</li>
                        <li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah</span></a>
                			<ul>
                				<li><a href="editMKU.php">MKU</a></li>
                				<li><a href="editMatkul.php">Non-MKU</a></li>
                				
                			</ul>
                		</li>		
                		<li>
                			<a href="editKelas.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Kelas</span></a>
                			
                		</li>
                        <li>
                			<a href="editUser.php" ><span class="l"></span><span class="r"></span><span class="t">User</span></a>
                			
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
                                            Tambah dan Edit Data Mahasiswa</h2>
                                        <div class="art-PostContent" >
<input type="hidden" id="tampungFakultas" />
<input type="hidden" id="tampungJurusan" />
<input type="hidden" id="edtKelas" value="1" />
                                          <span id="ubahTambah"></span>
                                         </div><br /><br />
                                         <div align='center'>Anda dapat <a  href='#' onclick='javascript:openmypage(); return false;'>menambah</a> dan mengedit data dosen pada form berikut</div>
                                          <table border="0">
                                          <tr>
                                          <td height="10" width="87" align="right">Cari Berdasarkan</td>
                                       <td height="10" width="87" align="right"><select id="cariBerdasar" onchange="javascript:gantiFungsi();"><option>Id Kelas</option><option>Hari</option><option>Jam Mulai</option><option>ID Mata Kuliah</option><option>Nama Mata Kuliah</option><option>NIP Dosen</option><option>Nama Dosen</option><option>Ruang</option><option>Jenis Mata Kuliah</option></td>
                                                <td width="15">&nbsp;</td>
                                                <td width="75"><p>

       					<span id="spanLanjutan"></span></td>
						<td><span id="spanFakultas"></span>
							      </td>
                                  <td><span id="spanJurusan"></span></td>
                                  
                                  <!--
                                        
                                          <td>Tampilkan berdasarkan : <br /><select onchange="javascript:stlhPeran();" name="cmbPeran" id="cmbPeran">
                                          <option>Pilih Peran</option>
                                          <option value="Mhs">Dosen</option>
                                          <option value="Dosen">Mata Kuliah</option>
                                          <option value="Karyawan">Waktu</option>
                                                  </select>
                                          </td>
                                            <td align="left">
                                              <span id="spanMKU">									                                            
                                             </span>
                                          </td>
                                          <td>
                                              <span id="spanFakultas">									                                            
                                             </span>
                                          </td>
                                 			<td>
                                              <span id="spanJurusan">									                                            
                                             </span>
                                          </td>
                                          -->
                                          </tr>
                                          </table>
                                            <table class="art-article" align="center"  border="0" cellspacing="1" cellpadding="1">
                                          
                                                </table>
                                                <span id="tampilData">
                                            
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
