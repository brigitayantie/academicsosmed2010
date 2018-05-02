<? session_start(); ?> 

<html>
<head>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../style/redmond/jquery-ui-1.8.1.custom.css" type="text/css" media="screen" />
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="../script/CalendarPopup.js" type="text/javascript"></script>
<script language="javascript" src="../script/tambahJadwalKuis.js" type="text/javascript"></script>

<script language="javascript" src="../script/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script language="javascript" src="../script/jquery/jquery-ui-1.8.1.custom.min.js" type="text/javascript"></script>

<script language="javascript">
$(function() {
		$("#tglUploadBahan").datepicker({
			showOn: 'button',
			buttonImage: '../images/BlockHeaderIcon.png',
			buttonImageOnly: true,
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-80:c'
		});
	});
	
	</script>
    
</head>
<body>

<script language="javascript" type="text/javascript">
	document.write(getCalendarStyles());
</script>
<SCRIPT language="JavaScript" id="jscal1xx" type="text/javascript">
var cal1xx = new CalendarPopup("testdiv1");
cal1xx.showNavigationDropdowns();
</SCRIPT>
<?
   require ("../lib/sambungDatabase.php");
   
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];
$kp = $_GET["kp"];
$sem = explode("-",$semester);
$gabungan = $idKelas . $sem[0] . $sem[1];
$gabungan2 = $idKelas . $sem[0] . $sem[1] . $kp;

?>
<span id="uploadBahan">
<h4>Upload Bahan</h4>

<form method="post" enctype="multipart/form-data" action="../prosesUploadBahan.php">
<? echo "<input type=\"hidden\" value='$idKelas' name=\"idKelas\" >"; ?> 
<? echo "<input type=\"hidden\" value='$gabungan' name=\"gabungan\" >"; ?> 
<? echo "<input type=\"hidden\" value='$kp' name=\"kp\" >"; ?> 
<table class="biasa" border="0">

<tr><td>Untuk</td><td>
<select name="untuk"><option>UTS</option>
<option>UAS</option>
</select>
</td></tr>


<tr><td>Tipe</td><td>
<select name="tipeBahan"><option>Bahan Umum</option>
<option>Bahan Khusus</option>
</select>
</td></tr>

<tr><td valign="top">Upload Bahan</td>
<td>
<table class="biasa">
<tr>
<td>File :</td><td><input type="file" id="file0" name="file0" /></td>
</tr>
<tr>
<td>Judul :</td><td><input type="text" id="judul" name="judul" /></td>
</tr>
<tr>
<td>Keterangan :</td><td><textarea id="ket" name="ket" ></textarea></td>
</tr>
</table>                   
</td>
<tr align="center"><td colspan="3" ><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                                        <input type="submit" class="art-button" value="Simpan Bahan"/>
                                            		</span>
                                            	</p></td></tr>
</table>
</form>     

                                            


</span>
</body>
</html>