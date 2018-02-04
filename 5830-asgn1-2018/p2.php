<?php
  $languages = array( "C", "C#", "C++", "Java", "JavaScript",
                      "Visual Basic", "Pascal", "Phyton", "PHP",
                      "Perl", "Objective C" );
?><!DOCTYPE html>
<html>
<head>
<title>Problem #2</title>
</head>

<style type="text/css">
label { font-weight: bold; }
</style>

<body>
<form action="" method="GET">
<label>Select the programming language(s) you like:</label> <br/>
<?php
  // TODO (Part 1): Create checkboxes in this form to let the user select
  // zero or more programming languages listed in $languages[].

  // Note: If you give all checkboxes the same name like "foobar[]", then
  // you can retrieve the selected values in an array in "Part 2" as
  // $_GET['foobar'].
  // i.e., the datatype of $_GET['foobar'] will be an array of strings.

  // Note: If you assign a "careflly crafted value" to the attribute "value"
  // of the checkbox's input element, you can easily find out the selected
  // programming languages in Part 2.

  // Solution for Part 1 goes here:
  for($x = 0; $x < count($languages); $x++) {

    echo '<input type="checkbox" name="languages[]" ', 'value="', $languages[$x], '">', $languages[$x];
    echo '<br>';

  };

  // End of solution for Part 1

?>
<br>

<input type="submit" name="submit" value="Submit"><br><br>
</form>

<?php
  // If the user had submitted the form by clicking the "Submit" button
  if (isset($_GET['submit'])) {
    // TODO (Part 2): Write code to retrieve the submitted values
    // and display the name of the selected programming language(s) here

    // Solution for Part 2 goes here:
    if (isset($_GET['languages'])) {
      echo '<label>You have selected: </label>', '<br>';
      for ($y = 0; $y < count($_GET['languages']); $y++) {
        echo $_GET['languages'][$y];
        echo '<br>';
      }
    } else {
      echo '<label style="color:red">No language selected.</label>';
    }
    // End of solution for Part 2

  }

?>

</body>
</html>
