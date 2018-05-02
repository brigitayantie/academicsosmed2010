<?
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$idForum = $_POST["idForum"];
for($i=0;$i<3;$i++)
{
	$a = $_FILES["file".$i];
	$b = $_POST["txt".$i];
	
$objUpload = new upload($_FILES["file".$i]);

			if($objUpload->uploaded) {	
			//echo "p";
			$extension = $objUpload->file_src_name_ext;
	$sql = mysql_query("INSERT INTO tgsakhir.attforum(id_forum,jenis_file) VALUES ('$idForum','$extension')");
	
	$idFoto = mysql_insert_id();
				$objUpload->file_new_name_body = $idFoto;
				
				$objUpload->Process('images/foto/');
				if ($objUpload->processed) {
					$objUpload->Clean();
				} else {
					
				}
			}			
	
}
header ("location: editfoto.php?id=$idAlbum"); // redirect, syaratnya ga boleh ada echo		
exit;
?>