var varHari = new Array();
	var varRuang = new Array();
	var varJam = new Array();
	var passMK = new Array();
	var varBahan = new Array();
	var varIndex = new Array();
		var varTipe = new Array();
		var passHari = new Array();
	var passRuang = new Array();
	var passJam = new Array();
	var passBahan = new Array();
	var passTanggal = new Array();
		var passTipe = new Array();
	
function tambahPesertaKelas(idKelas)
{

rowKelas =document.getElementById("kelas").rows.length; 
rowSimpanKelas =document.getElementById("simpanKelas").rows.length; 
document.getElementById("tombolTambah").style.display="inline"; 


		a=document.getElementById("kelas").rows[idKelas].cells;
		
			
	for(i=0;i<rowSimpanKelas;i++)
	{
		tampung=document.getElementById("simpanKelas").rows[i].cells;
		if(tampung[2].innerHTML==a[2].innerHTML) 
		{
			alert("Mata Kuliah sudah diambil");
			return ;
		}

		
		
	}
		
	var x=document.getElementById("simpanKelas").insertRow(rowSimpanKelas);
		x.insertCell(0).innerHTML=rowSimpanKelas;
		x.insertCell(1).innerHTML=a[1].innerHTML;
		x.insertCell(2).innerHTML=a[2].innerHTML;
		x.insertCell(3).innerHTML=a[3].innerHTML;
		x.insertCell(4).innerHTML=a[4].innerHTML;
/*
varJam[b] = a[3].innerHTML;
		varRuang[b]=a[4].innerHTML;
		varBahan[b]=a[5].innerHTML;
		varTipe[b]=a[6].innerHTML;
		
	
		
		if((valueRuang==varRuang[i-1])&&(valueHari==varHari[i-1])&&(valueJam== varJam[i-1])&&(valueRuang== varRuang[i-1]))
		{alert("Hari, jam, dan ruang sudah dipakai");
		return false;
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

*/
}


function deleteRow(r)
{
var i=r.parentNode.parentNode.rowIndex;
document.getElementById('jadwal').deleteRow(i);
}

function simpanMIK()
{
	rowKelas = document.getElementById("simpanKelas").rows.length;
	
	for(i=1;i<rowKelas;i++)
	{
		a=document.getElementById("simpanKelas").rows[i].cells;
		b = i-1;
		passMK[b] = "mk["+b+"]=" + a[1].innerHTML;
		
	}
	rowKelasMin1 = rowKelas-1; 
		//passingan.join("&")
var params =passMK.join("&")
		+"&jmlBaris="+rowKelasMin1;
		

var xmlhttp = GetXMLHTTP ("POST", "../ajax/tambahPesertaKelas.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
		
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