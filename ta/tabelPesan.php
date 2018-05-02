
<table border="1" align="center">
<tr>
<td align="center" colspan="2"><a href="profilTeman.php?ID=<? echo "$idTeman";?>"><?echo "$fetchKetemu[NAMA]";?></a><br /><img width="60" height="60" src="<?echo "$fetchKetemu[FOTO]";?>"></td>
</tr>
<tr>
<td align="right">Subyek:</td>
<td><input type="text" name="subyek" size="46%" value="<?if(($_GET["act"]=="balas"||$_GET["act2"]=="kirimFile")&&$_GET["IDPESAN"]!="") 
{
echo "Re : ";
}

echo "$fetchTerima[SUBYEK_PESAN]";
?>"></td>
</tr>
<tr>
<td align="right">Pesan:</td>
<td><textarea cols="35" rows="10" name="pesan" id="about">

<? 
if(($_GET["act"]=="balas"||$_GET["act2"]=="kirimFile")&&$_GET["IDPESAN"]!="") 
{
echo "

-------$fetchKetemu[NAMA] menulis--------
";
}

echo"$fetchTerima[PESAN]"; 

?>
</textarea></td>
</tr>

<tr>


<? if($_GET["act"]=="balas"||$_GET["act"]!="balas") ?>
<td colspan="2" align="right"><a href="upload.php?ID=<?echo "$idTeman";?>&IDPESAN=<?echo "$_GET[IDPESAN]";?>">Kirim file</td>

</tr>

<tr>
<td colspan="2" align="center"><input type="SUBMIT" value="Kirim"></td>
</tr>
</table>
