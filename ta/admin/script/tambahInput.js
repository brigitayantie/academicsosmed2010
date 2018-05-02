var varHari = new Array();
	var varRuang = new Array();
	var varJamMulai = new Array();
	var varJamSelesai = new Array();
	var passHari = new Array();
	var passRuang = new Array();
	var passJamMulai = new Array();
	var passJamSelesai = new Array();
	var statusSimpan;
	
	
function gantiNama()
{
	document.getElementById("nama").selectedIndex = document.getElementById("nrp").selectedIndex
}

function gantiNRP()
{
	document.getElementById("nrp").selectedIndex = document.getElementById("nama").selectedIndex
}


function tambahJadwal()
{
	/*
	var TDCount = 0;
	
	var newTD = document.createElement("td");
	var newText = document.createTextNode("New Cell " + (TDCount++));
	newTD.appendChild(newText);

	var trElm = document.getElementById("jadwal");
	var refTD = trElm.getElementsByTagName("td").item(2);
	trElm.insertBefore(newTD,refTD);
*/idKelas = document.getElementById("kelas").value;
rowJadwal =document.getElementById("jadwal").rows.length; 
valueHari = document.getElementById("hari").value;
valueJamMulai = document.getElementById("jamMulai").value;
valueJamSelesai = document.getElementById("jamSelesai").value;
valueRuang = document.getElementById("ruang").value;
var params ="hr=" + valueHari
		+"&rg=" + valueRuang
		+"&jamM=" + valueJamMulai
		+"&jamS=" + valueJamSelesai;
		
	

var xmlhttp = GetXMLHTTP ("POST", "ajax/cekDbKelas.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//stSimpan= hasil;
				if(hasil==0) 
				{
					alert("Sudah dipakai kelas lain");
					
				}
				else if(hasil==1) 
				{
					alert("Jam Selesai lebih kecil dari jam mulai");
					
				}
				else hasil=2;
				
				document.getElementById("statusSimpan").value=hasil;
				statusSimpan = hasil;
				//alert(document.getElementById("statusSimpan").value);
						
				// mengolah hasilnya .....
					
				//document.getElementById("spanJurusan").innerHTML = hasil;
				
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);
	

	//alert("statusSimpan="+document.getElementById("statusSimpan").value);

//if(statusSimpan==0) 	return;
b = document.getElementById("statusSimpan").value;
if(statusSimpan>1) return;

//if(statusSimpan!=1) return;


		splitVJamM = valueJamMulai.split(".");		
		splitVJamS = valueJamSelesai.split(".");		
		
		jumlahMenitM = (splitVJamM[0]*60)+splitVJamM[1];
		jumlahMenitS = (splitVJamS[0]*60)+splitVJamS[1];
if(rowJadwal>1)
{
	for(i=1;i<rowJadwal;i++)
	{
		a=document.getElementById("jadwal").rows[i].cells;
		b = i-1;
		varHari[b] = a[0].innerHTML;
		varJamMulai[b] = a[1].innerHTML;
		varJamSelesai[b] = a[2].innerHTML;
		varRuang[b]=a[3].innerHTML;
		
		splitJamM = varJamMulai[b].split(".");		
		splitJamS = varJamSelesai[b].split(".");		
		
		cekJumlahMenitM = (splitJamM[0]*60)+splitJamM[1];
		cekJumlahMenitS = (splitJamS[0]*60)+splitJamS[1];
		
		
		if((valueRuang==varRuang[i-1])&&(valueHari==varHari[i-1])&&(valueJamMulai== varJamMulai[i-1])&&(valueJamSelesai == varJamSelesai[i-1]))
		{alert("Hari, jam, dan ruang sudah dipakai");
		return false;
		}
		else if(jumlahMenitM<=cekJumlahMenitS &&jumlahMenitM>=cekJumlahMenitM&&valueRuang==varRuang[b])
		{
		alert("Jam lebih kecil atau sama dengan yang sudah dipakai");
		return false;
		}
		
	
	}
}
alert("Data berhasil tersimpan");
	var x=document.getElementById("jadwal").insertRow(1);
	var a=x.insertCell(0);
	var b=x.insertCell(1);
	var c=x.insertCell(2);
	var d=x.insertCell(3);
	var e=x.insertCell(4);
	a.innerHTML=document.getElementById("hari").value;
	b.innerHTML=document.getElementById("jamMulai").value;
	c.innerHTML=document.getElementById("jamSelesai").value;
	d.innerHTML=document.getElementById("ruang").value;
   	e.innerHTML="<a href='#' onclick='javascript:hapusBaris();'>x</a>";
	
}

