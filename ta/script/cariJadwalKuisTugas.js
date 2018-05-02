
/*
function bukaHalMurid(a,b,c)
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")
//url = "http://localhost/ta/content/semuaTabLanjutanJA.php?idKelas="+a+"&semester="+b;
url = "content/semuaTabLanjutanJA.php?idKelas="+a+"&semester="+b+"&kp="+c;

var ajaxwin=dhtmlwindow.open("box", "iframe", url, "Tambah Jurusan", "width=590px,height=350px,resize=1,scrolling=1,center=1", "recal")

ajaxwin.onclose=function()
{return window.confirm("Close window 3?")} //Run custom code when window is about to be closed

}
*/
function cariJadwalKuis(sem)
{
	
	varMIK = document.getElementById("mhsikutkelas").value;

	
var params = "semester=" + sem+"&mik=" + varMIK;

var xmlhttp = GetXMLHTTP ("POST", "ajax/cariJadwalKuisTugas.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
					
				document.getElementById("tampilKT").innerHTML = hasil;
				
				 
				
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


function cmbMatkul()
{

varSemester = document.getElementById("semester5").value;
var params = "semester=" + varSemester;

var xmlhttp = GetXMLHTTP ("POST", "ajax/cmbMatkulKT.php", params);
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				
				// mengolah hasilnya .....
	
				document.getElementById("tampilJKT").innerHTML = hasil;
				
				 
				
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


