<? session_start(); ?> 

<html>

<head>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../style/redmond/jquery-ui-1.8.1.custom.css" type="text/css" media="screen" />
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="../script/CalendarPopup.js" type="text/javascript"></script>

<script language="javascript" src="../script/tambahJadwalTugas.js" type="text/javascript"></script>

<script language="javascript" src="../script/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script language="javascript" src="../script/jquery/jquery-ui-1.8.1.custom.min.js" type="text/javascript"></script>


<script language="javascript">
$(function() {
		$("#tglTugas").datepicker({
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
<SCRIPT language="javaScript" id="jscal2xx" type="text/javascript">
var cal2xx = new CalendarPopup("testdiv2");
cal2xx.showNavigationDropdowns();
</SCRIPT>
<?
   require ("../lib/sambungDatabase.php");
   
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];
$kp = $_GET["kp"];
$sem = explode("-",$semester);
$gabungan = $idKelas . $sem[0] . $sem[1];

?>
<h4>Tambah Jadwal UAS</h4>
<table class="biasa"><tr>
<td>Tanggal</td>
<td><input name="tglTugas" type="text" id="tglTugas" size="10" maxlength="10" readonly="readonly">
<!--<input type="text" id="tglKuis" name="tglKuis"/><a id='anchor1xx' 
      title="Kalender" 
      onclick="cal1xx.select(document.getElementById('tglKuis'), 'anchor1xx','dd-MM-yyyy','<? echo date("m-d-Y"); ?>');return false;" 
      href="#" 
      name='anchor1xx'>
      Pilih Tanggal
      </a>
      -->
      </td>
</tr>
<tr><td>Tipe</td><td>
<select id="tipe2"><option>Tugas</option>
<option>Kuis</option></select>
</td></tr>

<tr><td>Jam</td><td>
<select id="jam2"><option>08.25</option>
<option>9.00</option>
<option>10.00</option>
<option>11.00</option>
<option>12.00</option>
<option>13.00</option></select>
</td></tr>

<tr><td>Ruang</td>
<td>

<select id="ruang2">

<?
$sql = mysql_query("SELECT * FROM ruang");
$jumRow = mysql_num_rows($sql);
for($i=0;$i<$jumRow;$i++)
{
$fetchArray = mysql_fetch_array($sql);
echo "<option>$fetchArray[nama_ruang]</option>";

}
?>
</select>
</td></tr>
<tr><td>Bahan</td><td><textarea id="bahan2"></textarea></td>
<tr><td>

<div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="#"onclick="javascript:tambahJadwalTugas();">Simpan</a>
                                            		</span>
</div>
</td></tr></table>
<table class="biasa" id="jadwal2"><tr><td>No</td><td>Tanggal</td><td>Jam</td><td>Ruang</td><td>Bahan</td></tr></table>


      <div id="testdiv2"></div>
      <span id="tombolTambah2" style="display:none"><div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                  <? echo "<a class=\"art-button\" href=\"#\" onclick=\"javascript:simpanJadwalTugas('$gabungan','$kp');\">Simpan</a>"; ?>
                                            		</span>
</div></span>
</body>
</html>