
<?php

use Blog\Table\Article;
use Blog\App;
use Blog\Table\Category;

// $post  = Blog\App::getDatabase()->prepare('SELECT * from articles where id = ?', [$_GET['id']], 'Blog\Table\Article');
$post = Article::find($_GET['id']);//erreur lors de l'appel de la classe

if($post === false)
{
    App::notFound();
}
// debug($post);

$category = Category::find($post->id_category);
// debug($category);
App::setTitle($post->title);

include_once 'components/single/header.php';
include_once 'components/single/body.php';
include_once 'components/single/footer.php';

?>