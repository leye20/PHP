<?php
// Class declaration.
class Article {

  public $id  = 0;
  public $title = '';
  public $content  = '';
  
  function __construct ( $id = 0, $title = 'No title', $content = 'No content' )
  {
    if ( is_integer( $id ) && !empty( $id ) )
      $this->id = $id;
    if ( is_string( $title ) && !empty( $title ) )
      $this->title = $title;
    if ( is_string( $content ) && !empty( $content ) )
      $this->content = $content;
  }
  
  public function output ( $echo = TRUE )
  {
    $output = '';
    ob_start(); // Begins an output buffer.
    ?>
      <ul>
        
        <li>id: <?php echo $this->id; ?></li>
        
        <li>title: <?php echo $this->title; ?></li>
        
        <li>content: <?php echo $this->content; ?></li>
      </ul>
    <?php // ob_get_clean() clears the output buffer.
    $output = ob_get_clean();
    if ( $echo === TRUE ) echo $output;
    return $output;
  }
}