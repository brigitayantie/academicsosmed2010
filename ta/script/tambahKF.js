var varHari = new Array();
	var varRuang = new Array();
	var varJam = new Array();
	var varTanggal = new Array();
	var varBahan = new Array();
	var varIndex = new Array();
		var varTipe = new Array();
		var passHari = new Array();
	var passRuang = new Array();
	var passJam = new Array();
	var passBahan = new Array();
	var passTanggal = new Array();
		var passTipe = new Array();


function deleteRow(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('jadwal').deleteRow(i);
}

function simpanKF(idFoto)
{
	komentarFoto=document.getElementById("komentarFoto").value;

var params ="kf="+komentarFoto+"&idFoto="+idFoto;
		//alert("MasukCek");
		
var xmlhttp = GetXMLHTTP ("POST", "ajax/simpanKF.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				document.getElementById("spanKomentarFoto").innerHTML=hasil;
				document.getElementById("komentarFoto").value="";
		
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