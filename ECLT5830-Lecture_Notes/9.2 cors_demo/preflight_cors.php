<?php

  header("Access-Control-Allow-Origin: http://localhost");

  // If it is a preflight request
  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('Access-Control-Allow-Headers: x-custom-header');
    exit;
  }



  // Simply return what this script receives
  header("Content-Type: application/json");
  echo json_encode($_GET);
 ?>
