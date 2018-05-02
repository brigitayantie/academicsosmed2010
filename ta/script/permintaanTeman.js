

function prosesTeman(teman,status)
{
if(status=="tolak")
{
var r=confirm("Apakah Anda yakin menolak permintaan teman?");
if (r==false)
  {
	return ;
  }
}
var stat = new Array();
stat = status.split("-");

var params = "teman=" + teman+ "&status="+status;
var xmlhttp = GetXMLHTTP ("POST", "ajax/prosesTeman.php", params);
if(stat[0]=="request")  
{

xmlhttp = GetXMLHTTP ("POST", "ajax/requestTeman.php", params);	

}

	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				if(status=="terima"||status=="tolak")
                {
                if(status=="terima")
				alert("Anda telah menerima permintaan teman");
				else
				alert("Anda telah menolak permintaan teman");
				// mengolah hasilnya .....
                
				document.getElementById("tampilTeman").innerHTML="";
				document.getElementById("tampilTeman").innerHTML = hasil;
				}
                else
                {
                    alert("Permintaan teman sudah dikirim");
                    alert(hasil);
                    document.getElementById("r_"+stat[1]).innerHTML="";
                    document.getElementById("r_"+stat[1]).innerHTML = hasil;
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
