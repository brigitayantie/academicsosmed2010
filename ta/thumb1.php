<?


	isset($_GET['img']) or die('NO IMAGE');
 
	include "lib/thumbnail.class.php";
	$thumb = new T10Thumbnail;
	$thumb->setMaxWidth($_GET['lebar']); // lebar maksimal untuk setiap image adalah 80px
	$thumb->getThumbnail($_GET['img']);	// generate thumbnail image
	
?>