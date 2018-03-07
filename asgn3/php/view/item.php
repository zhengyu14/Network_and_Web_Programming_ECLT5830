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
<div class="container-fluid">
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

  // Display item details and comments
  if ( $resultItem->num_rows > 0  ) {
    if ($row = mysqli_fetch_assoc($resultItem)) {
      // Item details
      $item_id = $row['item_id'];
      $title = $row['title'];
      $description = $row['description'];
      $price = "$" . $row['price'];
      $added_on = $row['added_on'];
      $img = $row['img'];
?>

<!-- Header: Item deails -->
<div class="item_detail_header">
  <div class="row">
    <div class="col-xs-12 item_detail_title">
      <h3><?php echo $title; ?><small> | <?php echo $item_id; ?></small></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 item_detail_subtitle">
      <p><strong>Added on:</strong> <?php echo $added_on; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <img class="item_detail_img" src=../img/<?php echo  $img; ?>>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 item_detail_info">
      <p><strong>Description: </strong><?php echo $description; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 item_detail_info">
      <p><strong>Price: </strong><?php echo $price; ?></p>
    </div>
  </div>
</div>
<br>
<div class="item_comments">
<?php
    }
    if ( $resultComments->num_rows > 0  ) {
      while( $row = $resultComments->fetch_assoc() ) {
        // Comment details
        $comment_id = $row['comment_id'];
        $user_id = $row['user_id'];
        $item_id = $row['item_id'];
        $msg = $row['msg'];
        $updated_on = $row['updated_on'];
        $full_name = $row['first_name'] . " " . $row['last_name'];
        $email = $row['email'];
?>
<!-- Comments -->
  <h5><?php echo $full_name; ?><small> | <a href="mailto:#"><?php echo $email; ?></a></small></h3>
  <div class="row">
    <div class="col-xs-12 comment_subtitle">
      <p><strong>Updated on:</strong> <?php echo $updated_on; ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 comment_message">
      <p><?php echo $msg; ?></p>
    </div>
  </div>
<hr>
<?php
      }
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
</div>
</div> <!-- container-fluid -->
<!-- End of solution -->

<?php
  include_once('bottom.php');
?>
