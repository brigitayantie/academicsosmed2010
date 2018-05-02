
function cariNilaiAkhir()
{

	varSemester = document.getElementById("semester").value;
	
var params = "semester=" + varSemester;
	
	

var xmlhttp = GetXMLHTTP ("POST", "ajax/nilaiAkhir.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("tampilNilaiAkhir").innerHTML = hasil;
				
				 
				
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



function cariDetailNilai()
{

	varSemester = document.getElementById("semester2").value;
	
var params = "semester=" + varSemester;
	
	

var xmlhttp = GetXMLHTTP ("POST", "ajax/semuaNilai.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("tampilDetailNilai").innerHTML = hasil;
				
				 
				
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


