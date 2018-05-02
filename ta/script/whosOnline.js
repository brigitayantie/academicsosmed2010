function whosonline()
{
	params="";
var xmlhttp = GetXMLHTTP ("POST", "ajax/whosonline.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				
				document.getElementById("whosOnline").innerHTML = hasil;
		
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


function tambahShoutOut()
{
	shoutOut = document.getElementById("txtShoutOut").value;
		//alert("MasukCek");
	params="shoutOut=" + shoutOut;
var xmlhttp = GetXMLHTTP ("POST", "ajax/tambahShoutOut.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				document.getElementById("txtShoutOut").value= "";
				// mengolah hasilnya .....
				
				document.getElementById("shoutoutAtas").innerHTML = hasil;
		
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