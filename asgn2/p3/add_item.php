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
  session_start();

  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    $cart = array();
    $_SESSION['cart'] = $cart;
  }

  if (isset($_POST['addToCart'])) {

    if ($_POST['quantity'] < 0) {
      echo '<p style = "color:red"> Invalid Quantity! </p>';
    }

    if (isset($_GET['id'])) {
      for ($i = 0; $i < count($mockDb) ; $i++) {
        $item = $mockDb[$i];
        $updatedFlag = false;
        $addedFlag = true;

        if ($_GET['id'] == $item['id']) {

          for ($j = 0; $j < count($cart); $j++) {
            if ($cart[$j]['id'] == $item['id']) {
              // Update an existed entry
              $cart[$j]['quantity'] = $cart[$j]['quantity'] + $_POST['quantity'];
              $_SESSION['cart'] = $cart;
              $updatedFlag = true;
              break;
            }
          }

          if ($updatedFlag == false) {
            // Add to cart as new entry
            $newEntry = array("id" => $item['id'], "title" => $item['title'], "quantity" => $_POST['quantity']);
            array_push($cart,$newEntry);
            $_SESSION['cart'] = $cart;
            $addedFlag = true;
          }

          break;
        }
      }
    } else {
      echo '<p style = "color:red"> Invalid Item! </p>';
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
  if ($addedFlag == true) {
    echo '<p style = "color:red"> Item added successfully! </p>';
  }
  // End of solution

?>

</body>
</html>
