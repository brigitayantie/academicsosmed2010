<?php
	//Start session
	session_start();
	
	//include database connent class
	include 'script/phototagging/includes/conn.php';
	
	//connect to database
	db_connect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP, MySQL and jQuery Photo Tagging by Neill Horsman</title>
	<link rel="stylesheet" href="script/phototagging/css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="script/phototagging/css/imgareaselect-animated.css" /> 
	<script type="text/javascript" src="script/phototagging/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="script/phototagging/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="script/phototagging/js/jquery.load.js"></script>
</head>
<body>
<!-- 
Title: Photo Tagging
Author: Neill Horsman
URL: http://www.neillh.com.au
Credits: jQuery, jQuery ImgAreaSelect 
-->
<?php

////


$idAlbum=$_GET["idAlbum"];
$idFoto = $_GET["idFoto"];
$queryFoto=mysql_query("SELECT * FROM foto WHERE id_foto='$idFoto'");
$queryAlbum=mysql_query("SELECT id_foto,jenisFoto FROM foto WHERE id_album='$idAlbum' ORDER BY id_foto ASC");
$jumRow = mysql_num_rows($queryAlbum);

for($i=0;$i<$jumRow;$i++)
{
	$fetchArray = mysql_fetch_array($queryAlbum);
	$foto[$i]=$fetchArray[id_foto];
	$jumRowMin = $jumRow-1;
	if(($foto[$i]==$idFoto)&&($i==$jumRowMin)) $tampung=0;
	else if($foto[$i]==$idFoto) $tampung=$i;
	
	
}

$row = mysql_fetch_array($queryFoto);
$b = $tampung+1;
$tampilFoto = $foto[$b];

////
	//jquery popup error checking.
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo "<div id='error-box'><ul class='err'>";
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo "<li>",$msg,"</li>"; 
		}
		echo "</ul><span class='closebtn'><a href='#' id='error-link'>close</a></span></div>";
		unset($_SESSION['ERRMSG_ARR']);
	}
	//code for a confirmation msg, but not going to use this
	if(isset($_GET['confirm']) && $_GET['confirm']==16) {
		echo "<div id='error-box' class='confirm'><ul class='err'>";
		echo "<li>Your msg here.</li>";
		echo "<li>Thank you.</li>";
		echo "<span class='closebtn'><a href='#' id='error-link'>close</a></span></div>";
	}
?>
<h1>Updated source 30th March 2010</h1>
<p>Delete tags now functional</p>
<h1><a href="http://www.neillh.com.au" target="_blank">Neill Horsman</a></h1>

<div class="start-tagging">Click here to start tagging</div>
<div class="finish-tagging hide">Click here to cancel tagging</div>
<h1>1. Click and drag over the image where you want to tag</h1>
<div class="image">
<div id="title_container" class="hide">
	<form method="post" action="script/phototagging/includes/function.php">
		<!-- Grab the X/Y/Width/Height -->
		<input type="hidden" name="x1" id="x1" value="<?php echo $x1; ?>" />
		<input type="hidden" name="y1" id="y1" value="<?php echo $y1; ?>" />
		<input type="hidden" name="x2" id="x2" value="<?php echo $x2; ?>" />
		<input type="hidden" name="y2" id="y2" value="<?php echo $y2; ?>" />
		<input type="hidden" name="w" id="w" value="<?php echo $w; ?>" />
		<input type="hidden" name="h" id="h" value="<?php echo $h; ?>" />
		<label for="title">2. Tag text</label><br />
		<input type="text" id="title" name="title" size="30" value="" maxlength="55" /><br />
		<input type="hidden" name="tag" value="true" />
		<input type="submit" value="Submit" class="" />
	</form>
</div>
	<a href=<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto&idAlbum=$idAlbum"; ?>><img border="0" id="imageid" width="300px" height="300px" src=<? echo "images/foto/$row[id_foto].$row[jenisFoto]"; ?>></a><br /><? echo "$row[ketFoto]"; ?><br /><br />
<?php
		$list_tags = array();
		$qry = " SELECT id, title, x1, y1, x2, y2, width, height FROM phototags ";
		$results=mysql_query($qry) or die("Error retrieving record: " . mysql_error());
		while ($row=mysql_fetch_array($results)) {
			extract ($row);
			$name = str_replace(' ', '-', $title);
			$list_tags[] = array('id' => $id, 'title' => $title);
?>
	<!-- Style for the tagged area -->
	<style type="text/css">
		.map a.<?php echo $name; ?> { border:0px solid #000; top:<?php echo $y1; ?>px; left:<?php echo $x1; ?>px; width:<?php echo $width; ?>px; height:<?php echo $height; ?>px; }
		.map a:hover.<?php echo $name; ?> { border:3px solid #fff; }
	</style>
	<!-- Tags displayed as a list -->
	<ul class="map">
		<li><a class="<?php echo $name; ?>"><span><b><?php echo $title; ?></b></span></a></li>
	</ul>
<?php } ?>
</div>

<p>In this photo:
	<?php
		foreach ($list_tags as $value) {
			echo "<a href='".str_replace(' ', '-',$value['title'])."'>".$value['title']."</a> (<a href='script/phototagging/includes/function.php?delete=true&id=".$value['id']."'>Delete</a>)&nbsp;&nbsp;";
		}
	?>
</p>














<br /><br /><br />
<h2>Download</h2>
<a href="http://www.neillh.com.au/phototagging2/">http://www.neillh.com.au/phototagging2/</a>
<h2>Notes.</h2>

<p>Feel free to edit and redistribute this code as you wish, keen to see what people come up with so send me over an email info@neillh.com.au</p>

<p>Working in Firefox, Chrome, Safari, IE8</p>

<p>Edit script/phototagging/includes/conn.php to add your own database connection details</p>


<p><strong>Databases.</strong></p>

<p>CREATE TABLE phototags (<br />
&nbsp;&nbsp;&nbsp;id int(255) NOT NULL AUTO_INCREMENT,<br />
&nbsp;&nbsp;&nbsp;photoid int(11) NOT NULL,<br />
&nbsp;&nbsp;&nbsp;title varchar(255) NOT NULL,<br />
&nbsp;&nbsp;&nbsp;x1 int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;y1 int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;x2 int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;y2 int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;width int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;height int(11) DEFAULT NULL,<br />
&nbsp;&nbsp;&nbsp;PRIMARY KEY (id)<br />
)</p>

<p><a href="http://odyniec.net/projects/imgareaselect/usage.html">http://odyniec.net/projects/imgareaselect/usage.html</a></p>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=4854269; 
var sc_invisible=1; 
var sc_partition=57; 
var sc_click_stat=1; 
var sc_security="acdd4df5"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
<noscript>
<div class="statcounter">
	<a title="wordpress visitor" class="statcounter" href="http://www.statcounter.com/wordpress.org/"><img class="statcounter" src="http://c.statcounter.com/4854269/0/acdd4df5/1/" alt="wordpress visitor" /></a>
</div>
</noscript>
<!-- End of StatCounter Code -->
<script type="text/javascript" src="script/chat/js/jquery.js"></script>
<script type="text/javascript" src="script/chat/js/chat.js"></script>
</body>
</html>