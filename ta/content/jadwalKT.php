<? session_start(); ?>


    <div class="art-Post-inner">
                Input berdasarkan tahun ajaran<select onchange="javascript:cariJadwalAjar();" id="semesterAjar">

                <option value="2009-1">Gasal 2009</option>
                <option value="2009-2">Genap 2009</option>
                <option value="2010-1">Gasal 2010</option>
                <option value="2010-2">Genap 2010</option></select>  <br /> <br /> 
                <span id="tampilJadwalAjar"></span>
             
                    <div class="cleared"></div>
    </div>
    
    
         <? /*
require "../lib/config.inc.php"; 
   require "../lib/Database.class.php";
   $db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   $db->connect();
*/
include "lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
/*
$semester=$_POST["semester"];
$idMk=$_POST["mik"];
$mk = explode("-",$idMk);
$gabungan = $mk[0] . $mk[1];
*/
$query=mysql_query("SELECT * FROM ubaya.mhsambilmk mhsmk WHERE mhsmk.NRP='$masterAmbilSemua[id_user]'");
$jumRow1 = mysql_num_rows($query);
$fetchAkhir = mysql_fetch_array($query);
/*
				$sql = mysql_query("SELECT matkul.Nama, jkt.tanggal, jkt.tipe, jkt.jenis_kt, jkt.ke, nilai.nilai, jkt.persen
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = mb.KodeMk
INNER JOIN tgsakhir.jadwalkuistugas jkt ON jkt.id_kelas = '$gabungan'
INNER JOIN tgsakhir.nilai ON nilai.id_kt = jkt.id_kt
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND nilai.id_mhs = '$masterAmbilSemua[id_user]'
AND mhsmk.KodeMkBuka='$mk[0]'
AND mhsmk.KP='$mk[1]'");
	*/			
    for($z=0;$z<$jumRow1;$z++)
    {
    $fetchMam = mysql_fetch_array($query);
$sql = mysql_query("SELECT matkul.Nama, jkt.tanggal, jkt.tipe, jkt.jenis_kt, jkt.ke, nilai.nilai, jkt.persen
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = mb.KodeMk
INNER JOIN tgsakhir.jadwalkuistugas jkt ON jkt.id_kelas = '$fetchMam[KodeMkBuka]'
INNER JOIN tgsakhir.nilai ON nilai.id_kt = jkt.id_kt
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mhsmk.KodeMkBuka='$fetchMam[KodeMkBuka]'
AND mhsmk.KP='$fetchMam[KP]'");
/* echo "SELECT matkul.Nama, jkt.tanggal, jkt.tipe, jkt.jenis_kt, jkt.ke, nilai.nilai, jkt.persen
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = mb.KodeMk
INNER JOIN tgsakhir.jadwalkuistugas jkt ON jkt.id_kelas = '$fetchMam[KodeMkBuka]'
INNER JOIN tgsakhir.nilai ON nilai.id_kt = jkt.id_kt
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mhsmk.KodeMkBuka='$fetchMam[KodeMkBuka]'
AND mhsmk.KP='$fetchMam[KP]'<br />"; */
"SELECT matkul.Nama, jkt.tanggal, jkt.tipe, jkt.jenis_kt, jkt.ke, nilai.nilai, jkt.persen
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.matakuliah matkul ON matkul.KodeMk = mb.KodeMk
INNER JOIN tgsakhir.jadwalkuistugas jkt ON jkt.id_kelas = '$fetchMam[KodeMkBuka]'
INNER JOIN tgsakhir.nilai ON nilai.id_kt = jkt.id_kt
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mhsmk.KodeMkBuka='$fetchMam[KodeMkBuka]'
AND mhsmk.KP='$fetchMam[KP]'";
				$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				
				
				echo "<table id='myTable' cellspacing='0' align='center'>";
				echo "<tr align=center><th scope='col' class='tabelkerenth'>Id Kelas</th><th scope='col' class='tabelkerenth'>Hari</th><th scope='col' class='tabelkerenth'>Minggu ke</th><th scope='col' class='tabelkerenth'>Ke</th><th scope='col' class='tabelkerenth'>Nilai</th><th scope='col' class='tabelkerenth'>%</th></tr>";
				$totalUTS = 0;
				$totalUAS = 0;
				for($i=0;$i<$jumRow;$i++)
				{
				
					
					echo "<tr align='center'>";
					$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
					for($a=0;$a<$jumField;$a++)
					{
						if($a==3)
						{
						echo "<td class='tabelkerentd'>$fetchArray[$a]-$fetchArray[4]</td>";
						$a++;
						}
						else 	if($a==6) echo "<td class='tabelkerentd'>$fetchArray[$a]%</td>";
						else echo "<td class='tabelkerentd'>$fetchArray[$a]</td>";
						
					}
					if($fetchArray[2]=="UTS")
						{
						$jumNilaiUTS = $fetchArray[5]*($fetchArray[6]/100);
						$totalUTS = $totalUTS + $jumNilaiUTS;
				
						
						}
						else 	if($fetchArray[2]=="UAS")
						{
						$jumNilaiUAS = $fetchArray[5]*($fetchArray[6]/100);
						$totalUAS = $totalUAS + $jumNilaiUAS;
						
						}
					echo "</tr>";
					
				}
				echo "</table>";
                echo "<br />";
				$na = ($totalUTS*(40/100)) +  ($totalUAS*(60/100));
				echo "<span id='na'>Nilai Akhir UTS= $totalUTS ; Nilai Akhir UAS = $totalUAS ; Nilai Akhir = $na</span>";
    }


?>
