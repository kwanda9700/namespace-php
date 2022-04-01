<?php
// set autoload
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

use Project\Model\User, Project\Model\Post as Article;

$user = new User('Kwanda Silekwa');
$article = new Article();
$article->setAuthor($user)
        ->setTitle('Namespace Example')
        ->setContent('Namespace contents');

printf("Author: %s", $article->getAuthor()->getName());
echo PHP_EOL . '<br />';

printf("Title: %s", $article->getTitle());
echo PHP_EOL . '<br />';

printf("Content: %s", $article->getContent());

