function ubahCmbMKU(jenis)
{

varJenis = jenis;
if(jenis=="nonmku")
{
	
document.getElementById("fakultas").disabled=false;
if(document.getElementById("jurusan")!=null)
document.getElementById("jurusan").disabled=false;

if(document.getElementById("jurusan")==null)
{

	document.getElementById("kodematkul").style.display="none";
	document.getElementById("matkul").style.display="none";
	document.getElementById("idDosen").style.display="none";
	document.getElementById("dosen").style.display="none";
	return false;
}
else if(document.getElementById("jurusan")!=null)
{
a=document.getElementById("jurusan");
varJurusan= a.value;
}

params = "jenisMK=" + varJenis + "&jurusanMK=" + varJurusan ;
}
else
{
document.getElementById("fakultas").disabled=true;
if(document.getElementById("jurusan")!=null)
document.getElementById("jurusan").disabled=true;

params = "jenisMK=" + varJenis;
}
var xmlhttp = GetXMLHTTP ("POST", "ajax/ubahCmbMKU.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				hasil2 = hasil.split("-");
				// mengolah hasilnya .....
				//alert(hasil2[4]);	
				document.getElementById("spanIdMatkul").innerHTML = hasil2[0];
				document.getElementById("spanNamaMatkul").innerHTML = hasil2[1];
				document.getElementById("spanKodos").innerHTML = hasil2[2];
				document.getElementById("spanNados").innerHTML = hasil2[3];
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);  // utk method POST
}
