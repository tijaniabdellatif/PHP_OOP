<?php

namespace Blog\Table;

use Blog\App;

class Category extends BlogParent{

    // protected static $table = "categories";

    public function getUrl()
    {
        return URL . 'index.php?page=categorie&id=' . $this->id;
    }

   
}

