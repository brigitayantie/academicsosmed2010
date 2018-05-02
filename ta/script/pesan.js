

var arr_untuk=new Array();
var arr_tampung=new Array();
var arr_tampung2=new Array();

function bukaTambahTeman()
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")
url = "content/tambahTeman.php";

var ajaxwin=dhtmlwindow.open("box", "iframe", url, "Kirim Pesan", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Tutup jendela kirim pesan?")} //Run custom code when window is about to be closed

}



function bukaPesan()
{
		window.location="kirimPesan.php";

	
}


function detailPesan(idPesan)
{
		document.getElementById("tampilPesan").innerHTML="";
		document.getElementById("kirimPesan").innerHTML= "";
		params="idPesan="+idPesan;
	
	
	var xmlhttp = GetXMLHTTP ("POST", "ajax/tampilDetailPesan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				document.getElementById("detailPesan").innerHTML= hasil;
				
				//
				// mengolah hasilnya .....
				
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

function kirimPesan()
{

	tampung = document.getElementById("id_untuk").value;
	subyekPesan = document.getElementById("subyekPesan").value;
	isiPesan = document.getElementById("isiPesan").value;
	arr_tampung = tampung.split(",");
	jumUntuk=arr_tampung.length;
	for(i=0;i<arr_tampung.length-1;i++)
		arr_tampung2[i]="untuk["+i+"]="+arr_tampung[i];
	params=arr_tampung2.join("&")+"&jumUntuk="+jumUntuk+"&subyekPesan="+subyekPesan+"&isiPesan="+isiPesan;
	
	
	var xmlhttp = GetXMLHTTP ("POST", "ajax/kirimPesan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				alert("Pesan sudah terkirim");
				document.getElementById("subyekPesan").value= "";
				document.getElementById("isiPesan").value= "";
				window.location = "pesan.php"

				//
				// mengolah hasilnya .....
				
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

function hapusPesan(idPesan)
{
    
	var params ="idPesan="+idPesan;
		
var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/hapusPesan.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
                if(hasil=="true")
                {
                    
                    tabel=document.getElementById("pesan_"+idPesan);
                    tabel.parentNode.removeChild(tabel);
                   
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

function hapus(id) {
	//alert ("hapus id = " + id);
	

	arr_untuk = document.getElementById("untuk").innerHTML.split("<br>");
	document.getElementById("untuk").innerHTML="";
for(i=0;i<arr_untuk.length-1;i++)
	{
		if(arr_untuk[i].indexOf("hapus("+id+")")>0) {}
		else
		{
			document.getElementById("untuk").innerHTML+=arr_untuk[i]+"<br>";
			
		}
	}

			tampung = document.getElementById("id_untuk").value;
			tampung2=tampung.replace(id+",","");
			document.getElementById("id_untuk").value=tampung2;
	//alert(tampung2);
}

function kirimBP(idPenerima,idTopik)
{
	isiPesan=document.getElementById("kirimPesan2").value;
	var params ="idPenerima="+idPenerima+"&idTopik="+idTopik+"&isiPesan="+isiPesan;
		alert(params);
var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/kirimPesanTopik.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server

                //document.getElementById("pesan2").innerHTML="";
                document.getElementById("pesan2").innerHTML+=hasil;
                document.getElementById("kirimPesan2").value="";
                
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

