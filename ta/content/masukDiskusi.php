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
       <? 
       $idMkBuka = $_GET["idkelas"];
	       $kp = $_GET["kp"];
	   
$sql = mysql_query("SELECT k.NPK as NPK,k.Nama as namadosen,mk.Nama as namamk FROM ubaya.mkbuka mkb,
				   ubaya.dosenajarmkbuka dm,  ubaya.karyawan k, ubaya.matakuliah mk   where 
				   dm.KodeMkBuka=mkb.KodeMkBuka AND mk.KodeMk=mkb.KodeMk AND 
				   mkb.KodeMkBuka='$idMkBuka' AND k.NPK=dm.NPK") or die (mysql_error());

$row = mysql_fetch_array($sql);

echo "<h1> $row[namamk] KP $kp</h1> <br>";

echo "<b> Dosen : </b> <a href='profile.php?id=$row[NPK]'>$row[namadosen]</a> <br><br> ";

echo "<b> Daftar Mahasiswa : <br><br> <table border=0 width='90%'>";

$sql = mysql_query("SELECT mhs.NRP as NRP,mhs.Nama FROM ubaya.mkbuka mkb,
				   ubaya.mahasiswa mhs , ubaya.mhsambilmk mam where mam.KP = '$kp' AND
				   mhs.NRP=mam.NRP  AND mkb.KodeMkBuka = mam.KodeMKBuka AND mkb.KodeMkBuka='$idMkBuka' ")
or die (mysql_error());

			$isi=3;
			$ndata=mysql_num_rows($sql);
						   
			while ($row = mysql_fetch_array($sql))
			{
			 if ($isi==3)
			 {
	  		  echo "<tr>";
			  $isi=0;
	 		 }
            ?> 
                <td>
                <?
				echo $row["Nama"];
				?>
                </td>
              <? 
    	      $isi++;
			  if ($isi==3)
			  { echo "<tr>";	}

			} 

			if ($ndata<3)	  
			  {
				 for ($i=$isi;$i<=3;$i++)
				 {?> <td>&nbsp;</td><? }
				 ?></tr> <?
			  }
			?>    
                </table>

<?

echo "<h3> List File Bahan </h3>"; 
while($row = mysql_fetch_array($sql))
{
	echo "<a href='masukDiskusi.php?idkelas=$row[KodeMkBuka]'>$row[Nama]</a><br>";
}
	   
	   
	   
	   $sqlAmbilFile = mysql_query("SELECT * FROM tgsakhir.diskusikelas dk WHERE dk.KodeMkBuka='".$idMkBuka. "'");
	   while($row = mysql_fetch_array($sqlAmbilFile))
	   {
		   echo "<a href='$row[file_path]' target='_blank'>$row[nama_file]</a><br>";
		}
	   
	   ?>
<br />
<form method="post" enctype="multipart/form-data" action="uploadProsesDK.php">
<? echo "<input type='hidden' value='$idMkBuka' name='idMkBuka' >"; ?> 
<? echo "<input type='hidden' value='$kp' name='kp' >"; ?> 
<table>
<tr>
<td>File 1 :</td><td><input type="file" id="file0" name="file0" /></td>
</tr>

<tr><td colspan="2"><p>
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                                        <input type="submit" class="art-button" value="Simpan File"/>
                                            		</span>
                                            	</p></td></tr>
</table>                   
</form>                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    