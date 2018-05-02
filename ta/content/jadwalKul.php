<? session_start();
include "lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$query=mysql_query("SELECT * FROM ubaya.mkbuka ORDER BY ThnAkademik DESC");
$fetchAkhir = mysql_fetch_array($query);

$sql = mysql_query("SELECT mb.KodeMk,mk.Nama,mhsmk.KP,mk.sks,jadwal.Hari,jadwal.JamAwal,jadwal.JamAkhir
FROM ubaya.mhsambilmk mhsmk
INNER JOIN ubaya.mkbuka mb ON mb.KodeMkBuka = mhsmk.KodeMkBuka
INNER JOIN ubaya.mkbukajadwal jadwal ON jadwal.KodeMkBuka = mb.KodeMkBuka
INNER JOIN ubaya.matakuliah mk ON mb.KodeMk = mk.KodeMk
WHERE mhsmk.NRP = '$masterAmbilSemua[id_user]'
AND mb.ThnAkademik= '$fetchAkhir[ThnAkademik]' AND mb.Semester= '$fetchAkhir[Semester]'");

				$jumField = mysql_num_fields($sql);
                $jumRow = mysql_num_rows($sql);

?>
    <div class="art-Post-inner">
                Input berdasarkan tahun ajaran<select onchange="javascript:cariJadwalKul();" id="semester">
                <option value="2009-1">Gasal 2009</option>
                <option value="2009-2">Genap 2009</option>
                <option value="2010-1">Gasal 2010</option>
                <option value="2010-2">Genap 2010</option></select>  <br /> <br /> 
                <span id="tampilJadwalKul">
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
                
                </span>
             
                    <div class="cleared"></div>
    </div>
    
         