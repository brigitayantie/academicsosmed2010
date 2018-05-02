function PagingAJAX(page,conditional)
{
	
	document.getElementById("page").value=page;
	tampilCekBox();
	//cekRow();
}


function tampilCekBox()
{
	
		
			varPage = document.getElementById("page").value;
			
	var params = "page=" + varPage;

var xmlhttp = GetXMLHTTP ("POST", "ajax/pindahCkBx.php", params);
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4) {
			//document.getElementById("pesan").innerHTML = "";
			
			if (xmlhttp.status == 200) {
				hasil = xmlhttp.responseText; // menangkap hasil dari server
				
				//alert(hasil);
				// mengolah hasilnya .....
				document.orderform1.style.display="none";
			//document.getElementById("cekBox").style.display="none";
				document.getElementById("cekBox").innerHTML = hasil;
				cekRow();
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


function addRowHandlers() {
    var table = document.getElementById("tabel");
    var rows = table.getElementsByTagName("tr");
    for (i = 1; i < rows.length; i++) {
        row = table.rows[i];
        row.onclick = function(){
                          var cell = this.getElementsByTagName("td")[0];
                          var id = cell.innerHTML;
                          alert("id:" + id);
                      };
    }
}


function clearCheck()
{
	
	var table = document.getElementById("tabel");
   jumRow = document.getElementById("tabel").rows.length; 
   if(jumRow>1)
   {
    for (i = 0; i < jumRow; i++) {
		document.orderform1.music[i].checked=false    }
	}
	var table = document.getElementById("tabel");
   
}




function insRow(a,b)
{
	var table = document.getElementById("tabel");
   jumRow = document.getElementById("tabel1").rows.length; 
 
   if(jumRow>1)
   {
    for (i = 0; i < jumRow; i++) {
		x = document.getElementById("tabel1").rows[i].cells[0].innerHTML;
	
		
		//alert(y);
        if(a==x)
		{
			  
			z=document.getElementById("tabel1").deleteRow(i);
			return;
		}
	
    }
var x=document.getElementById('tabel1').insertRow(0);
var y=x.insertCell(0);
var z=x.insertCell(1);
y.innerHTML=a;
z.innerHTML=b;	
   }
   else
   {	
var x=document.getElementById('tabel1').insertRow(0);
var y=x.insertCell(0);
var z=x.insertCell(1);
y.innerHTML=a;
z.innerHTML=b;	
   }
}

function get_check_value()
{
	
var c_value = "";
for (var i=0; i < document.orderform.music.length; i++)
   {
   if (document.orderform.music[i].checked)
      {
      c_value = c_value + document.orderform.music[i].value + "\n";
      }
   }
   alert(c_value);
addRowHandlers();   
   
}


function cekRow()
{
	//var table = document.getElementById("tabel");
   jumRow = document.getElementById("tabel1").rows.length; 
 //alert("cekRow");
   if(jumRow>1)
   {
	for (j = 0; j < 2; j++)
	{
    	for (i = 0; i < jumRow; i++)
			{
			x = document.getElementById("tabel2").rows[j].cells[1].innerHTML;
			a=document.getElementById("tabel1").rows[i].cells[0].innerHTML;
			//alert("a="+a)
			//alert("x="+x)
			//alert(y);
			if(a==x)
			{
				  document.orderform2.music[j].checked=true;
				//z=document.getElementById("tabel1").deleteRow(i);
				//return;
			}
		}
		
		}
    }
}
