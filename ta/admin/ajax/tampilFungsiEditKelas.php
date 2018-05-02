<?

if($_POST["cariBerdasar"]==0)
{
	?>
	<input type="text" id='idKelas' onkeydown='javascript :tampilKelas("idKelas");'>
	<?
}
else if($_POST["cariBerdasar"]==1)
{
	?>
	<select id='hari' onchange='javascript :tampilKelas("hari");'><option>Senin</option><option>Selasa</option><option>Rabu</option><option>Kamis</option><option>Jumat</option><option>Sabtu</option></select>
	<?
    }
else if($_POST["cariBerdasar"]==2)
{
	?>
	<select id='jamMulai' onchange='javascript :tampilKelas("jamMulai");'><option>07.25</option><option>09.00</option><option>10.00</option><option>12.55</option><option>15.20</option><option>16.40</option></select>
	<?
    }
	else if($_POST["cariBerdasar"]==3)
{
	?>
	<input type="text" id='idMatkul' onkeydown='javascript :tampilKelas("idMatkul");'>
	<?
    }
		else if($_POST["cariBerdasar"]==4)
{
	?>
	<input type="text" id='nmMatkul' onkeydown='javascript :tampilKelas("namaMatkul");'>
	<?
    }
	else if($_POST["cariBerdasar"]==5)
{
	?>
	<input type="text" id='idDosen' onkeydown='javascript :tampilKelas("idDosen");'>
	<?
    }
	else if($_POST["cariBerdasar"]==6)
{
	?>
	<input type="text" id='nmDosen' onkeydown='javascript :tampilKelas("nmDosen");'>
	<?
    }
	else if($_POST["cariBerdasar"]==7)
{
	?>
	<select id='ruang' onchange='javascript :tampilKelas("ruang");'><option value="TF11">TF11</option>
                                                <option value="TC41">TC41</option>
                                                <option value="TG41">TG41</option>
                                                <option value="TF22">TF22</option>
                                                <option value="TF33">TF33</option>
                                                <option value="TF41">TF41</option>
</select>
	<?
    }
	if($_POST["cariBerdasar"]==8)
{
	?>
	<input type='radio' name='jenisMK' value='nonmku' id='jenisNon' onclick='javascript :tampilFakultas();'/>									Non-MKU<br />
                          <input type='radio' name='jenisMK' value='mku' id='jenisMKU' onclick='javascript :tampilKelas(this.value);'/>
                                                    MKU<br /> 
	<?
}
?>