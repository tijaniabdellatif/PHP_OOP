<?php

namespace Blog\Table;
use Blog\App;


class BlogParent
{

    protected static $table;

    private static function getTable()
    {
        if(static::$table === NULL)
        {
            $class= explode('\\', get_called_class());
            $name = str_replace('y','ie',end($class));
            static::$table = strtolower($name).'s';
           
        }
        // debug(static::$table);

        return static::$table;
    }
      

    public static function getCategories()
    {

        return App::getDatabase()->query(
            "SELECT * FROM " . static::getTable() . "
            ",
            get_called_class()
        );
    }

    public function __get($key)
    {

        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }


    public static function find($id)
    {
        return App::getDatabase()->prepare(
            "SELECT * FROM " . static::getTable() . "
            WHERE id= ?",
            [$id],get_called_class(),true);
    }


    public static function query($statement,$attributes = null,$one=false)
    {
        if($attributes)
        {
            return App::getDatabase()->prepare(
              $statement,
                [$attributes],
                get_called_class(),$one
            );
        }
        else
        {
            return App::getDatabase()->query(
                $statement,
                get_called_class(),$one
            );
        }
    }

    
    
}
