<? session_start(); 
/*
require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
*/
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester=$_POST["semester"];

$sem = explode("-", $semester);
if($sem[1]=="1") $sem[1]="gasal";
else if($sem[1]=="2") $sem[1]="genap";
				$sql = mysql_query("SELECT DISTINCT mb.KodeMk,mk.Nama,mb.UTSTgl,mb.UASTgl FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.mkbukajadwal jadwal ON jadwal.KodeMkBuka = mb.KodeMkBuka
INNER JOIN ubaya.matakuliah mk ON mb.KodeMk = mk.KodeMk
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mb.ThnAkademik= '$sem[0]' AND mb.Semester= '$sem[1]'");
				
				$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				
				echo "<table align='center' cellspacing='0' border='0' id='myTable' > ";
				echo "<tr align=center>
                <th scope='col' class='tabelkerenth' align='center'>Id Mata Kuliah</th>
                <th scope='col' class='tabelkerenth' align='center'>Mata Kuliah</th>
                <th scope='col' class='tabelkerenth' align='center'>Tanggal UTS</th>
                <th scope='col' class='tabelkerenth' align='center'>Tanggal UAS</th>";
				for($i=0;$i<$jumRow;$i++)
				{
				
					
					echo "<tr align='center' >";
					$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
                    if($i%2!=0) $kelas = "tabelkerentd alt";
					else  $kelas = "tabelkerentd";
                    
					for($a=0;$a<$jumField;$a++)
					
				
					echo "<td class='$kelas' width='20%'>$fetchArray[$a]</td>";
					
					echo "</tr>";
					
				}
				echo "</table>";
				
                //include "../content/simpanSession.php";



?>
