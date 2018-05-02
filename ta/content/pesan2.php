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
                    
             <? session_start();
$masterAmbilSemua=$_SESSION[masterAmbilSemua];
$kirimFile=$_SESSION[kirimFile];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Kirim Pesan</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?
include "lib/sambungDatabase.php";
//include "tabelAtas.php";
$idTeman=$_GET["ID"];

$queryKetemu=mysql_query("SELECT * FROM user WHERE id_user='$idTeman'");
$fetchKetemu=mysql_fetch_array($queryKetemu);
?>

<div id="header">
        <h1>amazinglycool</h1>
        <h2>by Free Css Templates</h2>
</div>
<div id="menu">
        <ul>
               <li class="first"><a href="isi.php?act=pembukaan">Home</a></li>
                <li><a href="pesan.php?act=terima">Pesan</a></li>
                <li><a href="cariTeman.php?act=daftarTeman">Teman</a></li>
                <li><a href="lihatProfil.php">Profil</a></li>
                <li><a href="SignUp.php?act=editAkun">Akun</a></li>
                <li><a href="sessionUnregister.php">Log Out</a></li>
        </ul>
</div>
<div id="content">
        <div id="columnA">
        <h2>Pesan</h2>
        <?
      if($_GET["act"]=="kirim")
{
        $idTeman=$_GET["ID"];
        $subyekPesan=$_POST["subyek"];
        $pesan=$_POST["pesan"];

        echo "<table align='center' border='1'><tr><td>";
        if($pesan!="")
        {
        $queryKirimPesan=mysql_query("INSERT INTO pesan(ID_PENGIRIM,ID_PENERIMA,PESAN,SUBYEK_PESAN,FILE1,FILE2,FILE3,FILE4,FILE5) values('$masterAmbilSemua[ID]','$idTeman','$pesan','$subyekPesan','$kirimFile[0]','$kirimFile[1]','$kirimFile[2]','$kirimFile[3]','$kirimFile[4]')");

        echo "Pesan sudah dikirimkan<br /><a href='pesan.php?ID=$idTeman'>Kembali ke pesan</a>";
        }
        else echo "Tidak ada pesan yang dikirimkan<br /><a href='pesan.php?ID=$idTeman'>Kembali ke pesan</a>";
        echo "</tr></td></table>";
}
else if($_GET["act"]=="terima")
{
        $queryTerima=mysql_query("SELECT * FROM pesan WHERE ID_PENERIMA='$masterAmbilSemua[ID]' ORDER BY ID_PESAN DESC");
        $jumlahPesan=mysql_num_rows($queryTerima);
        echo "<table  align='left' width='80%'>";
        if($jumlahPesan==0) echo "<tr><td align='center'>Belum ada pesan</td></tr>";
        else
        {
        //for($i=1;$i<=$jumlahPesan;$i++)
        for($i=$jumlahPesan;$i>=1;$i--)
        {
                echo "<tr><td align='center' border='1'>";
                $fetchTerima=mysql_fetch_array($queryTerima);
                $queryPengirim=mysql_query("SELECT * from user WHERE ID='$fetchTerima[ID_PENGIRIM]'");
                $fetchPengirim=mysql_fetch_array($queryPengirim);
                echo "$fetchPengirim[NAMA] <br /> <img src='$fetchPengirim[FOTO]' width='70' height='70'>";
                echo "<td width='80%'>";
                echo "Subyek     :   ";
                echo "<a href='pesan.php?act=baca&ID=$fetchPengirim[ID]&IDPESAN=$fetchTerima[ID_PESAN]'>$fetchTerima[SUBYEK_PESAN]</a>";
                echo "</td></tr>";
        }
        }
        echo "</table>";
}
else if($_GET["act"]=="baca")
{
        $idTeman=$_GET["ID"];
        $queryTerima=mysql_query("SELECT * FROM pesan WHERE ID_PENERIMA='$masterAmbilSemua[ID]' AND ID_PENGIRIM='$idTeman' AND ID_PESAN='$_GET[IDPESAN]'");
        $jumlahPesan=mysql_num_rows($queryTerima);
        for($i=1;$i<=$jumlahPesan;$i++)
        $fetchTerima=mysql_fetch_array($queryTerima);
?>
        <form action="pesan.php?act=balas&ID=<? echo "$idTeman";?>&IDPESAN=<?echo "$fetchTerima[ID_PESAN]";?> " METHOD="POST">
        <table border="1" align="center">

        <tr>
        <td align="center" colspan="2"><a href="profilTeman.php?ID=<?echo "$idTeman";?>"><?echo "$fetchKetemu[NAMA]";?></a><br /><img width="60" height="60" src="<?echo "$fetchKetemu[FOTO]";?>"></td>
        </tr>
        <tr>
        <td align="right">Subyek:</td>
        <td><input readonly="readonly" type="text" name="subyek" size="46%" value="<?echo "$fetchTerima[SUBYEK_PESAN]";?>"></td>
        </tr>
        <tr>
        <td align="right">Pesan:</td>
        <td><textarea readonly="readonly" cols="35" rows="10" name="pesan" id="about"><? echo"$fetchTerima[PESAN]";?></textarea></td>
        </tr>
        <tr>
        <td align="center" colspan="2"><INPUT type="submit" value="Balas"></td>
        </tr>
        <tr>
        <td colspan="2">

        <?if($fetchTerima[FILE1]!=""){?>
        <a href="<? echo "$fetchTerima[FILE1]";?>">
        <?$posTitik=strpos($fetchTerima[FILE1],".");
        $nama1=substr($fetchTerima[FILE1],7,$posTitik);
        echo "$nama1";?>
        </a><br />

        <?}if($fetchTerima[FILE2]!=""){?>
        <a href="<? echo "$fetchTerima[FILE2]";?>">
        <?$posTitik=strpos($fetchTerima[FILE2],".");
        $nama2=substr($fetchTerima[FILE2],7,$posTitik);
        echo "$nama2";?>
        </a><br />

        <?}if($fetchTerima[FILE3]!=""){?>
        <a href="<? echo "$fetchTerima[FILE3]";?>">
        <?$posTitik=strpos($fetchTerima[FILE3],".");
        $nama3=substr($fetchTerima[FILE3],7,$posTitik);
        echo "$nama3";?>
        </a><br />


        <?}if($fetchTerima[FILE4]!=""){?>
        <a href="<? echo "$fetchTerima[FILE4]";?>">
        <?$posTitik=strpos($fetchTerima[FILE4],".");
        $nama4=substr($fetchTerima[FILE4],7,$posTitik);
        echo "$nama4";?>
        </a><br />


        <?}if($fetchTerima[FILE5]!=""){?>
        <a href="<? echo "$fetchTerima[FILE5]";?>">
        <?$posTitik=strpos($fetchTerima[FILE5],".");
        $nama5=substr($fetchTerima[FILE5],7,$posTitik);
        echo "$nama5";?>
        </a><br />

        <?}?>
        </td>
        </tr>
        </table>
        </form>
<?
}


