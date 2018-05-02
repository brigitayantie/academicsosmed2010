<div class="art-Post">
        <div class="art-Post-tl"></div>
        <div class="art-Post-tr"></div>
        <div class="art-Post-bl"></div>
        <div class="art-Post-br"></div>
        <div class="art-Post-tc"></div>
        <div class="art-Post-bc"></div>
        <div class="art-Post-cl"></div>
        <div class="art-Post-cr"></div>
        <div class="art-Post-cc"></div>
        <div class="art-Post-body">
    <div class="art-Post-inner">     
      
<?php

////


$idAlbum=$_GET["idAlbum"];
$idFoto = $_GET["idFoto"];
$queryFoto=mysql_query("SELECT * FROM tgsakhir.foto as ft WHERE ft.id_foto='$idFoto'");
if($idAlbum=="")
{
$queryAlbum=mysql_query("SELECT DISTINCT ft.id_foto,ft.jenisFoto FROM tgsakhir.foto ft INNER JOIN tgsakhir.userpnyfoto uf ON uf.id_foto=ft.id_foto WHERE uf.id_user='$_GET[id]' ORDER BY ft.id_foto ASC");
$queryCekTeman = mysql_query("SELECT tabel.* FROM 
(SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_subyek='$masterAmbilSemua[id_user]' AND t.id_obyek='$_GET[id]' UNION 
SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_obyek='$masterAmbilSemua[id_user]' AND t.id_subyek='$_GET[id]') tabel");



}
else
{
$queryAlbum=mysql_query("SELECT ft.id_foto,ft.jenisFoto FROM tgsakhir.foto  ft WHERE ft.id_album='$idAlbum' ORDER BY ft.id_foto ASC");
$queryPemilik = mysql_query("SELECT * FROM tgsakhir.album a WHERE a.id_album=$idAlbum");
$fetchPemilik = mysql_fetch_array($queryPemilik);
$queryCekTeman = mysql_query("SELECT tabel.* FROM 
(SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_subyek='$masterAmbilSemua[id_user]' AND t.id_obyek='$fetchPemilik[id_user]' UNION 
SELECT * FROM tgsakhir.teman t WHERE t.status='terima' AND t.id_obyek='$masterAmbilSemua[id_user]' AND t.id_subyek='$fetchPemilik[id_user]') tabel");


}
$cekTeman = mysql_num_rows($queryCekTeman);
$jumRow = mysql_num_rows($queryAlbum);
$jumRowMin = $jumRow-1;


//if($tampung=="") $tampung = 0;
for($i=0;$i<$jumRow;$i++)
{
	$fetchArray = mysql_fetch_array($queryAlbum);
	$foto[$i]=$fetchArray[id_foto];

	if(($foto[$i]==$idFoto)&&($i==$jumRowMin)) $tanda="max";
    else if(($foto[$i]==$idFoto)&&($i==0)) $tanda="min"; 
	if($foto[$i]==$idFoto) $tampung=$i;

	
}

$row = mysql_fetch_array($queryFoto);

if($tanda=="max") $b=0;
else $b = $tampung+1;


$tampilFoto = $foto[$b];
/*
$tampung = $b-1 ; if($tampung<0) $tampung=$jumRowMin; 
	$tampilFoto2=$foto[$tampung];
*/
if($tanda=="min") $tmp=$jumRowMin;
else $tmp = $tampung-1 ; //if($tmp<0) $tmp=$jumRowMin; 

	$tampilFoto2=$foto[$tmp];

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
<? 
		 ?>
         <!--a href=<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto2&idAlbum=$idAlbum"; ?>>Sebelumnya</a></td><td align="right">	<a href=<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto&idAlbum=$idAlbum"; ?>>Selanjutnya</a-->
 
 <div class="pagerpro_container">
    <ul class="pagerpro">
        <li class="pagerpro_li">
            <? if($idAlbum!="") { ?>
            <a id="photonav_prev" href="<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto2&idAlbum=$idAlbum"; ?>" class="pagerpro_a">Previous</a>
            <? } else { ?>
            <a id="photonav_prev" href="<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto2&id=$_GET[id]"; ?>" class="pagerpro_a">Previous</a>
            <? } ?>
        </li>
        <li class="pagerpro_li">
            <? if($idAlbum!="") { ?>
            <a id="photonav_next" href="<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto&idAlbum=$idAlbum"; ?>" class="pagerpro_a">Next</a>
            <? } else { ?>
            <a id="photonav_prev" href="<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto&id=$_GET[id]"; ?>" class="pagerpro_a">Next</a>
            <? } ?>
        </li>
    </ul>
</div>
<br /><br />
 
 <?
 
$sql=mysql_query("SELECT u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = mhs.NRP
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
UNION
SELECT u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = dsn.NPK
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
UNION SELECT  u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =mhs.NRP
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'
UNION SELECT  u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =dsn.NPK
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'");

if($fetchPemilik[id_user] == $masterAmbilSemua[id_user])
{
 ?>  

<div class="start-tagging">Click here to start tagging</div>
<div class="finish-tagging hide">Click here to cancel tagging</div>
<? } ?>

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
   		<input type="hidden" name="idFoto" id="idFoto" value="<?php echo $idFoto; ?>" />
        <input type="hidden" name="idAlbum" id="idAlbum" value="<?php echo $idAlbum; ?>" />
		<!--label for="title">2. Tag text</label--><br />
		<input type="text" id="title" name="title" size="30" value="" maxlength="55" /><br /><br />
        <select id="id_user" name="id_user">
        <?
        
		 $jumRow = mysql_num_rows($sql);
                    echo "<option value='$masterAmbilSemua[id_user];$masterAmbilSemua[Nama]'>$masterAmbilSemua[Nama]</option>";
					for($i=0;$i<$jumRow;$i++)
					{
					$cariSemua=mysql_fetch_array($sql);
                    echo "<option value='$cariSemua[id_user];$cariSemua[nama]'>$cariSemua[nama]</option>";
					}

		
		?>
        </select>
		<input type="hidden" name="tag" value="true" />
		<input type="submit" value="Submit" class="" />
	</form>
</div>

	<!--a href=<? echo "tampilDetailFoto2.php?idFoto=$tampilFoto&idAlbum=$idAlbum"; ?>-->
  <?  $gambar="images/foto/$row[id_foto].$row[jenisFoto]"; 
    echo "<img style=\"z-index: -2;\" border=0 id=\"imageid\" src=\"thumb1.php?img=$gambar&lebar=500\">";
    ?>
    </a><br /><? echo "$row[ketFoto]"; ?><br /><table border="0" width="300"><tr><td align="left">	</td></tr>
    
</table><br />

    
    
    <?php
		$list_tags = array();
		//$qry = " SELECT id, title, x1, y1, x2, y2, width, height FROM phototags ";
		$qry = " SELECT id, title, x1, y1, x2, y2, width, height, id_user FROM tgsakhir.phototags WHERE id_foto='$idFoto'";
        
        
		$results=mysql_query($qry) or die("Error retrieving record: " . mysql_error());
		while ($row=mysql_fetch_array($results)) {
			extract ($row);
			$name = str_replace(' ', '-', $title);
            $list_tags[] = array('id' => $id, 'title' => $title, 'id_user' => $id_user);
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
<? if(count($list_tags)>0) { ?>
<p>In this photo:
<? } ?>
	<?php
    foreach ($list_tags as $value) {
    $idUser = $value['id_user'];
			//echo "<a href='".str_replace(' ', '-',$value['title'])."'>".$value['title']."</a> (<a href='script/phototagging/includes/function.php?delete=true&idAlbum=$idAlbum&idFoto=$idFoto&id=".$value['id']."'>Delete</a>)&nbsp;&nbsp;";
         if ($fetchPemilik[id_user]==$masterAmbilSemua[id_user])
         {
         if($idUser != 0)
         echo "<a href='profile.php?id=$idUser'>".$value['title']."</a> (<a href='script/phototagging/includes/function.php?delete=true&idAlbum=$idAlbum&idFoto=$idFoto&idUser=$idUser&id=".$value['id']."'>Hapus</a>)&nbsp;&nbsp;";
		 else
         echo "".$value['title']." (<a href='script/phototagging/includes/function.php?delete=true&idAlbum=$idAlbum&idFoto=$idFoto&id=".$value['id']."'>Hapus</a>)&nbsp;&nbsp;";
         
         }
         else if(($_GET[id]==$masterAmbilSemua[id_user])&&($idUser==$masterAmbilSemua[id_user]))
         {
         echo "<a href='profile.php?id=$idUser'>".$value['title']."</a> (<a href='script/phototagging/includes/function.php?delete=true&idAlbum=$idAlbum&idFoto=$idFoto&idUser=$idUser&id=".$value['id']."'>Hapus</a>)&nbsp;&nbsp;";
         
         }
         else
         {
          if($idUser != 0)
         echo "<a href='profile.php?id=$idUser'>".$value['title']."</a>, &nbsp;&nbsp;";
		 else
         echo "".$value['title']." ,&nbsp;&nbsp;";
         
         }
		}
	?>
    
</p>
<? if($fetchPemilik[id_user] == $masterAmbilSemua[id_user]) { ?>
<div class="pagerpro_container">
    <ul class="pagerpro">
        <li class="pagerpro_li">
            
            <a id="photonav_prev" href="javascript:hapusFoto(<?echo "$idFoto,$idAlbum";?>);" class="pagerpro_a">Hapus Foto</a>
            
        </li>
        
       
    </ul>
   
</div>
<? } 

if($cekTeman==1||$fetchPemilik[id_user]==$masterAmbilSemua[id_user]||$_GET[id]==$masterAmbilSemua[id_user]) { ?>
<span id="spanKomentarFoto">
<?
$sql = mysql_query("SELECT mhs.Nama as nama, kf.* FROM tgsakhir.komentarfoto kf INNER JOIN ubaya.mahasiswa mhs ON kf.id_user=mhs.NRP WHERE kf.id_foto='$idFoto' UNION SELECT dsn.Nama as nama, kf.* FROM tgsakhir.komentarfoto kf INNER JOIN ubaya.karyawan dsn ON kf.id_user=dsn.NPK WHERE kf.id_foto='$idFoto'");
                  $jumRow = mysql_num_rows($sql);

for($i=0;$i<$jumRow;$i++)
{	$fetchArray = mysql_fetch_array($sql);
	echo "<table width='100%' bgcolor='#6699FF' id='kf_$fetchArray[id_kf]'>";
	echo "<tr><td align='center' width='50px'>";
	//echo "-".file_exists('../images/01xx.png');
	//$file='$fetchArray[foto]';
	//if(file_exists($file)) {	echo "<img src='$fetchArray[foto]' />"; }
	//else 	{ echo "<img src='images/02.png' />"; }
	echo "<img src='$fetchArray[foto]' />";
	echo "</td>";
	echo "<td>";
	echo "<a href='profilTeman.php?id=$fetchArray[id_user]'>$fetchArray[nama]</a>";
	echo " ";
	echo "$fetchArray[isi]<br />$fetchArray[timestamp]&nbsp;&nbsp;&nbsp;";
    if($masterAmbilSemua[id_user]==$fetchArray[id_user])
    echo "<a href='javascript:hapusKomentarFoto($fetchArray[id_kf]);'>Hapus</a>";
	echo "</td></tr>";
	
	echo "</table>";	
	
}             
                    
?>

</span>

    <p>
	<table ><tr><td><textarea id='komentarFoto'></textarea></td></tr></table>
    
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:simpanKF(<? echo $idFoto; ?>);">Simpan</a>                                       
                                            		</span>
                                            	</p>

<? } ?>
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    