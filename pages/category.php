<?php

use Blog\Table\Article;
use Blog\Table\Category;
use Blog\App;
$singleCategory = Category::find($_GET['id']);

if($singleCategory===false)
{
   App::notFound();
}


$article = Article::articleByCategory($_GET['id']);
// debugArray($article);

$categories = Category::getCategories();

?>


<h1 class="text-5xl text-yellow-800"><?= $singleCategory->category_name ?></h1>
<div class="grid grid-cols-2 gap-4">
    <div class="bg-red-500">
        <?php foreach ($article as $post) : ?>
            <h2><a href="<?= $post->url ?>"><?= $post->title  ?></a></h2>
            <p><em><?= $post->slug ?></em></p>
            <p><?= $post->extrait ?></p>
        <?php endforeach; ?>

    </div>
    <div class="bg-yellow-500">

        <ul>
            <?php foreach ($categories as $cat) : ?>
                <li>
                    <a href="<?= $cat->url ?>">
                        <?= $cat->category_name ?>
                    </a>

                </li>

            <?php endforeach;  ?>
        </ul>

    </div>
    <div class="bg-green-500"></div>
</div