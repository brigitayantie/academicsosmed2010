/*
function gantiCmb(jur)
{
	document.getElementById("fakultas").value = jur;
	
	}
*/
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
						
				parent.document.getElementById("tampilJurusan").innerHTML = hasil;
				
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
	
	
function tampilJurusan()
{
	varPage = parent.document.getElementById("page").value;
	varFakultas = document.getElementById("fakultas").value;
	varLokasi = document.getElementById("lokasi").value;

	var params = "cmbFakultas=" + varFakultas  + "&page=" + varPage+ "&lokasi=" + varLokasi;

var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
					
				document.getElementById("tampilJurusan").innerHTML = hasil;
				
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
	tampilJurusan();
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


function hapusJurusan(idJurusan,idFakultas)
{
	var r=confirm("Apakah anda yakin menghapus jurusan?");
if (r==false)
    {
  return false;
  }

	varIdJur = idJurusan;
	varIdFak = idFakultas
	var params = "idJurusan=" + varIdJur + "&idFakultas=" + varIdFak;

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("tampilJurusan").innerHTML = hasil;
				
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

// JavaScript Document
function edit2Jurusan(idx)
{
	idJurSblm = document.getElementById("spanIdJur["+idx+"]").innerHTML;
 
 idJurusan = document.getElementById("txtIdJur["+idx+"]").value;
 
jurusan = document.getElementById("txtNamaJur["+idx+"]").value;

//fakultas = document.getElementById("idFakultas").value;

//varIdx = document.getElementById("idxTabel").value;

//alert("idJur=" + idJurusan + "&idFakultas=" + fakultas + "&jur=" + jurusan + "&idx=" + varIdx);

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
				//document.getElementById("tampilJurusan").innerHTML = hasil;
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



function editMKU(idx)
{
	idJurSblm = document.getElementById("spanIdJur["+idx+"]").innerHTML;
 
 idJurusan = document.getElementById("txtIdJur["+idx+"]").value;
 
jurusan = document.getElementById("txtNamaJur["+idx+"]").value;

//fakultas = document.getElementById("idFakultas").value;

//varIdx = document.getElementById("idxTabel").value;

//alert("idJur=" + idJurusan + "&idFakultas=" + fakultas + "&jur=" + jurusan + "&idx=" + varIdx);

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
				//document.getElementById("tampilJurusan").innerHTML = hasil;
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

function hapusMKU(varIdMatkul)
{
	var r=confirm("Apakah anda yakin menghapus matkul?");
if (r==false)
    {
  return false;
  }

	IdMatkul = varIdMatkul;
	varIdKet = "MKU";
	var params = "idMatkul=" + IdMatkul +  "&idKet=" + varIdKet;

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				a = document.getElementById("tipe").value;
				
				// mengolah hasilnya .....
				document.getElementById("tampilHasil").innerHTML = hasil;
				//else
				//document.getElementById("tampilJurusan").innerHTML = hasil;
				
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

