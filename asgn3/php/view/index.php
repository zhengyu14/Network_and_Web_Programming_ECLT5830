<?php
  $view_title = 'ECLT 5830 Asgn3';
  include_once('top.php');
 ?>

<!-- Solution goes here: -->
<div class="container-fluid">
  <div class="row">
    <div class="col index_img">
      <img class="index_img" src=../img/6.jpg>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 student_name">
      <strong><u>Name</u></strong>
    </div>
    <div class="col-xs-6 student_id">
      <strong><u>ID</u></strong>
    </div>
  </div>

<?php
  // Read student ID, name from database
  $query = "SELECT user_id, first_name, last_name FROM users";
  $result = @mysqli_query($db, $query);

  // Print strudents information
  if ( $result->num_rows > 0  ) {
    while( $row = $result->fetch_assoc() ) {
?>
  <div class="row">
    <div class="col-xs-6 student_name">
      <?php echo $row['first_name'] . " " . $row['last_name']; ?>
    </div>
    <div class="col-xs-6 student_id">
      <?php echo $row['user_id']; ?>
    </div>
  </div>
<?php
    }
    mysqli_free_result($result);
  } else {
    echo "No result.";
  }
?>
</div>
<!-- End of sollution -->

<?php
  include_once('bottom.php');
?>
