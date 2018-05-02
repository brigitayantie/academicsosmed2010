
  <table border='0' align='center'>
 
  <tr>
  		<td>NRP</td><td>:</td><td><? echo $masterAmbilTeman["id_user"];?><input type="hidden" id="idUser" value=<?
        echo $masterAmbilTeman["id_user"];?> /></td>
  </tr>
  <tr>
  		<td>Nama</td><td>:</td><td><? echo $masterAmbilTeman["Nama"];?></td>
  </tr>
  <?
  $tglLahir = $masterAmbilTeman[tglLahir];
  $dateTime = new DateTime($tglLahir);
  $tanggal = $dateTime->format("d M Y");
  $_SESSION["tglLahir"] = $tanggal;
  ?>
  <tr>
  		<td>Tempat / Tgl Lahir</td><td>:</td><td><? echo "$masterAmbilTeman[t4Lahir] / $tanggal";?></td>
  </tr>
  <tr>
  		<td>Alamat</td><td>:</td><td><span id="spanAlamat">
		<? echo $masterAmbilTeman["Alamat"]; ?></span>
        <? echo "<input type='text' id='txtAlamat' style='display:none'
         value='$masterAmbilTeman[Alamat]' /></td>"; ?>
  </tr>
  <tr>
  		<td>Email</td><td>:</td><td><span id="spanEmail"><? echo $masterAmbilTeman["email"]; ?></span>
         <? echo "<input type='text' id='txtEmail' style='display:none'
         value='$masterAmbilTeman[email]' /></td>"; ?>  </tr>
   <tr>
  		<td>Hobi</td><td>:</td><td><span id="spanHobi"><? echo $masterAmbilTeman["hobi"];?></span><textarea id="txtHobi" style="display:none"><? echo $masterAmbilTeman["hobi"]; ?></textarea></td>
  </tr>
   <tr>
  		<td>Tentangku</td><td>:</td><td><span id="spanDeskripsi"><? echo $masterAmbilTeman["deskripsi"];?></span><textarea id="txtDeskripsi" style="display:none"><? echo $masterAmbilTeman["deskripsi"]; ?></textarea></td>
  </tr>
  </table>
  