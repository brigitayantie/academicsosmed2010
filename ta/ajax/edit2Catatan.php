<? session_start();
include "../lib/sambungDatabase.php";
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$idCatt = $_POST[idCatt];
$topik = $_POST[topik];
$catt = $_POST[catt];
  $sql1="UPDATE tgsakhir.catatan c SET  c.id_catt='$idCatt', c.topik='$topik', c.isi='$catt', c.tanggal=CURRENT_TIMESTAMP WHERE c.id_user='$masterAmbilSemua[id_user]'";
  //echo $sql1;
  $sql = mysql_query($sql1);
	
	
include "../content/tampilCatatan.php";
?>

  