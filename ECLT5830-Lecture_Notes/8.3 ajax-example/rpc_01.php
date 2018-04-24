<?php
  require_once('common.php');

  $id = (int)$_GET['id'];
  $user = getUserRecord($id);
  if ($user != null)
    $score = $user['score'];
  else
    $score = -1;

  header("Content-type: application/json");
  echo json_encode($score);

?>
