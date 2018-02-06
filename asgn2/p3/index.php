<?php
  // Include the data to be used in this assignment
  // Do not remove this line.
  include('lib/items.php');
  session_start();
  setcookie("sessionID", session_id(), time()+10);
?>
<!DOCTYPE html>
<head>
<title>Item Listing</title>
</head>
<body>

<?php include("menu.php") ?>

<ul>
<?php
// List all the items in $mockData[].
$n = count($mockDb);
for ($i = 0; $i < $n; $i++) {
    $item = $mockDb[$i];
    $id = $item['id'];
    $title = $item['title'];
    echo "<li><a href=\"view_item.php?id=$id\">$title</a></li>";
}
?>
</ul>

</body>
</html>
