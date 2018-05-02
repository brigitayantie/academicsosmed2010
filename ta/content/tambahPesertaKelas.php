<? session_start(); ?> 

<html>
<head>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../style/redmond/jquery-ui-1.8.1.custom.css" type="text/css" media="screen" />
<script language="javascript" src="../script/ajax.js" type="text/javascript"></script>
<script language="javascript" src="../script/CalendarPopup.js" type="text/javascript"></script>

<script language="javascript" src="../script/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script language="javascript" src="../script/jquery/jquery-ui-1.8.1.custom.min.js" type="text/javascript"></script>

    
</head>
<body>

<?
   require ("lib/sambungDatabase.php");
   
$masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$semester = $_GET["semester"];
$idKelas = $_GET["idKelas"];

?>
<div class="art-Post">
        <div class="art-Post-tl"></div>
        <div class="art-Post-tr"></div>
        <div class="art-Post-bl"></div>
        <div class="art-Post-br"></div>
        <div class="art-Post-tc"></div>
        <div class="art-Post-bc"></div>
        <div class="art-Post-cl"></div>
        <div class="art-Post-cr"></div>
        <div class="art-Post-cc"></div>
        <div class="art-Post-body">
    <div class="art-Post-inner">
                    
<h4>Tambah Mata Kuliah</h4>
<?
	$sql = mysql_query("SELECT kelas.id_kelas,matkul.id_matkul,matkul.nama_matkul,kelas.id_kp,jadwalkul.hari,jadwalkul.jamMulai,jadwalkul.jamSelesai,jadwalkul.id_ruang FROM matkul INNER JOIN kelas ON kelas.id_mk = matkul.id_matkul INNER JOIN jadwalkul ON jadwalkul.id_kelas=kelas.id_kelas");
				$jumRow = mysql_num_rows($sql);
				$jumField = mysql_num_fields($sql);
				echo "<table border=1 id='kelas'>";
				echo "<tr align=center><td>Id Kelas</td><td>Id Mata Kuliah</td><td>Nama Matkul</td><td>KP</td><td></tr>";
				for($i=0;$i<$jumRow;$i++)
				{
					$j=$i+1;
					echo "<tr align='center'>";
					$fetchArray = mysql_fetch_array($sql,MYSQL_BOTH);
					for($a=0;$a<$jumField+1;$a++)
					{
					$b=$i+1;
					if($a==0) echo "<td>$b</td>";
					if($a==($jumField)) echo "<td><a href='#' onclick='javascript:tambahPesertaKelas($j);'>Pilih</a></td>";
					else
					echo "<td>$fetchArray[$a]</td>";
					}
					echo "</tr>";
					
				}
				
?>				
</table>
<table class="biasa" id="simpanKelas"><tr><td>No</td><td>Tanggal</td><td>Jam</td><td>Ruang</td><td>Bahan</td></tr></table>


      <div id="testdiv1"></div>
      <span id="tombolTambah" style="display:none"><div>
<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                  <? echo "<a class=\"art-button\" href=\"#\" onclick=\"javascript:simpanMIK();\">Simpan</a>"; ?>
                                            		</span>
</div></span>


</div>      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    
    
</body>
</html>