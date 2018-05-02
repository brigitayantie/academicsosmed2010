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
	$sem = explode("-",$semester);
	if($sem[1]=="1") $sem1[1] = "gasal";
	else $sem1[1] = "genap";
	$sql = mysql_query("SELECT mhsmk.KodeMkBuka,mhsmk.KP,matkul.Nama FROM mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = mb.KodeMk
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]' AND mb.Semester = '$sem1[1]' AND mb.ThnAkademik = '$sem[0]'");
	

	$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				
				
				echo "<select id='mhsikutkelas'  onchange='javascript:cariJadwalKuis($semester);' onclick='javascript:cariJadwalKuis($semester);'>";
				for($i=0;$i<$jumRow;$i++)
				{
					$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
					echo "<option value='$fetchArray[0]-$fetchArray[1]'>$fetchArray[2]</option>";
				}
				echo "</select>";						
				?><br />
				<span id="tampilKT"></span>




