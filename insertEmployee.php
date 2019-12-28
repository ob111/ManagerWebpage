<html>
<form action="manager.html" method="post">
	<br>
		<button type="sbmtBtn">
		<div class="visible content" type="sbmtBtn">Back to Home</div>
	</button>
</form>
<form action="add_emp.html" method="post">
	<br>
		<button type="sbmtBtn">
		<div class="visible content" type="sbmtBtn">Back to Add Employee Page</div>
	</button>
</form>
<?php

$server = "localhost";
$user = "root";
$pw = "";
$db = "sakila";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect)
{
	die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];
$storeID = $_POST['StoreID'];
$address = $_POST['Address'];
$city = $_POST['city'];
$district = $_POST['District'];
$postal_code = $_POST['PostalCode'];
$phone = $_POST['Phone'];

$userQuery = "INSERT INTO sakila.address (address, district, city_id, postal_code, phone)
VALUES('$address', '$district', '$city', '$postal_code', '$phone');";
$result = mysqli_query($connect, $userQuery);
$maxAddrID = "SELECT MAX(address_id) FROM sakila.address";
$ResultMax = mysqli_query($connect, $maxAddrID);
$loc = mysqli_fetch_array($ResultMax);
$finalAddr = $loc['MAX(address_id)'];

$userQuery2 = "INSERT INTO sakila.staff (first_name, last_name, address_id, email, store_id)
VALUES ('$firstName', '$lastName', '$finalAddr', '$email', '$storeID')";


$result2 = mysqli_query($connect, $userQuery2);

if (!$result)
{
	die("Could not successfully run query ($userQuery) from $db: " .
		mysqli_error($connect) );
}
elseif(!$result2)
{
	die("Could not successfully run query ($userQuery2) from $db: " .
		mysqli_error($connect) );
}
else{
	echo "The insert was successful!";
}


mysqli_close($connect);   // close the connection

 ?>


</html>
