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

<?php
  include_once('bottom.php');
?>
