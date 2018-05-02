<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$idForum=$_POST[idForum];
$komentar=$_POST[komentar];
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
mysql_query("INSERT INTO tgsakhir.isiforum (komentar, id_user, id_topik) VALUES ('$komentar','$masterAmbilSemua[id_user]', '$idForum')");

include "../ajax/tampilIsiDiskusi.php";
/*
 $idForum = $_POST["idForum"];
   
   
     $sql2=mysql_query("SELECT *
FROM forum WHERE id_forum=$idForum");
					 $jumRow2 = mysql_num_rows($sql2);

					 echo "<tr><td align='right'><div align='right'><a href='javascript:cattBaru()'>Tambah Catatan Baru</a></div></td></tr>";
					
					$cariTopik=mysql_fetch_array($sql2);
					
					 echo "<table class='position'>";					
					echo "<tr><td>";
  					echo "<div class='judul'>$cariTopik[topik]</div>";
					echo "</td></tr>";
					
					echo "<tr><td>";
  					echo "$cariTopik[isi]";
					echo "</td></tr>";

                       $sql=mysql_query("SELECT *
FROM isiforum WHERE id_topik=$idForum");
					 $jumRow = mysql_num_rows($sql);
					 $today = date("j F, Y, g:i a");
					 //echo "$today <br />";

					
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
					
					echo "<tr><td>";
  					echo "<div class='judul'><a href='javascript:tampilForum($cariSemua[id_forum])'>$cariSemua[id_user]</a></div><br />";
					echo "</td></tr>";
					
					echo "<tr><td>";
					echo "$cariSemua[komentar]";
					echo "</td></tr>";
				
					}
					echo "<tr><td>";
					echo "<textarea id='komentar'></textarea>";
					echo "</td></tr>";
					 echo "</table>"
*/
?> 
                      