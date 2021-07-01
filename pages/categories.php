<?php

$posts = \Blog\Table\Article::getAll();
$categories = \Blog\Table\Category::getCategories();

include_once 'components/home/header.php';
include_once 'components/category/categories.php';
include_once 'components/home/footer.php';


?>