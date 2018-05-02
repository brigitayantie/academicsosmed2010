// JavaScript Document
function tambahMKU()
{

 idMKU = document.getElementById("idMatkul").value;
namaMKU = document.getElementById("namaMatkul").value;
if(idMKU.length == 0) //nama var di js
 {
 document.getElementById("err_idMatkul").innerHTML= "* Id Mata Kuliah harus diisi";
 document.getElementById("idMatkul").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_idMatkul").innerHTML= "";



//di js ga ada trim
 if(namaMKU.length == 0) //nama var di js
 {
 document.getElementById("err_matkul").innerHTML= "* Jurusan harus diisi";
 document.getElementById("idMatkul").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_matkul").innerHTML= "";


var params = "idMatkul=" + idMKU + "&namaMatkul=" + namaMKU;

 var xmlhttp = GetXMLHTTP("POST","ajax/tambahMKU.php",params); // relative terhadap penginclude (admin/index.php)
//mulai memberi perintah ajax bekerja
 xmlhttp.onreadystatechange = function()
 {
 //  udh slesai diexecute
 if(xmlhttp.readyState == 4)
 {
    document.getElementById("tampilHasil").innerHTML = "Berhasil"; 
	parent.document.getElementById("tampilHasil").innerHTML = "";

    //hsl eksekusi tdk ada eror
   if(xmlhttp.status == 200)
     {

       hasil = xmlhttp.responseText; //menangkap hsl server
               //...mengolah hasil
		 if (hasil.substr(hasil.length-1, 1)=="0") 
		 {
					alert("Kode MKU sudah ada!");
		}   
		 else
		 {
			  parent.document.getElementById("tampilAwal").innerHTML ="";
         parent.document.getElementById("tampilHasil").innerHTML =hasil;
         alert ("Data berhasil disimpan");
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



