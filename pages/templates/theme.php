<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title><?= \Blog\App::getTitle(); ?></title>
       <meta name="author" content="<?= META['author'] ?>">
       <meta name="description" content="<?= META['description'] ?>">
       <meta name="keywords" content="<?= META['keywords'] ?>">
       <link rel="shortcut icon" type="image/jpg" href="<?= \Blog\App::getFavicon() ?>" />
       <link rel="stylesheet" href="../public/css/tailwind.css">
       <link rel="stylesheet" href="../public/css/style.css">
       <link rel="stylesheet" href="../public/css/util.css">
       <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">


       <!--Dynamic content will be thrown here-->
       <?= $content ?>
       <!--End-->



       <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
       <script src="https://unpkg.com/tippy.js@4"></script>
       <script src="../../publicjs/index/.js"></script>

       <script>
              //Init tooltips
              tippy('.avatar')
       </script>
</body>

</html>