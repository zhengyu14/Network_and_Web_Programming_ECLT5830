<?php
  require_once('init.php');

  // Contains helper functions to manipulate "items"
  // In this "Demo App", the items are placed in an array that serves as
  // a mocked DB for demo purpose. The code to deal with this mocked DB should
  // be replaced with DB specific code.

  // Helper function to return an associative array that models an itemin PHP
  function constructItem($id, $title, $desc, $price, $added_on, $img) {
    return [
      "id" => $id,
      "title" => $title,
      "desc" => $desc,
      "price" => $price,
      "added_on" => $added_on,
      "img" => $img
    ];
  }

  // Given the item's id, return the corresponding item or null
  // if the item cannot be found.
  function getItem($id) {
    global $db;   // Need to use keyword "global" to make global variable
                  // accessible inside a local scope

    $query = "SELECT * FROM items WHERE item_id=$id";
    $result = @mysqli_query($db, $query);
    $item = null;

    if ($row = mysqli_fetch_assoc($result)) {
      $item = constructItem($row['item_id'], $row['title'], $row['description'],
                            $row['price'], $row['added_on'], $row['img']);
    }
    mysqli_free_result($result);
    return $item;
  }
