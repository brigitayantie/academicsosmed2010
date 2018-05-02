<? session_start(); ?>
<input type="hidden" id="idJurusan"  />

<? 
require "../../lib/config.inc.php"; 
   require "../../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
   $hari[0] = "senin";
   $hari[1] = "selasa";
   $hari[2] = "rabu";
   $hari[3] = "kamis";
   $hari[4] = "jumat";
   $hari[5] = "sabtu";

function enum_select( $table , $field ){
$query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
$result = mysql_query( $query ) or die( 'error getting enum field ' . mysql_error() );
$row = mysql_fetch_array( $result , MYSQL_NUM );
#extract the values
#the values are enclosed in single quotes
#and separated by commas
$regex = "/'(.*?)'/";
preg_match_all( $regex , $row[1], $enum_array );
$enum_fields = $enum_array[1];
return( $enum_fields );
} 


$jenis = $_POST["jns"];


if($jenis=="mku")
{


$query="SELECT Distinct
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang,user.sebagai 
FROM matkul INNER JOIN kelas ON kelas.id_mk=matkul.id_matkul 
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas 
INNER JOIN user ON user.id_user=kelas.id_dosen
WHERE matkul.ket='MKU'";

?>

<?
}
else if($jenis=="nonmku")
{
	
/*
$query = "SELECT Distinct
jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang FROM matkul,kelas,jadwalkul,user
WHERE 	matkul.ket='MKU'
AND			kelas.id_mk=matkul.id_matkul
AND			kelas.id_kelas=jadwalkul.id_kelas
AND			user.id_user=kelas.id_dosen";
*/
$jur = $_POST["jur"];
$query="SELECT Distinct
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang,user.sebagai
FROM tbljurusanpnymatkul
INNER JOIN matkul ON tbljurusanpnymatkul.id_matkul = matkul.id_matkul
INNER JOIN kelas ON kelas.id_mk=matkul.id_matkul 
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas 
INNER JOIN user ON user.id_user=kelas.id_dosen
WHERE tbljurusanpnymatkul.id_jurusan='$jur'";

}
else  if($jenis=="hari")
{
	$hari = $_POST["hari"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM jadwalkul
INNER JOIN kelas ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user=kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk=matkul.id_matkul 
WHERE jadwalkul.hari='$hari'";
}

else  if($jenis=="jamMulai")
{
	$jamMulai = $_POST["jamMulai"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM jadwalkul
INNER JOIN kelas ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user=kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk=matkul.id_matkul 
WHERE jadwalkul.jamMulai='$jamMulai'";
}

else  if($jenis=="idMatkul")
{
	$idMatkul= $_POST["idMatkul"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM kelas
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user=kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk=matkul.id_matkul 
WHERE kelas.id_mk LIKE '%$idMatkul%'";
}

else  if($jenis=="namaMatkul")
{
	$nmMatkul= $_POST["nmMatkul"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM matkul
INNER JOIN kelas ON kelas.id_mk=matkul.id_matkul 
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user=kelas.id_dosen
WHERE matkul.nama_matkul LIKE '%$nmMatkul%'";
}

else  if($jenis=="idDosen")
{
	$idDosen= $_POST["idDosen"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM kelas
INNER JOIN user ON user.id_user=kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk=matkul.id_matkul 
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas
WHERE kelas.id_dosen LIKE '%$idDosen%'";
}

else  if($jenis=="nmDosen")
{
	$nmDosen= $_POST["nmDosen"];
	$query="SELECT DISTINCT
jadwalkul.id_jadwalkul,jadwalkul.id_kelas,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.hari,matkul.id_matkul,matkul.nama_matkul,user.id_user,
user.nama,jadwalkul.id_ruang
FROM user
INNER JOIN kelas ON user.id_user=kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk=matkul.id_matkul 
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas
WHERE user.nama LIKE '%$idDosen%'";
}

else  if($jenis=="ruang")
{
	$ruang= $_POST["ruang"];
		$query="SELECT DISTINCT jadwalkul.id_jadwalkul, jadwalkul.id_kelas, jadwalkul.jamMulai, jadwalkul.jamSelesai, jadwalkul.hari, matkul.id_matkul, matkul.nama_matkul, user.id_user, user.nama, jadwalkul.id_ruang
FROM jadwalkul
INNER JOIN kelas ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user = kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk = matkul.id_matkul
WHERE jadwalkul.id_ruang LIKE '%$ruang%'";
}

else  if($jenis=="idKelas")
{
	$idKelas= $_POST["idKelas"];
		$query="SELECT DISTINCT jadwalkul.id_jadwalkul, jadwalkul.id_kelas, jadwalkul.jamMulai, jadwalkul.jamSelesai, jadwalkul.hari, matkul.id_matkul, matkul.nama_matkul, user.id_user, user.nama, jadwalkul.id_ruang
FROM jadwalkul
INNER JOIN kelas ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN user ON user.id_user = kelas.id_dosen
INNER JOIN matkul ON kelas.id_mk = matkul.id_matkul
WHERE jadwalkul.id_kelas LIKE '%$idKelas%'";
}

//$id_jadwalkul = db->query_first($query);
?>
<input type="hidden" id="perintah" value="<? echo $id_jadwalkul; ?>" />
<?

$hasilQuery = mysql_query($query);
$jumRow = mysql_num_rows($hasilQuery);

$rows = $db->fetch_all_array($query);
	$jumField = mysql_num_fields($hasilQuery);	
	$b=0;
	?>
	<table class="art-article"  border="1" width='90%'>
                                              <tr align="center">
                                                <td>Id Kelas</td>
                                                <td>Jam Mulai</td>
                                                <td >Jam Selesai</td>
                                                <td >Hari</td>
                                                <td >Id Matkul</td>
                                                <td >Nama Matkul</td>
                                                <td >Id Dosen</td>
                                                <td >Nama Dosen</td>
                                                <td >Ruang</td>
                                              </tr>
	<?
	/*
	foreach($rows as $record)
	{
		echo "<tr>";
		for($a=0;$a<$jumField;$a++)
		{
			echo "<td>";
			$abc =  $rows[$b];
			echo $abc[$a];		
			echo "</td>";
		}
		echo "</tr>";
		$b++;
		
			}*/
	
	$i=0;
		foreach($rows as $record)
	{
		$sql = mysql_query("SELECT DISTINCT jurusan.id_jurusan,fakultas.nama_fakultas, jurusan.nama_jurusan
FROM tbljurusanpnymatkul
INNER JOIN jurusan ON tbljurusanpnymatkul.id_jurusan = jurusan.id_jurusan
INNER JOIN fakultas ON jurusan.id_fakultas = fakultas.id_fakultas
WHERE  tbljurusanpnymatkul.id_matkul='$record[5]'");
		$fetchSemua = mysql_fetch_array($sql);
		$jum = mysql_num_rows($sql);
		$namaF = $fetchSemua["nama_fakultas"];
		$namaJ = $fetchSemua["nama_jurusan"];
		$idJ = $fetchSemua["id_jurusan"];

		echo "<tr>";
		/*
		$idUser = $rows[$i][id_user];
	*/
		echo"<td>$namaF</td><td>$namaJ</td>";
		for($a=0;$a<$jumField;$a++)
		{
		
			
			$flags= mysql_field_flags($hasilQuery,$a);
			$length= mysql_field_type($hasilQuery,$a);
			$fieldName= mysql_field_name($hasilQuery,$a);
			$query1 = "SELECT id_jurusan FROM tbljurusanpnydosen WHERE id_dosen='$record[7]'";
			
$hasilQuery1 = mysql_query($query1);
$jumRow1 = mysql_num_rows($hasilQuery1);
$rows1 = $db->fetch_all_array($query1);
foreach($rows1 as $record1)
$jur=$record1[0];
			//echo $fieldName;
			//if($flags=="enum")
			if($a=="4")
			{
				
			$nilaiEnum = enum_select("jadwalkul",$fieldName);
			//$tipeEnum=explode(",",$record[$a]);
			//echo count($nilaiEnum);
			//echo $nilaiEnum[0];
			echo "<td><span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>
			<select id='txt" . $a . "[$i]' style='display:none;'/>";
			for($z=0;$z<count($nilaiEnum);$z++)
			{
			echo "<option value='$nilaiEnum[$z]'>$nilaiEnum[$z]</option>";
			
			}
			echo "</select></td>";
			}
			else if($a=="2"||$a=="3")
			{
				
			$nilaiEnum = enum_select("jadwalkul",$fieldName);
			//$tipeEnum=explode(",",$record[$a]);
			//echo count($nilaiEnum);
			//echo $nilaiEnum[0];
			echo "<td><span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>
			<select id='txt" . $a . "[$i]' style='display:none;'/>";
			for($z=0;$z<count($nilaiEnum);$z++)
			{
			echo "<option value='$nilaiEnum[$z]'>$nilaiEnum[$z]</option>";
			
			}
			echo "</select></td>";
			}
			else if($a=="5"||$a=="6")
			{
			$query2 = "SELECT * FROM matkul WHERE 	matkul.ket='MKU'";
		if($record[10]!="DosenMKU") 
		{
		
			$query2 = "SELECT Distinct matkul.id_matkul,matkul.nama_matkul FROM tbljurusanpnymatkul INNER JOIN matkul ON tbljurusanpnymatkul.id_matkul=matkul.id_matkul WHERE 	id_jurusan='$jur'";
		
		}
$hasilQuery2 = mysql_query($query2);
$jumRow2 = mysql_num_rows($hasilQuery2);
$rows2 = $db->fetch_all_array($query2);
		
	echo"<td><span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>";
	


if($a=="5")
{
	echo "<select id='txt" . $a . "[$i]' onchange='javascript:gantiSelect($a+1,$i,$a);' style='display:none;'/>";


//echo "<option value='$record[id_matkul]'>$record[id_matkul]</option>";
foreach($rows2 as $record2)
	{
		//if($record2[id_matkul]!=$record[id_matkul])	
		echo "<option value='$record2[id_matkul]'>$record2[id_matkul]</option>";
	}

	echo "</select></td>";
}

	else if($a=="6")
{

echo "<select id='txt" . $a . "[$i]' onchange='javascript:gantiSelect($a-1,$i,$a);' style='display:none;'/>";
//echo "<option value='$record[id_matkul]'>$record[nama_matkul]</option>";
	foreach($rows2 as $record2)
	{
		//if($record2[id_matkul]!=$record[id_matkul])	
		echo "<option value='$record2[nama_matkul]'>$record2[nama_matkul]</option>";
	}	
	
	echo "</select></td>";
}

			}
				else if($a=="7"||$a=="8")
			{
			$query2 = "SELECT * FROM user WHERE 	sebagai='DosenMKU'";
		if($record[10]!="DosenMKU") 
		{
			$query2 = "SELECT Distinct user.id_user, user.nama FROM tbljurusanpnydosen INNER JOIN user ON tbljurusanpnydosen.id_dosen=user.id_user WHERE 	tbljurusanpnydosen.id_jurusan='$jur'";
		
		}
$hasilQuery2 = mysql_query($query2);
$jumRow2 = mysql_num_rows($hasilQuery2);
$rows2 = $db->fetch_all_array($query2);
		
	echo"<td><span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>";
	


if($a=="7")
{
	echo "<select id='txt" . $a . "[$i]' onchange='javascript:gantiSelect($a+1,$i,$a);' style='display:none;'/>";


//echo "<option value='$record[id_user]'>$record[id_user]</option>";
foreach($rows2 as $record2)
	{
		//if($record2[id_user]!=$record[id_user])	
		echo "<option value='$record2[id_user]'>$record2[id_user]</option>";
	}

	echo "</select></td>";
}

	else if($a=="8")
{

echo "<select id='txt" . $a . "[$i]' onchange='javascript:gantiSelect($a-1,$i,$a);' style='display:none;'/>";
//echo "<option value='$record[nama]'>$record[nama]</option>";
	foreach($rows2 as $record2)
	{
		//if($record2[id_user]!=$record[id_user])	
		echo "<option value='$record2[nama]'>$record2[nama]</option>";
		
	}	
	
	echo "</select></td>";
	
	
	
}

			}
			else if($a==10)
			
			{
				
			echo "
			<td>
			<span id='span" . $a . "[$i]' style='display:none;'>$record[$a]</span>
			<input  size='5' type='text' value='$record[$a]' id='txt" . $a . "[$i]' style='display:none;'>
			</td>
			";
			}
	
			else
			
			{
				
			echo "
			<td>
			<span id='span" . $a . "[$i]' style='display:inline;'>$record[$a]</span>
			<input  size='5' type='text' value='$record[$a]' id='txt" . $a . "[$i]' style='display:none;'>
			</td>
			";
			}//$data[$a] = $record[$a];

		}
	
		echo "<td><a href='#' onclick='javascript:openmypage2($idJ);'>Tambah Peserta</td><td><a href='#' onclick='javascript:editKelas($i,$jumField);'><span id='edit[$i]'>Edit</span></a> 

		<a href='#' onclick='javascript:edit2Kelas($i,$jumField);'><span id='simpan[$i]' style='display:none'>Simpan</span></a> /
		
		<a href='#' onclick='javascript:hapusKelas($record[id_user]);'>Hapus</a> </td>";
		
		echo "</tr>";
		$i++;
	}


echo "</table>";
//hasil xmlHttpResponseText

?>
