<?php session_start();
include('config.php');
$masterAmbilSemua = $_SESSION[masterAmbilSemua];

if($_POST)
{

$q=$_POST['searchword'];
/*
$sql_res=mysql_query("select * from test_user_data where fname like '%$q%' or lname like '%$q%' order by uid LIMIT 5");
*/
/*
$sql_res=mysql_query("SELECT u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = mhs.NRP
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
AND mhs.Nama like '%$q%' 
UNION
SELECT u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = dsn.NPK
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
AND dsn.Nama like '%$q%' 
UNION SELECT  u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =mhs.NRP
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'
AND mhs.Nama like '%$q%' 
UNION SELECT  u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =dsn.NPK
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'
AND dsn.Nama like '%$q%'");
*/

$sql_res=mysql_query("SELECT u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = mhs.NRP
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
AND mhs.Nama like '%$q%' 
UNION
SELECT u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_obyek
INNER JOIN tgsakhir.user u ON u.id_user = dsn.NPK
WHERE t.id_subyek = '$masterAmbilSemua[id_user]'
AND t.status= 'terima'
AND dsn.Nama like '%$q%' 
UNION SELECT  u.nama,u.foto,u.id_user,mhs.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.mahasiswa mhs ON mhs.NRP=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =mhs.NRP
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'
AND mhs.Nama like '%$q%' 
UNION SELECT  u.nama,u.foto,u.id_user,dsn.Nama as nama
FROM tgsakhir.teman t
INNER JOIN ubaya.karyawan dsn ON dsn.NPK=t.id_subyek
INNER JOIN tgsakhir.user u ON u.id_user =dsn.NPK
WHERE t.id_obyek = '$masterAmbilSemua[id_user]'
AND t.status = 'terima'
AND dsn.Nama like '%$q%'");

while($row=mysql_fetch_array($sql_res))
{
$fname=$row['nama'];
$lname=$row['lname'];
$img=$row['img'];
$country=$row['country'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);
$foto=$row['foto'];

?>
<div class="display_box" align="left">

<img src="thumb1.php?img=<? echo $foto; ?>&lebar=25" style="float:left; margin-right:6px" /><a href="profile.php?id=<?=$row['id_user']?>"><?php echo "$final_fname" ;?>&nbsp;</a><br/>
<span style="font-size:9px; color:#999999"></span></div>



<?php
}

}
else
{

}


?>
