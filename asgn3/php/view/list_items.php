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
<?php
for ( $i = 3; $i < count($items); $i++ ) {
?>
<div class="row">
  <div class="col-xs-6">
    <a href="item.php?id=<?php echo $items[$i]['id']; ?>"><?php echo $items[$i]['title']; ?></a>
  </div>
  <div class="col-xs-6">
    <?php echo $items[$i]['price']; ?>
  </div>
</div>
<?php
}
?>
<!-- End of solution -->

<?php include_once('bottom.php'); ?>
