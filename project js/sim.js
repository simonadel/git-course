
function clacu(){
    "use stract";
    var nm1 = Number(document.getElementById("num1").value),
	    nm2 = Number(document.getElementById("num2").value),
		myTest = document.getElementById("test"),
		result = nm1 + nm2;
    
	 myTest.innerHTML = " this is the sumation  " + result; 
	//alert(" this is the sumation  " + result)
	if(isNaN(nm1) || isNaN(nm2))
	{
	// myTest.innerHTML = " only write number ";
	alert( "only write number")
	}
}
function show_message( )
{
	/*Var num1=4;
    Var num2=7;
    Var thesum=num1+num2;
    alert(thesum);*/
	var input=prompt();	
	 document.getElementById("inp").innerHTML=(input);
//document.write(input)

}



/*Var thename="alsubai";
Switch (thename)
{
case "saud";
document.write("saud is an ok name");
break;
case "alsubai"
document.write("alsubai is the coolest name");
document.write("hi there alsubai");
break;
default;
document.write("interesting name you have there");
}*/
/*var s_list=new
Array("maged","ahmad","Thomas","salah");
var tall_student= s_list[0];*/
/*var fruits=new Array("oranges","apples","graoes");
console.log(fruits.sort( ));*/
var rightnow= new Date();
var weekday= rightnow.getDay();
var themonth= rightnow.getMonth();
var thedate= rightnow.getDate();
var theyear= rightnow.getYear();
// see the days of the week
var someday= new Array(7)
someday[0]="Sunday";
someday[1]="Monday";
someday[2]="Tuesday";
someday[3]="Wednesday";
someday[4]="Thursday";
someday[5]="Friday";
someday[6]="Saturday";
// see the month number to be recognizable
themonth+=1;
// see the year date for 4 digits
if (theyear<2000)
theyear+=1900;
//document.write(someday[weekday]+ ","+themonth+"/"+thedate+"/"+theyear);
document.getElementById("tec").innerHTML=(someday[weekday]+ ","+themonth+"/"+thedate+"/"+theyear)



/*var count= [
"count",
"count1",
"count2",
"count3",
"count4"
];
console.log(count.length);*/
                                      /*open function3*/
 function data(){
	 		    var si = document.getElementById("simon").value;
		         document.getElementById("cema").innerHTML=(si.length);
	}
	

       /*open array*/


function market(){	
 var arr=Number(document.getElementById("tharw").value); 
if(isNaN(arr))
	{
	// myTest.innerHTML = " only write number ";
	alert( "only write number");
	} 
	else{
		
	market[arr];
		 var arrr=[" one name of "," tow name of "," three name of "];

var count;
for(count=0;count<arr;count++)
{
	market[count]=prompt("type element number"+(count+1));
}
for(count=0;count<arr;count++)
{
document.getElementById("thar").innerHTML+=arrr[count]+market[count]+" <br> ";

}
	}
}