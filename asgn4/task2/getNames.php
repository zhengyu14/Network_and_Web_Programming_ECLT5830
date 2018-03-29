<?php
  session_start();
  require_once('data.php');

  // TODO: Write code here to
  // 1) Retrieve a string S sent from task2.html. Let this string be S.
  $S = (string)$_GET['prefix'];
  $targets = [''];
  // 2) Retrieve all strings in $names[] in which S is their prefix (case sensitive).
  for ($i=0; $i < count($names) ; $i++) {
    if (strpos($names[$i], $S) === 0) {
      array_push($targets, $names[$i]);
    }
  }
  // Send the retrieved strings in the response (you have to figure out how to
  // format these strings)
  header("Content-type: application/json");
  echo json_encode($targets);
 ?>
