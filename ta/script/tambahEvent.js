
function bukaTambahFoto(idEvent)
{ //Define arbitrary function to run desired DHTML Window widget codes
//ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "windowfiles/external.htm", "#3: Ajax Win Title", "width=450px,height=300px,left=300px,top=100px,resize=1,scrolling=1")
url = "content/uploadFotoEvent.php?idEvent="+idEvent;

var ajaxwin=dhtmlwindow.open("box", "iframe", url, "Tambah Foto","width=590px,height=350px,resize=1,scrolling=1,center=1", "recal");

ajaxwin.onclose=function()
{return window.confirm("Tutup jendela tambah foto?");} //Run custom code when window is about to be closed

}

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
	
function pilihHari()
{
	var weekday=new Array(7);
weekday[1]="Senin";
weekday[2]="Selasa";
weekday[3]="Rabu";
weekday[4]="Kamis";
weekday[5]="Jumat";
weekday[6]="Sabtu";
weekday[7]="Minggu";
	tgl = document.getElementById("tglEvent").value;
	arrTgl = tgl.split("-");
	var monthname=new Array(12);
	monthname[0]="January";
	monthname[1]="February";
	monthname[2]="March";
	monthname[3]="April";
	monthname[4]="May";
	monthname[5]="June";
	monthname[6]="July";
	monthname[7]="August";
	monthname[8]="September";
	monthname[9]="October";
	monthname[10]="November"
	monthname[11]="December";
	
	tanggal = new Date(arrTgl[2]+","+arrTgl[1]+","+arrTgl[0]);
	bulan = tanggal.getMonth();
	tanggal = new Date(monthname[bulan]+" "+arrTgl[0]+", "+arrTgl[2]);
	idx = tanggal.getDay();
	hari = weekday[idx];
	//document.getElementById("hari").value = hari;
	return hari;
}
function tambahEvent()
{
//valueHari = pilihHari();
valueTanggal = document.getElementById("tglEvent").value;

valueTema = document.getElementById("tema").value;
valueKetEvent = document.getElementById("ketEvent").value;
valueJamMulaiE = document.getElementById("jamMulaiE").value;
valueJamSelesaiE = document.getElementById("jamSelesaiE").value;
valueTempat = document.getElementById("tempat").value;
var today = new Date();
tampungTanggal = today.getDate();
tampungBulan = today.getMonth()+1;
tampungTahun = today.getFullYear();
if(tampungTanggal<10)
tampung = "0"+tampungTanggal+"-"+tampungBulan+"-"+tampungTahun
if(tampungBulan<10)
tampung = tampungTanggal+"-0"+tampungBulan+"-"+tampungTahun

if(tampungBulan<10&&tampungTanggal<10)
tampung = "0"+tampungTanggal+"-0"+tampungBulan+"-"+tampungTahun
else if(tampungBulan>10&&tampungTanggal>10)
tampung = tampungTanggal+"-"+tampungBulan+"-"+tampungTahun
	
alert(valueTanggal+"--"+tampung);
if(valueTanggal<tampung)
{
	alert("Tanggal yang dipilih harus lebih besar atau sama dengan hari ini");
	return false;
}

if(valueJamMulaiE>valueJamSelesaiE||valueJamMulaiE==valueJamSelesaiE)
{
	alert("Jam Selesai harus lebih besar dari jam mulai");
	return false;
}

var params = "tanggal="+valueTanggal+"&tema="+valueTema+"&ketEvent="+valueKetEvent+"&jamMulaiE="+valueJamMulaiE+"&jamSelesaiE="+valueJamSelesaiE+"&tempat="+valueTempat;
	
var xmlhttp = GetXMLHTTP ("POST", "ajax/simpanEvent.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				document.getElementById("eventBaru").innerHTML="";
				document.getElementById("tampilEvent").innerHTML=hasil;

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



function simpanKomentarEvent(idEvent)
{

komentarEvent = document.getElementById("komentarEvent").value;

	
var params = "komentarEvent="+komentarEvent+"&idEvent="+idEvent;
	
var xmlhttp = GetXMLHTTP ("POST", "ajax/simpanKomEvent.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//document.getElementById("eventBaru").innerHTML="";
				//document.getElementById("tampilEvent").innerHTML="";
				document.getElementById("tampilKomentar").innerHTML=hasil;

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

