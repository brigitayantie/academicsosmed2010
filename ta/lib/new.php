<?
require_once "../../lib/Database.class.php";
require_once "../../lib/Upload.class.php";
$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$db->connect();

$query = "Select * From skill Order By nama";
$skills = $db->fetch_all_array($query);
			
$data = array();
$data[id]	        = $_POST['nomorid'];
$data[nama]   	    = $_POST['nama'];
$data[sex]   	    = $_POST['sex'];
$data[tempatlahir]  = $_POST['tempatlahir'];
$data[tanggallahir] = $_POST['tanggallahir'];
$data[alamat]       = $_POST['alamat'];
$data[kota]         = $_POST['kota'];
$data[kodepos]      = $_POST['kodepos'];
$data[telepon]      = $_POST['telepon'];
$data[hp]      		= $_POST['hp'];
$data[email]        = $_POST['email'];
$data[jenis]		= 'PENGAJAR';

$query = "Select id From manusia Where id='$data[id]'";
$db->query_first($query);
if ($db->affected_rows > 0) {
	$existingid="Nomor ID sudah ada";
}
else {
	if (!empty($_POST['nomorid'])) {
		$db->query_insert("manusia", $data);
		if ($db->affected_rows==1) {
			$berhasil = true;			
			
			$objUpload = new Upload($_FILES['foto']);
			if($objUpload->uploaded) {				
				$objUpload->file_new_name_body = $data[id];
				if ($objUpload->image_src_x > 120) {
					$objUpload->image_resize = true;
					$objUpload->image_x = 120;
					$objUpload->image_ratio_y = true;
				}
				
				if ($objUpload->image_src_y > 180) {
					$objUpload->image_resize = true;
					$objUpload->image_y = 180;
					$objUpload->image_ratio_x = true;
				}
				
				$objUpload->image_convert = png;

				$objUpload->Process('../../img/pengajar/');
				if ($objUpload->processed) {
					$objUpload->Clean();
				} else {
					
				}
			}			
			
			$query = "Delete From skill_manusia Where id_manusia='$data[id]'";
			$db->query($query);
			
			$keahlian[id_manusia] = $data[id];
			
			
			foreach($skills as $skill) {
				$namapostskill = "skill_$skill[id]";
				if ($_POST[$namapostskill]) {
					$keahlian[id_skill] = $skill[id];
					$db->query_insert("skill_manusia", $keahlian);
				}
			}
		}
	}
}
if ($berhasil) {
	$hasil = "<img id='imgload' src='../../img/icon_tick2.gif' border='0'> Data berhasil ditambahkan";
	
	unset($_POST['nomorid']);
	unset($_POST['nama']);
	unset($_POST['tempatlahir']);
	unset($_POST['tanggallahir']);
	unset($_POST['sex']);
	
	unset($_POST['foto']);
	unset($_POST['alamat']);
	unset($_POST['kota']);
	unset($_POST['kodepos']);
	unset($_POST['telepon']);
	unset($_POST['hp']);
	unset($_POST['email']);
	unset($_POST['tambah']);
	
	unset($data);
	unset($keahlian);
		
	foreach($skills as $skill) {
		$namapostskill = "skill_$skill[id]";
		unset ($_POST[$namapostskill]);
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../../style/general.css" rel="stylesheet" type="text/css" />
<title>Tambah Pengajar</title>

<link href="../../style/menu/helper.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Beginning of compulsory code below -->

<link href="../../style/menu/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../../style/menu/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="../../script/jquery/jquery.js"></script>
<script type="text/javascript" src="../../script/jquery/jquery.dropdown.js"></script>
<![endif]-->

<link rel="stylesheet" href="../../style/button.css" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" href="../../style/button.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="../../style/button.ie7.css" type="text/css" media="screen" /><![endif]-->

<!-- / END -->


<script language="javascript" src="../../script/general.js" type="text/javascript"></script>

<link href="../../style/redmond/jquery-ui-1.8.1.custom.css" rel="stylesheet" type="text/css"/>
<script src="../../script/jquery/jquery-1.4.2.min.js"></script>
<script src="../../script/jquery/jquery-ui-1.8.1.custom.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#tanggallahir").datepicker({
			showOn: 'button',
			buttonImage: '../../img/calendar2.png',
			buttonImageOnly: true,
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-80:c'
		});
	});
	</script>
    
