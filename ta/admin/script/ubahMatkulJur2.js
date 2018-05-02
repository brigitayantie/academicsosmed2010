

function ubahMatkulJur()
{
	 
	varJurusan = document.getElementById("jurusan").value;
	
	if(document.getElementById("jenisNon").checked == true) 
	{non="1";} 
	else {non="0";}
	
	
	//var params = "cmbJurusan=" + varJurusan + "&non=" + varNon;
var params = "cmbJurusan=" + varJurusan + "&nonMKU=" + non;
var xmlhttp = GetXMLHTTP ("POST", "ajax/ubahCmbMatkul.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("comboAwal").innerHTML = hasil;
				
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

function awal()
{
	varJurusan= document.getElementById("jurusan").options[document.getElementById("jurusan").selectedIndex].text;
var params2 = "cmbJurusan=" + varJurusan + "&awal=1";
var xmlhttp2 = GetXMLHTTP ("POST", "ajax/ubahCmbMatkul.php", params2);
xmlhttp2.onreadystatechange = function() 
	{
		if (xmlhttp2.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
		
			if (xmlhttp2.status == 200) {
				hasil2 = xmlhttp2.responseText; // menangkap hasil dari server

				
				// mengolah hasilnya .....
					
				document.getElementById("comboAwal").innerHTML = hasil2;
				
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

xmlhttp2.send(params2);

	}

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
				alert("berhasil");	
				document.getElementById("spanJurusan").innerHTML = hasil;
				document.getElementById("comboAwal").innerHTML = hasil2;
				
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	 // utk method POST

}

