    
<script language="javascript">



function locationHashChangedProfil() {
    temp = location.hash;
    SLHDetail = temp.substr(1,6);
    
    if (SLHDetail=== "tampil") {
        
        SLHIsi = temp.substr(8,temp.length);
        alert(SLHIsi);
        tampil(SLHIsi);

       
    }

}
window.onhashchange = locationHashChangedProfil;
</script>

    <?
                    if(($_GET[id]!="")&&($_GET[id]!="$masterAmbilSemua[id_user]")) 
{
	$status="lain";
	include "simpanSessionTeman.php";
	$tampung = $masterAmbilTeman;
} else {
		$tampung = $masterAmbilSemua;
				} ?>  
<span id="tampilCatt">

                       <?
					  

                       $sql=mysql_query("SELECT *
FROM tgsakhir.catatan c WHERE c.id_user=$tampung[id_user]");
					 $jumRow = mysql_num_rows($sql);
					 $today = date("j F, Y, g:i a");
					 //echo "$today <br />";
					 echo "<table class='position'>";
					 if($status!="lain")
					 echo "<tr><td align='right'><a href='javascript:cattBaru()'>Tambah Catatan Baru</a></td></tr>";
					
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
					
					echo "<tr><td>";
  					echo "<div class='judul'><a href='javascript:tampil($cariSemua[id_catt])'>$cariSemua[topik]</a></div><br />";
					echo "</td></tr>";
					echo "<tr><td>";
					$tanggal = new DateTime($cariSemua[tanggal]);
					$tanggal2 =   $tanggal->format("j-F-Y H:i:s");
					if($status=="lain") echo  "Ditulis pada $tanggal2" ;
					else
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
             