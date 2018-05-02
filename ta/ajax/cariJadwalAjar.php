<? session_start();  ?>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />

<?
/*
require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
*/
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester=$_POST["semester"];
$sem = explode("-",$semester);
	/*
				$sql = mysql_query("SELECT kelas.id_mk,jadwalkul.id_kelas, jadwalkul.hari, jadwalkul.jamMulai, jadwalkul.jamSelesai, matkul.nama_matkul,kelas.id_kp,jadwalkul.id_ruang
FROM kelas
INNER JOIN jadwalkul ON jadwalkul.id_kelas = kelas.id_kelas
INNER JOIN matkul ON kelas.id_mk = matkul.id_matkul
AND kelas.id_dosen = '$masterAmbilSemua[id_user]'
AND kelas.id_semester = '$semester'");
				*/
if($sem[1]=="1") $sem[1]="gasal";
else if($sem[1]=="2") $sem[1]="genap";
				$sql=mysql_query("SELECT DISTINCT mb.KodeMk,mk.Nama,ajarmk.KP,mk.sks,jadwal.Hari,jadwal.JamAwal,jadwal.JamAkhir
FROM ubaya.dosenajarmkbuka ajarmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = ajarmk.KodeMkBuka
INNER JOIN ubaya.mkbukajadwal jadwal ON jadwal.KodeMkBuka = mb.KodeMkBuka
INNER JOIN ubaya.matakuliah mk ON mb.KodeMk = mk.KodeMk
WHERE ajarmk.NPK = '$masterAmbilSemua[id_user]'
AND mb.ThnAkademik= '$sem[0]' AND mb.Semester= '$sem[1]'");
				
				$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				echo "<table align='center' cellspacing='0' border='0' id='myTable' > ";
				echo "<tr align=center><th scope='col' class='tabelkerenth'>Id Mata Kuliah</th><th scope='col' class='tabelkerenth'>Id Kelas</td><th scope='col' class='tabelkerenth'>Hari</th><th scope='col' class='tabelkerenth'>Jam Mulai</th><th scope='col' class='tabelkerenth'>Jam Selesai</th><th scope='col' class='tabelkerenth'>Nama Matkul</th><th scope='col' class='tabelkerenth'>KP</th><th scope='col' class='tabelkerenth'>Detail</th></tr>";
				
				for($i=0;$i<$jumRow;$i++)
				{
                echo "<tr>";
                $fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
                    if($i%2!=0) $kelas = "tabelkerentd alt";
					else  $kelas = "tabelkerentd";
					for($a=0;$a<$jumField+1;$a++)
					if($a==7)
					echo "<td class='$kelas' width='20%'><a href=\"javascript:bukaHalMurid('$fetchArray[0]','$semester','$fetchArray[2]')\">Lihat</a></td>";
					else
					echo "<td class='$kelas' width='20%'>$fetchArray[$a]</td>";
					
					echo "</tr>";
					
				}
				
				
				echo "</table>";
				
                //include "../content/simpanSession.php";



?>
