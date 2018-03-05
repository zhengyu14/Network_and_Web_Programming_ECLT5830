<?php
  $view_title = 'ECLT 5830 Asgn3';
  include_once('top.php');
 ?>

<!-- Solutions goes here: -->
<div class="container">
<?php
  // Read student ID, name from database
  $sql = "SELECT user_id, first_name, last_name FROM users";
  $studentInfo = mysqli_query($db, $sql);

  // Print strudents information
  if ( $studentInfo->num_rows > 0  ) {
    while( $row = $studentInfo->fetch_assoc() ) {
      echo '<div class="row">';
      echo '<img src=../img/' . $row['user_id'] . '.jpg />';
      echo '<div class="col"> Student Name: ' . $row['first_name'] . ' ' . $row['last_name'] . '</div>';
      echo '<div class="col"> Student ID: ' . $row['user_id'] . '</div>';
      echo "</div>";
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
