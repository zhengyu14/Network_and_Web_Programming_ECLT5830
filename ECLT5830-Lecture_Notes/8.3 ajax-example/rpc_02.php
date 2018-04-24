<?php
  require_once('common.php');

  $id = (int)$_POST['id'];
  $user = getUserRecord($id);

  header("Content-type: application/json");

  // return value
  echo json_encode($user);
?>
