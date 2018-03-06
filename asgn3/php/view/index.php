<?php
  $view_title = 'ECLT 5830 Asgn3';
  include_once('top.php');
 ?>

<!-- Solution goes here: -->
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <img src=../img/6.jpg>
    </div>
  </div>

<?php
  // Read student ID, name from database
  $sql = "SELECT user_id, first_name, last_name FROM users";
  $studentInfo = mysqli_query($db, $sql);

  // Print strudents information
  if ( $studentInfo->num_rows > 0  ) {
    while( $row = $studentInfo->fetch_assoc() ) {
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
  } else {
    echo "No result.";
  }
?>
</div>
<!-- End of sollution -->

<?php
  include_once('bottom.php');
?>
