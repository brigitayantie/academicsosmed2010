function bukaHalUploadDiskusi(a)
{ 
url = "content/uploadFileDiskusi.php?idForum="+a;

var ajaxwin=dhtmlwindow.open("box", "iframe", url, "Tambah Jurusan", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Close window 3?")} //Run custom code when window is about to be closed

}
function kirimFile()
{
	alert("Anda yakin mengirim file?");
}

function simpanTopikForum()
{
	txtTopikForum= document.getElementById("txtTopikForum").value;
	txtIsiTopikForum = document.getElementById("txtIsiTopikForum").value;
	

var params ="txtTopikForum="+txtTopikForum+"&txtIsiTopikForum="+txtIsiTopikForum;

var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/simpanDiskusi.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
			
				document.getElementById("topikBaru").style.display="none";
				document.getElementById("tampilTopikForum").style.display="inline";
				document.getElementById("tampilTopikForum").innerHTML=hasil;

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



function tampilForum(idForum)
{

var params ="idForum="+idForum;


var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/tampilIsiDiskusi.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				document.getElementById("topikBaru").style.display="none";
				document.getElementById("tampilTopikForum").style.display="none";
				//document.getElementById("tampilTextArea").innerHTML="";	
				//document.getElementById("tampilTextArea").innerHTML="<table><tr><td><textarea id='komentar'></textarea></td></tr> </table>";
				document.getElementById("tampilIsiForum").style.display="inline";
				document.getElementById("tampilTextArea").style.display = "inline";
				document.getElementById("tampilIsiForum").innerHTML=hasil;
				document.getElementById("tampilTextArea").innerHTML="<table border=0><tr><td valign='top'><textarea id='komentar'></textarea></td></tr><tr><span class='art-button-wrapper'><span class='l'> </span><span class='r'></span><a class='art-button' href='javascript:simpanIsiForum("+idForum+");'>Kirim</a></span><a href='javascript:bukaHalUploadDiskusi("+idForum+")'>Upload file</a><a href=''>Upload file</a></table>";				


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



function simpanIsiForum(idForum)
{

komentar = document.getElementById("komentar").value;
var params ="idForum="+idForum+"&komentar="+komentar;

var xmlhttp = GetXMLHTTP ("POST", "../ta/ajax/simpanIsiDiskusi.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				document.getElementById("topikBaru").style.display="none";
				document.getElementById("tampilTopikForum").style.display="none";
				document.getElementById("tampilIsiForum").style.display="none";
				document.getElementById("tampilTextArea").style.display = "inline";	
				document.getElementById("tampilIsiDiskusi").style.display = "inline";
				document.getElementById("tampilTextArea").innerHTML="";	
				document.getElementById("tampilIsiDiskusi").innerHTML=hasil;
				document.getElementById("tampilTextArea").innerHTML="<table><tr><td><textarea id='komentar'></textarea></td></tr><tr><td><span class='art-button-wrapper'><span class='l'> </span><span class='r'></span><a class='art-button' href='javascript:simpanIsiForum("+idForum+");'>Kirim</a></span></div></td></tr> </table>";				

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


function tambahTopik()
{
	
document.getElementById("tampilTopikForum").style.display = "none";
document.getElementById("tampilIsiForum").style.display = "none";
document.getElementById("tampilIsiDiskusi").style.display = "none";
document.getElementById("tampilTextArea").style.display = "none";
document.getElementById("topikBaru").style.display = "inline";

}