else
{


if($_GET["act"]=="balas")
{
$queryTerima=mysql_query("SELECT * FROM pesan WHERE ID_PENERIMA='$masterAmbilSemua[ID]' AND ID_PENGIRIM='$idTeman' AND ID_PESAN='$_GET[IDPESAN]'");
        $jumlahPesan=mysql_num_rows($queryTerima);
        for($i=1;$i<=$jumlahPesan;$i++)
        $fetchTerima=mysql_fetch_array($queryTerima);



if($_GET["act2"]=="hapusFile")
{
$fileNo=$_POST["fileNo"];
$namaFile=$_POST["namaFile"];

//$queryHapus=mysql_query("DELETE FROM pesan WHERE ID_PESAN='$_GET[IDPESAN]' and '$fileNo'='$namaFile'");
}

else if($_GET["act2"]=="kirimFile")
{

for($i=0;$i<5;$i++)
{
if($_FILES["file"]["name"][$i]!="")
{
    $a=$i+1;
    $namaFile[$i]=$_FILES["file"]["name"][$i];
echo "<form action='pesan.php?act=balas&act2=hapusFile&ID=$idTeman&IDPESAN=$_GET[IDPESAN]' method='post'>";
    echo "<div align='center'>File $a :  <a href='upload/$namaFile[$i]'>" . $_FILES["file"]["name"][$i] . "</a>
<input type='hidden' name='fileNo'  value='FILE$a'>
<input type='hidden' name='namaFile'  value='$namaFile[$i]'><input type='submit' value='[x]'></form><br/></div>";

    /*
    echo "Type: " . $_FILES["file"]["type"][$i] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"][$i]))
      {
      echo $_FILES["file"]["name"][$i] . " already exists. ";
      }
    else if($file[$i]!="")
      {
      move_uploaded_file($_FILES["file"]["tmp_name"][$i],"upload/" . $_FILES["file"]["name"][$i]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"][$i];
      }
    else if($file[$i]=="") $i++;
        echo "<br /> <br />";
   */

   $kirimFile[$i]="upload/" . $_FILES["file"]["name"][$i];
move_uploaded_file($_FILES["file"]["tmp_name"][$i],"upload/" . $_FILES["file"]["name"][$i]);

}

}
$max=mysql_query("SELECT max(ID_PESAN) as max from pesan");
$fetchMax=mysql_fetch_array($max);
echo "$fetchMax[max]";
$_SESSION["kirimFile"]=$kirimFile;

}


}



echo "<form action='pesan.php?act=kirim&ID=$idTeman&IDPESAN=$_GET[IDPESAN]' method='post'>";
include "tabelPesan.php";
echo "</form>";
}
?>

        </div>
        <div id="columnB">
              
        </div>
        <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
        <p>Copyright &copy; 2006 Sitename.com. Designed by <a href="http://www.freecsstemplates.org" class="link1">Free CSS Templates</a></p>
</div>
</body>
</html>
                    
                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    