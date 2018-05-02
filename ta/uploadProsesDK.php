<?
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$idmkbuka = $_POST["idMkBuka"];
$kp = $_POST["kp"];
for($i=0;$i<3;$i++)
{
	$a = $_FILES["file".$i];
	$b = $_POST["txt".$i];
	
$objUpload = new upload($_FILES["file".$i]);

			if($objUpload->uploaded) {	
			//echo "p";
			$extension = $objUpload->file_src_name_ext;
	
	$idFoto = mysql_insert_id();
				$objUpload->file_new_name_body = $objUpload->file_src_name_body;
				
				$objUpload->Process('bahandiskusikelas');

				if ($objUpload->processed) {
					  $filepath = "bahandiskusikelas/".$objUpload->file_dst_name;
					  $filename=$objUpload->file_dst_name;
	$sql = mysql_query("INSERT INTO tgsakhir.diskusikelas VALUES ('$filename','$idmkbuka','$kp','$filepath')");

					$objUpload->Clean();
				} else {
					
				}
			}			
	
}
header ("location: masukDiskusi.php?idkelas=$idmkbuka&kp=$kp"); // redirect, syaratnya ga boleh ada echo		
exit;
?>