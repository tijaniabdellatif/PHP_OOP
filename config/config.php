<?php

/* URL AND PATHS */
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
DEFINE('BASE_URI', 'http://' . $_SERVER['SERVER_NAME'] . '/structuringclasses/');


/* META */

define('META',array(

    'author' => 'tijani abdellatif',
    'description' => 'blog containing latest news of technologie and world informations',
    'keywrods' => 'blog, news, technologie, 
     world news, web developement, web2.0,
     web application'
));

/*BDD DATA*/
DEFINE('DB',array(
  
    'DB_HOST'=> 'localhost',
    'DB_NAME' => 'blog_grafikat',
    'DB_USER' => 'root',
    'DB_PASS'=> ''

));