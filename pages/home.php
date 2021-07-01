


<?php

// $post = Blog\App::getDatabase()->query('SELECT * from articles', 'Blog\Table\Article');
// $post = Blog\Table\Article::getLast();
// $categories = \Blog\Table\Category::getCategories();
// debug($categories);



$post = \Blog\Table\Article::getLast();
$categories = \Blog\Table\Category::getCategories();


include_once 'components/home/header.php';
include_once 'components/home/body.php';
include_once 'components/home/footer.php';

?>