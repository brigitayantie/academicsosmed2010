function hapusAlbum(a)
{
var r=confirm("Apakah Anda yakin akan menghapus album ini?");
   if (r==false)
   return;
  
  var params = "idAlbum=" + a;

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusAlbum.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
                if(hasil=="true")
                {
                alert ("Sudah hapus");
                window.location = "profile.php";
                }
				else ("Belum hapus");
                
				
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

function hapusFoto(f,a)
{
   var r=confirm("Apakah Anda yakin akan menghapus foto ini?");
   if (r==false)
   return;
  
  var params = "idFoto=" + f + "&idAlbum=" + a;

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusFoto.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
                if(hasil=="true") alert ("Sudah hapus");
				else ("Belum hapus");
                window.location = "profile.php";
				
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

function hapusKomentarFoto(idKF)
{
	params="idShoutOut=" + idKF;
  
	var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusKF.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; 
				if(hasil=="true")
				{
					tabel = document.getElementById("kf_"+idKF);
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
