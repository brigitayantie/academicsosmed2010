<?
require ("lib/sambungDatabase.php");
require( "lib/class.upload.php" );
$idAlbum = $_POST["idAlbum"];
for($i=0;$i<5;$i++)
{
	$a = $_FILES["file".$i];
	
$objUpload = new upload($_FILES["file".$i]);

			if($objUpload->uploaded) {	
			//echo "p";
			$extension = $objUpload->file_src_name_ext;
	$sql = mysql_query("INSERT INTO tgsakhir.foto(id_album,jenisFoto) VALUES ('$idAlbum','$extension')");
    $idFoto = mysql_insert_id();
				$objUpload->file_new_name_body = $idFoto;
				
				$objUpload->Process('images/foto/');
				if ($objUpload->processed) {
					$objUpload->Clean();
				} else {
					
				}
			}			
	
}

mysql_query("UPDATE tgsakhir.album
SET id_fotoCover='$idFoto'
WHERE id_album='$idAlbum'");

header ("location: editFoto.php?id=$idAlbum"); 
exit;
?>