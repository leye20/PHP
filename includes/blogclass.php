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

    public function output ()
    {
        if ( is_array( $this->allArticles ) && !empty( $this->allarticles ) )
        {
            echo '<h2>Itemized Articles</h2><ul>';
            foreach ( $this->allArticles as $article )
            {
                foreach ( $this->article as $id )
                {
                    $newArticle = new Article ( $article->title, $article->content );
                    echo '<li>' .$newArticle->output( FALSE ). '</li>';
                }
                echo '</ul>';
            }
        }
    }
}

?>