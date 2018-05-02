<? session_start();
//require "../content/lib/config.inc.php"; 
   //require "../content/lib/Database.class.php";
   require ("../lib/sambungDatabase.php");
   //$db = new Database (DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
   //$db->connect();
$masterAmbilSemua = $_SESSION[masterAmbilSemua];


	$subyekPesan=$_POST[subyekPesan];
	$isiPesan=$_POST[isiPesan];

for($i=0;$i<$_POST["jumUntuk"]-1;$i++)
{
	$untuk=$_POST[untuk][$i];
	
	if($i==0)
	{
	mysql_query("INSERT INTO tgsakhir.pesan (id_pengirim,id_penerima,isi,subyekPesan) VALUES ('$masterAmbilSemua[id_user]','$untuk','$isiPesan','$subyekPesan')");		
	$idBaru = mysql_insert_id();
	mysql_query("UPDATE tgsakhir.pesan p SET p.id_topik='$idBaru' WHERE id_pesan=$idBaru");		
	
	}
	else
	mysql_query("INSERT INTO tgsakhir.pesan (id_pengirim,id_penerima,isi,subyekPesan,id_topik) VALUES ('$masterAmbilSemua[id_user]','$untuk','$isiPesan','$subyekPesan','$idBaru')");		
	
	
}

?>

 