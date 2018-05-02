function cekLogin()
{
	idUser=document.getElementById("loginID").value;
	pwd=document.getElementById("pass").value;
    /*
	if(document.getElementById("dosen").checked==true) peran = "dosen";
	else 	if(document.getElementById("mahasiswa").checked==true) peran = "mahasiswa";
    */
	//var params = "id_user=" + idUser + "&password=" + pwd + "&peran=" + peran;
    var params = "id_user=" + idUser + "&password=" + pwd ;


var xmlhttp = GetXMLHTTP ("POST", "ajax/cekSession.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				
				if(hasil==1)
				window.location.assign("home.php")
                /*
				else if(hasil==2)
				document.getElementById("hasilCek").innerHTML = "Anda tidak terdaftar sebagai dosen";
                
                else if(hasil==2)
                document.getElementById("hasilCek").innerHTML = "Anda tidak terdaftar sebagai mahasiswa";
                */
                else 
                document.getElementById("hasilCek").innerHTML = "Password Anda salah";
                /*
				else
				document.getElementById("hasilCek").innerHTML = "Gagal Login";
                */
		
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