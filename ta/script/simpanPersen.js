var passPersenUAS = new Array();
var passPersenUASInt = new Array();
var passPersenUTS = new Array();
var passPersenUTSInt = new Array();
function simpanPersen(tipe,jumRow,idKelas)
{
	
	persenString=0;
	var persen = new Number(persenString);
	for(i=0;i<jumRow;i++)
	{
		passPersenUAS[i]=document.getElementById("txtUAS["+i+"]").value;
		
		a = new Number(passPersenUAS[i]);
		
		passPersenUASInt[i]="persen["+i+"]=" + a;
		persen = persen+a;
	}

	if(persen!=100) 
	{
		alert("Persentase harus = 100%");
		return ;
	}
	alert("UAS");
		//passingan.join("&")
var params ="jmlBaris="+jumRow+"&idKelas="+idKelas+"&tipe="+tipe+"&"+passPersenUASInt.join("&");
		
var xmlhttp = GetXMLHTTP ("POST", "../ajax/simpanPersen.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
		
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


function simpanPersenUTS(tipe,jumRow,idKelas)
{
	persenString=0;
	var persen = new Number(persenString);
	for(i=0;i<jumRow;i++)
	{
		
		passPersenUTS[i]=document.getElementById("txtPersenUTS["+i+"]").value;
		a = new Number(passPersenUTS[i]);
		
		passPersenUTSInt[i]="persen["+i+"]=" + a;
		persen = persen+a;
	}

	if(persen!=100) 
	{
		alert("Persentase harus = 100%");
		return ;
	}
	
		//passingan.join("&")
var params ="jmlBaris="+jumRow+"&idKelas="+idKelas+"&tipe="+tipe+"&"+passPersenUTSInt.join("&");
		
var xmlhttp = GetXMLHTTP ("POST", "../ajax/simpanPersen.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
		
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