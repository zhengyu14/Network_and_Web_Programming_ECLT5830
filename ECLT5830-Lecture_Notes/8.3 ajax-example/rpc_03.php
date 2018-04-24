<?php
  require_once('common.php');

  // Change the score to some random values
  for ($i = 0; $i < count($user_table); $i++)
    $user_table[$i]['score'] = rand(0, 10000);

  header("Content-type: application/json");
  // return the whole array of user objects
  echo json_encode($user_table);
?>