function cekDbKelas()
{
	
	
		
	}




function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount + 1;

			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "text";
			cell3.appendChild(element2);

		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}

			}
			}catch(e) {
				alert(e);
			}
		}
		
function tambahKelas()
{
	valueIdKelas = document.getElementById("kelas").value;

rowJadwal =document.getElementById("jadwal").rows.length; 
valueHari = document.getElementById("hari").value;
valueJamMulai = document.getElementById("jamMulai").value;
valueJamSelesai = document.getElementById("jamSelesai").value;
valueRuang = document.getElementById("ruang").value;
valueKP = document.getElementById("kp").value;
valueMatkul = document.getElementById("kodematkul").value;
valueDosen = document.getElementById("idDosen").value;
if(valueIdKelas.length==0)
{
 document.getElementById("err_idKelas").innerHTML= "* Id Kelas harus diisi";
 document.getElementById("kelas").focus();
return false;
}
else  
{ document.getElementById("err_idKelas").innerHTML=""; }


if(valueKP.length==0)
{
 document.getElementById("err_kp").innerHTML= "* KP harus diisi";
 document.getElementById("kp").focus();
return false;
}
else document.getElementById("err_kp").innerHTML= "";


for(i=1;i<rowJadwal;i++)
	{
		a=document.getElementById("jadwal").rows[i].cells;
		b = i-1;
		varHari[b] = a[0].innerHTML;
		varJamMulai[b] = a[1].innerHTML;
		varJamSelesai[b] = a[2].innerHTML;
		varRuang[b]=a[3].innerHTML;
		
		passHari[b]="hr["+b+"]=" + varHari[b];
		passJamMulai[b]="jamM["+b+"]=" + varJamMulai[b];
		passJamSelesai[b]="jamS["+b+"]=" + varJamSelesai[b];
		passRuang[b]="rg["+b+"]=" + varRuang[b];
		
	}
		//passingan.join("&")
var params =passHari.join("&")
		+"&idKls=" + valueIdKelas
		+"&kp=" + valueKP
		+"&jmlBaris=" + rowJadwal
		+"&mk=" + valueMatkul
		+"&dsn=" + valueDosen
		+"&"+passRuang.join("&")
		+"&"+passJamMulai.join("&")
		+"&"+passJamSelesai.join("&");
	
		
		var xmlhttp = GetXMLHTTP ("POST", "ajax/tambahKelas.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//alert("simpan="+hasil);
				/*
				if(hasil==0) 
				{
					alert("Sudah dipakai kelas lain");
					
				}
				else if(hasil==2) 
				{
					alert("Jam Selesai lebih kecil dari jam mulai");
					
				}
				
				document.getElementById("statusSimpan").value=hasil;
				*/
				//alert(document.getElementById("statusSimpan").value);
						
				// mengolah hasilnya .....
					
				//document.getElementById("spanJurusan").innerHTML = hasil;
				
			}
		}
		else {
			// section saat menunggu Ajax selesai dieksekusi
			//document.getElementById("pesan").innerHTML = "<img src='...'> Tunggu ... ";
		}
		return false;
	}

	xmlhttp.send(params);

}