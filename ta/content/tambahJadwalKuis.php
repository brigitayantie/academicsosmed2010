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
		$("#tglKuis").datepicker({
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

?>
<h4>Tambah Jadwal UTS</h4>

<table class="biasa"><tr>
<td>Tanggal</td>
<td><input name="tglKuis" type="text" id="tglKuis" size="10" maxlength="10" readonly="readonly">
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
<select id="tipe"><option>Tugas</option>
<option>Kuis</option></select>
</td></tr>

<tr><td>Jam</td><td>
<select id="jam"><option>08.25</option>
<option>9.00</option>
<option>10.00</option>
<option>11.00</option>
<option>12.00</option>
<option>13.00</option></select>
</td></tr>

<tr><td>Ruang</td>
<td>

<select id="ruang">

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
<tr><td>Bahan</td><td><textarea id="bahan"></textarea></td>
<tr><td>

<div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="#"onclick="javascript:tambahJadwalKuis();">Simpan</a>
                                            		</span>
</div>
</td></tr></table>
<table class="biasa" id="jadwal"><tr><td>No</td><td>Tanggal</td><td>Jam</td><td>Ruang</td><td>Bahan</td></tr></table>


      <div id="testdiv1"></div>
      <span id="tombolTambah" style="display:none"><div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                  <? echo "<a class=\"art-button\" href=\"#\" onclick=\"javascript:simpanJadwalKuis('$gabungan','$kp');\">Simpan</a>"; ?>
                                            		</span>
</div></span>

</body>
</html>