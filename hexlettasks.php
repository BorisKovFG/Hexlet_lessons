<?php

function taskPhpCgi()
{
    switch ($_SERVER['REQUEST_URI']) {
        case '/':
            print_r('<a href="/welcome">welcome</a><br><a href="/not-found">not-found</a>');
            break;
        case '/welcome':
            print_r('<a href="/">main</a>');
            break;
        default:
            header('HTTP/1.1 404 Not Found');
            print_r('Page not found. <a href="/">main</a>');
    }
}

function htmlInPhp()
{
    // in task we need to add <?php
    $links = [
       ['url' => 'https://google.com', 'name' => 'Google'],
        ['url' => 'https://yandex.com', 'name' => 'Yandex'],
        ['url' => 'https://bingo.com', 'name' => 'Bingo']
    ];
    foreach ($links as $link)
    {
        print_r("<div><a href={$link['url']}>{$link['name']}</a></div> \n");
    }
}