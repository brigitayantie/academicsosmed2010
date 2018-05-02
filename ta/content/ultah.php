
<div class="art-Block">
    <div class="art-Block-body">
                <div class="art-BlockHeader">
                    <div class="l"></div>
                    <div class="r"></div>
                    <div class="art-header-tag-icon">
                        <div class="t">Ulang Tahun</div>
                    </div>
                </div><div class="art-BlockContent">
                    <div class="art-BlockContent-tl"></div>
                    <div class="art-BlockContent-tr"></div>
                    <div class="art-BlockContent-bl"></div>
                    <div class="art-BlockContent-br"></div>
                    <div class="art-BlockContent-tc"></div>
                    <div class="art-BlockContent-bc"></div>
                    <div class="art-BlockContent-cl"></div>
                    <div class="art-BlockContent-cr"></div>
                    <div class="art-BlockContent-cc"></div>
                    <div class="art-BlockContent-body">
                       <?
                       $hari = date('d');
                        $bulan = date('F');
                      
/*
                     $sql=mysql_query("SELECT DISTINCT Nama, DAYOFMONTH( TglLahir ) , MONTHNAME( TglLahir )
FROM user INNER JOIN teman ON teman.id_subyek = user.id_user OR teman.id_obyek = user.id_user WHERE DAYOFMONTH( tglLahir ) = '$hari' AND MONTHNAME( tglLahir ) = '$bulan' AND user.id_user <> '$masterAmbilSemua[id_user]'");
  */                  
                     $sql=mysql_query("SELECT DISTINCT tabel.id,tabel.Nama, DAYOFMONTH( tabel.TglLahir ) , MONTHNAME( tabel.TglLahir )
FROM (

SELECT mhs.NRP as id,mhs.TglLahir, mhs.Nama
FROM ubaya.mahasiswa mhs
INNER JOIN tgsakhir.teman t ON t.id_subyek = mhs.NRP
OR t.id_obyek = mhs.NRP
WHERE DAYOFMONTH( mhs.TglLahir ) = '$hari'
AND MONTHNAME( mhs.TglLahir ) = '$bulan'
AND mhs.NRP <>

'$masterAmbilSemua[id_user]' UNION SELECT dsn.NPK as id,dsn.TglLahir, dsn.Nama
FROM ubaya.karyawan dsn
INNER JOIN tgsakhir.teman t ON t.id_subyek = dsn.NPK
OR t.id_obyek = dsn.NPK
WHERE DAYOFMONTH( dsn.TglLahir ) = '$hari'
AND MONTHNAME( dsn.TglLahir ) = '$bulan'
AND dsn.NPK <>

'$masterAmbilSemua[id_user]'
)tabel");
					 $jumRow = mysql_num_rows($sql);
					 $today = date("j F, Y, g:i a");
					// echo "$today <br />";
                    if($jumRow == 0) echo "Tidak ada yang berulang tahun hari ini";
					for($i=1;$i<=$jumRow;$i++)
					{
  					$cariSemua=mysql_fetch_array($sql);
					echo "<a href='profile.php?id=$cariSemua[id]'>$cariSemua[Nama]</a> hari ini<br />";
					}
                    
                    
   
                    $ultah = date('d-m');//tanggal sekarang misal 28-10-2008
 
 
/* query SQL untuk menampilkan artikel berdasarkan bulan dan tahun
yang diambil dari parameter link
# Y - year segment
# M - month segment
# D - day segment
$query = "SELECT * FROM users WHERE date_format(tanggal_lahir, '%D-%M-%Y') = '$ultah' ORDER BY nama_lengkap ASC";

 
$query = "SELECT * FROM tgsakhir.mahasiswa mhs WHERE date_format(mhs.TglLahir, '%D-%M-%Y') = '$ultah' ORDER BY mhs.Nama ASC";
echo "SELECT * FROM tgsakhir.mahasiswa mhs WHERE date_format(mhs.TglLahir, '%D-%M') = '$ultah' ORDER BY mhs.Nama ASC";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
     echo "<h1>Hari ini yang ultah</h1>";
     echo "<p>$data[Nama]</p>";
} 
*/
                       ?> 
                        
                    </div>
                </div>
        <div class="cleared"></div>
    </div>
</div>
