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
				
				//
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
				
				//
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

function editBagian(id)
{
	
	document.getElementById("spanNamaBagian["+id+"]").style.display="none";
	document.getElementById("txtNamaBagian["+id+"]").style.display="inline";
	document.getElementById("edit["+id+"]").style.display="none";
	document.getElementById("simpan["+id+"]").style.display="inline";
}

function BatalBagian(id)
{
	document.getElementById("spanNamaBagian["+id+"]").style.display="inline";
	document.getElementById("txtNamaBagian["+id+"]").style.display="none";
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
function edit2Bagian(idx)
{
	idBagianSblm = document.getElementById("spanIdBagian["+idx+"]").innerHTML;
 
 
bagian = document.getElementById("txtNamaBagian["+idx+"]").value;


var params = "bagian=" + bagian
//+ "&idx=" + varIdx 
+ "&idBagianSblm=" + idBagianSblm ;

 var xmlhttp = GetXMLHTTP("POST","ajax/edit2Bagian.php",params); // relative terhadap penginclude (admin/index.php)
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
				
				document.getElementById("spanNamaBagian["+idx+"]").innerHTML =
					document.getElementById("txtNamaBagian["+idx+"]").value;
				
				BatalBagian(idx);
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

function hapusBagian(varIdBagian)
{
	var r=confirm("Apakah anda yakin menghapus ruang?");
if (r==false)
    {
  return false;
  }

	IdBagian = varIdBagian;
	
	var params = "idBagian=" + IdBagian;

var xmlhttp = GetXMLHTTP ("POST", "ajax/hapusBagian.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				document.getElementById("tampilAwal").innerHTML = "";
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

