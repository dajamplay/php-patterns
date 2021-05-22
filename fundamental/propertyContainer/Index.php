<?php include '../../vendor/autoload.php';

/*
 * Design Patterns: fundamental
 * Property Container
 * Контейнер свойств
 */

class Index {

    public static function show() {

        $post = new BlogPost();

        $post->setTitle('Заголовок статьи');

        $post->setCategoryId(10);

        $post->addProperty('view_count', 100);

        $post->setProperty('view_count', 200);

        echo $post->getProperty('view_count');

    }

}

Index::show();