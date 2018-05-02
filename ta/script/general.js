function timeDifference(laterdate,earlierdate) {
    var difference = laterdate.getTime() - earlierdate.getTime();
 
    var daysDifference = Math.floor(difference/1000/60/60/24);
    difference -= daysDifference*1000*60*60*24
 
    var hoursDifference = Math.floor(difference/1000/60/60);
    difference -= hoursDifference*1000*60*60
 
    var minutesDifference = Math.floor(difference/1000/60);
    difference -= minutesDifference*1000*60
 
    var secondsDifference = Math.floor(difference/1000);
 return minutesDifference + (hoursDifference*60)  + (daysDifference*24*60);
 //document.WRITE('difference = ' + daysDifference + ' day/s ' + hoursDifference + ' hour/s ' + minutesDifference + ' minute/s ' + secondsDifference + ' second/s ');
 }
 
function  KetWaktu(waktuStart)
{
	var hasil="test";
	
	//alert(waktuStart);
	year = waktuStart.substr(0,4);
	month = waktuStart.substr(5,2)-1;
	date = waktuStart.substr(8,2);
	hour = waktuStart.substr(11,2);
	minute = waktuStart.substr(14,2);
	second = waktuStart.substr(17,2);
	temp = new Date();
	temp.setFullYear(year,month,date);
	temp.setHours(hour,minute,second,0);
	var waktuSekarang = new Date();
	
	//alert(temp)
	// TODO wktSekarang-waktuStart;
	
	selisih = timeDifference(waktuSekarang ,temp) ;
		
	
	hasil = selisih +" menit yang lalu";
		
		for(i=60;i<(60*24); i+=60) //menit,jam
		{
			a=i/60;
			b=i+60;
			c=selisih-i;
			if((selisih > i) && (selisih < b)) 
				hasil = a + " jam " + c + " menit yang lalu" ;
			
		}
		if(selisih>(60*24))
		{
			for(i=60;i<(60*24*5*1000); i+=60) //menit,jam
		{
			a=i/60;
			b=i+60;
			c=selisih-i;
			hari = selisih/(60*24);
			hari = Math.floor(hari);
			jam=a-(hari*24)
			if((selisih > i) && (selisih < b)) 
				//hasil = hari + " hari "+ jam + " jam " + c + " menit yang lalu" ;
				hasil = hari + " hari " + "yang lalu" ;
			
		}
		
		}
		
	
	return hasil;
	



	

	
	
}