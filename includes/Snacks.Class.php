<?php

include_once dirname( __FILE__ ) . '/Snack.Class.php';
    class Snacks
    {
        // Properties.
        private $allSnacks = array();
        private $jsonFile = '';

        // Methods.

        function __construct ( $jsonFilePath = '' )
        {
            if ( file_exists( $jsonFilePath ))
            {
                $jsonString = file_get_contents( $jsonFilePath );
                // Convert the JSON string to a PHP object.
                $jsonObject = json_decode( $jsonString );
                // Store the areay in our property.
                if ( is_array( $jsonObject->snacks ) )
                {
                    $this->allSnacks = $jsonObject->snacks;  
                }
            }
        }

        public function output ()
        {
            if ( is_array( $this->allSnacks ) && !empty( $this->allSnacks ) )
            {
                echo '<h2>Snacks List</h2><ul>';
                foreach ( $this->allSnacks as $snack )
                {
                    $newSnack = new Snack ( $snack->name, $snack->price, $snack->type );
                    // Echo out our result.
                    echo '<li>'.$newSnack->output( FALSE ).'</li>';
                } // close the unordered list.
                echo '</ul>';
            }
        }
        // Find a particular snack.
  public function findSnackByIndex ( $id = FALSE )
  { // Check if the submission is a number (integer.)
    if ( is_integer( $id ) )
    { // Check if the snack at this INDEX even EXISTS!?
      if ( isset( $this->allSnacks[$id] ) )
      { // Retrieve that snack from the array!
        $foundSnack = new Snack(
          $this->allSnacks[$id]->name,
          $this->allSnacks[$id]->price,
          $this->allSnacks[$id]->type
        );
        // Output that snack!
        $foundSnack->output();
      }
      // If the Snack is not found...
      else
      {
        echo '<p>Sorry, we couldn\'t find a snack at ID:'.$id.'!</p>';
      }
    }
    // No ID, or an invalid ID was passed.
    else
    {
      echo '<p>No ID, or an invalid ID was passed; unable to find snack for ID: '.$id.'.</p>';
    }
  }
}
?>