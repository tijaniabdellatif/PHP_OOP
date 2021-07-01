<?php
namespace Blog;

class App{

    private static $database;
    private static $title = "Ghost Blog";
    private static $favicon = URL.'public/images/fav.png';

    public static function getDatabase()
    {
      
             static::$database =  new Database(DB['DB_NAME'], DB['DB_USER'], DB['DB_HOST'], DB['DB_PASS']);
            
        
        return  static::$database;
        
    }

    public static function notFound()
    {
        header("HTTP/1.0 404 NOT FOUND");
        header("Location: index.php?page=404");
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setTitle($title)
    {
        self::$title = $title .'|'.self::$title;
    }

    public static function getFavicon()
    {
      return self::$favicon;
    }

}