



function simpanCatt()
{

	varTopik = document.getElementById("txtTopik").value;
	varCatt = document.getElementById("txtCatt").value;
	
var params = "topik=" + varTopik + "&catt=" + varCatt;
	
	
//
var xmlhttp = GetXMLHTTP ("POST", "ajax/simpanCatt.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
				document.getElementById("cattBaru").style.display="none";
				document.getElementById("tampilCatt").innerHTML = hasil;
				document.getElementById("txtCatt").value= "";
				document.getElementById("txtTopik").value= "";
				
				
				 
				
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


function hapusCatt(a)
{
	var r=confirm("Anda yakin mengapus catatan?");
if (r==false)
  {
  return;
  }

	
var params = "idCatt=" +a;
	
	
//
var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusCatt.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
			document.getElementById("tampilCatt").innerHTML=hasil;
		//document.getElementById("tampilHasil").innerHTML = hasil;
				
				 
				
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

function editCatt(a)
{

	
var params = "idCatt=" +a;
	
	
//
var xmlhttp = GetXMLHTTP ("POST", "ajax/editCatatan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
			document.getElementById("tampilCatt").innerHTML=hasil;
		//document.getElementById("tampilHasil").innerHTML = hasil;
				
				 
				
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


function tampil(a)
{

var params = "idCatt=" +a;
	
	
//
var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilSmwCatatan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				window.location.hash = "tampil="+a;
				
				// mengolah hasilnya .....
					
			//document.getElementById("tampilCatt").style.display="none";
			document.getElementById("tampilCatt").innerHTML=hasil;
		//document.getElementById("tampilHasil").innerHTML = hasil;
				
				 
				
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


function cattBaru()
{
	
params="";
var xmlhttp = GetXMLHTTP ("POST", "content/catatan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
			//document.getElementById("tampilCatt").style.display="none";
			//document.getElementById("cattBaru").style.display="none";
		
			document.getElementById("tampilCatt").innerHTML=hasil;
		//document.getElementById("tampilHasil").innerHTML = hasil;
				
				 
				
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


function edit2Catt(a)
{

	varTopik = document.getElementById("txtTopik2").value;
		varCatt = document.getElementById("txtCatt2").value;
var params = "idCatt=" +a+"&topik="+varTopik+"&catt="+varCatt;

var xmlhttp = GetXMLHTTP ("POST", "ajax/edit2Catatan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
			
			document.getElementById("editCatt").style.display="none";
			document.getElementById("tampilCatt").innerHTML=hasil;
		//document.getElementById("tampilHasil").innerHTML = hasil;
				
				 
				
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

