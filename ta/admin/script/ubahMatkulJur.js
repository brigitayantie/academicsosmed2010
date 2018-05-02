
function ubahCmbJurusan2()
{
	
	varFakultas = document.getElementById("fakultas").value;
	var params = "cmbFakultas=" + varFakultas;

var xmlhttp = GetXMLHTTP ("POST", "ajax/ubahCmbJurusan2.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("spanJurusan").innerHTML = hasil;
				
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

function ubahMatkulJur()
{
	if(document.getElementById("jenisMKU").checked== true)
	{
		return false;
		
	}
	
	varJurusan = document.getElementById("jurusan").value;
	
	if(document.getElementById("jenisNon").checked == true || ((document.getElementById("jenisNon").checked == false)&&(document.getElementById("jenisNon").checked == false))) 
	{non="1";} 
	else {non="0";}
	
	
	
var params = "cmbJurusan=" + varJurusan + "&nonMKU=" + non;
var xmlhttp = GetXMLHTTP ("POST", "ajax/ubahCmbMatkul.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				hasil2 = hasil.split("-");
				// mengolah hasilnya .....
				
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
