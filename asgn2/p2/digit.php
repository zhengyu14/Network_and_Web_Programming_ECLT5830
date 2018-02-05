<?php

/*
  TODO:
  1. Retrieve the value of a digit and the type of digit from the request

  For this problem, you may assume the two values are always valid.

  Note: # in the following file names represent the value of the digit.

  If type of digit is 1, output image "img/#CB.jpg".
  If type of digit is 2, output image "img/#ODB.jpg"
  If type of digit is 3, output image "img/#UNO.jpg"

  Note:
  You need to set a header field and use readfile() to output the
  content of a file. Here, output means sending the data to the response body.
*/

  // Sollution goes here:
  $imgURL = '';

  if (isset($_GET['d']) && isset($_GET['type'])) {

    if ($_GET['type'] == 1) {
      $imgURL = "img/".$_GET['d']."CB.jpg";
    } elseif ($_GET['type'] == 2) {
      $imgURL = "img/".$_GET['d']."ODB.jpg";
    } elseif ($_GET['type'] == 3) {
      $imgURL = "img/".$_GET['d']."UNO.jpg";
    }

    header("Content-Type: ".mime_content_type($imgURL));
    readfile($imgURL);

  }
  // End of solution

?>
