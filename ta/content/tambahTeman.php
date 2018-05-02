
<? include "../lib/sambungDatabase.php"; ?>

<script language="javascript" src="../script/pesan.js" type="text/javascript"></script>
<script>
function pilih(nama,id) 
{
	
	document.getElementById('hiddennama').value=nama;
	document.getElementById('hiddenid').value=id;
	
	/*
	var nama = this.contentDoc.getElementById("hiddennama").value;
	var id = this.contentDoc.getElementById("hiddenid").value;
	
	alert(nama);
	alert(id);
*/
	parent.document.getElementById("untuk").innerHTML+=nama+" <input type='image' alt='hapus' src='silang.gif' onclick='javascript:hapus("+id+");'><br>";
	parent.document.getElementById("id_untuk").value+=id+",";
	
     //parent.emailwindow.hide();
	 
}
</script>
<?
$sqlQuery=mysql_query("SELECT mhs.NRP as id_user,mhs.Nama FROM ubaya.mahasiswa mhs UNION SELECT dsn.NPK as id_user,dsn.Nama FROM ubaya.karyawan dsn");
while($fetchArray=mysql_fetch_array($sqlQuery))
echo "$fetchArray[id_user]-$fetchArray[Nama] 
<a href=\"javascript: pilih('$fetchArray[Nama]',$fetchArray[id_user]);\">pilih</a><br>";
?>
<!--
Aaaaa <a href="javascript: pilih('Aaaaa',1);">pilih</a><br />
Bbbbb <a href="javascript: pilih('Bbbbb',2);">pilih</a>
-->

<input type="hidden" id="hiddennama" />
<input type="hidden" id="hiddenid"  />


