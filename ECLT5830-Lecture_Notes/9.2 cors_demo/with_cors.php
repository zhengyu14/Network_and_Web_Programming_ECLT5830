<?php

  header("Access-Control-Allow-Origin: http://localhost");

  // Simply return what this script receives
  header("Content-Type: application/json");
  echo json_encode($_GET);
 ?>
