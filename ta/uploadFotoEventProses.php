<?
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$idEvent = $_POST["idEvent2"];
for($i=0;$i<5;$i++)
{
	$a = $_FILES["file".$i];
	
$objUpload = new upload($_FILES["file".$i]);

			if($objUpload->uploaded) {	
			//echo "p";
			$extension = $objUpload->file_src_name_ext;
	$sql = mysql_query("INSERT INTO tgsakhir.fotoEvent(id_event,jenisFoto) VALUES ('$idEvent','$extension')");
	
	$idFoto = mysql_insert_id();
				$objUpload->file_new_name_body = $idFoto;
				
				$objUpload->Process('images/foto/');
				if ($objUpload->processed) {
					$objUpload->Clean();
				} else {
					
				}
			}			
	
}
header ("location: content/tampilEvent2.php?id=$idEvent"); // redirect, syaratnya ga boleh ada echo		
exit;
?>