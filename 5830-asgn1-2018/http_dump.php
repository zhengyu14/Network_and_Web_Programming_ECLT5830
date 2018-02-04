<!DOCTYPE html>
<html>
<head>
<title>Example (Dumping all HTTP Content)</title>
</head>

<body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the HTTP request body (as a sequence of bytes)
  $raw_body = file_get_contents("php://input");

  echo '<h2>Raw body content';
  echo "<pre>", $raw_body, "</pre>";

  echo '<h2>Values in $_POST[]</h2>';
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}
else {
  echo '<h2>Values in $_GET[]</h2>';
  echo "<pre>";
  var_dump($_GET);
  echo "</pre>";
}

echo '<h2>All Headers</h2>';
echo "<pre>";
var_dump(getallheaders());
echo "</pre>";


echo '<h2>Values in $_SERVER[]</h2>';
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";


?>


</form>
</body>
</html>
