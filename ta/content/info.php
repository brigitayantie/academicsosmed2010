<?

include "simpanSession.php";
$tampung = $masterAmbilSemua;
/*
if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
	include "simpanSessionTeman.php";

?>
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
  
<?
}
else
{
?>
  <table border='0' align='center'>
    <tr>
  		<td colspan="3" align="right"><span id="edit"><a href="javascript:editProfilUser();">Edit</a></span><span id="simpan" style="display:none"><a href="javascript:edit2ProfilUser();">Simpan</a></span></td>
  </tr>
  <tr>
  		<td>NRP</td><td>:</td><td><? echo $masterAmbilSemua["id_user"];?><input type="hidden" id="idUser" value=<?
        echo $masterAmbilSemua["id_user"];?> /></td>
  </tr>
  <tr>
  		<td>Nama</td><td>:</td><td><? echo $masterAmbilSemua["Nama"];?></td>
  </tr>
  <?
  $tglLahir = $masterAmbilSemua[tglLahir];
  $dateTime = new DateTime($tglLahir);
  $tanggal = $dateTime->format("d M Y");
  $_SESSION["tglLahir"] = $tanggal;
  ?>
  <tr>
  		<td>Tempat / Tgl Lahir</td><td>:</td><td><? echo "$masterAmbilSemua[t4Lahir] / $tanggal";?></td>
  </tr>
  <tr>
  		<td>Alamat</td><td>:</td><td><span id="spanAlamat">
		<? echo $masterAmbilSemua["Alamat"]; ?></span>
        <? echo "<input type='text' id='txtAlamat' style='display:none'
         value='$masterAmbilSemua[Alamat]' /></td>"; ?>
  </tr>
  <tr>
  		<td>Email</td><td>:</td><td><span id="spanEmail"><? echo $masterAmbilSemua["email"]; ?></span>
         <? echo "<input type='text' id='txtEmail' style='display:none'
         value='$masterAmbilSemua[email]' /></td>"; ?>  </tr>
   <tr>
  		<td>Hobi</td><td>:</td><td><span id="spanHobi"><? echo $masterAmbilSemua["hobi"];?></span><textarea id="txtHobi" style="display:none"><? echo $masterAmbilSemua["hobi"]; ?></textarea></td>
  </tr>
   <tr>
  		<td>Tentangku</td><td>:</td><td><span id="spanDeskripsi"><? echo $masterAmbilSemua["deskripsi"];?></span><textarea id="txtDeskripsi" style="display:none"><? echo $masterAmbilSemua["deskripsi"]; ?></textarea></td>
  </tr>
  </table>
  <? } */?>

<?

  if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
    $status="lain";
	include "simpanSessionTeman.php";
    $tampung = $masterAmbilTeman;
}
?>
 <? if($status!="lain") {?>
  <div class="tobbar">
                   
                        	<div class="tobbar-contents">
                            	<div class="tobbar-item rfloat">
                                	<a id="edit" href="javascript:editProfilUser();" class="edit-link">
                                    	<span>Ubah data</span>
                                    </a>
                                    <a class="edit-link" href="javascript:edit2ProfilUser();" id="simpan" style="display:none"><span>Simpan</span></a>
                                    
                                </div>
                                <div class="cleared"></div>
                            </div>
                        </div>
                        <? } ?>
                        <table class="data-table">
                        	<tbody>
                            	<tr>
                                    <?                                    
                                    if($status=="lain")
                                    {                                           
                                    if($_SESSION["peranTeman"]=="Mahasiswa") 
                                    { 
                                    ?>
                                	<th class="label">NRP:</th>
                                    <? 
                                    } 
                                    else if($_SESSION["peranTeman"]=="Dosen") 
                                    { 
                                    ?>
                                    <th class="label">NPK:</th>
                                    <? 
                                    }
                                    }
                                    else 
                                    {
                                    if($_SESSION["peran"]=="Mahasiswa") 
                                    { 
                                    ?>
                                	<th class="label">NRP:</th>
                                    <? 
                                    } 
                                    else if($_SESSION["peran"]=="Dosen")
                                    { 
                                    ?>
                                    <th class="label">NPK:</th>
                                    <? 
                                    }
                                    }
                                    ?>
                                    
                                    <td class="data"><? echo "$tampung[id_user]"; ?><input type="hidden" id="idUser" value=<?
        echo $tampung["id_user"];?> /></td>
                                </tr>
                                <tr>
                                	<th class="label">Nama:</th>
                                    <td class="data"><? echo "$tampung[Nama]"; ?></td>
                                </tr>
                                <tr>
                               
                                 <?
                                      $tglLahir = $tampung[TglLahir];
                                      $dateTime = new DateTime($tglLahir);
                                      $tanggal = $dateTime->format("d M Y");
                                      

                                ?>
                                	<th class="label">Tanggal Lahir:</th>
                                    <td class="data"> <? echo "$tanggal"; ?></td>
                                </tr>
                                <tr>
                                	<th class="label">Alamat:</th>
                                    <td class="data"><span id="spanAlamat">
		<? echo $tampung["Alamat"]; ?></span>
        <? echo "<input type='text' id='txtAlamat' style='display:none'
         value='$tampung[Alamat]' /></td>"; ?></td>
                                </tr>
                                <tr>
                                	<th class="label">Email:</th>
                                    <td class="data"><span id="spanEmail"><? echo $tampung["email"]; ?></span>
         <? echo "<input type='text' id='txtEmail' style='display:none'
         value='$tampung[email]' /></td>"; ?>  </td>
                                </tr>
                                <tr>
                                	<th class="label">Hobi:</th>
                                    <td class="data"><span id="spanHobi"><? echo $tampung["hobi"];?></span><textarea id="txtHobi" style="display:none"><? echo $tampung["hobi"]; ?></textarea></td>
                                </tr>
                                <tr>
                                	<th class="label">Tentangku:</th>
                                    <td class="data"><span id="spanDeskripsi"><? echo $tampung["deskripsi"];?></span><textarea id="txtDeskripsi" style="display:none"><? echo $tampung["deskripsi"]; ?></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        