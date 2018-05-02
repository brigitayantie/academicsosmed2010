// JavaScript Document
function tambahRuang()
{


namaRuang = document.getElementById("namaRuang").value;

//di js ga ada trim
 if(namaRuang.length == 0) //nama var di js
 {
 document.getElementById("err_ruang").innerHTML= "* Jurusan harus diisi";
 document.getElementById("namaRuang").focus();
// tidak tersubmit
 return false;
 
 }
 else
document.getElementById("err_ruang").innerHTML= "";


var params = "namaRuang=" + namaRuang;

 var xmlhttp = GetXMLHTTP("POST","ajax/tambahRuang.php",params); // relative terhadap penginclude (admin/index.php)
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
					alert("Kode Ruang sudah ada!");
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



