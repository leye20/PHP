<?php
  

  session_start();

  if ( !isset( $_SESSION[ 'todo' ]))
  { // If it DOESN'T exist, let's make a default value (this way we can array_push to it later!)    
    $_SESSION[ 'todo' ] = array();
  }

  if ( !isset( $_SESSION['complete'] ) )
  { // If it DOESN'T exist, let's make a default value (this way we can array_push to it later!)    
    $_SESSION['completetodo'] = array();
  }

  $_SESSION['todo'] = array_values( $_SESSION['todo'] );

  if ( isset( $_GET ) && !empty( $_GET ) )
  {
    
  }

  $myMessage = 'Thank you for checking in, add your To-Do, we got you covered!';
  $myTitle = 'My First To-Do List with PHP';


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $myTitle?></title>
</head>
<body>
  <h3><?php echo $myTitle?><h3>

  <form action="./index.php" method="GET">
    <label for="todo">Add a to-do</label><br>
    <input type="text" name="todo" id="todo">
    <input type="submit" value="Add Me!">
    <input type="submit" value="Reset Me!">
  </form>

  <h3>Active To-Dos<h3>

  <form action="./index.php" method="GET">
    <ul>
      <li>
        <input type="checkbox" name="activetodo" id="activetodo">
      </li>
    </ul>
  </form>
  
  <To-Dos>Completed To-Dos</To-Dos>

  <form action="./index.php" method="GET">
    <ul>
      <li>
        <list type="list" name="completetodo" id="completetodo">
      </li>
    </ul>
  </form>
</body>
</html>