<?php
  // Simply return what this script receives
  header("Content-Type: application/json");
  echo json_encode($_GET);
 ?>
