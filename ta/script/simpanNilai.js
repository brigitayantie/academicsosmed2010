var nilaiUTS = new Array();
var nilaiUTSAja = new Array();
var nilaiUAS = new Array();
var nilaiUASAja = new Array();
var passPersenUTS = new Array();
var passPersenUTSInt = new Array();

function tampilTabel2(a)
{

	if(a=="tabelUTS2")
	{
	document.getElementById("tabelUTS2").style.display = "inline";
	document.getElementById("tabelUAS2").style.display = "none";
		document.getElementById("tdUTS2").style.fontWeight="bold";
document.getElementById("tdUAS2").style.fontWeight="100";
	}
	else
	{
	document.getElementById("tabelUTS2").style.display = "none";
	document.getElementById("tabelUAS2").style.display = "inline";
	document.getElementById("tdUTS2").style.fontWeight="100";
document.getElementById("tdUAS2").style.fontWeight="bold";
	}
}
function simpanNilaiUTS(jmlMurid,jumRowUTS,idKelas)
{
	b=0;
	for(i=0;i<jmlMurid;i++)
	{
		//nilaiUTS[i]=new Array(jumRowUTS);	
		for(j=0;j<jumRowUTS;j++)
		{	
		a=document.getElementById("txtNilaiUTS["+i+"]["+j+"]").value;
		nilai = new Number(a);
		stringNilai = "nilaiUTS["+i+"]["+j+"]=" ;
		nilaiUTS[b]=stringNilai+nilai;
		nilaiUTSAja[b]=nilai;
		b++;
		}
	}

	
		//passingan.join("&")
var params ="idKelas="+idKelas+"&jmlMurid="+jmlMurid+"&jumRowUTS="+jumRowUTS+"&"+nilaiUTS.join("&");

var xmlhttp = GetXMLHTTP ("POST", "../ajax/simpanNilai.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//alert(hasil);
				b=0;
				for(i=0;i<jmlMurid;i++)
				{
					//nilaiUTS[i]=new Array(jumRowUTS);	
					for(j=0;j<jumRowUTS;j++)
					{	
					document.getElementById("txtNilaiUTS["+i+"]["+j+"]").value=nilaiUTSAja[b];
					b++;
					}
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



function simpanNilaiUAS(jmlMurid,jumRowUAS,idKelas)
{
	b=0;
	for(i=0;i<jmlMurid;i++)
	{
		//nilaiUTS[i]=new Array(jumRowUTS);	
		for(j=0;j<jumRowUAS;j++)
		{	
		a=document.getElementById("txtNilaiUAS["+i+"]["+j+"]").value;
		nilai = new Number(a);
		stringNilai = "nilaiUAS["+i+"]["+j+"]=" ;
		nilaiUAS[b]=stringNilai+nilai;
		nilaiUASAja[b]=nilai;
		b++;
		}
	}

	
		//passingan.join("&")
var params ="idKelas="+idKelas+"&jmlMurid="+jmlMurid+"&jumRowUAS="+jumRowUAS+"&"+nilaiUAS.join("&");

		
var xmlhttp = GetXMLHTTP ("POST", "../ajax/simpanNilaiUAS.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				//alert(hasil);

				b=0;
				for(i=0;i<jmlMurid;i++)
				{
					//nilaiUTS[i]=new Array(jumRowUTS);	
					for(j=0;j<jumRowUAS;j++)
					{	
					document.getElementById("txtNilaiUAS["+i+"]["+j+"]").value=nilaiUASAja[b];
					b++;
					}
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
