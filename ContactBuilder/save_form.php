<?php
$db_hostname = 'localhost';
$db_database = 'test';
$db_user = 'phpuser';
$db_password = 'phpuser1';

$db_server = mysql_connect($db_hostname, $db_user, $db_password);
mysql_select_db($db_database);
if ($_POST["flagname"] == 'true') {
	// surround with quotes for any string(varchar) columns in the database
	$fName = "'".$_POST['firstname']."'";
	$lName = "'".$_POST['lastname']."'";
	$dob = "'".$_POST['dobName']."'";
	$age = "'".$_POST['ageName']."'";
	$city = "'".$_POST['cityName']."'";
	$cell = "'".$_POST['cellName']."'";
	$zip = "'".$_POST['zipName']."'";
	$occup = "'".$_POST['occupationName']."'";
	$query = "INSERT INTO test.family_table VALUES (NULL, $fName, $lName , $dob, '2', $city, $cell, $zip, $occup)";
	$result = mysql_query($query);
	if (!$result)
		die("Database access failed: " . mysql_error());
}

echo<<<_end
<head>
<style type="text/css">
body {background-color:#99CCCC;}
p {color:black;}
</style>
</head>

<body>
<script type="text/javascript" src="functions.js"></script>

<h3>Enter your details...</h3>
<form id="userFormId" name="userform" action="user_form.php" method="POST">
<table border="0" cellspacing="20">
<tr>
<div><td>First name:</td> <td><input type="text" id="fName"  name="firstname" align="right"></td></div>
</tr>

<tr>
<div><td>Last name:</td> <td><input type="text" id="lName" name="lastname" align="right"></td></div>
</tr>

<tr>
<div><td>DOB:</td><td><input type="text" name="dob" id="dob" value="yyyy-mm-dd" align="right" onblur="ageCount(dob.value);"></td>
<td>Age:</td><td><input type="text" name="ageName" id="age" readonly size="2"></td></div>
</tr>

<tr>
<div><td>Address line1:</td><td><input type="text" id="address1" name="address1" size="35"></td></div>
</tr>

<tr>
<div><td>Address line2:</td><td><input type="text" id="address2" name="address2"></td></div>
</tr>

<tr>
<div><td>City:</td><td> <input type="text" id="city" name="city"></td>
<td>Zipcode:</td><td> <input type="text" id="zip" name="zip" size="7"></td>
<td>State:</td><td><input type="text" id="state" name="state"></td></div>
</tr>

<tr>
<div><td>Occupation:</td><td><input type="text" id="occupation" name="occupation"></td></div>
</tr>

<tr>
<div><td>Cell:</td><td><input type="text" id="cell" name="cell"></td><br></div>
</tr>

<tr>
<td><input type="submit" onclick="checkText()" value="Submit"></td>
</tr>

</table>

<input type="hidden" name="flagname" id="flagid" value="true">

</form>
_end;
echo $result;
echo<<<_end2
</body>
_end2;
?>