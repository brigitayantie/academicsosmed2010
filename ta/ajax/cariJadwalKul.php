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
$sql = mysql_query("SELECT mb.KodeMk,mk.Nama,mhsmk.KP,mk.sks,jadwal.Hari,jadwal.JamAwal,jadwal.JamAkhir
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.mkbukajadwal jadwal ON jadwal.KodeMkBuka = mb.KodeMkBuka
INNER JOIN ubaya.matakuliah mk ON mb.KodeMk = mk.KodeMk
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mb.ThnAkademik= '$sem[0]' AND mb.Semester= '$sem[1]'");
				$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				
                /*
				echo "<table>";
				echo "<tr align=center><td>Id Kelas</td><td>Hari</td><td>Jam Mulai</td><td>Jam Selesai</td><td>Nama Matkul</td><td>Ruang</td></tr>";
				for($i=0;$i<$jumRow;$i++)
				{
					echo "<tr align='center'>";
					$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
					for($a=1;$a<$jumField;$a++)
					
					if($a==5)
					{ 					
					  echo "<td><a href='#' onclick=\"javascript:bukaHalBahan('$fetchArray[0]','$semester-$fetchArray[2]')\">$fetchArray[$a]</td>";
					}
					else
					echo "<td>$fetchArray[$a]</td>";
					
					echo "</tr>";
					
				}
				echo "</table>";
				*/
                //include "../content/simpanSession.php";
                ?>
                <table cellspacing="0" border="0" id="myTable" align="center">
                    <tr>
                        <tr align=center>
                            <th scope="col" class="tabelkerenth">Nama Mata Kuliah</th>
                            <th scope="col" class="tabelkerenth">KP</th>
                            <th scope="col" class="tabelkerenth">SKS</th>
                            <th scope="col" class="tabelkerenth">Hari</th>
                            <th scope="col" class="tabelkerenth">Jam Mulai</th>
                            <th scope="col" class="tabelkerenth">Jam Selesai</th>
                            <th scope="col" class="tabelkerenth">Bahan Kuliah</th>
                            
                        </tr>
                    </tr>
                    <?    
                        for($i=0;$i<$jumRow;$i++)
                        {
                        $fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
                        if($i%2!=0)
                        echo "<tr class='specalt'>";
                        else
                        echo "<tr class='spec'>";
                        for($a=1;$a<$jumField;$a++)
						{	
                            echo "<td class='tabelkerentd'>$fetchArray[$a]</td>";
                        }
                        echo "<td class='tabelkerentd'><a href='#' onclick=\"javascript:bukaHalBahan('$fetchArray[0]','$semester-$fetchArray[2]')\">Bahan Kuliah</td>";
                        ?>
                        </tr>
                        <?
                        }
                        ?>
                </table>