<script language="javascript">
	var d = document;
	
	function Cek() {
		var no_err=true;
		d.getElementById("errnama").innerHTML = "";
		d.getElementById("errsex").innerHTML = "";
		d.getElementById("errnomorid").innerHTML = "";
		d.getElementById("errtempatlahir").innerHTML = "";
		d.getElementById("erralamat").innerHTML = "";
		d.getElementById("errkota").innerHTML = "";
		
		if (!d.getElementById("sexp").checked && !d.getElementById("sexl").checked) {
			no_err=false;
			d.getElementById("errsex").innerHTML = "Jenis kelamin harus diisi";
			d.getElementById("sexl").focus();			
		}
		if (d.getElementById("kota").value == "") {
			no_err=false;
			d.getElementById("errkota").innerHTML = "Kota harus diisi";
			d.getElementById("kota").focus();			
		}
		if (d.getElementById("alamat").value == "") {
			no_err=false;
			d.getElementById("erralamat").innerHTML = "Alamat harus diisi";
			d.getElementById("alamat").focus();			
		}
		if (d.getElementById("tempatlahir").value == "") {
			no_err=false;
			d.getElementById("errtempatlahir").innerHTML = "Tempat lahir harus diisi";
			d.getElementById("tempatlahir").focus();			
		} else
		if (d.getElementById("tanggallahir").value == "") {
			no_err=false;
			d.getElementById("errtempatlahir").innerHTML = "Tanggal lahir harus diisi";
			d.getElementById("tanggallahir").focus();			
		}
		if (d.getElementById("nama").value == "") {
			no_err=false;
			d.getElementById("errnama").innerHTML = "Nama lengkap harus diisi";
			d.getElementById("nama").focus();			
		}
		if (d.getElementById("nomorid").value == "") {
			no_err=false;
			d.getElementById("errnomorid").innerHTML = "Nomor ID harus diisi";
			d.getElementById("nomorid").focus();			
		}
		
		return no_err;
	}
</script>

</head>

