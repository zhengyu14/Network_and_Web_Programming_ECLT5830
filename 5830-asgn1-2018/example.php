<!DOCTYPE html>
<html>
<head>
<title>Example (Dump HTTP Content)</title>
</head>

<body>

<h2> Sample Form (POST Method) </h2>
<form action="http_dump.php" method="POST">

<label>Last Name</label>: <input type="text" name="lastname"> <br>
<label>First Name</label>: <input type="text" name="firstname"> <br>
<input type="submit" name="submit" value="Submit">
</form>

<hr>
<h2>Sample Form (GET Method)</h2>

<form action="http_dump.php" method="GET">

<label>Last Name</label>: <input type="text" name="lastname"><br>
<label>First Name</label>: <input type="text" name="firstname"><br>
<input type="submit" name="submit" value="Submit">

</form>


<hr>
<h2>Link with URL encoded data</h2>
<a href="http_dump.php?foo=12345&bar=Hello+World!">This link contains some data in the URL</a>

</body>
</html>
