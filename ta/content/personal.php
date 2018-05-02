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
                    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
<!--div align="right"><a href='javascript:bukaPesan();'>Tambah Pesan</a></div-->
<!--div style="width: 300; height: 150px; overflow-y: scroll; scrollbar-arrow-color:
blue; scrollbar-
face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:
#888888"-->



<span id="tampilDaftarTeman">
<table align='center' >
       <form action='personal.php' method='POST'>
       <tr><td align='right' >Password Lama</td><td width='25px'></td><td><input type='password' name='pwLama'></td></tr>
       <tr><td align='right' >Password Baru</td><td></td><td><input type='password' name='pwBaru'></td></tr>
       <tr><td align='right' >Ulangi password</td><td></td><td><input type='password' name='pwBaru2'></td></tr>
       <tr><td colspan='3' align='center'><br /><input type='submit' name='kirim' value='Perbaharui'></td></tr>
       </form>
</table>
</span>


<?
   $masterAmbilSemua = $_SESSION["masterAmbilSemua"];
$sql = mysql_query("SELECT u.password FROM tgsakhir.user u WHERE u.id_user='$masterAmbilSemua[id_user]'");

$fetchSql = mysql_fetch_array($sql);


if($_POST[pwLama]!=""||$_POST[pwBaru]!=""||$_POST[pwBaru2])
{
    if(($fetchSql[password]==$_POST[pwLama]) && ($_POST[pwBaru]==$_POST[pwBaru2])) 
    {
        $sql2=mysql_query("UPDATE tgsakhir.user SET tgsakhir.user.password='$_POST[pwBaru]' WHERE tgsakhir.user.id_user='$masterAmbilSemua[id_user]'");
        if($sql2) echo "Password anda sudah diganti"; 
        
        
    }
    else
    echo "Data belum benar";
}
?>

<!--/div-->      
                   
                    
                    

                    
                    <div class="cleared"></div>
    </div>
    
            <div class="cleared"></div>
        </div>
    </div>
    