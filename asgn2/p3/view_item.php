<?php
// Include the data to be used in this assignment
// Do not remove this line.
  include('lib/items.php');
?>

<!DOCTYPE html>
<html>
<head><title>View Single Item</title></head>
<body>

<?php include("menu.php") ?>

<?php
  /*
    TODO:
    1. Retrieve the id of the item in the request
    2. If the id is valid (and matches one of the id of the item in $mockDb),
      show the followings in any format
      a. Title of the item
      b. Origin of the item
      c. Price of the item
      d. A form that allows the user to specify and submit the quantity of the
         current item to be added to the shopping cart.
  */

  // Solution goes here:
  $item = array();

  if (isset($_GET['id'])) {
    for ($i = 0; $i < count($mockDb) ; $i++) {
      $item = $mockDb[$i];

      if ($_GET['id'] == $item['id']) {
        echo "<b>Title: </b><br>" . $item['title'] . "<br>";
        echo "<b>Origin: </b><br>" . $item['origin'] . "<br>";
        echo "<b>Price: </b><br>" . $item['price'] . "<br>";
?>

<form method="post" action="add_item.php?id=<?php echo $item['id']?>">
  <br><b>Quantity: </b><br>
  <input type="number" name="quantity" /><br>
  <br><input href="add_item.php" type="submit" name="addToCart" value="Add to Cart"/>
</form>

<?php
        break;
      };

    }
  } else {
    echo '<p style = "color:red"> Invalid Item! </p>';
  }
  // End of solution

?>


</body>
</html>
