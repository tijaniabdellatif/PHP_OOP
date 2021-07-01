<?php 


namespace Blog\Table;
use Blog\App;

class Article extends BlogParent{



    //  protected static $table = 'articles';
      
    public function __get($key)
    { 

         $method = 'get'.ucfirst($key);
         $this->$key = $this->$method();
        return $this->$key;
        
    }

    public function getUrl()
    {
        return URL.'index.php?page=article&id='.$this->id;
    }

    public function getExtrait()
    {
        $html = substr($this->content,0,120).' ...';
        // debug(substr($this->content, 10));
        $html .= "<a href='{$this->getUrl()}' class='hover:text-yellow-400'>View more</a>";
        return $html;
    }


    public static function getLast()
    {
        return self::query(
            "SELECT articles.id,
        articles.title,articles.date,articles.slug,
        articles.content,articles.author,categories.category_name
         FROM `articles` LEFT JOIN
          `categories` ON articles.id_category = categories.id"
          ,__CLASS__);
    }


    public static function getAll()
    {

        return self::query(
           "SELECT articles.title,
            articles.content,
            articles.date,
            articles.author,
            articles.id_category,
            articles.slug,
            categories.category_name
              FROM articles,categories
             WHERE articles.id_category = categories.id
        ",__CLASS__);
    }


    public static function articleByCategory($id)
    {
        return App::getDatabase()->prepare(
        "SELECT articles.id,
         articles.title,articles.date,articles.slug,
         articles.content,articles.author,categories.category_name
         FROM `articles` LEFT JOIN `categories` 
         ON articles.id_category = categories.id
         WHERE articles.id_category = ?
            ",[(int)$id],
            __CLASS__);
    }
}