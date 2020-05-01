<?php
include_once dirname( __FILE__) . '/blog.class.php';
class Articles {
    private $allArticles = array();
   
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
            else
            { 
                echo '<p>WARNING: The blogs appear broken!</p>';
            }
            }   
            else
            { 
                echo '<p>WARNING: Your file doesn\'t exist!</p>';
            }
        }

    public function output ()
    {
        if ( is_array( $this->allArticles ) && !empty( $this->allarticles ) )
        {
            echo '<h2>Itemized Articles</h2><ul>';
            foreach ( $this->allArticles as $article )
            {
                $newArticle = new Article ( $article->title, $article->content );
                    echo '<li>' .$newArticle->output( FALSE ). '</li>';
                }
                echo '</ul>';
            }
        }

    public function findArticleByIndex ( $id = FALSE )
        { 
            if ( is_integer( $id ) )
        { 
            if ( isset( $this->allArticles[$id] ) )
        { 
            $foundArticle = new Article(
                $this->allArticles[$id]->id,
                $this->allArticles[$id]->title,
                $this->allArticles[$id]->content
            );
       
            $foundArticle->output();
        }
        else
        { 
            echo '<p>We are sorry, we couldn\'t find any artcile at ID: '.$id.'!</p>';
        }
        }
        else
        { 
            echo '<p>An invalid ID was passed; unable to find Article for this ID: '.$id.'.</p>';
        }
    }
}

?>