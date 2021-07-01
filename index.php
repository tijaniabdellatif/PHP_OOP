<?php

use Blog\Autoloader;
// use Blog\Database;
// use Blog\Table;

require './init/init.php';
Autoloader::register();



if(isset($_GET['page']))
{

    $page = $_GET['page'];
}
else
{
     $page = 'home';
}


ob_start();

if($page === 'home')
{
    require '../structuringClasses/pages/home.php';
}
else if($page === 'article')
{
   require '../structuringClasses/pages/single.php';
    
}
else if($page === 'categories')
{
    require '../structuringClasses/pages/categories.php';
}
else if($page === 'categorie')
{
    require '../structuringClasses/pages/category.php';
}


$content = ob_get_clean();
require './pages/templates/theme.php';