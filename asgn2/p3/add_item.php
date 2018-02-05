<?php
// Include the data to be used in this assignment
// Do not remove this line.
  include('lib/items.php');

  /*
    TODO:
    1. Retrieve item id and quantity of the item from the request.
    2. If the id matches one of the item's id in $mockDb,
         If the shopping cart does not yet contained the item
           Add an entry to the shopping cart
         else
           Update the quanity of the item in the shopping cart

  */

  // Sollution goes here:
  if (isset($_POST['submit'])) {
    echo $_GET['id'];
    echo $_POST['quantity'];

    if (isset($_GET['id'])) {
      for ($i = 0; $i < count($mockDb) ; $i++) {
        $item = $mockDb[$i];

        if ($_GET['id'] == $item['id']) {

          break;
        } else {

        }
      }
    }
  }
  // End of solution

?>
<!DOCTYPE html>
<html>
<head><title>Add Item</title>
</head>
<body>

<?php include("menu.php") ?>

<?php
/*
  TODO: Output a message to indicate if an item has been successfully
        added to the cart.
*/

// Solution goes here:

// End of solution

?>

</body>
</html>
