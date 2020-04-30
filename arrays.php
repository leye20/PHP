<?php
  /**
   * Indexed arrays.
   */
  // Assignment.
  $myIndexedArray = array( 'Dog', 'Cat', 'Fish', 'Bird' );
  // Selecting the "second" item (square brackets with the INDEX #1.)
  $secondItem = $myIndexedArray[1];
  // Adding a new element to our INDEXED array.
  $myIndexedArray[] = 'Lizard';

  /**
   * Associative arrays.
   */
  // Assignment (notice the fat arrow used for key => value pairing.)
  $myAssociativeArray = array(
    'name'      => 'Bob',
    'age'       => 36,
    'interests' => array( // Notice, this is an INDEXED array INSIDE our ASSOCIATIVE ARRAY.
      'PHP',
      'JavaScript',
      'Hiking'
    )
  );
  // Retrieve specific value (square brackets with the KEY name.)
  $bobAge = $myAssociativeArray['age'];
  // Add a new key/value pair to an EXISTING array.
  $myAssociativeArray['occupation'] = 'Programmer';
  // Get a specific interest.
  $secondInterest = $myAssociativeArray['interests'][1];
  // Add a new interest.
  $myAssociativeArray['interests'][] = 'HTML';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>PHP Arrays</h1>
</body>
</html>