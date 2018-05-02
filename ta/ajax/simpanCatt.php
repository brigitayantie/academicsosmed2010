<? session_start();
require ("../lib/sambungDatabase.php");
$masterAmbilSemua = $_SESSION[masterAmbilSemua];
$topik = $_POST[topik];
$catt = $_POST[catt];

if($topik!=""&&$catt!="")
$sql = mysql_query("INSERT INTO tgsakhir.catatan (id_user,tanggal,topik,isi) VALUES ($masterAmbilSemua[id_user],CURRENT_TIMESTAMP,'$topik','$catt')");
else 
echo "Isian masih kosong";

include "../content/tampilCatatan.php";
?>

 