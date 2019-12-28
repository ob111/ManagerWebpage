<html>
<head>
  <center>
View Employees
</center>
</head>
<body>
  <p>
    <form action="manager.html" method="post">
      <br>
        <button type="sbmtBtn">
        <div class="visible content" type="sbmtBtn">Back</div>
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
$userQuery = "SELECT last_name, first_name, address, city, district, country, postal_code, email, phone
 FROM staff, sakila.address a, sakila.city ci, sakila.country co
 WHERE staff.address_id = a.address_id AND
 a.city_id = ci.city_id AND
 ci.country_id = co.country_id
 ;";
$result = mysqli_query($connect, $userQuery);

if (!$result)
{
	die("Could not successfully run query ($userQuery) from $db: " .
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0)
{
	print("No records found with query $userQuery");
}
else
{
	print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table border = \"1\">");
	print("<tr><th>Last Name</th><th>First Name</th><th>Address</th><th>City</th><th>District</th><th>Country</th><th>Postal Code</th><th>Email</th><th>Phone</th></tr>");


	while ($row = mysqli_fetch_assoc($result))
	{
		print ("<tr><td>".$row['last_name'].
			"</td><td>".$row['first_name'].
      "</td><td>".$row['address'].
      "</td><td>".$row['city'].
      "</td><td>".$row['district'].
      "</td><td>".$row['country'].
      "</td><td>".$row['postal_code'].
      "</td><td>".$row['email'].
      "</td><td>".$row['phone']."</td></tr>");
	}
	print("</table");
}

mysqli_close($connect);   // close the connection

?>
</p>

</body>

</html>
