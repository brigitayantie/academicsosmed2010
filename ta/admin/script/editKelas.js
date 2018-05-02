function gantiFungsi()
{	
	a=document.getElementById("cariBerdasar").selectedIndex
	var params = "cariBerdasar=" + a; 
	
	var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilFungsiEditKelas.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//
				// mengolah hasilnya .....
						
				document.getElementById("spanLanjutan").innerHTML = hasil;
				
				
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);  
	
}


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
				
				//
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
				
				//
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
				
				//
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
				
				//
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



function tampilKelas(jenisKelas)
{
						
			//varJurusan = parent.document.getElementById("jurusan").value;
			//alert("parent1="+varJurusan);
		//document.getElementById("tampungFakultas").value = varFakultas;

	var params = "jns=" + jenisKelas;
	if(jenisKelas=="nonmku") 
	{
		varJurusan = document.getElementById("jurusan").value;
		params = "jns=" + jenisKelas + "&jur=" + varJurusan;
	}
	else if(jenisKelas == "hari")
	{
		varHari = document.getElementById("hari").value;
		params = "jns=" + jenisKelas + "&hari=" + varHari;
	}
	else if(jenisKelas == "jamMulai")
	{
		varJamMulai = document.getElementById("jamMulai").value;
		params = "jns=" + jenisKelas + "&jamMulai=" + varJamMulai ;
	}
		else if(jenisKelas == "idMatkul")
	{
		varIdMatkul = document.getElementById("idMatkul").value;
		params = "jns=" + jenisKelas + "&idMatkul=" + varIdMatkul;
	}
		else if(jenisKelas == "namaMatkul")
	{
		varNmMatkul = document.getElementById("nmMatkul").value;
		params = "jns=" + jenisKelas + "&nmMatkul=" + varNmMatkul;
	}
		else if(jenisKelas == "idDosen")
	{
		varIdDosen = document.getElementById("idDosen").value;
		params = "jns=" + jenisKelas + "&idDosen=" + varIdDosen;
	}
		else if(jenisKelas == "nmDosen")
	{
		varNmDosen = document.getElementById("nmDosen").value;
		params = "jns=" + jenisKelas + "&nmDosen=" + varNmDosen;
	}
	else if(jenisKelas == "ruang")
	{
		varRuang = document.getElementById("ruang").value;
		params = "jns=" + jenisKelas + "&ruang=" + varRuang;
	}
	else if(jenisKelas == "idKelas")
	{
		varIdKelas = document.getElementById("idKelas").value;
		params = "jns=" + jenisKelas + "&idKelas=" + varIdKelas;
	}
	
var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilKelas.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
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

function tampilMhs()
{
		
			varFakultas = parent.document.getElementById("fakultas").value;
			varJurusan = parent.document.getElementById("jurusan").value;
			
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
				
				//
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



function editJurusan(id)
{
	document.getElementById("spanIdJur["+id+"]").style.display="none";
	document.getElementById("txtIdJur["+id+"]").style.display="inline";
	document.getElementById("spanNamaJur["+id+"]").style.display="none";
	document.getElementById("txtNamaJur["+id+"]").style.display="inline";
	document.getElementById("edit["+id+"]").style.display="none";
	document.getElementById("simpan["+id+"]").style.display="inline";
}

function Batal(id)
{
	document.getElementById("spanIdJur["+id+"]").style.display="inline";
	document.getElementById("txtIdJur["+id+"]").style.display="none";
	document.getElementById("spanNamaJur["+id+"]").style.display="inline";
	document.getElementById("txtNamaJur["+id+"]").style.display="none";
	document.getElementById("edit["+id+"]").style.display="inline";
	document.getElementById("simpan["+id+"]").style.display="none";
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
				
				//
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
				
				//
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
			
	var params = "cmbFakultas=" + varFakultas + "&cmbJurusan=" + varJurusan + "&peran=matkul";

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilMatkul.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//
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

/*
function editUser(id,jumFieldTbl)
{
	//alert("sampai");
	for(a=0;a<jumFieldTbl;a++)
	{
	document.getElementById("span"+a+"["+id+"]").style.display="none";
	document.getElementById("txt"+a+"["+id+"]").style.display="inline";
	alert(document.getElementById("txt"+a+"["+id+"]").selectedIndex);
	document.getElementById("txt"+a+"["+id+"]").selectedIndex=2;
	}
	document.getElementById("edit["+id+"]").style.display="none";
	document.getElementById("simpan["+id+"]").style.display="inline";

}

*/

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

/*
function edit2User(id,jumField)
{

	jurusan = document.getElementById("jurusan").value;
	passingan = new Array();
	perintahSql = document.getElementById("perintah").value;
	//alert(perintahSql);
	var nilaiKolom= new Array();
	for(a=0;a<jumField;a++)
	{
	if(a==0) 	
	{
		idUserSblm = document.getElementById("span"+a+"["+id+"]").innerHTML;
		passingan[0]="nilaiKlm["+a+"]=" + nilaiKolom[0];
	}
		nilaiKolom[a]=document.getElementById("txt"+a+"["+id+"]").value;
		passingan[a]="nilaiKlm["+a+"]=" + nilaiKolom[a];
	

	}

if(document.getElementById("lokasi").value=="matkul")
{
	alert("masukIf2");
	
	var params = 
	passingan.join("&")
	//+ "&idFakultas=" + fakultas 
	//+ "&jur=" + jurusan 
	//+ "&idx=" + varIdx 
	//"nilaiKlm[]="   nilaiKolom
	+ "&hslQuery=" + perintahSql
	+ "&jur=" + jurusan
	+ "&tipeUsr=" + document.getElementById("lokasi").value
	+ "&id_UserSblm=" + idUserSblm ;

}
else if(document.getElementById("cmbPeran").value!=null)
{
	alert("masukIf1");
	var params = 
	passingan.join("&")
	//+ "&idFakultas=" + fakultas 
	//+ "&jur=" + jurusan 
	//+ "&idx=" + varIdx 
	//"nilaiKlm[]="   nilaiKolom
	+ "&hslQuery=" + perintahSql
	+ "&jur=" + jurusan
	+ "&tipeUsr=" + document.getElementById("cmbPeran").value
	+ "&id_UserSblm=" + idUserSblm ;
}




 var xmlhttp = GetXMLHTTP("POST","ajax/edit2user.php",params); // relative terhadap penginclude (admin/index.php)
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
				//
				

				if (hasil.substr(hasil.length-1, 1)=="0") {
					alert("Kode Dosen sudah ada");
				}
				else{
					
				for(a=0;a<jumField;a++)
				{

				document.getElementById("span"+a+"["+id+"]").innerHTML=document.getElementById("txt"+a+"["+id+"]").value;

				
				}
					/*
				document.getElementById("spanIdJur["+idx+"]").innerHTML =
					document.getElementById("txtIdJur["+idx+"]").value;
				document.getElementById("spanNamaJur["+idx+"]").innerHTML =
					document.getElementById("txtNamaJur["+idx+"]").value;
				
			
				alert("Berhasil simpan");
				BatalUser(id,jumField);
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

function edit2Kelas(id,jumField)
{

	passingan = new Array();
	perintahSql = document.getElementById("perintah").value;
	if(document.getElementById("jenisMKU")==null||document.getElementById("jenisNon")==null) tipe="hari";
	else
{
	if(document.getElementById("jenisMKU").checked==true)
	{
		tipe="mku";
	}
	else if(document.getElementById("jenisNon").checked==true)
	{
		tipe="nonmku";
		jur = document.getElementById("jurusan").value;
	}
}
	//alert(perintahSql);
	var nilaiKolom= new Array();
	for(a=0;a<jumField;a++)
	{
	if(a==0) 	
	{
		idUserSblm = document.getElementById("span"+a+"["+id+"]").innerHTML;
		
		//passingan[0]="nilaiKlm["+a+"]=" + nilaiKolom[0];
		
	}
	if(a==1) 	
	{
		idKelasSblm = document.getElementById("span"+a+"["+id+"]").innerHTML;
		
		//passingan[0]="nilaiKlm["+a+"]=" + nilaiKolom[0];
		
	}
		nilaiKolom[a]=document.getElementById("txt"+a+"["+id+"]").value;
		passingan[a]="nilaiKlm["+a+"]=" + nilaiKolom[a];
	

	}

	var params = 
	passingan.join("&")
	+ "&tipeMK=" + tipe
	+ "&hslQuery=" + perintahSql
	+ "&id_UserSblm=" + idUserSblm 
	+ "&id_KelasSblm=" + idKelasSblm ;
if(tipe=="nonmku")
{
	var params = 
	passingan.join("&")
	+ "&tipeMK=" + tipe
	+ "&jur=" + jur
	+ "&hslQuery=" + perintahSql
	+ "&id_UserSblm=" + idUserSblm 
	+ "&id_KelasSblm=" + idKelasSblm ;
	}



 var xmlhttp = GetXMLHTTP("POST","ajax/edit3kelas.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
xmlhttp.onreadystatechange = function() 
	{
		
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			 
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
					
				if (hasil.substr(hasil.length-1, 1)=="0") {
					alert("Kode kelas sudah ada");
				}
				else if(hasil=="1")
				{
					alert("Jam Mulai lebih besar dari jam selesai");
				}
				else if(hasil=="2")
				{
					alert("Id Kelas baru sama dengan Id kelas lain");
				}
				else{
			
				for(a=0;a<jumField;a++)
				{

				document.getElementById("span"+a+"["+id+"]").innerHTML=document.getElementById("txt"+a+"["+id+"]").value;
				
				
				}
				/*
				if(hasil==0) 
				{
					alert("Sudah dipakai kelas lain");
					
				}
				else if(hasil==2) 
				{
					alert("Jam Selesai lebih kecil dari jam mulai");
					
				}
				*/
				//document.getElementById("statusSimpan").value=hasil;
				//statusSimpan = hasil;
				alert("Berhasil simpan");
				BatalUser(id,jumField);
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


function gantiSelect(a,b,c)
{
	
	//document.getElementById("txt"+a+"["+b+"]").value=document.getElementById("txt"+c+"["+b+"]").value;
	document.getElementById("txt"+a+"["+b+"]").selectedIndex=document.getElementById("txt"+c+"["+b+"]").selectedIndex;

}

