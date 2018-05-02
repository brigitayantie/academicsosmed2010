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
	tgl = document.getElementById("tglKuis").value;
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
function tambahJadwalKuis()
{
valueHari = pilihHari();
valueTanggal = document.getElementById("tglKuis").value;
rowJadwal =document.getElementById("jadwal").rows.length; 
valueTipe = document.getElementById("tipe").value;
valueJam = document.getElementById("jam").value;
valueRuang = document.getElementById("ruang").value;
valueBahan = document.getElementById("bahan").value;

var today = new Date();
tampungTanggal = today.getDate();
tampungBulan = today.getMonth();
tampungTahun = today.getFullYear();
tampung = tampungTanggal+"-"+tampungBulan+"-"+tampungTahun

if(valueTanggal<tampung)
{
	alert("Tanggal yang dipilih harus lebih besar atau sama dengan hari ini");
	return false;
}
if(rowJadwal>1)
{
	for(i=1;i<rowJadwal;i++)
	{
		a=document.getElementById("jadwal").rows[i].cells;
		b = i-1;
		varTanggal[b] = a[1].innerHTML;
		varHari[b] = a[2].innerHTML;
		varJam[b] = a[3].innerHTML;
		varRuang[b]=a[4].innerHTML;
		
	
		
		if((valueRuang==varRuang[i-1])&&(valueHari==varHari[i-1])&&(valueJam== varJam[i-1])&&(valueRuang== varRuang[i-1]))
		{alert("Hari, jam, dan ruang sudah dipakai");
		return false;
		}
		
		
	
	}
}
alert("Data berhasil tersimpan");
	var x=document.getElementById("jadwal").insertRow(rowJadwal);
	var a=x.insertCell(0);	
	var b=x.insertCell(1);
	var c=x.insertCell(2);
	var d=x.insertCell(3);
	var e=x.insertCell(4);
	var f=x.insertCell(5);
	var g=x.insertCell(6);
	var h=x.insertCell(7);
	a.innerHTML=document.getElementById("jadwal").rows.length-1;
	b.innerHTML=document.getElementById("tglKuis").value;
	c.innerHTML=valueHari;
	d.innerHTML=document.getElementById("jam").value;
	e.innerHTML=document.getElementById("ruang").value;
	f.innerHTML=document.getElementById("bahan").value;
	g.innerHTML=document.getElementById("tipe").value;
	h.innerHTML="<a href='#' onclick='deleteRow(this);'>x</a>";
	
	document.getElementById("tombolTambah").style.display = "inline";


}


function deleteRow(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('jadwal').deleteRow(i);
}

function simpanJadwalKuis(idKelas,kp)
{
	rowJadwal = document.getElementById("jadwal").rows.length;
	
	for(i=1;i<rowJadwal;i++)
	{
		a=document.getElementById("jadwal").rows[i].cells;
		b = i-1;
		varTanggal[b] = a[1].innerHTML;
		varHari[b] = a[2].innerHTML;
		varJam[b] = a[3].innerHTML;
		varRuang[b]=a[4].innerHTML;
		varBahan[b]=a[5].innerHTML;
		varTipe[b]=a[6].innerHTML;
		
		passTanggal[b]="tanggal["+b+"]=" + varTanggal[b];
		passHari[b]="hari["+b+"]=" + varHari[b];
		passJam[b]="jam["+b+"]=" + varJam[b];
		passRuang[b]="ruang["+b+"]=" + varRuang[b];
		passBahan[b]="bahan["+b+"]=" + varBahan[b];
		passTipe[b]="tipe["+b+"]=" + varTipe[b];
		
	}
		//passingan.join("&")
var params =passTanggal.join("&")
		+"&"+passHari.join("&")
		+"&"+passJam.join("&")
		+"&"+passRuang.join("&")
		+"&"+passBahan.join("&")
		+"&"+passTipe.join("&")
		+"&jmlBaris="+rowJadwal
		+"&idKelas="+idKelas
		+"&KP="+kp;
		//alert("MasukCek");
		alert(params);
var xmlhttp = GetXMLHTTP ("POST", "../ajax/simpanJadwalKuis.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				alert(hasil);
		
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