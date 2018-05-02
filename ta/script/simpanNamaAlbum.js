var namaFoto = new Array();
var ketFoto = new Array();
function simpanNamaAlbum()
{
	namaAlbum = document.getElementById("namaAlbum").value;
	keterangan = document.getElementById("keterangan").value;
		//passingan.join("&")
var params ="namaAlbum="+namaAlbum+"&keterangan="+keterangan;
		
var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/simpanAlbum.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				window.location.assign("upload.php?id="+hasil);
		
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



function simpanKeteranganAlbum(jumFoto,idAlbum)
{   
    ef=document.forms['editFoto'].elements['radioProfil'];
    
	for(i=0;i<jumFoto;i++)
	{
		a = "subyek"+i;
		b=document.getElementById(a).value;
		namaFoto[i]="namaFoto["+i+"]="+b;

		c="ket"+i;
		d=document.getElementById(c).value;
		ketFoto[i]="ketFoto["+i+"]="+d;
        
        //alert(document.forms['editFoto'].elements['radioProfil'][0].value);
        if(ef[i].checked) {
			tampung = ef[i].value;
            //alert(tampung);
		}

	}
   
	//passingan.join("&")
var params ="profil="+tampung+"&idAlbum="+idAlbum+"&"+"jumFoto="+jumFoto+"&"+namaFoto.join("&")+"&"+ketFoto.join("&");
//alert(params);
var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/simpanKetAlbum.php", params);
	
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


