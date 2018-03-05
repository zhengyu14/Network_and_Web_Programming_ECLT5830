<?php
  require_once('lib/items.php');

  // Controller for "viewing a single item"

  // Place holder for test data
  $item = getItem(1);

  // TODO: Read item ID from request,  retrieve the item from DB, and store
  // the item in $item

?>

<?php include('view/item.php'); ?>
