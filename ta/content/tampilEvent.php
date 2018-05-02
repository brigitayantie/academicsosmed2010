<? session_start();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
   require ("lib/sambungDatabase.php");
  
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

?>
<? //include "content/diskusi.php"; ?>
<script language="javascript">
$(function() {
		$("#tglEvent").datepicker({
			showOn: 'button',
			buttonImage: 'images/BlockHeaderIcon.png',
			buttonImageOnly: true,
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-80:c'
		});
	});
	
	</script>
    
<span id="eventBaru">
<table class="biasa"><tr>
<td>Tanggal</td>
<td><input name="tglEvent" type="text" id="tglEvent" size="10" maxlength="10" readonly="readonly">
<!--<input type="text" id="tglKuis" name="tglKuis"/><a id='anchor1xx' 
      title="Kalender" 
      onclick="cal1xx.select(document.getElementById('tglKuis'), 'anchor1xx','dd-MM-yyyy','<? echo date("m-d-Y"); ?>');return false;" 
      href="#" 
      name='anchor1xx'>
      Pilih Tanggal
      </a>
      -->
      </td>


<tr><td>Jam Mulai</td><td>
<select id="jamMulaiE"><option>07.00</option>
<option>8.00</option>
<option>10.00</option>
<option>11.00</option>
<option>12.00</option>
<option>13.00</option>
<option>14.00</option>
<option>15.00</option>
<option>16.00</option>
<option>17.00</option></select>
</td></tr>

<tr><td>Jam Selesai</td><td>
<select id="jamSelesaiE"><option>07.00</option>
<option>8.00</option>
<option>10.00</option>
<option>11.00</option>
<option>12.00</option>
<option>13.00</option>
<option>14.00</option>
<option>15.00</option>
<option>16.00</option>
<option>17.00</option></select>
</td></tr>

<tr><td>Tempat</td>
<td>

<input type="text" id="tempat">


</td></tr>

</tr>
<tr><td>Tema</td><td>
<input type="text" id="tema">
</td></tr>
<tr><td>Keterangan</td><td><textarea id="ketEvent"></textarea></td>
<tr><td>

<div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="#"onclick="javascript:tambahEvent();">Simpan</a>
                                            		</span>
</div>
</td></tr></table>
    
  </span>
  
<!--span id="tampilTopikForum"><? include "content/tampilDiskusi.php"; ?></span-->
<span id="tampilEvent"></span>
<span id="tampilKomentarEvent"></span>
</span>