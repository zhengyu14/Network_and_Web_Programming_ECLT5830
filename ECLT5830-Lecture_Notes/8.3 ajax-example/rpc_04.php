<?php
  // This example illustrates how to decode the JSON encoded data in the
  // request body. Upon success, this script echoes a modified version of
  // the received data back to the client.

  $requestBody = file_get_contents('php://input');
  $data = @json_decode($requestBody, true);   // Decode as associative array

  if ($data === null
      && json_last_error() !== JSON_ERROR_NONE) {
    echo "incorrect data";
  }

  $data['status'] = 'Success!';

  header("Content-Type: application/json");
  echo(json_encode($data));
