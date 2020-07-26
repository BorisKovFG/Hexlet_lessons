<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

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

function mFrameworkSlim()
{
    $app2 = AppFactory::create();
    $app2->addErrorMiddleware(true, true, true);

    $app2->get('/', function ($request, $response) {
        return $response->write("Welcome to Hexlet!");
    });

    $app2->run();
}

function requestHandler()
{
    //
    $faker = \Faker\Factory::create();
    $faker->seed(1234);
    
    $domains = [];
    for ($i = 0; $i < 10; $i++) {
        $domains[] = $faker->domainName;
    }
    
    $phones = [];
    for ($i = 0; $i < 10; $i++) {
        $phones[] = $faker->phoneNumber;
    }
    //-----
    $app3 = AppFactory::create();
    $app3->addErrorMiddleware(true, true, true);

    $app3->get('/', function ($request, $response) {
        return $response->write('go to the /phones or /domains');
    });
    $app3->get('/phones', function ($request, $response) use ($phones) {
        return $response->write(json_encode($phones));
    });
    
    $app3->get('/domains', function ($request, $response) use ($domains) {
        return $response->write(json_encode($domains));
    });
    $app3->run();

}