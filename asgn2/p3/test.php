<?php
session_start();
$cart = array();

if(isset($_SESSION['views'])) {

  $newEntry = array("id" => 1, "title" => "testtitle", "quantity" => 1);
  array_push($cart,$newEntry);
  $_SESSION['views']=$cart;
  for ($i=0; $i < count($cart); $i++) {
    echo $cart[$i]['id'];
  }
} else {
  $_SESSION['views']=$cart;
  for ($i=0; $i < count($cart); $i++) {
    echo $cart[$i];
  }
}

?>
