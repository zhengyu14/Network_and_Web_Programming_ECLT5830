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
  $os = '';
  $browser = '';
  $info = '';
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $file = fopen("info.txt","w") or die("Unable to open file!");

  //echo $agent;

  // Get OS info
  if ( strpos($agent, "Macintosh") ) {
    $os = "Mac\r\n";
  }

  // Output browser
  if ( strpos($agent, "Chrome") ) {
    $browser = "Chrome";
  }

  // Write plain text file
  fwrite($file, $os);
  fwrite($file, $browser);

  echo "Following contents are output into info.txt: ", "<br>";
  echo file_get_contents("info.txt");

  fclose($file);

  // End of solution

?>
