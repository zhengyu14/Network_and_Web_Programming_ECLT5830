<?php

  /*
    TODO: Output the following info in a "plain text file" (newline will be
    preserverd in the browser when the output is treated as a plain text file.)

    1. The operating system of the client machine as one of the following
        "Windows", "Mac", "Other"
    2. The browser type (as one of the following values)
      "Chrome", "Edge", "Firefox", "Safari", "Other"
  */

  // Solution goes here
  header("Content-Type: text/plain");

  $os = '';
  $browser = '';
  $info = '';
  $agent = $_SERVER['HTTP_USER_AGENT'];

  // Get OS info.
  if ( strpos($agent, "Macintosh") ) {
    $os = "MacOS\r\n";
  } elseif ( strpos($agent, "Windows") ) {
    $os = "Windows\r\n";
  } else {
    $os = "Other\r\n";
  }

  // Get browser info.
  if ( strpos($agent, "Edge") ) {
    $browser = "Microsoft Edge";
  } elseif ( strpos($agent, "Chrome") ) {
    $browser = "Chrome";
  } elseif ( strpos($agent, "Safari") ) {
    $browser = "Safari";
  } elseif ( strpos($agent, "Firefox") ) {
    $browser = "Firefox";
  } else {
    $browser = "Other";
  }

  $info = $os . $browser;
  echo $info;
  // End of solution

?>
