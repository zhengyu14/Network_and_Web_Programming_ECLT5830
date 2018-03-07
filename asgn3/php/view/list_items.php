<?php
  $view_title = 'Item Listing';
  include_once('top.php');
 ?>

<p>
Code to list all the items here (in ascending order with respect to their
price)
</p>
<p>
For each item, show only the title (inside a link) and the price of the item.
The URL of the link should be "item.php?id=ITEM_ID",
where ITEM_ID is an integer representing the item's ID.
</p>

<!-- Solution goes here: -->
<div class="item_list">
  <div class="row">
    <div class="col-xs-6 item_list_title">
      <strong><u>Title</u></strong>
    </div>
    <div class="col-xs-6 item_list_price">
      <strong><u>Price</u></strong>
    </div>
  </div>
<?php
for ( $i = 3; $i < count($items); $i++ ) {
?>
  <div class="row">
    <div class="col-xs-6 item_list_title">
      <strong><a href="item.php?id=<?php echo $items[$i]['id']; ?>"><?php echo $items[$i]['title']; ?></a></strong>
    </div>
    <div class="col-xs-6 item_list_price">
      <?php echo "$" . $items[$i]['price']; ?>
    </div>
  </div>
<?php
}
?>
</div>
<!-- End of solution -->

<?php include_once('bottom.php'); ?>
