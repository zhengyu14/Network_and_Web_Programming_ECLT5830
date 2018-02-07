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
  $cart = array();

  // 1. Process session and cookies
  if (!isset($_COOKIE['sessionID']) || $_COOKIE['sessionID'] == null) {
    setcookie('sessionID', session_id(), time() + 300);
    $_SESSION['creationTime'] = time();
    $_SESSION['cart'] = $cart;
    echo '<p style = "color:red"> Session expired. </p>';
  } else {
    // 1.1 Retrive session ID from cookies
    $sessionID = $_COOKIE['sessionID'];

    if ($sessionID !== session_id() || (time() - $_SESSION['creationTime']) > 300) { // Session ID not existed or expired
      // 1.1.1 If session ID is expired, delete cart
      if ((time() - $_SESSION['creationTime']) > 300) {
        unset($_SESSION['cart']);
      }
      // 1.1.2 Create creation time and cart into session
        $_SESSION['creationTime'] = time();
        $_SESSION['cart'] = $cart;
        echo '<p style = "color:red"> Session expired. </p>';
    } else {
      // 1.1.2 Restore Cart
      if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
      } else {
        $_SESSION['cart'] = $cart;
      }
    }

  }

  // 2. Add to cart
  $isUpdated = false;
  $isAdded = false;
  $isInDB = false;

  if (isset($_GET['id'])) {

     if (isset($_POST['addToCart'])) {

      // 2.1 Validate item ID
      for ($i = 0; $i < count($mockDb) ; $i++) {
        $item = $mockDb[$i];

        if ($_GET['id'] == $item['id']) {

          $isInDB = true;
          // 2.1.1 Validate quantity
          if ($_POST['quantity'] <= 0 || $_POST['quantity'] == null) {
            echo '<p style = "color:red"> Invalid Quantity! </p>';
?>
<form method="post" action="view_item.php?id=<?php echo $_GET['id']?>">
  <input type="submit" name="backToViewItem" value="Back"/>
</form>
<?php
          } else {
            // 2.2 Check if the item is already existed in cart
            for ($j = 0; $j < count($cart); $j++) {

              if ($cart[$j]['id'] == $item['id']) {
                // 2.2.1 Update item to an existed entry
                $cart[$j]['quantity'] = $cart[$j]['quantity'] + $_POST['quantity'];
                $_SESSION['cart'] = $cart;
                $isUpdated = true;
                break;
              }

            }

            if ($isUpdated == false) {
              // 2.2.2 Add item to cart as new entry
              $newEntry = array("id" => $item['id'], "title" => $item['title'], "quantity" => $_POST['quantity']);
              array_push($cart,$newEntry);
              $_SESSION['cart'] = $cart;
              $isAdded = true;
            }
          }

          break;
        }

      }

      if ($isInDB == false) {
        echo '<p style = "color:red"> Invalid Item! </p>';
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
  if ($isAdded == true) {
    echo '<p style = "color:green"> Item added successfully, please view your shopping cart. </p>';
  } elseif ($isUpdated == true) {
    echo '<p style = "color:green"> Item in cart updated successfully, please view your shopping cart. </p>';
  }
  // End of solution

?>

</body>
</html>
