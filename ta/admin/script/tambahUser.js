
function tambahJurusan()
{
	
 
 idJurusan = document.getElementById("idJur").value;
jurusan = document.getElementById("jur").value;
fakultas = document.getElementById("fakultas").value;
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


var params = "jurusan=" + jurusan + "&fakultas=" + fakultas + "&idJur=" + idJurusan;

 var xmlhttp = GetXMLHTTP("POST","ajax/tambahJur.php",params); // relative terhadap penginclude (admin/index.php)
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
		   
		   //self.parent.location.reload();
		   replaceDoc();
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
