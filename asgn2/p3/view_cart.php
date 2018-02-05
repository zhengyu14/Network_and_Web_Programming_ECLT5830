<?php
  // Include the data to be used in this assignment
  // Do not remove this line.
  include('lib/items.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart</title>
</head>
<body>

<?php include("menu.php") ?>

<?php
  // TODO: Show the content of the shopping cart (in any format) here.

  // Solution goes here:
  echo "<b>Shopping Cart: </b><br>";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    $cart = array();
    $_SESSION['cart'] = $cart;
  }

  if (count($cart) == 0) {
    echo "<br>Your cart is empty.";
  } else {
    for ($i = 0; $i < count($cart) ; $i++) {
      echo " ID: ".$cart[$i]['id'].", Title: ".$cart[$i]['title'].", Quantity: ".$cart[$i]['quantity']."<br><hr>";
    }
  }

  // End of solution

?>

<?php
  // TODO: Add a link here, when clicked, will send a request to the server
  //       to clear all the content in the shopping cart.
  //      You have to decide how to implement this feature.

  // Solution goes here:
?>
<form method="post">
  <br><input type="submit" name="clearCart" value="Clear Cart"/>
</form>
<?php
  if (isset($_POST['clearCart'])) {
    unset($_SESSION['cart']);
  }
  // End of solution

?>

</body>
</html>
