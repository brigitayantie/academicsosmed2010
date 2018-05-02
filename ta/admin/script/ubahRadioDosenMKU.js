function ubahCmbMKU(jenis)
{

a=document.getElementById("jenisNon");
b=document.getElementById("jenisMKU");
if(a.checked==true)
{
document.getElementById("teksnyaFakultas").innerHTML="Fakultas";
document.getElementById("teksnyaJurusan").innerHTML="Jurusan";
document.getElementById("spanJurusan").style.display="inline";
document.getElementById("fakultas").style.display="inline";

}
else if(b.checked==true)
{
document.getElementById("teksnyaFakultas").innerHTML="";
document.getElementById("teksnyaJurusan").innerHTML="";
document.getElementById("spanJurusan").style.display="none";
document.getElementById("fakultas").style.display="none";
}

}


function ubahCmbMKU2()
{


b=document.getElementById("jenisMKU");
if(b.checked==false)
{
document.getElementById("teksnyaFakultas").innerHTML="Fakultas";
document.getElementById("teksnyaJurusan").innerHTML="Jurusan";
document.getElementById("spanJurusan").style.display="inline";
document.getElementById("fakultas").style.display="inline";

}
else if(b.checked==true)
{
document.getElementById("teksnyaFakultas").innerHTML="";
document.getElementById("teksnyaJurusan").innerHTML="";
document.getElementById("spanJurusan").style.display="none";
document.getElementById("fakultas").style.display="none";
}

}
