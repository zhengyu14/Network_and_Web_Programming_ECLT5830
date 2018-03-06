<?php
  require_once('lib/items.php');
  include('view/list_items.php');

  // Controller for "listing multiple items"

  // Place holder with test data
  $items = [getItem(1), getItem(2), getItem(3)];


  // TODO: Retrieve all items from DB  and store them in $items.

  // Solution goes here:
  $sql = "SELECT item_id, title, price FROM items ORDER BY price ASC";
  $itemInfo = mysqli_query($db, $sql);

  // Print item information
  if ( $itemInfo->num_rows > 0  ) {
    while( $row = $itemInfo->fetch_assoc() ) {
?>
<div class="row">
  <div class="col-xs-6 item_title">
    <a href="item.php?id=<?php echo $row['item_id']; ?>"><?php echo $row['title']; ?></a>
  </div>
  <div class="col-xs-6 item_price">
    <?php echo $row['price']; ?>
  </div>
</div>
  <?php
      }
    } else {
      echo "No result.";
    }
    //End of solution
?>



<?php include('view/list_items.php'); ?>
