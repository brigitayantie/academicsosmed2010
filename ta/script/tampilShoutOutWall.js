function ShoutIt()
{
		//alert("MasukCek");
	params="";
var xmlhttp = GetXMLHTTP ("POST", "ajax/isiShoutOut.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				
				document.getElementById("isiShoutOut").innerHTML = hasil;
		
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

function updateShoutout()
{
var xmlhttp = GetXMLHTTP ("POST", "ajax/updateSU.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
                
				document.getElementById("divStatus").innerHTML = "";
				document.getElementById("divStatus").innerHTML = hasil;
                
		
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


function tambahShoutOutWall(a)
{
	shoutOut = document.getElementById("txtShoutOutWall").value;
		//alert("MasukCek");
	params="shoutOut=" + shoutOut+"&untuk=" + a;
	//alert(params);
var xmlhttp = GetXMLHTTP ("POST", "ajax/tambahShoutOut.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				document.getElementById("txtShoutOutWall").value= "";
				// mengolah hasilnya .....
				
				hasil +=document.getElementById("isiShoutOutWall").innerHTML;
				document.getElementById("isiShoutOutWall").innerHTML=hasil;
				
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

function tambahKS(idShoutout)
{
	

	shout = document.getElementById("komentar_"+idShoutout).value;
	
		//alert("MasukCek");
	params="shoutOut="+shout+"&idShoutOut=" + idShoutout;
	//alert(params);
var xmlhttp = GetXMLHTTP ("POST", "../ajax/tambahKS.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//alert ("kom_"+idShoutout);
				a = "kom_"+idShoutout;
				parent.document.getElementById(a).innerHTML+=hasil;
				
				
				//document.getElementById("txtShoutOut").value= "";
				// mengolah hasilnya .....
				
				//document.getElementById("shoutoutAtas").innerHTML = hasil;
		
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


function halKomentar(idK)
{
	
	url = "content/halKomentar.php?idK=" + idK ;
	url = new String(url);
	
	
	
var ajaxwin=dhtmlwindow.open("box", "iframe", url , "Komentar", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup menu komentar?")} //Run custom code when window is about to be closed

}


function hapusKomentar(idShoutout)
{
	params="idShoutOut=" + idShoutout;
	var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusKS.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; 
				if(hasil=="true")
				{
					tabel = document.getElementById("shout_"+idShoutout);
					tabel.parentNode.removeChild(tabel);
				}
			}
		}
		else {
		}
		return false;
	}
	xmlhttp.send(params);  
}


function hapusKomentar2(idShoutout)
{

	//shout = document.getElementById("komentar_"+idShoutout).value;
	
	params="idShoutOut=" + idShoutout;
	
var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusKomS.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				if(hasil=="true")
				{
					tabel = document.getElementById("k_"+idShoutout);
					tabel.parentNode.removeChild(tabel);
				}
				//ShoutIt();
				
				//document.getElementById("txtShoutOut").value= "";
				// mengolah hasilnya .....
				
				//document.getElementById("shoutoutAtas").innerHTML = hasil;
		
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