// JavaScript Document

function replaceUserDoc()
{
	
	status="tambah";
if(parent.document.getElementById("cmbPeran")==null)
status="tambahMatkul";
else
tipe=parent.document.getElementById("cmbPeran").value;
 
//alert(tipe);

 

 jur=document.getElementById("jurusan").value;
		ubahCmbJurusan();
	parent.document.getElementById("fakultas").value=document.getElementById("fakultas").value;
if(status=="tambahMatkul")
{
	
	
	//knp ga bisa pk tampilMatkul();
	
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
else
{
if(tipe=="Dosen")
{
    parent.document.getElementById("nonmku").checked=true;
	tampilDosen();
}

else if(tipe=="Mhs")
{
tampilMhs();
}
}
	
}
	 
function tambahMhs()
{
 

nrp = document.getElementById("nrp").value;
namaMhs = document.getElementById("namaMhs").value;
varGender = document.getElementById("gender").value;
varPwdMhs = document.getElementById("pwdMhs").value;
varHpMhs = document.getElementById("hpMhs").value;
varEmailMhs = document.getElementById("emailMhs").value;
varTglLhrMhs = document.getElementById("tglLhrMhs").value;
varT4LhrMhs = document.getElementById("t4LhrMhs").value;
varAlamatMhs = document.getElementById("alamatMhs").value;
varAngkatanMhs = document.getElementById("angkatanMhs").value;
varFakultas = document.getElementById("fakultas").value;
varJurusan = document.getElementById("jurusan").value;
//di js ga ada trim
 if(nrp.length == 0)
 {
 document.getElementById("err_nrp").innerHTML= "* NRP isi harus diisi";
 document.getElementById("txtnama").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_nrp").innerHTML= "";

 if(namaMhs.length == 0)
 {
 document.getElementById("err_namaMhs").innerHTML= "* Nama isi harus diisi";
 document.getElementById("namaMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_namaMhs").innerHTML= "";

if(varPwdMhs.length == 0)
 {
 document.getElementById("err_pwdMhs").innerHTML= "* Password isi harus diisi";
 document.getElementById("pwdMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_pwdMhs").innerHTML= "";

if(varHpMhs.length == 0)
 {
 document.getElementById("err_hpMhs").innerHTML= "* No. Handphone isi harus diisi";
 document.getElementById("hpMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_hpMhs").innerHTML= "";



if(varEmailMhs.length == 0)
 {
 document.getElementById("err_emailMhs").innerHTML= "* Email isi harus diisi";
 document.getElementById("emailMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_emailMhs").innerHTML= "";
validasi = validateEmail(varEmailMhs); 
if(validasi==false) 
{
	
	document.getElementById("err_emailMhs").innerHTML= "* Penulisan Email kurang tepat";
	
	return false;
}



if(varTglLhrMhs.length == 0)
 {
 document.getElementById("err_tglLhrMhs").innerHTML= "* Tanggal lahir isi harus diisi";
 document.getElementById("tglLhrMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_tglLhrMhs").innerHTML= "";

if(varT4LhrMhs.length == 0)
 {
 document.getElementById("err_t4LhrMhs").innerHTML= "* Tempat lahir isi harus diisi";
 document.getElementById("t4LhrMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_t4LhrMhs").innerHTML= "";

if(varAlamatMhs.length == 0)
 {
 document.getElementById("err_alamatMhs").innerHTML= "* Alamat isi harus diisi";
 document.getElementById("alamatMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_alamatMhs").innerHTML= "";

if(varAngkatanMhs.length == 0)
 {
 document.getElementById("err_angkatanMhs").innerHTML= "* Angkatan isi harus diisi";
 document.getElementById("angkatanMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_angkatanMhs").innerHTML= "";

if(varAngkatanMhs.length == 0)
 {
 document.getElementById("err_angkatanMhs").innerHTML= "* Angkatan isi harus diisi";
 document.getElementById("angkatanMhs").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_angkatanMhs").innerHTML= "";


var params = "nrp=" + nrp + "&namaMhs=" + namaMhs + "&genderMhs=" + varGender + "&pwdMhs=" + varPwdMhs + "&hpMhs=" + varHpMhs + "&emailMhs=" + varEmailMhs + "&tglLhrMhs=" + varTglLhrMhs + "&t4LhrMhs=" + varT4LhrMhs + "&alamatMhs=" + varAlamatMhs + "&angkatanMhs=" + varAngkatanMhs + "&fakultas=" + varFakultas + "&jurusan=" + varJurusan;

 var xmlhttp = GetXMLHTTP("POST","ajax/simpanMhs.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
 xmlhttp.onreadystatechange = function()
 {
 //  udh slesai diexecute
 if(xmlhttp.readyState == 4)
 {
    //document.getElementById("pesan").innerHTML = "";
	document.getElementById("tampilHasil").innerHTML = "";

    //hsl eksekusi tdk ada eror
   if(xmlhttp.status == 200)
     {

/*
document.getElementById("nrp").reset();
document.getElementById("namaMhs").value = "";
 document.getElementById("gender").value= "";
document.getElementById("pwdMhs").value= "";
document.getElementById("hpMhs").value= "";
document.getElementById("emailMhs").value= "";
document.getElementById("tglLhrMhs").value= "";
document.getElementById("t4LhrMhs").value= "";
document.getElementById("alamatMhs").value= "";
document.getElementById("angkatanMhs").value= "";
document.getElementById("fakultas").value= "";
*/
       hasil = xmlhttp.responseText; //menangkap hsl server
      
               //...mengolah hasil
			   
       if(hasil == "0")
       {
		   document.getElementById("tampilHasil").innerHTML = "Berhasil";
		    replaceUserDoc();


         //alert ("Data berhasil disimpan");
       }
       else
       {
         alert ("Data gagal disimpan");
       }
     }
 }
 else
 {
     document.getElementById("tampilHasil").innerHTML = "tunggu..."; //document.getElementById("pesan".innerHTML = "<img src=" ">tunggu...";
     //saat menunggu ajax selesai execute
 }
 return false;
 }

 xmlhttp.send(params); //u/ method post
 //  xmlhttp.send(null); -> u/ GET
}

function ubahCmbJurusan()
{

	varFakultas = document.getElementById("fakultas").value;
	//alert(document.getElementById("editMhs").value);
	//alert(document.getElementById("editUser").value);

	
	var params = "cmbFakultas=" + varFakultas + "&edtUser=1";
	if(document.getElementById("editUser")==null)
	{
		params = "cmbFakultas=" + varFakultas;		
	}
	if(document.getElementById("editMhs")!=null)
	{
		var params = "cmbFakultas=" + varFakultas + "&edtUser=2";
	}
	if(document.getElementById("lokasi")!=null)
	{
		var params = "cmbFakultas=" + varFakultas + "&lks=mk";
	}
		if(document.getElementById("edtKelas")!=null)
	{
		var params = "cmbFakultas=" + varFakultas + "&edtKelas=1";
	}
	
	

var xmlhttp = GetXMLHTTP ("POST", "ajax/ubahCmbJurusan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("spanJurusan").innerHTML = hasil;
				 if(status=="tambah")
				 {

					 document.getElementById("jurusan").value=jur;
				 parent.document.getElementById("spanJurusan").innerHTML = hasil;
				 parent.document.getElementById("jurusan").value=jur;
				 
				 }
				 else if(status=="tambahMatkul")
				 {
					 document.getElementById("jurusan").value=jur;
				 parent.document.getElementById("spanJurusan").innerHTML = hasil;
				 parent.document.getElementById("jurusan").value=jur;
				
					 
					 }
				 
				
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

function tambahMatkul()
{
 
 varIdMatkul = document.getElementById("idMatkul").value;
varMatkul = document.getElementById("namaMatkul").value;
varJurusan = document.getElementById("jurusan").value;
varFakultas = document.getElementById("fakultas").value;
if(varIdMatkul.length == 0) //nama var di js
 {
 document.getElementById("err_idMatkul").innerHTML= "* Id Mata Kuliah harus diisi";
 document.getElementById("idMatkul").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_idMatkul").innerHTML= "";



//di js ga ada trim
 if(varMatkul.length == 0) //nama var di js
 {
 document.getElementById("err_matkul").innerHTML= "* Nama Mata Kuliah harus diisi";
 document.getElementById("namaMatkul").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_matkul").innerHTML= "";


var params = "jurusan=" + varJurusan + "&fakultas=" + varFakultas + "&idMatkul=" + varIdMatkul + "&matkul=" + varMatkul;

 var xmlhttp = GetXMLHTTP("POST","ajax/tambahMatkul.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
 xmlhttp.onreadystatechange = function()
 {
 //  udh slesai diexecute
 if(xmlhttp.readyState == 4)
 {
    
	document.getElementById("tampilHasil").innerHTML = "";

    //hsl eksekusi tdk ada eror
   if(xmlhttp.status == 200)
     {

       hasil = xmlhttp.responseText; //menangkap hsl server
       
               //...mengolah hasil
			   
       if(hasil == "0")
       {
		   document.getElementById("tampilHasil").innerHTML = "Berhasil";
		   status2="tambahMatkul";
		replaceUserDoc();
         //alert ("Data berhasil disimpan");
       }
       else
       {
         alert ("Data gagal disimpan");
       }
     }
 }
 else
 {
     document.getElementById("tampilHasil").innerHTML = "tunggu..."; //document.getElementById("pesan".innerHTML = "<img src=" ">tunggu...";
     //saat menunggu ajax selesai execute
 }
 return false;
 }

 xmlhttp.send(params); //u/ method post
 //  xmlhttp.send(null); -> u/ GET
}


function tambahDosen()
{
 
 
nip = document.getElementById("nip").value;
namaDosen = document.getElementById("namaDosen").value;
varGender = document.getElementById("gender").value;
varPwdDosen = document.getElementById("pwdDosen").value;
varHpDosen = document.getElementById("hpDosen").value;
varEmailDosen = document.getElementById("emailDosen").value;
varTglLhrDosen = document.getElementById("tglLhrDosen").value;
varT4LhrDosen = document.getElementById("t4LhrDosen").value;
varAlamatDosen = document.getElementById("alamatDosen").value;
if(document.getElementById("jenisNon").checked==true)
varJurusan = document.getElementById("jurusan").value;

//di js ga ada trim
 if(nip.length == 0)
 {
 document.getElementById("err_nip").innerHTML= "* NIP isi harus diisi";
 document.getElementById("txtnama").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_nip").innerHTML= "";

 if(namaDosen.length == 0)
 {
 document.getElementById("err_namaDosen").innerHTML= "* Nama isi harus diisi";
 document.getElementById("namaDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_namaDosen").innerHTML= "";

if(varPwdDosen.length == 0)
 {
 document.getElementById("err_pwdDosen").innerHTML= "* Password isi harus diisi";
 document.getElementById("pwdDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_pwdDosen").innerHTML= "";

if(varHpDosen.length == 0)
 {
 document.getElementById("err_hpDosen").innerHTML= "* No. Handphone isi harus diisi";
 document.getElementById("hpDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_hpDosen").innerHTML= "";

if(varEmailDosen.length == 0)
 {
 document.getElementById("err_emailDosen").innerHTML= "* Email isi harus diisi";
 document.getElementById("emailDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_emailDosen").innerHTML= "";

validasi = validateEmail(varEmailDosen); 
if(validasi==false) {
	document.getElementById("err_emailDosen").innerHTML= "* Penulisan Email kurang tepat";
	return false;
}

if(varTglLhrDosen.length == 0)
 {
 document.getElementById("err_tglLhrDosen").innerHTML= "* Tanggal lahir isi harus diisi";
 document.getElementById("tglLhrDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_tglLhrDosen").innerHTML= "";

if(varT4LhrDosen.length == 0)
 {
 document.getElementById("err_t4LhrDosen").innerHTML= "* Tempat lahir isi harus diisi";
 document.getElementById("t4LhrDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_t4LhrDosen").innerHTML= "";

if(varAlamatDosen.length == 0)
 {
 document.getElementById("err_alamatDosen").innerHTML= "* Alamat isi harus diisi";
 document.getElementById("alamatDosen").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_alamatDosen").innerHTML= "";



if(document.getElementById("jenisNon").checked==true)
{
var params = "nip=" + nip + "&namaDosen=" + namaDosen + "&genderDosen=" + varGender + "&pwdDosen=" + varPwdDosen + "&hpDosen=" + varHpDosen + "&emailDosen=" + varEmailDosen + "&tglLhrDosen=" + varTglLhrDosen + "&t4LhrDosen=" + varT4LhrDosen + "&alamatDosen=" + varAlamatDosen + "&jurusan=" + varJurusan;
}
else if(document.getElementById("jenisMKU").checked==true)
{
var params = "nip=" + nip + "&namaDosen=" + namaDosen + "&genderDosen=" + varGender + "&pwdDosen=" + varPwdDosen + "&hpDosen=" + varHpDosen + "&emailDosen=" + varEmailDosen + "&tglLhrDosen=" + varTglLhrDosen + "&t4LhrDosen=" + varT4LhrDosen + "&alamatDosen=" + varAlamatDosen + "&jurusan=MKU";
}
 var xmlhttp = GetXMLHTTP("POST","ajax/tambahDosen.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
 xmlhttp.onreadystatechange = function()
 {
 //  udh slesai diexecute
 if(xmlhttp.readyState == 4)
 {
    //document.getElementById("pesan").innerHTML = "";
	document.getElementById("tampilHasil").innerHTML = "";

    //hsl eksekusi tdk ada eror
   if(xmlhttp.status == 200)
     {

/*
document.getElementById("nrp").reset();
document.getElementById("namaMhs").value = "";
 document.getElementById("gender").value= "";
document.getElementById("pwdMhs").value= "";
document.getElementById("hpMhs").value= "";
document.getElementById("emailMhs").value= "";
document.getElementById("tglLhrMhs").value= "";
document.getElementById("t4LhrMhs").value= "";
document.getElementById("alamatMhs").value= "";
document.getElementById("angkatanMhs").value= "";
document.getElementById("fakultas").value= "";
*/
       hasil = xmlhttp.responseText; //menangkap hsl server
       
               //...mengolah hasil
			   
       if(hasil == "0")
       {
		   document.getElementById("tampilHasil").innerHTML = "Berhasil";
		   replaceUserDoc();

         //alert ("Data berhasil disimpan");
       }
       else
       {
         alert ("Data gagal disimpan");
       }
     }
 }
 else
 {
     document.getElementById("tampilHasil").innerHTML = "tunggu..."; //document.getElementById("pesan".innerHTML = "<img src=" ">tunggu...";
     //saat menunggu ajax selesai execute
 }
 return false;
 }

 xmlhttp.send(params); //u/ method post
 //  xmlhttp.send(null); -> u/ GET
}


