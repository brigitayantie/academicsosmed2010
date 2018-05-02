var arr_untuk=new Array();

function simpanPesan()
{
	//isiPesan = document.getElementById("isiPesan").value;
	//keterangan = document.getElementById("subyekPesan").value;
	untuk = document.getElementById("listTeman").value;
	
		//passingan.join("&")
//var params ="namaAlbum="+namaAlbum+"&keterangan="+keterangan;
		//alert(params);
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

