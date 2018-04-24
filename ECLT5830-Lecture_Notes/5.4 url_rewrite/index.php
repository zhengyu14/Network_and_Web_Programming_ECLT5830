  <h3>URL to test (Assume the files are in /url_rewrite)</h3>
  <a href="/url_rewrite/bar/xyz.php">bar/xyz.php</a> (Get rewritten to index.php/xyz.php)<br>
  <a href="/url_rewrite/a.php">a.php</a> (Access a.php directly)<br>
  <a href="/url_rewrite/index.php">index.php</a> This file (which include a.php)<br>

<?php

  echo "<pre>";
  echo '$_SERVER["REQUEST_URI"] = ', $_SERVER['REQUEST_URI'], "\n";
  echo '$_SERVER["PHP_SELF"] = ', $_SERVER['PHP_SELF'], "\n";
  echo '$_SERVER["SCRIPT_NAME"] = '. $_SERVER['SCRIPT_NAME'], "\n";
  echo '$_SERVER["SCRIPT_FILENAME"] = '. $_SERVER['SCRIPT_FILENAME'], "\n";
  echo '$_SERVER["PATH_INFO"] = '. $_SERVER['PATH_INFO'], "\n";
  echo '$_SERVER["QUERY_STRING"] = '. $_SERVER['QUERY_STRING'], "\n";
  echo "<pre>";

  include("a.php");

 ?>
