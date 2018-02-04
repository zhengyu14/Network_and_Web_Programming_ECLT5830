<?php
  // The value of the two integers
  $num1 = "";
  $num2 = "";
  $displayForm= true; // true => show form, false => show two numbers

/*
  if (current request is a POST request) {
    if (the two numbers exists in the request) {
      Reretrieve the two numbers from the request and assign them to $num1 and $num2

      if (the two numbers are valid integers and $num1 > $num2) {
        $displayForm = false;
      }
    }
  }

}
*/

  // Solution for Part 1 goes here:
  if (isset($_POST['submit'])) {
    $num1 = $_POST['integer1'];
    $num2 = $_POST['integer2'];
  }

  if (is_numeric($num1) && is_numeric($num2) && is_int($num1 + 0) && is_int($num2+0)) {
    if ($num1 > $num2) {
      $num1 = (int)$num1;
      $num2 = (int)$num2;
      $displayForm = false;
    } else {
      $displayForm = true;
    }
  } else {
    $displayForm = true;
  }
  // End of solution for Part 1

?><!DOCTYPE html>
<html>
<head>
<title>Problem #3</title>
</head>

<body>
  <?php
    /*
      if ($displayForm) {
        Output HTML code of the form here.

        To create a sticky form, simply set the value of the input elements
        to $num1 and $num2 respectively.
      }
      else {
        Output the value of $num1 and $num2.
      }
    */

    // Solution for Part 2 goes here:
    if ($displayForm) {
  ?>
  <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
    <br>First Integer: <input type="text" name="integer1" value="<?php echo $num1 ?>"/><br>
    <br>Second Integer: <input type="text" name="integer2" value="<?php echo $num2 ?>"/><br>
    <br><input type="submit" name="submit" value="submit"/><br><br><br>
  </form>
  <?php
    } else {
      echo '<br>', 'First value:  ', $num1, '<br>';
      echo 'Second value: ', $num2;
    }
    // End of solution for Part 2

  ?>

</body>
</html>
