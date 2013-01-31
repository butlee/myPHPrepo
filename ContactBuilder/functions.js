function ageCount(dobInp){

	var dob = new Date(dobInp);
	var currentDate = new Date();
	var currentYear = currentDate.getFullYear();
	var age = currentYear - dob.getFullYear();

	if (( currentDate.getMonth() < dob.getMonth()) || (currentDate.getMonth() == dob.getMonth() && (currentDate.getDate() < dob.getDate())))
	{
		age--;
	}
	document.getElementById("age").value=age;
}

function checkText(){
	
	var fName = document.getElementById("fName").value;
	var age = document.getElementById("age").value;
	var zip = document.getElementById("zip").value;
	var cell = document.getElementById("cell").value;
	
	if (age == "" || zip == "" || cell == "" || fName == ""){
		alert ("Please don't leave the high lighted fields blank");
		if (age == "" ) {
			 document.getElementById("age").style.backgroundColor = 'red';
			 }
		if (cell == "") {
			 document.getElementById("cell").style.backgroundColor = 'red';
			 }
		if (zip == "") { 
			document.getElementById("zip").style.backgroundColor = 'red';
			}
		if (fName == "") { 
			document.getElementById("fName").style.backgroundColor = 'red';
			}
	}
}

function pageVisit(){
	alert("You are in!");
	var visits = getCookie("counter");
	if (visits) {
    	visits = parseInt(visits) + 1;
     	document.write("By the way, you have been here " + visits + " times.");
	}
	else {
    	visits = 1;
     	document.write("By the way, this is your first time here.");
	}

	setCookie("counter", visits);
}