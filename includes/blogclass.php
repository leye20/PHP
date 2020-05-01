<?php

class Article {
    private $allArticles = array();
    private $jsonFile = '';

    function __construct ( $jsonFilePath = '' )
    {
        if ( file_exists( $jsonFilePath ) )
        {
            $jsonString = file_get_contents( $jsonFilePath );
            $jsonObject = json_decode ( $jsonString );
            if ( is_array( $jsonObject->articles ) )
            {
                $this->allArticles = $jsonObject->articles;
            }
        }
    }

}

?>