<body>
	
    
<table width="90%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr valign="top">
<td>
<? include "../../global/header.php"; ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="150">
    	<? include "../../global/menu.php"; ?>
    </td>
    <td rowspan="2" class="main-content">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="top-left">&nbsp;</td>
        <td class="content"><h1>Tambah Pengajar</h1></td>
        <td class="top-right">&nbsp;</td>
      </tr>
      <tr>
        <td class="content">&nbsp;</td>
        <td class="content">
        
        <form action="" method="post" onsubmit="javascript: return Cek();" enctype="multipart/form-data">
          <table width="100%" border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td class="namaField">Nomor ID</td>
              <td class="selah">&nbsp;</td>
              <td><input name="nomorid" type="text" class="Textbox" id="nomorid" size="10" maxlength="10" value="<? echo $data['id']; ?>" />&nbsp;<span id="errnomorid" class="err"><? echo $existingid; ?></span></td>
            </tr>
            <tr>
              <td class="namaField">Nama lengkap</td>
              <td class="selah">&nbsp;</td>
              <td><input name="nama" type="text" class="Textbox" id="nama" size="30" maxlength="30" value="<? echo $data['nama']; ?>" />&nbsp;<span id="errnama" class="err"></span></td>
            </tr>
            <tr>
              <td class="namaField">Tempat/ tanggal lahir</td>
              <td class="selah">&nbsp;</td>
              <td><input name="tempatlahir" type="text" class="Textbox" id="tempatlahir" size="15" maxlength="15" value="<? echo $data['tempatlahir']; ?>" /> / <input name="tanggallahir" type="text" id="tanggallahir" size="10" maxlength="10" readonly="readonly" class="Textbox" value="<? echo $data['tanggallahir']; ?>" />&nbsp;<span id="errtempatlahir" class="err"></span></td>
            </tr>
            <tr>
              <td class="namaField">Jenis Kelamin</td>
              <td class="selah">&nbsp;</td>
              <td><input name="sex" id="sexl" type="radio" value="l" /> Pria &nbsp; <input name="sex" id="sexp" type="radio" value="p" /> Wanita&nbsp;<span id="errsex" class="err"></span></td>
            </tr>
            <tr>
              <td class="namaField">Foto</td>
              <td class="selah">&nbsp;</td>
              <td><input name="foto" id="foto" type="file" class="Textbox" size="50" />           
    
              </td>
            </tr>
            <tr>
              <td class="namaField">&nbsp;</td>
              <td class="selah">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="namaField">Alamat</td>
              <td class="selah">&nbsp;</td>
              <td><textarea name="alamat" cols="30" rows="2" class="Textbox" id="alamat"><? echo $data['alamat']; ?></textarea>&nbsp;<span id="erralamat" class="err"></span></td>
            </tr>
            <tr>
              <td class="namaField">Kota</td>
              <td class="selah">&nbsp;</td>
              <td><input name="kota" type="text" class="Textbox" id="kota" size="15" maxlength="15" value="<? echo $data['kota']; ?>" />&nbsp;<span id="errkota" class="err"></span></td>
            </tr>
            <tr>
              <td class="namaField">Kode pos</td>
              <td class="selah">&nbsp;</td>
              <td><input name="kodepos" type="text" class="Textbox" id="kodepos" size="5" maxlength="5" value="<? echo $data['kodepos']; ?>" /></td>
            </tr>
            <tr>
              <td class="namaField">Telepon rumah</td>
              <td class="selah">&nbsp;</td>
              <td><input name="telepon" type="text" class="Textbox" id="telepon" size="20" maxlength="20" value="<? echo $data['telepon']; ?>" /></td>
            </tr>
            <tr>
              <td class="namaField">Telepon selular</td>
              <td class="selah">&nbsp;</td>
              <td><input name="hp" type="text" class="Textbox" id="hp" size="20" maxlength="20" value="<? echo $data['hp']; ?>" /></td>
            </tr>
            <tr>
              <td class="namaField">Email</td>
              <td class="selah">&nbsp;</td>
              <td><input name="email" type="text" class="Textbox" id="email" size="50" maxlength="50" value="<? echo $data['email']; ?>" /></td>
            </tr>
            <tr>
              <td class="namaField">Keahlian</td>
              <td class="selah">&nbsp;</td>
              <td><div style="width: 250px; height: 100px;background-color:#F4F4F4;" name="scrolldiv1" id="scrolldiv1">
              <?
				foreach($skills as $skill) {
					$namapostskill = "skill_$skill[id]";
					if ($keahlian[$namapostskill]=='1') $checked = "checked"; else $checked = "";
					echo "<input name='skill_$skill[id]' type='checkbox' value='1' $checked /> $skill[nama]<br />";
				}
			  ?>
              </div>&nbsp;</td>
            </tr>
            <tr>
              <td class="namaField">&nbsp;</td>
              <td class="selah">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="namaField">&nbsp;</td>
              <td class="selah">&nbsp;</td>
              <td><span id='hasil' class="err"><? echo $hasil; ?></span>&nbsp;</td>
            </tr>
            <tr>
              <td class="namaField">&nbsp;</td>
              <td class="selah">&nbsp;</td>
              <td>
              <span class="art-button-wrapper">
    <span class="l"> </span>
    <span class="r"> </span>
    <input name="tambah" type="submit" class="art-button" id="tambah" value="Tambah" onclick="Cek();" />
    </span></td>
            </tr>
          </table>
    </form>
          <p>&nbsp;</p></td>
        <td class="content">&nbsp;</td>
      </tr>
      <tr>
        <td class="bottom-left">&nbsp;</td>
        <td class="content">&nbsp;</td>
        <td class="bottom-right">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr valign="top">
    <td>s</td>
    </tr>
</table>

  

</td>
</tr>
<? include "../../global/footer.php"; ?>
</table>
</body>
</html>
