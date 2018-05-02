


function stlhPeran()
{
	varPeran = document.getElementById("cmbPeran").value;
	if(varPeran == "Dosen")
	{
		
		document.getElementById("tampilData").innerHTML="";
		document.getElementById("ubahTambah").innerHTML="<div align='center'>Anda dapat <a  href='#' onclick='javascript:openmypage(); return false;'>menambah</a> dan mengedit data dosen pada form berikut</div>";
		tampilRadioMKU();
		document.getElementById("spanFakultas").innerHTML="";
		document.getElementById("spanJurusan").innerHTML="";


	}
	else if(varPeran == "Mhs")
	{
		
			
		document.getElementById("tampilData").innerHTML="";
		document.getElementById("ubahTambah").innerHTML="<div align='center'>Anda dapat <a  href='#' onclick='javascript:openpageMhs(); return false;'>menambah</a> dan mengedit data mahasiswa pada form berikut</div>";
		mhs();		
			document.getElementById("spanFakultas").innerHTML="";
		document.getElementById("spanJurusan").innerHTML="";
	}
	else if(varPeran == "Karyawan")
	{
		karyawan();
	}


}


function getTipeUser()
{

	return tipeUser;
}


function tampilRadioMKU()
{
		
	params="";
	var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilRadioMKU.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
						
				document.getElementById("spanMKU").innerHTML = hasil;
				
				
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


function mku()
{
	
	document.getElementById("spanFakultas").innerHTML="";
	//var params = "cmbFakultas=" + varFakultas;

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilMKU.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
					
				document.getElementById("tampilData").innerHTML = hasil;
				
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

function tampilFakultas()
{

	params = "";
	var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilFakultas.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....

				document.getElementById("spanFakultas").innerHTML = hasil;
				
				
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

function tampilFakultasMhs()
{

	params = "";
	var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilFakultasMhs.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....

				document.getElementById("spanFakultas").innerHTML = hasil;
				
				
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



function tampilDosen()
{
	//alert("tampilDosen");
				
		
			varFakultas = parent.document.getElementById("fakultas").value;
			varJurusan = parent.document.getElementById("jurusan").value;
			//alert("parent1="+varJurusan);
		//document.getElementById("tampungFakultas").value = varFakultas;
		//document.getElementById("tampungJurusan").value = varJurusan;
	var params = "cmbFakultas=" + varFakultas + "&cmbJurusan=" + varJurusan + "&peran=dosen";

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilUser.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				if(parent.document.getElementById("fakultas").value!=null)
				{
					//alert("parent");
					parent.document.getElementById("tampilData").innerHTML = hasil;
				}
				else
				document.getElementById("tampilData").innerHTML = hasil;
				
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

function tampilMhs()
{
	alert("tampilMhs");
				
		
			varFakultas = parent.document.getElementById("fakultas").value;
			varJurusan = parent.document.getElementById("jurusan").value;
			alert("parent1="+varJurusan);
		//document.getElementById("tampungFakultas").value = varFakultas;
		//document.getElementById("tampungJurusan").value = varJurusan;
	var params = "cmbFakultas=" + varFakultas + "&cmbJurusan=" + varJurusan + "&peran=mhs";

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilUser.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				if(parent.document.getElementById("fakultas").value!=null)
				{
					//alert("parent");
					parent.document.getElementById("tampilData").innerHTML = hasil;
				}
				else
				document.getElementById("tampilData").innerHTML = hasil;
				
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




function editProfilUser()
{

	document.getElementById("spanAlamat").style.display="none";
	document.getElementById("spanEmail").style.display="none";
	document.getElementById("spanHobi").style.display="none";
	document.getElementById("spanDeskripsi").style.display="none";
	document.getElementById("txtEmail").style.display="inline";
	document.getElementById("txtAlamat").style.display="inline";
	document.getElementById("txtHobi").style.display="inline";
	document.getElementById("txtDeskripsi").style.display="inline";
	
	document.getElementById("edit").style.display="none";
	document.getElementById("simpan").style.display="inline";
	
}

function batalEditProfile()
{
	document.getElementById("spanAlamat").style.display="inline";
	document.getElementById("spanEmail").style.display="inline";
	document.getElementById("spanHobi").style.display="inline";
	document.getElementById("spanDeskripsi").style.display="inline";
	document.getElementById("txtEmail").style.display="none";
	document.getElementById("txtAlamat").style.display="none";
	document.getElementById("txtHobi").style.display="none";
	document.getElementById("txtDeskripsi").style.display="none";
	
	document.getElementById("edit").style.display="inline";
	document.getElementById("simpan").style.display="none";
}



function mhs()
{
	document.getElementById("spanMKU").innerHTML="";
	tampilFakultasMhs();
	
}
/*
function tampilJurusanParent()
{
	
	varFakultas = parent.document.getElementById("fakultas").value;
	var params = "cmbFakultas=" + varFakultas;

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
						
				parent.document.getElementById("tampilData").innerHTML = hasil;
				
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
	
*/	
function tampilJurusan()
{
	
	varFakultas = document.getElementById("fakultas").value;
	var params = "cmbFakultas=" + varFakultas;

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
					
				document.getElementById("tampilData").innerHTML = hasil;
				
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


function tampilMatkul()
{
	
		varFakultas = parent.document.getElementById("fakultas").value;
			varJurusan = parent.document.getElementById("jurusan").value;
			varPage = parent.document.getElementById("page").value;
			
	var params = "cmbFakultas=" + varFakultas + "&cmbJurusan=" + varJurusan + "&peran=matkul" + "&page=" + varPage;

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilMatkul.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
			parent.document.getElementById("spanMatkul").innerHTML = "";
				parent.document.getElementById("spanMatkul").innerHTML = hasil;
				
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


function PagingAJAX(page,conditional)
{
	parent.document.getElementById("page").value=page;
	tampilMatkul();
}

function PaksaSelected(objSelect, nilai) {
	for (i = 0; i < objSelect.length; i++) {
		if (objSelect.options[i].value == nilai)
			objSelect.options[i].selected = true;
	}
}

function editUser(id,jumFieldTbl)
{
	//alert("sampai");
	for(a=0;a<jumFieldTbl;a++)
	{
		objSpan = document.getElementById("span"+a+"["+id+"]");
		objSelect = document.getElementById("txt"+a+"["+id+"]");
		PaksaSelected(objSelect, objSpan.innerHTML);
	objSpan.style.display="none";
	objSelect.style.display="inline";
	
	
	//alert(document.getElementById("txt"+a+"["+id+"]").selectedIndex);
	//document.getElementById("txt"+a+"["+id+"]").selectedIndex=2;
	}
	document.getElementById("edit["+id+"]").style.display="none";
	document.getElementById("simpan["+id+"]").style.display="inline";

}


function editKelas(id,jumFieldTbl)
{
	//alert("sampai");
	for(a=0;a<jumFieldTbl-1;a++)
	{
		objSpan = document.getElementById("span"+a+"["+id+"]");
		objSelect = document.getElementById("txt"+a+"["+id+"]");
		PaksaSelected(objSelect, objSpan.innerHTML);
	objSpan.style.display="none";
	objSelect.style.display="inline";
	
	
	//alert(document.getElementById("txt"+a+"["+id+"]").selectedIndex);
	//document.getElementById("txt"+a+"["+id+"]").selectedIndex=2;
	}
	document.getElementById("edit["+id+"]").style.display="none";
	document.getElementById("simpan["+id+"]").style.display="inline";

}

/*
function edit_Jurusan($idJurusan,$idFakultas,$id)
{
	varIdJur = $idJurusan;
	varIdFak = $idFakultas;
	varIdx = $id;
	var params = "idJurusan=" + varIdJur + "&idFakultas=" + varIdFak + "&idx=" + varIdx;

var xmlhttp = new Array();

xmlhttp = GetXMLHTTP ("POST", "ajax/spanJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				hasil = hasil.split("-");

				// mengolah hasilnya .....
					
				document.getElementById("txtIdJur[" + varIdx + "]").innerHTML = hasil[0];
				document.getElementById("txtNamaJur[" + varIdx + "]").innerHTML = hasil[1];				
				document.getElementById("edit[" + varIdx + "]").innerHTML = hasil[2];	
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

*/
function hapusUser(id_user)
{
	if(document.getElementById("lokasi")!=null)
	{		
		var r=confirm("Apakah anda yakin menghapus data Mata Kuliah?");	
		var params = "idUser=" + id_user +  "&tipeForm=1";
		
	}

	else
	{
		if(document.getElementById("cmbPeran").value=="Dosen")
			var r=confirm("Apakah anda yakin menghapus data dosen?");
		else
			var r=confirm("Apakah anda yakin menghapus data mahasiwa?");
	
		var params = "idUser=" + id_user;
	}
	
	if (r==false)
    {
  return false;
  }


	

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusUser.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				if(document.getElementById("lokasi")!=null)
				tampilMatkul();
				else
				{
				if(document.getElementById("cmbPeran").value=="Dosen")
				tampilDosen();	
				else
				tampilMhs();
				}//document.getElementById("tampilData").innerHTML = hasil;
								
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

function edit2ProfilUser()
{
	
	
	idUser =document.getElementById("idUser").value; 
	email = document.getElementById("txtEmail").value;
	alamat = document.getElementById("txtAlamat").value;
	hobi = document.getElementById("txtHobi").value;
	deskripsi = document.getElementById("txtDeskripsi").value;
	
		var params = 
	 "idUser=" + idUser
	+ "&email=" + email
	+ "&alamat=" + alamat
	+ "&hobi=" + hobi
	+ "&deskripsi=" + deskripsi;


//alert(params);


 var xmlhttp = GetXMLHTTP("POST","ajax/edit2ProfilUser.php",params);
//mulai memberi perintah ajax bekerja
xmlhttp.onreadystatechange = function() 
	{
		
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			 
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
					//alert(hasil);
				document.getElementById("spanEmail").innerHTML = document.getElementById("txtEmail").value;
	document.getElementById("spanAlamat").innerHTML =document.getElementById("txtAlamat").value;
	document.getElementById("spanHobi").innerHTML = document.getElementById("txtHobi").value;
	 document.getElementById("spanDeskripsi").innerHTML = document.getElementById("txtDeskripsi").value;
				
				batalEditProfile()
				alert("Berhasil simpan");
				
				

}
		}
		else {
			//document.getElementById("tampilHasil").innerHTML = "Tunggu 5 detik ya";
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);  ////u/ method post
 //  xmlhttp.send(null); -> u/ GET
}

/*

function edit2Jurusan(idx)
{
	idJurSblm = document.getElementById("spanIdJur["+idx+"]").innerHTML;
 
 idJurusan = document.getElementById("txtIdJur["+idx+"]").value;
 
jurusan = document.getElementById("txtNamaJur["+idx+"]").value;

//fakultas = document.getElementById("idFakultas").value;

//varIdx = document.getElementById("idxTabel").value;

//alert("idJur=" + idJurusan + "&idFakultas=" + fakultas + "&jur=" + jurusan + "&idx=" + varIdx);
*/

/*
if(idJurusan.length == 0) //nama var di js
 {
 document.getElementById("err_idJur").innerHTML= "* Id Jurusan harus diisi";
 document.getElementById("idJur").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_idJur").innerHTML= "";



//di js ga ada trim
 if(jurusan.length == 0) //nama var di js
 {
 document.getElementById("err_jur").innerHTML= "* Jurusan harus diisi";
 document.getElementById("jur").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_jur").innerHTML= "";
*/
/*
var params = "idJur=" + idJurusan 
//+ "&idFakultas=" + fakultas 
+ "&jur=" + jurusan 
//+ "&idx=" + varIdx 
+ "&idJurusanSblm=" + idJurSblm ;

 var xmlhttp = GetXMLHTTP("POST","ajax/edit2Jurusan.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
xmlhttp.onreadystatechange = function() 
	{
		
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			 
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//document.getElementById("tampilHasil").innerHTML = "Udah 5 detik";
				//alert ("-"+hasil+"-");
				//hasil = hasil.split("-");
				// mengolah hasilnya .....
					
				//document.getElementById("txtIdJur[" + varIdx + "]").innerHTML = hasil[0];
				//document.getElementById("txtNamaJur[" + varIdx + "]").innerHTML = hasil[1];				
				//document.getElementById("edit[" + varIdx + "]").innerHTML = hasil[2];		
				//document.getElementById("tampilData").innerHTML = hasil;
				if (hasil.substr(hasil.length-1, 1)=="0") {
					alert("Kode Jurusan sudah ada!");
				}
				else{
				document.getElementById("spanIdJur["+idx+"]").innerHTML =
					document.getElementById("txtIdJur["+idx+"]").value;
				document.getElementById("spanNamaJur["+idx+"]").innerHTML =
					document.getElementById("txtNamaJur["+idx+"]").value;
				
				Batal(idx);
				}
			}
		}
		else {
			//document.getElementById("tampilHasil").innerHTML = "Tunggu 5 detik ya";
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);  ////u/ method post
 //  xmlhttp.send(null); -> u/ GET
}

*/

function BatalUser(id,jumFieldTbl)
{
		for(a=0;a<jumFieldTbl;a++)
	{
		
	document.getElementById("span"+a+"["+id+"]").style.display="inline";
	document.getElementById("txt"+a+"["+id+"]").style.display="none";
	
	}
	
	document.getElementById("edit["+id+"]").style.display="inline";
	document.getElementById("simpan["+id+"]").style.display="none";
}




