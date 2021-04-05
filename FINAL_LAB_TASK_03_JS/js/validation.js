"use strict"

function namevalidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty name field ';		
	}
	else if(data.length <2){
		document.getElementById('head').innerHTML = 'Name required two words';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	

}

function gendervalidation()
{

 let male = document.getElementById('male');
 let female = document.getElementById('female');
 let other = document.getElementById('other');

     if(male.checked ==true )
     {
		document.getElementById('head').innerHTML = male.value;
	}
    else if(female.checked ==true){
		document.getElementById('head').innerHTML = female.value;		
	}
	else
	{
		document.getElementById('head').innerHTML = other.value;
	}

}

function emailvalidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Email is invalid !';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
		     }
	else if( data.includes("@yahoo.com")){
		document.getElementById('head').innerHTML = data;
		     }	
	else if( data.includes("@.edu")){
		document.getElementById('head').innerHTML = data;
		     }	          
      else{
		document.getElementById('head').innerHTML = 'Email is invalid !';
	}

}

function degreevalidation(){

 let ss = document.getElementById('ssc');
 let hs= document.getElementById('hsc');
 let bs = document.getElementById('bsc');
 let ms = document.getElementById('msc');



 if (ss.checked==true) {
 	document.getElementById('s').innerHTML = ss.value;		
 }
 if(hs.checked==true){
 	document.getElementById('h').innerHTML = hs.value;
 }
 if(bs.checked==true){
 	document.getElementById('b').innerHTML = bs.value;
 }
 if(ms.checked==true){
 	document.getElementById('m').innerHTML = ms.value;
 }
 else{
 	return false;
 }

}

function dobvalidation()
{

 let dd = document.getElementById('dd').value;
 let mm = document.getElementById('mm').value;
 let yy = document.getElementById('yy').value;

    if(dd == '' || mm == '' || yy == ''){
		document.getElementById('d').innerHTML = 'Empty Date Field ';		
	}
	else if(dd >= 0 && dd <=31 || mm >=1 && mm <=12 || yy >=1900 && yy <= 2016 ){
		document.getElementById('d1').innerHTML = dd ;
		document.getElementById('sl').innerHTML ="/";	
		document.getElementById('m1').innerHTML = mm ;
		document.getElementById('sl1').innerHTML ="/";	
		document.getElementById('y1').innerHTML = yy ;	
	}
	
      else{
		document.getElementById('d').innerHTML = 'Valid date required!';
	}

}