<?php
  // Basic assignment.
  $myMessage = 'My First PHP!';
  # This is also a comment!
  /*
    Multi-line
        comments
      yay!
   */

  /**
   * Data-Types.
   */
  // String.
  $myString = 'Hello, World!';
  // Integer.
  $myInteger = 34;
  // Float / Double.
  $myFloat = 3.14;
  // Boolean.
  $myBoolTrue = TRUE;
  $myBoolFalse = false;
  // Null.
  $myNull = NULL;
// Object.
$myObject = new stdClass();
// Array.
$myArray = [ 'First Item', 2, 'third item' ];
$myOtherArray = array(
    $myString,
    $myInteger,
    $myFloat,
    $myBoolTrue,
    $myBoolFalse,
    $myNull,
    $myObject,
    $myArray
);
/**
 * Strings.
 */
$string1 = 'Hello, my name is ';
$string2 = 'Micheal Jackson.';
// We concatenate sstrings using the "." character. ("+" is reserved for addition.)
$concattedString = $string1 . $string2;
// Difference between single and double quotes.
$mySingleQuoteHelloString = 'Hi there! My name is $string2';
// Double quotes are PARSED. PHP checks for variable names to echo out.
$myDoubleQuoteHelloString = "Howdy there! My name is $string2";
$myDoubleQuoteHelloString2 = "Howdy there! My name is {$string2}";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contents="width=device=width, initial-scale=1.0">
    <title><?php echo $myMessage; // Echo is used for outputting strings. ?></title>
</head>
<body>
    <h1><?php echo $myMessage; ?></h1>
    <pre>
    <?php
    // Var dump is great for seeing whats inside!
    var_dump( $myOtherArray );
    ?>
    </prev>
    <h2>Concatenate String</h2>
    <p>
    <?php echo $concattedString; ?>
    </p>
    <h2>Difference Between Single and Double Quoted Strings</h2>
    <h3>Single Quoted</h3>
    <p>
    <?php echo $mySingleQuoteHelloString; ?>
    </p>
    <h3>Double Quoted</h3>
    <p>
    <?php echo $myDoubleQuoteHelloString; ?>
    </p>
</body>
</html>

