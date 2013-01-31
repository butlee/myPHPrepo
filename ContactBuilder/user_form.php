<?php
$db_hostname = 'localhost';
$db_database = 'test';
$db_user = 'phpuser';
$db_password = 'phpuser1';

$db_server = mysql_connect($db_hostname, $db_user, $db_password);
mysql_select_db($db_database);
//echo $_POST["flagname"];

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
<form id="userFormId" name="userform" action="save_form.php" method="POST">
<table border="0" cellspacing="20">
<tr>
<div><td>First name:</td> <td><input type="text" id="fName"  name="firstname" align="right"></td></div>
</tr>

<tr>
<div><td>Last name:</td> <td><input type="text" id="lName" name="lastname" align="right"></td></div>
</tr>

<tr>
<div><td>DOB:</td><td><input type="text" name="dobName" id="dob" value="2010-12-11" align="right" onblur="ageCount(dob.value);"></td>
<td>Age:</td><td><input type="text" name="ageName" id="age" readonly size="2"></td></div>
</tr>

<tr>
<div><td>Address line1:</td><td><input type="text" id="address1" name="address1Name" size="35"></td></div>
</tr>

<tr>
<div><td>Address line2:</td><td><input type="text" id="address2" name="address2Name"></td></div>
</tr>

<tr>
<div><td>City:</td><td> <input type="text" id="city" name="cityName"></td>
<td>Zipcode:</td><td> <input type="text" id="zip" name="zipName" size="7"></td>
<td>State:</td><td><input type="text" id="state" name="stateName"></td></div>
</tr>

<tr>
<div><td>Occupation:</td><td><input type="text" id="occupation" name="occupationName"></td></div>
</tr>

<tr>
<div><td>Cell:</td><td><input type="text" id="cell" name="cellName"></td><br></div>
</tr>

<tr>
<td><input type="submit" onclick="checkText()" value="Submit"></td>
</tr>

</table>

<input type="hidden" name="flagname" id="flagid" value="true">

</form>
_end;
//echo $_POST["firstname"];
echo<<<_end2
</body>
_end2;
?>