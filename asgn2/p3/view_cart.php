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
  echo "<h3>Shopping Cart: </h3>";
  if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
  } else {
    $cart = array();
    $_SESSION['cart'] = $cart;
  }

  if (count($cart) == 0) {
    echo "Your cart is empty.";
  } else {
    for ($i = 0; $i < count($cart) ; $i++) {
      echo "<b>ID: </b>".$cart[$i]['id']."<br><b>Title: </b>".$cart[$i]['title']."<br><b>Quantity: </b>".$cart[$i]['quantity']."<br><hr>";
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
    echo '<p style = "color:green"> Cart cleared, please refresh your browser. </p>';
  }
  // End of solution

?>

</body>
</html>
