<span id="tampilCattTeman">

                       <?
					  

                       $sql=mysql_query("SELECT *
FROM tgsakhir.catatan c WHERE c.id_user=$masterAmbilTeman[id_user]");
					 $jumRow = mysql_num_rows($sql);
					 $today = date("j F, Y, g:i a");
					 //echo "$today <br />";
					 echo "<table class='position'>";
					
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
					
					echo "<tr><td>";
  					echo "<div class='judul'><a href='javascript:tampilCattTeman($cariSemua[id_catt])'>$cariSemua[topik]</a></div><br />";
					echo "</td></tr>";
					echo "<tr><td>";
					$tanggal = new DateTime($cariSemua[tanggal]);
					$tanggal2 =   $tanggal->format("j-F-Y H:i:s");
					echo  "Ditulis pada $tanggal2 <a href='javascript:editCatt($cariSemua[id_catt])'>Edit</a> | <a href='javascript:hapusCatt($cariSemua[id_catt])'>Hapus</a>";
					//echo "$tanggal<br />";
					echo "</td></tr>";
					echo "<tr><td>";
					$query = mysql_query("Select MID('$cariSemua[isi]', 1, 200)");
					$fetchQuery=mysql_fetch_array($query);
					echo "$fetchQuery[0]  ...";
					echo "<br />";
					echo "<br />";
					echo "</td></tr>";
					
					}
					
					 echo "</table>"
                       ?> 
                        
    </span>    
             