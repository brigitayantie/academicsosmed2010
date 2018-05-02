<? require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahRuang.js" type="text/javascript"></script>
<script language="javascript" src="script/editRuang.js" type="text/javascript"></script>
<script language="javascript" src="script/tambahMahasiswa.js" type="text/javascript"></script>

<script language="javascript" src="script/editUser.js" type="text/javascript"></script>

    <!--
    Created by Artisteer v2.3.0.21098
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tambah dan Edit Ruang</title>

  

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

var ajaxwin=dhtmlwindow.open("box", "iframe", "http://localhost/ta/admin/tambahRuang.php", "Tambah Ruang", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup menu tambah ruang?")} //Run custom code when window is about to be closed

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
                			<a href="editJurusan.php" ><span class="l"></span><span class="r"></span><span class="t">Jurusan</span></a>
                			
                		</li>
                        <li>
                			<a href="#" class=" active"><span class="l"></span><span class="r"></span><span class="t">Mata Kuliah</span></a>
                			<ul>
                				<li><a href="editMKU.php">MKU</a></li>
                				<li><a href="editMatkul.php">Non-MKU</a></li>
                				
                			</ul>
                		</li>		
                		<li>
                			<a href="editKelas.php"><span class="l"></span><span class="r"></span><span class="t">Kelas</span></a>
                			
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

                                          <div align="center">Anda dapat <a  href="#" onclick="javascript:openmypage(); return false;">menambah</a> dan mengedit data mahasiswa pada form berikut</div></div><br /><br />
                                          
                                          <table border="0">

                                       <span id="tampilAwal">
                                       <? $query = "SELECT * FROM ruang";
$rows = $db->fetch_all_array($query);
?>									
<table class="art-article"  border="1" width='90%'>
                                              <tr align="center">
                                                <td width="17%" align="center">Id Jurusan</td>
                                                <td width='50%'>Jurusan</td>
                                                <td >Keterangan</td>
                                              </tr>
<?
//$rows itu aray $rows[0]...
	for($i=0;$i<count($rows);$i++)
	{
		echo "<tr>";
		$namaRuang=$rows[$i][nama_ruang];
		$idRuang=$rows[$i][id_ruang];
		
		
		//echo "<td><span id='txtIdJur[$i]'>$idJurusan</span></td><td><span id='txtNamaJur[$i]'>$namaJurusan</span></td><td><a href='#' onclick='javascript:editJurusan($idJurusan,$id_fakultas,$i);'><span id='edit[$i]'>Edit</span></a> / <a href='#' onclick='javascript:hapusJurusan($idJurusan,$id_fakultas);'>Hapus</a> </td>";
		echo "<td>
		<span id='spanIdRuang[$i]' style='display:inline;'>$idRuang</span>
		<input type='text' value='$idRuang'  style='display:none;'>
		</td>
		<td><span id='spanNamaRuang[$i]'>$namaRuang</span>
		<input type='text' value='$namaRuang' id='txtNamaRuang[$i]' style='display:none;'>
		</td>
		<td><a href='#' onclick='javascript:editRuang($i);'><span id='edit[$i]'>Edit</span></a>
		<a href='#' onclick='javascript:edit2Ruang($i);'><span id='simpan[$i]' style='display:none'>Simpan</span></a>
		/ <a href='#' onclick='javascript:hapusRuang($idRuang);'>Hapus</a> </td>";
		echo "</tr>";
	}/*
												foreach($rows as $record)
												{
													echo "<option value='$record[id_jurusan]'>$record[nama_jurusan]</option>";
												}
												*/



echo "</table>";

/*			 
echo "<select id='combo2' onchange='javascript: UbahCombo3();'>";
while(mysql_fetch_array($rec)) {
	echo "<option value='...'>......</option>";
	*/






//hasil xmlHttpResponseText




?>
</span>
                                       <span id="tampilHasil"></span>
                                             </table>
</span>
                                            
<p> <div align="center">
                                            	<span class="art-button-wrapper" >
                                            		<span class="l"> </span>
                                            		<span class="r"> </span>
                                            		<a class="art-button" onclick="javascript: tambahRuang();" >Simpan</a>
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
