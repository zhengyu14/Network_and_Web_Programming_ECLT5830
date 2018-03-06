<?php
  require_once('lib/items.php');

  // Controller for "listing multiple items"

  // Place holder with test data
  $items = [getItem(1), getItem(2), getItem(3)];


  // TODO: Retrieve all items from DB  and store them in $items.

  // Solution goes here:
  $query = "SELECT * FROM items ORDER BY price ASC";
  $result = @mysqli_query($db, $query);

  if ( $result->num_rows > 0 ) {
    while ( $row = mysqli_fetch_assoc($result) ) {
      $item = constructItem( $row['item_id'], $row['title'], $row['description'], $row['price'], $row['added_on'], $row['img'] );
      array_push( $items, $item );
    }
  } else {
    echo "No result.";
  }
  // End of solution

?>


<?php include('view/list_items.php'); ?>
