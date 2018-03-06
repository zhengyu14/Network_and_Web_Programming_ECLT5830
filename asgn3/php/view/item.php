<?php
  // Note: This file expect the item to be rendered is placed
  // in an associative array "$item".
  $view_title = $item['id'] . ": " . $item['title'];
  include_once('top.php');
?>

Code to show all the fields of $item, and all the comments left on the item.

<pre>
<?php
  // This is only a place holder
  print_r($item);
?>
</pre>

<!-- Solution goes here: -->
<?php
if ( isset($_GET['id']) ) {
  // Get item ID and retrive following data from database:
  //  i. item information
  //  ii. comments on item
  $itemID = $_GET['id'];

  $queryItems = "SELECT * FROM items WHERE item_id=" . $itemID;
  $queryComments = "SELECT c.comment_id, c.user_id, c.item_id, c.msg, c.updated_on, u.first_name, u.last_name, u.email
    FROM comments AS c
    INNER JOIN users AS u
    ON c.user_id = u.user_id
    WHERE c.item_id = " . $itemID;

  $resultItem = @mysqli_query($db, $queryItems);
  $resultComments = @mysqli_query($db, $queryComments);

  // Display item information and comments
  if ( $resultItem->num_rows > 0  ) {

    if ( $resultComments->num_rows > 0  ) {

    } else {
      echo "<br>No comments.<br>";
    }

  } else {
    echo "<br>Item not found.<br>";
  }

} else {
  echo "<br>Item not found.<br>";
}
?>
<!-- End of solution -->

<?php
  include_once('bottom.php');
?>
