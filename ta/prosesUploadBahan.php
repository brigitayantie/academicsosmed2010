<?
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$idKelas = $_POST["idKelas"];
$gabungan2 = $_POST["gabungan"];
$untuk = $_POST["untuk"];
$kp = $_POST["kp"];
$gabungan = $gabungan2 . $kp;

$tipeBahan = $_POST["tipeBahan"];


$sql = mysql_query("SELECT * FROM ubaya.mkbuka mb where mb.KodeMkBuka='$gabungan'");
$fetchArrayKet = mysql_fetch_array($sql);



$a = $_FILES["file0"];
	$ket = $_POST["ket"];
		$judul = $_POST["judul"];
$objUpload = new upload($_FILES["file0"]);

			if($objUpload->uploaded) {	
			//echo "p";
			$extension = $objUpload->file_src_name_ext;
	if($tipeBahan=="Bahan Khusus")
	{
	$sql = mysql_query("INSERT INTO tgsakhir.bahan(jenis_file,tipe,id_kelas,ketBahan,subyekBahan) VALUES ('$extension','$untuk','$gabungan','$ket','$judul')");
	
}
	else
	{
	$sql = mysql_query("INSERT INTO tgsakhir.bahan(id_mk,jenis_file,tipe,ketBahan,subyekBahan) VALUES ('$idKelas','$extension','$untuk','$ket','$judul')");
	

	}
	
	$idBahan = mysql_insert_id();
				$objUpload->file_new_name_body = $idBahan;
				
				$objUpload->Process('bahan/');
				if ($objUpload->processed) {
					$objUpload->Clean();
				} else {
					
				}
			}			
	

header ("location: content/semuaTabLanjutanJA.php?id=$idKelas"); // redirect, syaratnya ga boleh ada echo		
exit;

?>