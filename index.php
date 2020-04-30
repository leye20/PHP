<?php
   
  session_start();

  if ( !isset( $_SESSION[ 'todos' ]))
  { // making a default value If it DOESN'T exist.    
    $_SESSION[ 'todos' ] = array();
  }

  // if ( !isset( $_SESSION['complete'] ) )
  // { // making a default value If it DOESN'T exist.
  //   $_SESSION['completetodo'] = array();
  // }

  // $_SESSION['todos'] = array_values( $_SESSION['todos'] );

  if ( isset( $_GET ) )
  {
    array_push( $_SESSION[ 'todos'], $_GET[ 'todo'] );
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
    <label for="todo"><?php echo $myMessage ?></label><br>
    <input type="text" name="todo" id="todo">
    <input type="submit" value="Add Me!">
    <input type="submit" name="reset"value="Reset Me!">
  </form>
  
  <form>
  <?php if ( !empty( $_SESSION['todos'] ) ) : ?>
    <h3>Active To-Dos<h3>
    <ul>
      <?php foreach ( $_SESSION['todos'] as $todo ) :  ?>
        <li>
          <input type="checkbox" name="activetodo" id="activetodo">
          <?php echo $todo; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    </form>
    <?php endif; ?>
     
  <!-- <To-Dos>Completed To-Dos</To-Dos>

  <form action="./index.php" method="GET">
    <ul>
      <li>
        <list type="list" name="completetodo" id="completetodo">
      </li>
    </ul>
  </form> -->
  
</body>
</html>