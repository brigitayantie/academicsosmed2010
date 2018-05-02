
                       <?
   require ("../lib/sambungDatabase.php");
   $idForum = $_POST["idForum"];
   
   
     $sql2=mysql_query("SELECT * FROM tgsakhir.forum fr WHERE fr.id_forum=$idForum");


					 $jumRow2 = mysql_num_rows($sql2);
					$cariTopik=mysql_fetch_array($sql2); 
					if($cariTopik[id_admin]==$masterAmbilSemua[id_user])
					 echo "<tr><td align='right'><div align='right'><a href='javascript:tambahTopik();'>Tambah Catatan Baru</a></div></td></tr>";
					
					
					
					 echo "<table class='position'>";					
					echo "<tr><td>";
  					echo "<div class='judul'>$cariTopik[topik]</div>";
					echo "</td></tr>";
					
					echo "<tr><td>";
  					echo "$cariTopik[isi]";
					echo "</td></tr>";

                       $sql=mysql_query("SELECT i.*,mhs.Nama as nama
FROM tgsakhir.isiforum i INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=i.id_user WHERE i.id_topik=$idForum UNION SELECT i.*,dsn.Nama as nama
FROM tgsakhir.isiforum i INNER JOIN ubaya.karyawan dsn ON dsn.NPK=i.id_user WHERE i.id_topik=$idForum");
					   
					 $jumRow = mysql_num_rows($sql);
					 $today = date("j F, Y, g:i a");
					 //echo "$today <br />";

					
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
					if($i==0)
					{

					echo "<tr><td>";
  					echo "<div class='judul'><a href='profile.php?id=$cariSemua[id_user]'>$cariSemua[nama]</a></div><br />";
					echo "</td></tr>";
					
					echo "<tr><td>";
					echo "$cariSemua[komentar]";
					echo "</td></tr>";
				
					}
					}
					/*
					echo "<span id='tampilTextArea1' style='display:none'>";
					echo "<span id='kom'><tr><td><textarea id='komentar'></textarea></td></tr><tr></span>";
             
                       <span class="art-button-wrapper"><span class="l"> </span><span class="r"></span><a class="art-button" href="javascript:simpanIsiForum(<? echo "$idForum"; ?>);">Kirim</a></span></div></span>
				*/?>