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